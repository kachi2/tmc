<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Models\Course;
class UserController extends Controller
{
    //

    
    public function __construct()
    {
        $this->API_Token = 'FLWSECK_TEST-b754b22c91f541503f75b0d74d29a034-X';
    }

    public function Courses(){
        $enrollment = Enrollment::where('user_id', auth()->user()->id)->get();
        return view('account.account', compact('enrollment', $enrollment));
    }

    public function Account(){

    
    }

    public function makePayment($id){
        $enrols = Enrollment::where('id', decrypt($id))->first();
        //dd($enrols->course->id);
        $user = User::where('id', auth()->user()->id)->first();
        $data['email'] = $user->email;
        $data['name'] = $user->name;
        $data['total'] = $enrols->course->discount * $enrols->candidates;
        $data['enrol'] = Enrollment::where('id', decrypt($id))->first();
        return view('account.pay', $data);
    }

    public function confirmPayment($trxref){
            $cURLConnection = curl_init();
            curl_setopt($cURLConnection, CURLOPT_URL, 'https://api.flutterwave.com/v3/transactions/'.$trxref.'/verify/');
            curl_setopt($cURLConnection, CURLOPT_HTTPHEADER, array(
                "Content-Type: application/json",
                "Authorization: Bearer ".$this->API_Token
            ));
            curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true); 
            $se = curl_exec($cURLConnection);
            curl_close($cURLConnection);  
            $resp = json_decode($se, true);
    
          // dd($resp);
            if ($resp['status'] == 'error') {
                \Session::flash('flash_message', 'Transaction not found, Please contact support');
                $message = 'Transaction not found, Please contact support';
              
            }
            $chargeResponsecode = $resp['status'];
            $chargeAmount = $resp['data']['amount'];
           // $chargeCurrency = $resp['data']['currency'];
            $custemail = $resp['data']['customer']['email'];
            $payment_id = $resp['data']['tx_ref'];
            $external_ref = $resp['data']['flw_ref'];
            if (($chargeResponsecode == "success")) {     
                //Give Value and return to Success page
                $transactionRef = 'TNE-'.rand(1111111, 9999999);
                $getUser = User::where('email', $custemail)->first();
               Transaction::create([
                    'user_id' => $getUser->id,
                    'payment_ref'=>$transactionRef,
                    'payment_method' => 'card',
                    'external_ref'=>$external_ref,
                    'amount'=>$chargeAmount,
                ]);
                return response()->json($se);
            } else {
                return response()->json($se);
            }
    }

    public function paymentConfirmed(Request $request, $id){
        $enrol = Enrollment::where('id', decrypt($id))
            ->update([
                'is_paid' => 1,
                'paid_date' => Now(),
                'amount_paid' => $request->amount,
                'payment_method'=>'card'
            ]);
            if($enrol){
                return redirect()->route('users.account');
            }
    }
}
