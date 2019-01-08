
if (localStorage['tema']=='dia') {
  document.getElementById('href').href = "css/style.css";
}else if (localStorage['tema']=='noche') {
  document.getElementById('href').href = "css/modoNocturno.css";
}

/*------------------------JS DEL DROPDOWNS--------------------------------*/

function myFunctionMenu() {
  document.getElementById("myDropdown1").classList.toggle("show");
  //document.getElementById("myDropdown1").classList.toggle("show");
}
//
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
    var myDropdown = document.getElementById("myDropdown1");
      if (myDropdown.classList.contains('show')) {
        myDropdown.classList.remove('show');
      }
  }
}
//
//   function myFunctionCarrito2() {
//     document.getElementById("myDropdown4").classList.toggle("show");
//   }
//
// window.onclick = function(e) {
//   if (!e.target.matches('.dropbtn')) {
//     var dropdown = document.getElementById("carrito");
//       if (dropdown.classList.contains('show')) {
//       dropdown.classList.remove('show');
//       }
//   }
// }

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
        href.href="css/style.css";
      }
    localStorage.setItem('tema','dia');
  }

  function cambiarTema() {
   var hrefs = document.getElementsByClassName('archivoCSS');
      for (href of hrefs){
        href.href="css/modoNocturno.css";
      }
    localStorage.setItem('tema','noche');
  }
  window.onload = function (){

/*----------------------JS VALIDACIONES REGISTRO ----------------------*/

 var form = document.querySelector("form");
 var elementosDelForm = form.elements;
 var arrayForm = Array.from(elementosDelForm);
 var errorNombreRegex =  /^[a-z-A-Z\D]+$/g
 var errorEmailRegex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 var errorAdressRegex = /^[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?(( |\-)[a-zA-Z1-9À-ÖØ-öø-ÿ]+\.?)* (((#|[nN][oO]\.?) ?)?\d{1,4}(( ?[a-zA-Z0-9\-]+)+)?)/;
 var errorEmailRegex = /[\w]+@{1}[\w]+\.[a-z]{2,3}/;
 var errorAvatarRegex = /< *[img][^>]*[src] *= *["']{0,1}([^"' >]*)/
 var errorPassRegex = /^(?=.{6,})(?=.*\d)(?=.*[a-z])(?!.*\s).*$/

if (window.location.href=='http://localhost:8000/register') {

 function errorName(input){
   var errorfeed = document.getElementById('errorJSName');
    if (input.value =="") {
      document.getElementById('name').style.borderColor = 'darkred'
      errorfeed.innerHTML = '<p>Error campo Obligatorio</p>';
    }else if (input.value) {
      document.getElementById('name').style.borderColor = 'white'
      errorfeed.innerHTML = '';
        if(errorNombreRegex.test(input.value)==false){
          document.getElementById('name').style.borderColor = 'darkred'
          errorfeed.innerHTML = '<p>Error no es un nombre</p>';
        }else if(errorNombreRegex.test(input.value)==true) {
          document.getElementById('name').style.borderColor = 'white';
          errorfeed.innerHTML = '';
        }
    }
  }

 function errorLastName(input){
   var errorApellido = document.getElementById('errorJSLastName');
    if (input.value == "") {
      errorApellido.innerHTML = '<p>Error campo Obligatorio</p>';
      document.getElementById('last_name').style.borderColor = 'darkred'
    }else if (input.value) {
      document.getElementById('last_name').style.borderColor = 'white'
      errorApellido.innerHTML = '';
      if(errorNombreRegex.test(input.value)==false){
        document.getElementById('last_name').style.borderColor = 'darkred'
        errorApellido.innerHTML = '<p>Error no es un apellido</p>';
      }else if(errorNombreRegex.test(input.value)==true) {
        document.getElementById('last_name').style.borderColor = 'white'
        errorApellido.innerHTML = '';
      }
    }
 }

 function errorAdress(input){
   var errorAdress = document.getElementById('errorJSAdress');
    if (input.value == "") {
      errorAdress.innerHTML = '<p>Error campo Obligatorio</p>';
      document.getElementById('adress').style.borderColor = 'darkred'
    }else if (input.value) {
      errorAdress.innerHTML = '';
      document.getElementById('adress').style.borderColor = 'white'
      if(errorAdressRegex.test(input.value)==false){
        document.getElementById('adress').style.borderColor = 'darkred'
        errorAdress.innerHTML = '<p>Error no es una direccion valida</p>';
      }else if(errorAdressRegex.test(input.value)==true) {
        document.getElementById('adress').style.borderColor = 'white'
        errorAdress.innerHTML = '';
      }
    }
 }

 function errorEmail(input){
   var errorEmail = document.getElementById('errorJSEmail');
    if (input.value == "") {
      errorEmail.innerHTML = '<p>Error campo Obligatorio</p>';
      document.getElementById('userEmail').style.borderColor = 'darkred'
    }else if (input.value) {
      errorEmail.innerHTML = '';
      document.getElementById('userEmail').style.borderColor = 'white'
      if(errorEmailRegex.test(input.value)==false){
        document.getElementById('userEmail').style.borderColor = 'darkred'
        errorEmail.innerHTML = '<p>Error no es una direccion de correo valida</p>';
      }else if(errorEmailRegex.test(input.value)==true) {
        document.getElementById('userEmail').style.borderColor = 'white'
        errorEmail.innerHTML = '';
      }
    }
 }

 function errorEmailCheck(input){
   var errorEmailCheck = document.getElementById('errorJSEmailCheck');
   var email = document.getElementById('userEmail')
    if (input.value == "") {
      errorEmailCheck.innerHTML = '<p>Error campo Obligatorio</p>';
      document.getElementById('userEmailcheck').style.borderColor = 'darkred'
    }else if (input.value) {
      document.getElementById('userEmailcheck').style.borderColor = 'white'
      errorEmailCheck.innerHTML = '';
      if(input.value!==email.value){
        document.getElementById('userEmailcheck').style.borderColor = 'darkred'
        errorEmailCheck.innerHTML = '<p>Error el correo no coincide</p>';
      }else if(input.value==email.value) {
        document.getElementById('userEmailcheck').style.borderColor = 'white'
        errorEmailCheck.innerHTML = '';
      }
    }
 }

 function errorAge(input){
   var errorAge = document.getElementById('errorJSAge');
    if (input.value == "") {
      errorAge.innerHTML = '<p>Error campo Obligatorio</p>';
      document.getElementById('userAge').style.borderColor = 'darkred'
    }else if (input.value) {
      var input = input.value;
      var year = input.substring(4,0);
      var month = input.substring(7,5);
      var day = input.substring(10,8);
      var birthday  = new Date(year,month,day);
      function calcularEdad(input) {
        var today = new Date();
        var age = today.getFullYear() - birthday.getFullYear();
          if(age<18){
            var addClasslist = document.getElementById('errorJSAge');
            errorAge.innerHTML = '<p>Lo siento, no sos mayor de edad</p>';
            document.getElementById('userAge').style.borderColor = 'darkred'
          }else{
            var addClasslist = document.getElementById('errorJSAge');
            errorAge.innerHTML = '';
            document.getElementById('userAge').style.borderColor = 'white'
          }
       }
      calcularEdad();
    }
  }

   function errorAvatar(input){
     var errorAvatar = document.getElementById('errorJSAvatar');
     if (input.value == "") {
       errorAvatar.innerHTML = '<p>Error campo Obligatorio</p>';
       document.getElementById('userAvatar').style.borderColor = 'darkred'
     } else if (input.value) {
       document.getElementById('userAvatar').style.borderColor = 'white'
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
            document.getElementById('userAvatar').style.borderColor = 'darkred'
          }else if (f==formato) {
            errorAvatar.innerHTML = '';
            return  document.getElementById('userAvatar').style.borderColor = 'white'
          }
        }
      }
   }

   function errorPass(input){
     var errorPass = document.getElementById('errorJSPass');
      if (input.value == "") {
        errorPass.innerHTML = '<p>Error campo Obligatorio</p>';
        document.getElementById('userPass').style.borderColor = 'darkred'
      }else if (input.value) {
        document.getElementById('userPass').style.borderColor = 'white'
        errorPass.innerHTML = '';
        if(errorPassRegex.test(input.value)==false){
          document.getElementById('userPass').style.borderColor = 'darkred'
          errorPass.innerHTML = '<p>Contraseña invalida. Debe contener un numero y al menos 6 caracteres</p>';
        }else if(errorPassRegex.test(input.value)==true) {
          errorPass.innerHTML = '';
          document.getElementById('userPass').style.borderColor = 'white'
        }
      }
   }

   function errorPassCheck(input){
     var errorPassCheck = document.getElementById('errorJSPassCheck');
     var password = document.getElementById('userPass');
      if (input.value == "") {
        errorPassCheck.innerHTML = '<p>Error campo Obligatorio</p>';
        document.getElementById('userPasscheck').style.borderColor = 'darkred'
      }else if (input.value) {
        errorPassCheck.innerHTML = '';
        document.getElementById('userPasscheck').style.borderColor = 'white'
        if(input.value!==password.value){
          document.getElementById('userPasscheck').style.borderColor = 'darkred'
          errorPassCheck.innerHTML = '<p>la contraseña  no coincide</p>';
        }else if(input.value==password.value) {
          document.getElementById('userPasscheck').style.borderColor = 'white'
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

  form.onsubmit = function (event){

    for (eachform of arrayForm) {
      var el = eachform;
            if (el.name=='name') {
              errorName(el);
            }
            if (el.name=='last_name') {
              errorLastName(el);
            }
            if (el.name=='address') {
              errorAdress(el);
            }
            if (el.name=='email') {
              errorEmail(el);
            }
            if (el.name=='userEmailcheck') {
              errorEmailCheck(el);
            }
            if (el.name=='age') {
              errorAge(el);
            }
            if (el.name=='avatar') {
              errorAvatar(el);
            }
            if (el.name=='password') {
              errorPass(el);
            }
            if (el.name=='password_confirmation') {
              errorPassCheck(el);
            }

      }
    var validando = document.getElementById('errorJSName');
    var validando1 = document.getElementById('errorJSLastName');
    var validando2 = document.getElementById('errorJSEmail');
    var validando3 = document.getElementById('errorJSEmailCheck');
    var validando4 = document.getElementById('errorJSAge');
    var validando5 = document.getElementById('errorJSPass');
    var validando6 = document.getElementById('errorJSPassCheck');
    if (validando.innerHTML!==''||validando1.innerHTML!==''||validando2.innerHTML!==''||validando3.innerHTML!==''||validando4.innerHTML!==''||validando5.innerHTML!==''||validando6.innerHTML!=='') {
      event.preventDefault();
      document.getElementById('corregir').innerHTML='<h3>Hay errores en el formulario! Corrija y vuelva a enviar<h3>';
      document.getElementById('corregir').scrollIntoView({
        behavior: 'smooth'
      });
    }else{
      document.getElementById('corregir').innerHTML='';
      document.getElementById('corregir').innerHTML='Su usuario se registro exitosamente';
    }
  }
}
  /*JS VALIDACION LOGIN_-------------------------------------------------------------*/
  if (window.location.href == 'http://localhost:8000/login') {
    var formulario = document.querySelector('form');
    var formularioE = formulario.elements;
    var arrayFormularioLogin = Array.from(formularioE)

    function errorEmail(input){
      var errorEmail = document.getElementById('errorLoginJS');
       if (input.value == "") {
         errorEmail.innerHTML = '<p>Error campo Obligatorio</p>';
         document.getElementById('email').style.borderColor = 'darkred'
       }else if (input.value) {
         errorEmail.innerHTML = '';
         document.getElementById('email').style.borderColor = 'white'
         if(errorEmailRegex.test(input.value)==false){
           document.getElementById('email').style.borderColor = 'darkred'
           errorEmail.innerHTML = '<p>Error no es una direccion de correo valida</p>';
         }else if(errorEmailRegex.test(input.value)==true) {
           document.getElementById('email').style.borderColor = 'white'
           errorEmail.innerHTML = '';
         }
       }
    }

      function errorPass(input){
        var errorPass = document.getElementById('errorLoginJSPass');
         if (input.value == "") {
           errorPass.innerHTML = '<p>Error campo Obligatorio</p>';
           document.getElementById('userPass').style.borderColor = 'darkred'
         }else if (input.value) {
           document.getElementById('userPass').style.borderColor = 'white'
           errorPass.innerHTML = '';
           if(errorPassRegex.test(input.value)==false){
             document.getElementById('userPass').style.borderColor = 'darkred'
             errorPass.innerHTML = '<p>Contraseña invalida. Debe contener un numero y al menos 6 caracteres</p>';
           }else if(errorPassRegex.test(input.value)==true) {
             errorPass.innerHTML = '';
             document.getElementById('userPass').style.borderColor = 'white'
           }
         }
      }

     for (eachform of arrayForm) {
       eachform.onblur = function(){
             if (this.name=='email') {
               errorEmail(this);
             }
             if (this.name=='password') {
               errorPass(this);
             }
          }
       }

     form.onsubmit = function (event){

       for (eachform of arrayForm) {
         var el = eachform;

               if (el.name=='email') {
                 errorEmail(el);
               }
               if (el.name=='password') {
                 errorPass(el);
               }
         }
       var validando2 = document.getElementById('errorLoginJS');
       var validando5 = document.getElementById('errorLoginJSPass');
       if (validando2.innerHTML!==''||validando5.innerHTML!=='') {
         event.preventDefault();
         document.getElementById('erroresLogin').innerHTML='<h3>Hay errores en el formulario! Corrija y vuelva a enviar<h3>';
         document.getElementById('erroresLogin').scrollIntoView({
           behavior: 'smooth'
         });
       }else{
         document.getElementById('erroresLogin').innerHTML='';
         document.getElementById('erroresLogin').innerHTML='Su usuario se logueo exitosamente';
       }
     }
}
/*----------------------------------VALIDACIONES EDITAR PERFIL----------------------------------------------------*/

if (window.location.href == 'http://localhost:8000/editarPerfil') {
  var formularioEditP = document.querySelector('form.editarPerfil');
  var formularioEd = formularioEditP.elements;
  var arrayFormEdit = Array.from(formularioEd);
      arrayFormEdit.pop()

  function errorName(input){
    var errorNombre = document.getElementById('erroresEdit');
     if (input.value == "") {
       errorNombre.innerHTML = '<p>Error campo Obligatorio</p>';
       document.getElementById('name').style.borderColor = 'darkred'
     }else if (input.value) {
       document.getElementById('name').style.borderColor = 'white'
       errorNombre.innerHTML = '';
         if(errorNombreRegex.test(input.value)==false){
           document.getElementById('name').style.borderColor = 'darkred'
           errorNombre.innerHTML = '<p>Error no es un nombre</p>';
         }else if(errorNombreRegex.test(input.value)==true) {
           document.getElementById('name').style.borderColor = 'white';
           errorNombre.innerHTML = '';
         }
     }
   }

  function errorLastName(input){
    var errorApellido = document.getElementById('errorEditLN');
     if (input.value == "") {
       errorApellido.innerHTML = '<p>Error campo Obligatorio</p>';
       document.getElementById('last_name').style.borderColor = 'darkred'
     }else if (input.value) {
       document.getElementById('last_name').style.borderColor = 'white'
       errorApellido.innerHTML = '';
       if(errorNombreRegex.test(input.value)==false){
         document.getElementById('last_name').style.borderColor = 'darkred'
         errorApellido.innerHTML = '<p>Error no es un apellido</p>';
       }else if(errorNombreRegex.test(input.value)==true) {
         document.getElementById('last_name').style.borderColor = 'white'
         errorApellido.innerHTML = '';
       }
     }
  }

  function errorAdress(input){
    var errorAdress = document.getElementById('errorEditAdress');
     if (input.value == "") {
       errorAdress.innerHTML = '<p>Error campo Obligatorio</p>';
       document.getElementById('address').style.borderColor = 'darkred'
     }else if (input.value) {
       errorAdress.innerHTML = '';
       document.getElementById('address').style.borderColor = 'white'
       if(errorAdressRegex.test(input.value)==false){
         document.getElementById('address').style.borderColor = 'darkred'
         errorAdress.innerHTML = '<p>Error no es una direccion valida</p>';
       }else if(errorAdressRegex.test(input.value)==true) {
         document.getElementById('address').style.borderColor = 'white'
         errorAdress.innerHTML = '';
       }
     }
  }

  function errorAge(input){
    var errorAge = document.getElementById('errorEditAge');
     if (input.value == "") {
       errorAge.innerHTML = '<p>Error campo Obligatorio</p>';
       document.getElementById('userAge').style.borderColor = 'darkred'
     }else if (input.value) {
       var input = input.value;
       var year = input.substring(4,0);
       var month = input.substring(7,5);
       var day = input.substring(10,8);
       var birthday  = new Date(year,month,day);
       function calcularEdad(input) {
         var today = new Date();
         var age = today.getFullYear() - birthday.getFullYear();
           if(age<18){
             var addClasslist = document.getElementById('errorJSAge');
             errorAge.innerHTML = '<p>Lo siento, no sos mayor de edad</p>';
             document.getElementById('userAge').style.borderColor = 'darkred'
           }else{
             var addClasslist = document.getElementById('errorJSAge');
             errorAge.innerHTML = '';
             document.getElementById('userAge').style.borderColor = 'white'
           }
        }
       calcularEdad();
     }
   }

    function errorAvatar(input){
      var errorAvatar = document.getElementById('errorEditAvatar');
      if (input.value == "") {
        errorAvatar.innerHTML = '<p>Error campo Obligatorio</p>';
        document.getElementById('userAvatar').style.borderColor = 'darkred'
      } else if (input.value) {
        document.getElementById('userAvatar').style.borderColor = 'white'
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
             document.getElementById('userAvatar').style.borderColor = 'darkred'
           }else if (f==formato) {
             errorAvatar.innerHTML = '';
             return  document.getElementById('userAvatar').style.borderColor = 'white'
           }
         }
       }
    }

   for (eachform of arrayFormEdit) {
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
           if (this.name=='age') {
             errorAge(this);
           }
           if (this.name=='avatar') {
             errorAvatar(this);
           }
        }
     }

   formularioEditP.onsubmit = function (form){

     for (eachform of arrayFormEdit) {
       var el = eachform;
             if (el.name=='name') {
               errorName(el);
             }
             if (el.name=='last_name') {
               errorLastName(el);
             }
             if (el.name=='address') {
               errorAdress(el);
             }
             if (el.name=='age') {
               errorAge(el);
             }
             if (el.name=='avatar') {
               errorAvatar(el);
             }
       }
     var validando = document.getElementById('erroresEdit');
     var validando2 = document.getElementById('errorEditAdress');
     var validando1 = document.getElementById('errorEditLN');
     var validando3 = document.getElementById('errorEditAge');
     var validando4 = document.getElementById('errorEditAvatar');


     if (validando.innerHTML!==''||validando1.innerHTML!==''||validando2.innerHTML!==''||validando3.innerHTML!==''||validando4.innerHTML!=='') {
       form.preventDefault();
       document.getElementById('corregirEdit').innerHTML='<h3>Hay errores en el formulario! Corrija y vuelva a enviar<h3>';
       document.getElementById('corregirEdit').scrollIntoView({
         behavior: 'smooth'
       });
     }else{
       document.getElementById('corregirEdit').innerHTML='';
       document.getElementById('corregirEdit').innerHTML='Su usuario se registro exitosamente';
     }
   }
}else{

  /*---------------------------------------------JS VALIDACION CHANGE PASS -------------------------------------------------------------*/

   var formChangePass = document.querySelector('form.formCC');
   var elemenFCP = formChangePass.elements;
   var elemenFCPArray = Array.from(elemenFCP);

     function errorPass(input){
       var errorPass = document.getElementById('errorJSPassCC');
        if (input.value == "") {
          errorPass.innerHTML = '<p>Error campo Obligatorio</p>';
          document.getElementById('userPass').style.borderColor = 'darkred'
        }else if (input.value) {
          document.getElementById('userPass').style.borderColor = 'white'
          errorPass.innerHTML = '';
          if(errorPassRegex.test(input.value)==false){
            document.getElementById('userPass').style.borderColor = 'darkred'
            errorPass.innerHTML = '<p>Contraseña invalida. Debe contener un numero y al menos 6 caracteres</p>';
          }else if(errorPassRegex.test(input.value)==true) {
            errorPass.innerHTML = '';
            document.getElementById('userPass').style.borderColor = 'white'
          }
        }
     }

     function errorPassCheck(input){
       var errorPassCheck = document.getElementById('errorJSPassCheckCC');
       var password = document.getElementById('userPass');
        if (input.value == "") {
          errorPassCheck.innerHTML = '<p>Error campo Obligatorio</p>';
          document.getElementById('userPasscheck').style.borderColor = 'darkred'
        }else if (input.value) {
          errorPassCheck.innerHTML = '';
          document.getElementById('userPasscheck').style.borderColor = 'white'
          if(input.value!==password.value){
            document.getElementById('userPasscheck').style.borderColor = 'darkred'
            errorPassCheck.innerHTML = '<p>la contraseña  no coincide</p>';
          }else if(input.value==password.value) {
            document.getElementById('userPasscheck').style.borderColor = 'white'
            errorPassCheck.innerHTML = '';
          }
        }
     }

    for (eachform of elemenFCPArray) {
      eachform.onblur = function(){
            if (this.name=='password') {
              errorPass(this);
            }
            if (this.name=='password_confirmation') {
              errorPassCheck(this);
            }
         }
      }

      formChangePass.onsubmit = function (form){

        for (eachform of elemenFCPArray) {
          var el = eachform;
                if (el.name=='password') {
                  errorPass(el);
                }
                if (el.name=='password_confirmation') {
                  errorPassCheck(el);
                }
          }
        var validando1 = document.getElementById('errorJSPassCC');
        var validando2 = document.getElementById('errorJSPassCheckCC');

        if (validando1.innerHTML!==''||validando2.innerHTML!=='') {
          form.preventDefault();
          document.getElementById('errorJSCC').innerHTML='<h3>Hay errores en el formulario! Corrija y vuelva a enviar<h3>';
          document.getElementById('errorJSCC').scrollIntoView({
            behavior: 'smooth'
          });
        }else{
          document.getElementById('errorJSCC').innerHTML='';
          document.getElementById('errorJSCC').innerHTML='Su contraseña se modificó exitosamente';
        }
      }

  }
}
