<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/register_asset/style.css">
</head>
<body id="regbg">
<x-auth-validation-errors class="mb-4" :errors="$errors" />

<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Name -->
    <div>
        
        <x-input id="name" class="inform uname" type="text" placeholder="Full Name" name="name" :value="old('name')" required autofocus />
    </div>

    <!-- Email Address -->
    <div class="mt-4">
        
        <x-input id="email" placeholder="Email" class="email inform" type="email" name="email" :value="old('email')" required />
    </div>

    <!-- Password -->
    <div class="mt-4">
        
        <x-input id="password" class="pw inform"
                        type="password"
                        name="password"
                        placeholder="Password"
                        required autocomplete="new-password" />
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        
        <x-input id="password_confirmation" class="repw inform"
                        type="password"
                        placeholder="Repeat password"
                        name="password_confirmation" required />
    </div>

    <div class="flex items-center justify-end mt-4">
    <div id="termcek">

    <input type="checkbox" required><label class="popin">I agree to all statements in <a class="tologina" href="{{ url('/terms') }}">Terms of Service</a>
  </label>
    </div>    

        <input type="image" class="btnimg " src="/register_asset/signup_btn.png" >

        
    </div>
</form>
  
<p class="tologin">Already Have an account ? <a class="tologina" href="{{ route('login') }}">Login here</a></p>

</body>
</html>