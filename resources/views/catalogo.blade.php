@extends('default')

@section('section')

  <main class="mainCatalogo">
    <div class="contenedor-principal" >
      <h2>CATALOGO</h2>
      @auth
        @if (Auth::user()->admin==1)
          <a href="/subirProducto"> Subir Producto</a>
          <a href="/subirIngrediente"> Subir Ingrediente</a>
          <a href="/subirCategoria"> Subir Categoria</a>
        @endif
      @endauth

      <div class="catalogo">
        @foreach ($products as $product)
          <div class="producto">
            <div class="producto-1">
              <a href="/verProducto/{{$product->id}}" class="">
                <img width="100px" height="100px" src="
                @if ( $product->image == 'avatars/default.jpg' )
                  {{ 'avatars/default.jpg' }}
                @else
                  {{ Storage::url($product->image) }}
                @endif">
              </a>
            </div>
            <div class="producto-2">
              <h4>{{$product->name}}</h4>
              <p class="description">{{$product->description}}</p>
              <a href="/verProducto/{{$product->id}}" class="">Ver Detalle</a>
              <form action="" method="POST">
                <input name="quantity" type="hidden" value="1" />
                <input name="product_id" type="hidden" value="{{$product->id}}" />
                <input name="product_name" type="hidden" value="{{$product->name}}" />
                {{-- <button class="btn btn-danger" id="botonCarrito" type="submit">Agregar al Carrito</button> --}}
              </form>
            </div>
          </div>

        @endforeach

      </div>

      <div class="paginacion">
        {{ $products->links() }}
      </div>

    </div>

  </main>


@endsection
