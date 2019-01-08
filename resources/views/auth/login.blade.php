@extends('default')

@section('section')
  <div class="contenedor-login">
    <h2 class="centrar" id="inicia-sesion">Inicia sesión</h2>
    <br>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="formularioLogin">
          <div class="errorJS fontsize" id="erroresLogin"></div>
          <div class="css">
            <div class="userData">
              <input type="text" id="email"  name="email" placeholder="Email" value="{{ old('email') }}" required autofocus><span></span>
            </div>
          </div>  
          <div class="errorJS fontsize" id="errorLoginJS"></div>
          <div>
            @if ($errors->has('email'))
              <p class="errorJS fontsize">{{ $errors->first('email') }}</p>
            @endif
          </div>
          <div class="css">
            <div class="userData">
              <input type="password" id="userPass" name="password" maxlength="14" placeholder="Contraseña" required>
            </div>
            <div class="errorJS fontsize" id="errorLoginJSPass"></div>
              <div>
                @if ($errors->has('password'))
                  <p class="errorJS fontsize">{{ $errors->first('password') }}</p>
                @endif
            </div>
          </div>
          <div class="extras">
            <div class="extraCaja">
              <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label style="font-size:15px;" for="recordar" class="recordar">{{ __('Recordarme') }}</label>
              <button type="submit" class="btn btn-primary">
                {{ __('Ingresar') }}
              </button>
            </div>
          </div>
          {{-- <div class="centrar">
              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Olvidé mi contraseña') }}
                </a>
              @endif
          </div> --}}
          <div class="login-redes">
            <a href="/login/google" class="btn btn-danger">Ingresar con Google</a>
            <a href="{{ route('social.auth', 'facebook') }}" class="btn btn-primary">Ingresar con Facebook</a>
          </div>
        </div>

      </form>
  </div>

@endsection
