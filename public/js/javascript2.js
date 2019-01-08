
// var form = document.getElementsByClassName('.editProfile');
//
// form.onsubmit = function(){
//   var redirect = function(){
//     location.href="http://localhost/AMAPOLAs/claseGit/PROYECTO/profile.php"
//   }
//
//   var usuarioModificado = function(){
//     var body = document.querySelector('body')
//     body.innerHTML="";
//   	var createh1 = document.createElement('h1');
//   	createh1.innerText = "Usuario modificado exitosamente";
//   	body.append(createh1);
//   }
//
//   var myTimeOut = function(){
//   	setTimeout(redirect,3000);
//
//   }
//
//   usuarioModificado();
//   myTimeOut();
// }


/*------------------------JS DEL DROPDOWNS--------------------------------*/

  if (localStorage['tema']=='dia') {
    document.getElementById('href').href = "/css/style.css";
  }else if (localStorage['tema']=='noche') {
    document.getElementById('href').href = "/css/modoNocturno.css";
  }


function myFunctionMenu() {
document.getElementById("myDropdown1").classList.toggle("show");
}

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}

  function myFunctionCarrito2() {
    document.getElementById("myDropdown4").classList.toggle("show");
  }

window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var dropdown = document.getElementById("carrito");
      if (dropdown.classList.contains('show')) {
      dropdown.classList.remove('show');
      }
  }
}

//----------------------JS PARA CAMBIOS PARA RESPONSIVE-------------------------------//

  var query = window.matchMedia("(max-width: 700px)");
  function changeScreen(query) {
    var mobile = document.getElementsByClassName('mobile');
      for (mobiles of mobile) {
        mobiles.classList.toggle('mobileFlex');
      }
    }

  query.addListener(changeScreen);

  var querymin = window.matchMedia("(min-width: 720px)");
    function changeScreenBig(querymin) {
      var mobile = document.getElementsByClassName('mobile');
        for (mobiles of mobile) {
          mobiles.classList.toggle('mobileNone');
        }
      }

  querymin.addListener(changeScreenBig);

//----------------------JS PARA CAMBIAR EL TEMA-------------------------------//

  function cambiarTemaDia() {
    var hrefs = document.getElementsByClassName('archivoCSS');
  for (href of hrefs) {
    href.href="/css/style.css";
  }
  localStorage.setItem('tema','dia');
  }

  function cambiarTema() {
   var hrefs = document.getElementsByClassName('archivoCSS');
    for (href of hrefs) {
      href.href="/css/modoNocturno.css";
    }
    localStorage.setItem('tema','noche');
  }
  /*----------------------JS VALIDACIONES REGISTRO ----------------------*/

   var form = document.querySelector("form");
   console.log(form);
   var elementosDelForm = form.elements;
   var arrayForm = Array.from(elementosDelForm);
   var errorNombreRegex =  /^[a-z-A-Z\D]+$/g
   var errorEmailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
   var errorAdressRegex = /^[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?)* (((#|[nN][oO]\.?) ?)?\d{1,4}(( ?[a-zA-Z0-9\-]+)+)?)/;
   var errorEmailRegex = /[\w]+@{1}[\w]+\.[a-z]{2,3}/;
   var errorAvatarRegex = /< *[img][^>]*[src] *= *["']{0,1}([^"' >]*)/
   var errorPassRegex = /^(?=.{8,})(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$/
   var pass = 0;
       arrayForm.pop();

   function errorName(input){
     var errorfeed = document.getElementById('errorJSName');
      if (input.value == "") {
        errorfeed.innerHTML = '<p>Error campo Obligatorio</p>';
        input.classList.add('error');
      }else if (input.value) {
        errorfeed.innerHTML = '';
          if(errorNombreRegex.test(input.value)==false){
            input.classList.add('error');
            errorfeed.innerHTML = '<p>Error no es un nombre</p>';
          }else if(errorNombreRegex.test(input.value)==true) {
            errorfeed.innerHTML = '';
            pass++
          }
      }
    }

   function errorLastName(input){
     var errorApellido = document.getElementById('errorJSLastName');
      if (input.value == "") {
        errorApellido.innerHTML = '<p>Error campo Obligatorio</p>';
        input.classList.add('error');
      }else if (input.value) {
        errorApellido.innerHTML = '';
        if(errorNombreRegex.test(input.value)==false){
          input.classList.add('error');
          errorApellido.innerHTML = '<p>Error no es un apellido</p>';
        }else if(errorNombreRegex.test(input.value)==true) {
          pass++;
          errorApellido.innerHTML = '';
        }
      }
   }

   function errorAdress(input){
     var errorAdress = document.getElementById('errorJSAdress');
      if (input.value == "") {
        errorAdress.innerHTML = '<p>Error campo Obligatorio</p>';
        input.classList.add('error');
      }else if (input.value) {
        errorAdress.innerHTML = '';
        if(errorAdressRegex.test(input.value)==false){
          input.classList.add('error');
          errorAdress.innerHTML = '<p>Error no es una direccion valida</p>';
        }else if(errorAdressRegex.test(input.value)==true) {
          pass++;
          errorAdress.innerHTML = '';
        }
      }
   }

   function errorEmail(input){
     var errorEmail = document.getElementById('errorJSEmail');
      if (input.value == "") {
        errorEmail.innerHTML = '<p>Error campo Obligatorio</p>';
        input.classList.add('error');
      }else if (input.value) {
        errorEmail.innerHTML = '';
        if(errorEmailRegex.test(input.value)==false){
          input.classList.add('error');
          errorEmail.innerHTML = '<p>Error no es una direccion de correo valida</p>';
        }else if(errorEmailRegex.test(input.value)==true) {
          pass++;
          errorEmail.innerHTML = '';
        }
      }
   }

   function errorEmailCheck(input){
     var errorEmailCheck = document.getElementById('errorJSEmailCheck');
     var email = document.getElementById('userEmail')
      if (input.value == "") {
        errorEmailCheck.innerHTML = '<p>Error campo Obligatorio</p>';
        input.classList.add('error');
      }else if (input.value) {
        errorEmailCheck.innerHTML = '';
        if(input.value!==email.value){
          input.classList.add('error');
          errorEmailCheck.innerHTML = '<p>Error el correo no coincide</p>';
        }else if(input.value==email.value) {
          pass++;
          errorEmailCheck.innerHTML = '';
        }
      }
   }

   function errorAge(input){
     var errorAge = document.getElementById('errorJSAge');
      if (input.value == "") {
        errorAge.innerHTML = '<p>Error campo Obligatorio</p>';
        input.classList.add('error');
      }else if (input.value) {
        var input = input.value;
        var year = input.substring(4,0);
        var month = input.substring(7,5);
        var day = input.substring(10,8);
        var birthday  = new Date(year,month,day);
        function calcularEdad(input) {
          var today = new Date();
          var age = today.getFullYear() - birthday.getFullYear();
            if(age<=18){
              var addClasslist = document.getElementById('errorJSAge');
              errorAge.innerHTML = '<p>Lo siento, no sos mayor de edad</p>';
              addClasslist.classList.add('error');
            }else{
              pass++;
              var addClasslist = document.getElementById('errorJSAge');
              errorAge.innerHTML = '';
              addClasslist.classList.remove('error');
            }
         }
        calcularEdad();
      }
    }

     function errorAvatar(input){
       var errorAvatar = document.getElementById('errorJSAvatar');
       if (input.value == "") {
         errorAvatar.innerHTML = '<p>Error campo Obligatorio</p>';
         input.classList.add('error');
       } else if (input.value) {
          errorAvatar.innerHTML = '';
          var cadena = input.value
          var separador = "."
          var limite = 2
          var pathYformato = cadena.split(separador, limite);
          var formato = pathYformato[1];
          var formatosAceptados = ["JPG","jpg","PNG","png","jpeg"];
          for (f of formatosAceptados) {
             if(f!==formato){
              errorAvatar.innerHTML = 'Formato no valido. Solo aceptamos (JPG, jpg, PNG, png, jpeg)';
              input.classList.add('error');
            }else if (f==formato) {
              errorAvatar.innerHTML = '';
              return input.classList.remove('error')
              pass++;
            }
          }
        }
     }

     function errorPass(input){
       var errorPass = document.getElementById('errorJSPass');
        if (input.value == "") {
          errorPass.innerHTML = '<p>Error campo Obligatorio</p>';
          input.classList.add('error');
        }else if (input.value) {
          errorPass.innerHTML = '';
          if(errorPassRegex.test(input.value)==false){
            input.classList.add('error');
            errorPass.innerHTML = '<p>Contraseña invalida. Debe contener una mayuscula, un numero y al menos 8 caracteres</p>';
          }else if(errorPassRegex.test(input.value)==true) {
            pass++;
            errorPass.innerHTML = '';
            input.classList.remove('error');
          }
        }
     }

     function errorPassCheck(input){
       var errorPassCheck = document.getElementById('errorJSPassCheck');
       var password = document.getElementById('userPass')
        if (input.value == "") {
          errorPassCheck.innerHTML = '<p>Error campo Obligatorio</p>';
          input.classList.add('error');
        }else if (input.value) {
          errorPassCheck.innerHTML = '';
          if(input.value!==password.value){
            input.classList.add('error');
            errorPassCheck.innerHTML = '<p>la contraseña  no coincide</p>';
          }else if(input.value==password.value) {
            pass++;
            errorPassCheck.innerHTML = '';
          }
        }
     }

  for (eachform of arrayForm) {
    eachform.onblur = function(){
          if (this.name=='name') {
            errorName(this);
          }
          if (this.name=='last_name') {
            errorLastName(this);
          }
          if (this.name=='address') {
            errorAdress(this);
          }
          if (this.name=='email') {
            errorEmail(this);
          }
          if (this.name=='userEmailcheck') {
            errorEmailCheck(this);
          }
          if (this.name=='age') {
            errorAge(this);
          }
          if (this.name=='avatar') {
            errorAvatar(this);
          }
          if (this.name=='password') {
            errorPass(this);
          }
          if (this.name=='password_confirmation') {
            errorPassCheck(this);
          }
       }
    }
