<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/login_asset/style.css">
</head>
<body id="landbg">
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

<!-- Validation Errors -->
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email Address -->
    <div id="formdiv">
    <div>
        
        <x-input id="email" placeholder="Enter Username ..." class="uname noborder" type="email" name="email" :value="old('email')" required autofocus />
    </div>

    <!-- Password -->
    <div class="mt-4 ">
        
        <x-input id="password" class="pw noborder" placeholder="Enter Password ..."
                        type="password"
                        name="password"
                        required autocomplete="current-password" />
    </div>

    <!-- Remember Me 
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
        </label>
    </div>
-->
    <div class="flex items-center justify-end mt-4">
        <!--
            @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                {{ __('Forgot your password?') }}
            </a>
        @endif
-->
<!--
        <x-button style="">
            
            <img class="btnimg " src="/login_asset/login_btn.png" >
            
        </x-button>
-->


<input type="image" class="btnimg " src="/login_asset/login_btn.png" >

    </div>
    </div>
</form>

<p class="toregister">Don't have an account? <a class="toregistera" href="{{ route('register') }}">Register now!</a></p>
</body>
</html>