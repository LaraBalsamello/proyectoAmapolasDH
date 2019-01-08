@extends('default')

@section('section')

  <div class="contenedor-login">
    <h2 class="centrar">Recuperar contraseña</h2>
    <br>
      <form action="" method="post">

     <div id="recuperarPas">
        <input type="text" id="EmailDelUsuario"  name="Email" placeholder="Ingrese su mail" required>
        <br><br>
     </div>

        <h6>Te enviaremos un email con instrucciones sobre cómo restablecer tu contraseña</h6>


        <br><br>
        <div class="centrar">
          <button id="ingresar" type="submit">Enviar Mail</button>
        </div>


      </form>
  </div>

@endsection
