<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إنشاء حساب</title>
    <link rel="icon" href="{{asset('sign/photo_2025-02-25_17-09-00.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="{{ asset('sign/register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-background">
        <div class="login-container">
            <div class="login-card">
                <div class="logo">
                    <img src="{{ asset('sign/photo_2025-02-25_17-09-00.jpg') }}" alt="Logo">
                </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            

                <h2>إنشاء حساب جديد</h2>
                <p>أدخل بياناتك لإنشاء حساب جديد</p>
                <form action="{{ route('register') }}" method="POST" id="register-form">
                    @csrf
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="الاسم الكامل" required>
                            <i class="fas fa-user"></i>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="البريد الإلكتروني" required>
                            <i class="fas fa-envelope"></i>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="كلمة المرور" required>
                            <i class="fas fa-lock"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="تأكيد كلمة المرور" required>
                            <i class="fas fa-lock"></i>
                        </div>
                    </div>
                    <button type="submit" class="login-button">إنشاء حساب</button>
                </form>

                <p class="sign">هل لديك حساب؟ <a href="{{ route('login') }}" class="create-account">تسجيل الدخول</a></p>

                <div class="separator">
                    <span>أو التسجيل عبر جوجل</span>
                </div>
                <a href="{{route('auth.socilaite.redirect','google')}}" style="text-decoration: none;" class="google-login">
                    <button class="google-button">
                        <span class="google-icon">G</span> التسجيل عبر جوجل
                    </button>
                </a>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>
