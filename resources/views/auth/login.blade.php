
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="icon" href="{{asset('sign/photo_2025-02-25_17-09-00.jpg')}}" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('sign/login.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="login-background">
        <div class="login-container">
            <div class="login-card">
                <div class="logo">
                    <img src="{{asset('sign/photo_2025-02-25_17-09-00.jpg')}}" ></img>
                </div>
               
                <h2>تسجيل الدخول</h2>
                <p>أدخل بياناتك للوصول إلى حسابك</p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{ route('login') }}" method="POST" id="login-form">
                    @csrf
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="البريد الإلكتروني">
                        <i class="fas fa-envelope"></i>
                        <p id="email-error" class="error-message" style="display: none; color: red;"></p>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="كلمة المرور">
                        <i class="fas fa-lock"></i>
                        <p id="password-error" class="error-message" style="display: none; color: red;"></p>
                    </div>
                    
                    <div class="forgot-password">
                        <div class="remember-me">
                            <input type="checkbox" id="remember" name="remember">
                            <label for="remember">تذكرني</label>
                        </div>
                        <a href="{{ route('password.request') }}">نسيت كلمة المرور؟</a>
                        
                        
                    </div>
                    <button type="submit" class="login-button">تسجيل الدخول</button>
                </form>
                  
                <p class="sign">ليس لديك حساب؟ <a href="{{route('register')}}" class="create-account">إنشاء حساب</a></p>

                <div class="separator">
                    <span>او التسجيل عبر جوجل </span>
                </div>
                <a href="{{route('auth.socilaite.redirect','google')}}" style="text-decoration: none;" class="google-login">
                    <button class="google-button">
                        <span class="google-icon">G</span> تسجيل الدخول عبر جوجل
                    </button>
                </a>
            </div>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>

