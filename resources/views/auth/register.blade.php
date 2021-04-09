@extends('auth.layout')
@section('content')
    <!-- Sign up form -->
    <section class="signup">
        <div class="container">
            <div class="signup-content">
                <div class="signup-form">
                    <h2 class="form-title">إنشاء حساب</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                            <input type="text" class="@error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" id="name" placeholder="الاسم" required/>
                        </div>
                        <div class="form-group">
                            <label for="email"><i class="zmdi zmdi-email"></i></label>
                            <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" id="email" placeholder="البريد الالكتروني" required/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="text" name="phone" id="phonr" value="{{ old('phone') }}" placeholder="رقم التليفون" required/>
                        </div>
                        <div class="form-group">
                            <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                            <input type="password" class="@error('password') is-invalid @enderror" name="password" id="pass" placeholder="كلمة المرور" required/>
                        </div>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-group">
                            <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                            <input type="password" name="password_confirmation" id="re_pass" placeholder="تأكيد كلمة المرور" required/>
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signup" id="signup" class="form-submit" value="إنشاء"/>
                        </div>
                    </form>
                </div>
                <div class="signup-image">
                    <figure><img src="/login_assets/images/signup-image.jpg" alt="sing up image"></figure>
                    <a href="/login" class="signup-image-link">تسجيل الدخول بدلاً من ذلك.</a>
                </div>
            </div>
        </div>
    </section>
@endsection
