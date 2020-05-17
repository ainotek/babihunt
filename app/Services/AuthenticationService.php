<?php


namespace App\Services;


use App\Models\Admin;
use App\Models\Password_reset;
use App\Models\User;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthenticationService
{
    public static function login($credentials){
        $response = false;
        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = Admin::where('email', $credentials['email'])->firstOrfail();
            $user->last_login = new \DateTime();
            $user->save();
            $response = true;
        }
        return $response;
    }

    public function updatePassword(){
        $rules = [
            'token' => 'required',
            'password' => 'required|confirmed|min:8',
        ];
        try {
            $data = $request->only('token', 'password', 'password_confirmation');
            $passReset = Password_reset::where('token', $data['token'])->firstOrFail();
            $user = User::where('email', $passReset['email'])->firstOrFail();
            $newPassword = Hash::make($data["password"]);
            $user->password = $newPassword;
            $user->save();
            $passReset->delete();
            $message = __("Mot de passe changé avec succes");
        } catch (\Exception $e) {
            $message = __("Mauvais Token");
        }
        return response()->json($message);
    }




    //PROTECTED
    public static function sendResetLink($user, $token)
    {
        return Mail::to($user->email)->send(new ForgetPasswordMail($token));
    }

    public static function createResetToken($email)
    {
        $slug = Hash::make($email);
        $pattern = '/[\/\\\]/';
        $slug = preg_replace($pattern, '', $slug);
        $data = Password_reset::UpdateOrCreate(
            [
                'email' => $email,
            ],
            [
                'token' => $slug . Str::random(20),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        return $data['token'];
    }


}
