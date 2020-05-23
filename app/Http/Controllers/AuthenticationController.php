<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Country;
use App\Models\Password_reset;
use App\Models\User;
use App\Services\AuthenticationService;
use Faker\Generator as Faker;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Helpers\Helpers;


class AuthenticationController extends Controller
{

    public function login(Request $request, Faker $faker)
    {
        $country = Country::first()->pluck('id')[0];

        $date = (String) $faker->dateTimeBetween('-1month', '+8month')->format('Y/m/d H:i:s');
        //dd($country);
        return view('authentication.login');
    }

    public function authentication(Request $request)
    {
        $data = $request->only('email', 'password');
        $isAuth = AuthenticationService::login($data);
        if($isAuth)
            return redirect()->route('home');
        return redirect()->route('login');
    }

    public function passwordForget(Request $request)
    {
        $data = $request->only('email');
        try {
            $user = User::where('email', $data['email'])->firstOrFail();
            $token = $this->createResetToken($data['email']);
            $this->sendResetLink($user, $token);
            $response = [
                "code" => 202,
                "message" => __("Password reset link send to: ") . $user->email
            ];
        } catch (\Exception $e) {
            $response = [
                "code" => 404,
                "message" => $e->getMessage()
            ];
        }
        return response()->json($response);
    }

    public function passwordUpdate(Request $request)
    {

    }

    //PROTECTED
    protected function sendResetLink($user, $token)
    {
        return Mail::to($user->email)->send(new ForgetPasswordMail($token));
    }

    protected function createResetToken($email)
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

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
