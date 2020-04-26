<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Password_reset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Helpers\Helpers;


class AuthenticationController extends Controller
{

    public function login(Request $request)
    {
        return view('authentication.login');
    }

    public function authentication(Request $request)
    {
        $data = $request->only('email', 'password');
        $password = Hash::make('password');
        //dd($password);
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                $admin = Admin::where('email', $data['email'])->firstOrfail();
                $admin->last_login = new \DateTime();
                $admin->save();
                return redirect()->route('dashboard');
        }
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

            $id = 'transaction id';
            $date = date('Ymd');
            $sim = 'cp ou mm en fonction des noms que tu donne au sim';
            $data = "l'information que tu veux enregistrer en BD";
            $dataJsonPath = public_path() . '/Json/' . '/' . $sim . '/' . $date . '/';
            $dateFileName = $id . '.json';
            if (!is_dir($dataJsonPath)) mkdir($dataJsonPath, 0777, true);
            $dataJsonFullPath = $dataJsonPath . $dateFileName;
            file_put_contents($dataJsonFullPath, $data);

        }
        return response()->json($response);
    }

    public function passwordUpdate(Request $request)
    {
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
