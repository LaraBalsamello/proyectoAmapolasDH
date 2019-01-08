@extends('default2')

@section('section')
<main>
    <div class="producto-individual">

        <div class="producto-1-individual">
            <img width="100px" height="100px" src="
            @if ( $product->image == 'avatars/default.jpg' )
              {{ '/avatars/default.jpg' }}
            @else
              {{ Storage::url($product->image) }}
            @endif">
        </div>

        <div class="producto-2-individual">
            <h2>{{$product->name}}</h2>
            <p class="producto-individual">{{$product->description}}</p>
            <div class="sabor">
              <h4>Sabor: {{$product->flavour}}</h4>
            </div>
            <div class="categorias-producto">
              <h4>Categorias</h4>
              <ul class="ulProducto">
                <?php foreach ($product->categories as $category): ?>
                  <li>{{$category['name']}}</li>
                <?php endforeach; ?>
              </ul>
            </div>
            <div class="ingredientes-producto">
              <h4>Ingredientes</h4>
              <ul class="ulProducto">
                <?php foreach ($product->ingredients as $ingredient): ?>
                  <li>{{$ingredient['name']}}</li>
                <?php endforeach; ?>
              </ul>
            </div>
            <form action="" method="POST" class="submit-producto">
                <input name="quantity" type="hidden" value="1" />
                <input name="product_id" type="hidden" value="{{$product->id}}" />
                <input name="product_name" type="hidden" value="{{$product->name}}" />
                {{-- <button class="btn btn-danger" id="botonCarrito" type="submit">Agregar al Carrito</button> --}}
            </form>
        </div>

    </div>
        @auth
          @if (Auth::user()->admin==1)
            <a href="/editarProducto/{{$product->id}}"> Editar Producto</a>
            <a href="/eliminarProducto/{{$product->id}}"> Eliminar Producto</a>
          @endif
        @endauth

    <div class="submit">
      <a href="/{{'catalogo'}}">Volver al Catalogo</a>
    </div>

</main>

@endsection
