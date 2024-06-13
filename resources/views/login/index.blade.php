@extends('layouts/login')
@section('login')
    <div class="wave1">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#C7C8CC" fill-opacity="1" d="M0,32L24,64C48,96,96,160,144,165.3C192,171,240,117,288,122.7C336,128,384,192,432,202.7C480,213,528,171,576,154.7C624,139,672,149,720,144C768,139,816,117,864,101.3C912,85,960,75,1008,101.3C1056,128,1104,192,1152,192C1200,192,1248,128,1296,90.7C1344,53,1392,43,1416,37.3L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    </div>
    <div class="container">
        {{-- to show a notif error if login failed --}}
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
        </div>
        @endif 
        <div class="login_box">
            <div class="left">
                <div class="contact">
                    <form action="/login" method="POST">
                        @csrf
                        <h1>LOGIN</h1>
                        
                        <input name="username" class="form-control @error('username') is-invalid @enderror" type="text" placeholder="USERNAME" value="{{ old('username') }}" required>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        
                        <div class="password-wrapper">
                            <input name="password" class="form-control password-input @error('password') is-invalid @enderror" type="password" placeholder="PASSWORD" required>
                            <i class="show-hide-password bi bi-eye-fill" style=""></i>
                        </div>
                        
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button class="submit">Login</button>
                        <!-- Add your other form elements and buttons here -->
                    </form>
                    
                </div>
            </div> 
            <div class="right">
                <div class="right-text">
                    <h2>KalGen Innolab</h2>
                </div>
            </div>
        </div>

    </div>
    <div class="wave2">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#74b70a" fill-opacity="1" d="M0,32L24,64C48,96,96,160,144,165.3C192,171,240,117,288,122.7C336,128,384,192,432,202.7C480,213,528,171,576,154.7C624,139,672,149,720,144C768,139,816,117,864,101.3C912,85,960,75,1008,101.3C1056,128,1104,192,1152,192C1200,192,1248,128,1296,90.7C1344,53,1392,43,1416,37.3L1440,32L1440,320L1416,320C1392,320,1344,320,1296,320C1248,320,1200,320,1152,320C1104,320,1056,320,1008,320C960,320,912,320,864,320C816,320,768,320,720,320C672,320,624,320,576,320C528,320,480,320,432,320C384,320,336,320,288,320C240,320,192,320,144,320C96,320,48,320,24,320L0,320Z"></path></svg>
    </div>


<script>
document.addEventListener('DOMContentLoaded', function () {
        const passwordInput = document.querySelector('.password-input');
        const showHideIcon = document.querySelector('.show-hide-password');

        showHideIcon.addEventListener('click', function () {
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    });
</script>
@endsection
