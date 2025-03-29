<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ], [
            'name.required' => 'يرجى إدخال الاسم.',
            'name.string' => 'الاسم يجب أن يكون نصًا.',
            'name.max' => 'الاسم يجب ألا يتجاوز 255 حرفًا.',
            
            'email.required' => 'يرجى إدخال البريد الإلكتروني.',
            'email.string' => 'البريد الإلكتروني يجب أن يكون نصًا.',
            'email.lowercase' => 'البريد الإلكتروني يجب أن يكون بحروف صغيرة.',
            'email.email' => 'البريد الإلكتروني المدخل غير صحيح.',
            'email.max' => 'البريد الإلكتروني يجب ألا يتجاوز 255 حرفًا.',
            'email.unique' => 'البريد الإلكتروني الذي أدخلته مستخدم بالفعل.',
            
            'password.required' => 'يرجى إدخال كلمة المرور.',
            'password.confirmed' => 'تأكيد كلمة المرور لا يتطابق مع كلمة المرور.',
        ]);
            
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('home.index', absolute: false));
    }
}
