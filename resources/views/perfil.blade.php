@extends('default')

@section('section')
  <?php $user = Auth::user() ?>
  <main class="mainProfile">
    <div class="myProfile">
      <h1 id="tituloPerfil">Mi Perfil</h1>
      <div class="imagenAvatar">
        <img src= "
        @if ( $user->avatar == 'avatars/default.jpg' )
          {{ 'avatars/default.jpg' }}
        @else
          {{ Storage::url($user->avatar) }}
        @endif
         " style="border-radius: 50%;border: 5px inset orange;">
      </div>
    </div>
    <div class="userInfo">
      <div class="userName">
        <h2>{{ $user->name }} {{ $user->last_name }}</h2>
        <p></p>
      </div>
      <div class="direccionActual">
        <h2>País:</h2>
        <p>{{ $user->country }} <?php if ($user->province):?>{{ $user->province }}<?php endif; ?></p>
      </div>
      <div class="direcciones">
        <h2>Mis direcciones: </h2>
        <ul>
          @foreach ($user->addresses as $address)
            <li>{{ $address->name }}</li><a href="borrarDireccion/{{ $address->id }}">Eliminar</a>
          @endforeach
        </ul>
      </div>
      {{-- <div class="misUltimosPedidos">
        <h2>Últimos pedidos realizados: </h2>
        <ul>
        </ul>
      </div>
      <div class="pedidosEnCurso">
        <h2>Pedidos en curso: </h2>
          <ul>
            <li></li>
          </ul>
      </div> --}}
    </div>

  </main>

@endsection
