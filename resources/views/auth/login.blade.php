<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/stylelogin.css')}}">
   
</head>

<body>

<div class="form">
  <form  method="POST" action="{{ route('login') }}">
  @csrf
  <div class="segment">
    <h1>Sign up</h1>
  </div>
  
  <label>
    <input class="input" type="text" placeholder="Email Address" name="email" value="{{ old('email') }}" required autocomplete="email" />
   
    @error('email')
     <span class="invalid-feedback" role="alert">
       <strong>{{ $message }}</strong>
                  </span>
                                @enderror
  </label>
  <label>
    <input class="input" name="password" type="password" placeholder="Password" required autocomplete="current-password"/>
    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
  </label>
  

  <button class="red" type="submit">   {{ __('Login') }}</button>
  
  <div class="rememberme">
                                <div>
                                    <input class="checkinput" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="forget" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
 
</form>

  
</div>

<footer class="footer">
<h6>ABOUT</h6>
<p>  Gestion des emplois de temps </p>


              
</footer>

  <!----->

</body>
</html>