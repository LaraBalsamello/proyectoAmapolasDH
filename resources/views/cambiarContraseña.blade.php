@extends('default')

@section('section')

  <form class="formCC" action="" method="post">
    @csrf
    <div class="formulario">
    <h2 class="changePassTitle">Cambiar su contraseña</h2>
    <div id="errorJSCC"></div>
    <div class="userPass">                    <!-- INPUT DEL PASSWORD  -->
        <div class="inputUserData">
            <input id="userPass" type="password" name="password" value="" placeholder="Contraseña"><span style="color:red;">*</span>
        </div>
    </div>
    <div class="error fontsize errorJS" id="errorJSPassCC"></div>
    <div class="error">
        @if ($errors->has('password'))
            <span>
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>

    <div class="userPasscheck">                    <!-- INPUT DEL PASSCHECK  -->
        <div class="userData">
            <div class="inputUserData">
                <input id="userPasscheck" type="password" name="password_confirmation" value="" placeholder="Confirme su Contraseña"><span style="color:red;">*</span>
            </div>
        </div>
    </div>
    <div class="error fontsize errorJS" id="errorJSPassCheckCC"></div>

    <div class="">
        <button style="display:none;" id="submit" type="submit" name="send">Crear cuenta</button>
    </div>
    <div class="submit">
        <a href="/perfil">Volver</a>
        <label for="submit" type="submit" name="send">Guardar cambios</label>
    </div>
   </div>
  </form>

@endsection
