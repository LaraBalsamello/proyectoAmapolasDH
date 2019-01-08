@extends('default')

@section('section')
<body>
  <h2 id="tituloRegistro">Subí tu ingrediente</h2>
<div class="formulario">
    <form class="formProd" action="" method="post" enctype="multipart/form-data">
      @csrf
          <div class="ingredientData">
            <div class="labelIngredientData">
              <label for="userFullName"> Nombre del ingrediente:</label>
            </div>
            <div class="ingredientData">
              <input id="prodName" type="text" name="prodName" value="" required>
            </div>
            <div class="error">

           </div>
        </div>
        <div class="submitProd">
          <button id="buttonSubProd" type="submit" name="">Subí tu ingrediente</button>
        </div>
    </form>
</div>

@endsection
