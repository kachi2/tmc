<!DOCTYPE html>
<html>
<body>
<table cellspacing="0" cellpadding="10" align="center" style="width:100%; max-width:850px; box-sizing:border-box; border-collapse:collapse; font-weight:400; font-family:Roboto, sans-serif; margin:0;">
    <!-- head -->
    <tr>
        <td style="background-color: #ededed; padding: 30px;">
            <table align="center" cellspacing="0" cellpadding="0" style="width: 100%;">
                <tr bgcolor="#3d66fe"><td align="center" style="padding: 25px 10px 25px 10px; background-color: #3d66fe; font-weight: 600; font-size: 1.5em; color: #ffffff; text-align: center; text-transform: uppercase;">TMC Institute</td>
                </tr>
                <tr bgcolor="#ffffff"><td height="5px" style="line-height: 5px;"></td></tr>
                <!-- content -->
                <tr bgcolor="#ffffff">
                    <td style="padding:20px 30px 20px 30px;">
                        <table align="center" style="width: 100%; max-width: 800px;">
                            <tr><td style="font-weight: 500; font-size: 20px; color: #383838;">Dear {{$data["name"]}} </td></tr>
                            <tr><td height="7px" style="line-height: 7px;"></td></tr>
                            <tr><td style=" font-weight: 400; font-size: 15px;">This is to inform you that we got your enrollment request</td></tr>
                            <tr><td style=" font-weight: 400; font-size: 15px;">Please confirm the details below</td>
                            <tr><td height="5px" style="line-height: 5px;"></td></tr>
                            <tr><td style=" font-weight: 400; font-size: 15px;">Course: <span >{{$data["course"]}}</span></td></tr>
                            <tr><td style=" font-weight: 400; font-size: 15px;">Email: <span>{{$data["email"]}}</span></td></tr>
                            <tr><td style="font-weight: 400; font-size: 15px;">Phone Number: <span>{{$data["phone"]}}</span></td></tr>
                            <tr><td style="font-weight: 400; font-size: 15px;">Address: <span>{{$data["address"]}}</span></td></tr>
                            <tr><td style="font-weight: 400; font-size: 15px;">State: <span>{{$data["state"]}}</span></td></tr>
                            <tr><td style="font-weight: 400; font-size: 15px;">Range of Trainees: <span>{{$data["candidates"]}}</span></td></tr>
                            <tr><td height="10px" style="line-height:10px;"></td></tr>
                            <tr><td style="font-weight:400; font-size: 15px;">Thank you for using our Services!</td></tr>
                            <tr><td style="font-weight:400; font-size: 15px;">If you have any queries, please contact our Customer Support Team on or email <a href="mailto:enquiries@tmcinstitute.com">enquiries@tmcinstitute.com</a></td></tr>
                            <tr><td height="20px" style="line-height:20px;"></td></tr>
                            <tr><td style="font-weight: 500; font-size: 16px;">Kind regards,</td></tr>
                            <tr><td style="font-weight: 500; font-size: 16px;">TMC Institute</td></tr>
                            <tr><td height="20px" style="line-height:20px;"></td></tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>