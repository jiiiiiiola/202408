<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Shop\Entity\User;
use Hash;
use Mail;
class UserAuthController extends Controller
{
    public function Login()
    {
        return view('auth.login');
    }
    
    public function LoginProcess()
    {
        $form_data = request()->all();
        dd($form_data);
    }
    public function Profile($id)
    {
        return 'my id :' . $id;
    }
    public function SignUp()
    {
        $binding = [
            'title' => '註冊',
            'sub_title' => '測試測試',
        ];
        return view( 'auth.signup' , $binding);
    }
    public function SignUpProcess()
    {
        $form_data = request()->all();
        // dd($form_data );
        // $form_data['password'] = Hash::make($form_data['password']);
        // $user = User::create($form_data);

        if ( $form_data['password'] == "" || $form_data['email'] == "" || $form_data['nickname'] == "" ) {
            return redirect('/user/auth/signup')
            ->withInput()
            ->withErrors('資料不齊全');
        }else{
            $user = User::create([
                'email' => $form_data['email'],
                'password' => Hash::make($form_data['password']),
                'type' => $form_data['type'],
                'nickname' => $form_data['nickname'],
            ]);

            Mail::send('email.signUpEmailNotification', ['nickname' => $input['nickname']], 
            function($message) use ($input) {
                $message->to($input['email'], $input['nickname'])
                ->from('gtaped14876@gmail.com')
                ->subject('Laravel 8 Mail Test');
            });
    
            dd($user);
        }
    }


}


