<?php
namespace App\Providers;
use Illuminate\Support\Facades\View;
use App\Models\Category;
use App\Models\Enrollment;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

                view()->composer('*', function($view){
                    if(auth::check()){
                       $datas['user_courses'] = Enrollment::where('user_id', auth()->user()->id)->get();
                       $datas['paid_courses'] = Enrollment::where(['user_id' => auth()->user()->id, 'is_paid'=>1])->get();
                       $datas['pending_payment'] = Enrollment::where(['user_id' => auth()->user()->id, 'is_paid'=>0])->get();
                    }
                    $view->with($datas);

                }); 
        
            $data = [
                'Nav_enrollments' => Enrollment::get(),
                'Nav_Categories' => Category::get(),
                'Nav_courses' => Course::get()
            ];

            view::share($data);
        //
    }
}
