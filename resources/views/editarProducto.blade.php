@extends('default2')

@section('section')
<body>
  <h2 id="tituloRegistro">Editar Producto</h2>
<div class="formulario">
    <form class="formProd" action="" method="post" enctype="multipart/form-data">
      @csrf

          <div class="prodData">
            <div class="inputProdData">
              <input id="prodName" type="text" name="prodName" value="{{old('prodName', $product->name)}}" required placeholder="Producto"><span style="color:red;">*</span>
            </div>
            <div class="error">
              @if ($errors->has('prodName'))
                  <span>
                    <strong>{{ $errors->first('prodName') }}</strong>
                  </span>
              @endif
           </div>
        </div>

        <div class="prodData">
            <div class="inputProdData">
              <input id="prodPrecio" type="number" name="prodPrecio" value="{{old('prodName', $product->price)}}" required placeholder="Precio"><span style="color:red;">*</span>
            </div>
            <div class="error">
              @if ($errors->has('prodPrecio'))
                  <span>
                    <strong>{{ $errors->first('prodPrecio') }}</strong>
                  </span>
              @endif
           </div>
        </div>

        <div class="prodData">
            <div class="inputProdData">
                <div class="labelprodData">
                  <label for="prodStock">Stock del producto:</label>
                </div>
              <input id="prodStock" type="number" name="prodStock" value="{{old('prodName', $product->stock)}}" required placeholder="Cantidad"><span style="color:red;">*</span>
            </div>
            <div class="error">
              @if ($errors->has('prodStock'))
                  <span>
                    <strong>{{ $errors->first('prodStock') }}</strong>
                  </span>
              @endif
           </div>
        </div>

        <div class="prodData">
            <div class="inputProdData">
              <input id="prodDesc" type="text" name="prodDesc" value="{{old('prodName', $product->description)}}"required placeholder="Descripcion"><span style="color:red;">*</span>
            </div>
            <div class="error">
              @if ($errors->has('prodDesc'))
                  <span>
                    <strong>{{ $errors->first('prodDesc') }}</strong>
                  </span>
              @endif
           </div>
        </div>
        <div class="prodData">
            <div class="labelprodData">
              <label for="prodFlavour">Sabor:</label>
            </div>
            <div class="inputProdData">
              <select class="optionSabor" name="prodSabor">
                <option value="" disabled selected>Seleccione un sabor</option>
                <option @if ($product->flavour == 'Salado')
                  {{'selected'}}
                @endif value="salado">Salado</option>
                <option @if ($product->flavour == 'Dulce')
                  {{'selected'}}
                @endif value="dulce">Dulce</option>
              </select>
            </div>
            <div class="error">
              @if ($errors->has('prodSabor'))
                  <span>
                    <strong>{{ $errors->first('prodSabor') }}</strong>
                  </span>
              @endif
           </div>
        </div>
        <div class="prodData">
            <div class="labelProdData">
              <label for="prodIngredients">Ingredientes:</label>
            </div>
            <div class="inputProdData">
              @foreach ($ingredients as $ingredient)
                  <input id="ingredient_{{$ingredient->id}}"  type="checkbox" name="ingredients[]" value="{{$ingredient->id}}">
                  <label for="ingredient_{{$ingredient->id}}">{{$ingredient->name}}</label>
              @endforeach
            </div>
            <div class="error">
              @if ($errors->has('ingredients'))
                <strong>{{ $errors->first('ingredients') }}</strong>
              @endif
           </div>
        </div>
        <div class="prodData">
            <div class="labelProdData">
              <label for="prodCategories">Categorias:</label>
            </div>
            <div class="inputProdData">
              @foreach ($categories as $category)
                  <input id="category_{{$category->id}}"  type="checkbox" name="categories[]" value="{{$category->id}}">
                  <label for="category_{{$category->id}}">{{$category->name}}</label>
              @endforeach
            </div>
            <div class="error">
              @if ($errors->has('categories'))
                <strong>{{ $errors->first('categories') }}</strong>
              @endif
           </div>
        </div>
        <div class="prodData">
            <div class="labelProdData">
              <label for="prodImagen">Imagen:</label>
            </div>
            <div class="inputProdData">
              <input type="file" name="prodImagen" value="">
            </div>
            <div class="error">
              @if ($errors->has('prodImagen'))
                  <span>
                    <strong>{{ $errors->first('prodImagen') }}</strong>
                  </span>
              @endif
           </div>
        </div>


        <div class="submitProd" style="background:white">
          <button id="buttonSubProd" type="submit" name="">Guardar producto</button>
        </div>
    </form>
</div>

@endsection
