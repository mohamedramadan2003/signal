<?php

namespace App\Http\Controllers\Socail;

use Throwable;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocailLoginController extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function callback($provider)
    {
        try {
            $user = Socialite::driver($provider)->user();
            
            $sys_user = User::firstOrNew(
                ['email' => $user->email],
                [
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider_id' => $user->id,
                    'provider' => $provider,
                    'provider_token' => $user->token,
                ]
            );
        
            if (!$sys_user->exists) {
                $sys_user->save();
            }
            Auth::login($sys_user);
            return redirect()->route('home.index');
        
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors([
                'email' => 'حدث خطأ أثناء التسجيل: ' . $e->getMessage(),
            ]);
        }        
}
}
