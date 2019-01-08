@extends('default')

@section('section')
<body>
  <h2 id="tituloRegistro">Subí tu categoria</h2>
<div class="formulario">
    <form class="formProd" action="" method="post" enctype="multipart/form-data">
      @csrf
          <div class="ingredientData">
            <div class="labelIngredientData">
              <label for="userFullName"> Nombre del categoria:</label>
            </div>
            <div class="ingredientData">
              <input id="prodName" type="text" name="prodName" value="" required>
            </div>
            <div class="error">

           </div>
        </div>
        <div class="submitProd">
          <button id="buttonSubProd" type="submit" name="">Subí tu categoria</button>
        </div>
    </form>
</div>

@endsection
