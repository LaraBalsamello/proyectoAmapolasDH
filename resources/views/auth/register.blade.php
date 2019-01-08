
@extends('home')

@section('section')

<h2 id="tituloRegistro">Registrate</h2>
  <div id="corregir">

  </div>
    <form class="" action="" method="post" enctype="multipart/form-data">
        @csrf
            <div class="formulario">

                <div class="userName2">                    <!-- INPUT DEL NOMBRE  -->
                    <div class="inputUserData">
                        <input id="name" type="text" name="name" value="{{ old('name') }}"  placeholder="Nombre"><span style="color:red;">*</span>
                      </div>
                </div>
                <div class="errorJS" id="errorJSName"></div>
                <div class="error">
                    @if ($errors->has('name'))
                        <span>
                          <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="userLastName">                    <!-- INPUT DEL APELLIDO  -->
                    <div class="inputUserData">
                        <input id="last_name" type="text" name="last_name" value="{{ old('last_name') }}"  placeholder="Apellido"><span style="color:red;">*</span>
                    </div>
                </div>
                <div class="errorJS" id="errorJSLastName"></div>
                <div class="error">
                  @if ($errors->has('last_name'))
                      <span>
                          <strong>{{ $errors->first('last_name') }}</strong>
                      </span>
                  @endif
                </div>

                <div class="userEmail">                    <!-- INPUT DEL EMAIL  -->
                    <div class="inputUserData">
                        <input id="userEmail" type="email" name="email" value="{{ old('email') }}" placeholder="Email"><span style="color:red;">*</span>
                    </div>
                </div>
                <div class="errorJS" id="errorJSEmail"></div>
                <div class="error">
                    @if ($errors->has('email'))
                        <span>
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="userEmailcheck">                    <!-- INPUT DEL EMAILCHECK  -->
                        <div class="inputUserData">
                            <input id="userEmailcheck" type="email" name="userEmailcheck" value="{{ old('userEmailcheck') }}" placeholder="Confirme su Email"><span style="color:red;">*</span>
                        </div>
                    <div id="errorJSEmailCheck" class="errorJS"></div>
                    <div class="error">
                        @if ($errors->has('userEmailcheck'))
                            <span>
                                <strong>{{ $errors->first('userEmailcheck') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="userAge">                    <!-- INPUT DEL USER AGE  -->
                    <div class="userData">
                        <div class="labelUserData">
                            <label for="age">Fecha de nacimiento:</label> <br>
                        </div>
                        <div class="inputUserData">
                            <input id="userAge" type="date" name="age" value="{{ old('age') }}"><span style="color:red;">*</span>
                        </div>
                    </div>
                    <div class="errorJS" id="errorJSAge"></div>
                    <div class="error">
                        @if ($errors->has('age'))
                            <span>
                                <strong>{{ $errors->first('age') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="userCountry">                    <!-- INPUT DEL PAIS  -->
                    <div class="inputUserData">
                        <select id="userCountry" name="country">
                        </select><span style="color:red;">*</span>
                        <div id="provincia">
                        </div>

                    </div>
                </div>
                <div class="error">
                    @if ($errors->has('country'))
                        <span>
                            <strong>{{ $errors->first('country') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="userPass">                    <!-- INPUT DEL PASSWORD  -->
                    <div class="inputUserData">
                        <input id="userPass" type="password" name="password" value="" placeholder="Contraseña"><span style="color:red;">*</span>
                    </div>
                </div>
                <div class="errorJS" id="errorJSPass"></div>
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
                <div class="errorJS" id="errorJSPassCheck"></div>


            </div>  <!-- CIERRE DE LA CLASE FORMULARIO  -->

            <div class="">
                <button style="display:none;" id="submit" type="submit" name="send">Crear cuenta</button>
            </div>
            <div class="submit">
                <a href="index.php">Volver</a>
                <label for="submit" type="submit" name="send">Crear cuenta</label>
            </div>
    </form>
  </div>
  <script>
  var select = document.querySelector("#userCountry");
  fetch("https://restcountries.eu/rest/v2/all")
  .then(function(response){
   return response.json();
  })
  .then(function(data){
   for (pais of data) {
     var option = '<option value="' + pais.name + '">' + pais.name + '</option>';
     select.innerHTML += option;
   }
  })

  select.onchange = function() {
   if (select.value == 'Argentina') {
     fetch("https://dev.digitalhouse.com/api/getProvincias")
     .then(function(response){
       return response.json();
     })
     .then(function(data){
       var select2 = document.querySelector("#provincia");
       select2.innerHTML = '<select id="provincias" name="province" ></select>';
       var select3 = document.querySelector("#provincias");
       for (provincia of data) {
         var option2 = '<option id="' + provincia.state + '" value="' + provincia.state + '">' + provincia.state + '</option>';

         select3.innerHTML += option2;
       }
     })
   } else if (select.value != 'Argentina') {
     var select2 = document.querySelector("#provincia");
      select2.innerHTML = '';
   }
  }
  </script>
@endsection
