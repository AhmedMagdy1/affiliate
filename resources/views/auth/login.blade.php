@extends('auth.layout')
@section('content')
    <!-- Sing in  Form -->
    <section class="sign-in">
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><img src="/login_assets/images/signin-image.jpg" alt="sing up image"></figure>
                    <a href="/register" class="signup-image-link">إنشاء حساب جديد</a>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">تسجيل الدخول</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="email" name="email" id="email" placeholder="البريد الالكتروني"
                                   value="{{ old('email') }}" required/>
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="كلمة المرور" required/>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong style="color: #D8000C">كلمة المرور او البريد الالكتروني غير صحيح</strong>
                        </span>
                        @enderror
                        {{--                        <div class="form-group">--}}
                        {{--                            <input type="checkbox" name="remember-me" id="remember-me" class="agree-term"/>--}}
                        {{--                            <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember--}}
                        {{--                                me</label>--}}
                        {{--                        </div>--}}
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="دخول"/>
                        </div>
                    </form>
                    {{--                    <div class="social-login">--}}
                    {{--                        <span class="social-label">Or login with</span>--}}
                    {{--                        <ul class="socials">--}}
                    {{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-facebook"></i></a></li>--}}
                    {{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-twitter"></i></a></li>--}}
                    {{--                            <li><a href="#"><i class="display-flex-center zmdi zmdi-google"></i></a></li>--}}
                    {{--                        </ul>--}}
                    {{--                    </div>--}}
                </div>
            </div>
        </div>
    </section>
@endsection
