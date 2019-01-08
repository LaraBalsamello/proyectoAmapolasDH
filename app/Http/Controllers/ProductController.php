<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      $this->validate( $request, [
          'prodPrecio' => 'required', 'numeral',
          'prodStock' => 'required', 'numeral',
          'prodName' => 'required', 'string', 'min:2', 'unique:products',
          'prodDesc' => 'max:255',
          'prodImagen' => 'mimes:jpeg,png,jpg,gif,JPEG,PNG,JPG,GIF',
          'prodSabor' => 'required', 'min:1', 'max:2',
          'ingredients' => 'required', 'min:1',
          'categories' => 'required', 'min:1',

      ], [
        'prodPrecio.required' => 'Debe ingresar el precio del producto',
        'prodPrecio.numeral' => 'El precio debe ser numérico',

        'prodStock.required' => 'Debe ingresar la cantidad en stock del producto',
        'prodStock.numeral' => 'La cantidad en stock debe ser numérica',

        'prodName.required' => 'Debe ingresar el nombre del producto',
        'prodName.string' => 'El nombre del producto no puede contener números ni caracteres espceciales',
        'prodName.min' => 'El nombre del producto debe contener al menos 2 caracteres',
        'prodName.unique' => 'Ya existe un producto con ese nombre',

        'prodDesc.max' => 'La descripción no puede contener más de 255 caracteres',

        'prodImagen.mimes' => 'La imagen debe ser formato jpeg, png, jpg o gif',

        'prodSabor.required' => 'Debe seleccionar al menos un sabor',
        'prodSabor.min' => 'Debe seleccionar al menos un sabor',
        'prodSabor.max' => 'No puede seleccionar más de 2 sabores',

        'ingredients.required' => 'Debe seleccionar al menos un ingrediente',
        'ingredients.min' => 'Debe seleccionar al menos un ingrediente',

        'categories.required' => 'Debe seleccionar al menos una categoría',
        'categories.min' => 'Debe seleccionar al menos una categoría',
      ]);
      if ($request->file('prodImagen')) {
        $folder = 'public/productos';
        $path = $request->file('prodImagen')->storePublicly( $folder );
      }
       $product = Product::create([
          'name' => $request->input('prodName'),
          'price' => $request->input('prodPrecio'),
          'image' => $path??'avatars/default.jpg',
          'description' => $request->input('prodDesc'),
          'stock' => $request->input('prodStock'),
          'flavour' => $request->input('prodSabor'),
      ]);
      foreach ($request->input('categories') as $category) {
        $product->categories()->attach($category);
      }
      foreach ($request->input('ingredients') as $ingredient) {
        $product->ingredients()->attach($ingredient);
      }
      return redirect('/catalogo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
      $product = Product::find($id);

      $this->validate( $request, [
          'prodPrecio' => 'required', 'numeral',
          'prodStock' => 'required', 'numeral',
          'prodName' => 'required', 'string', 'min:2', 'unique:products',
          'prodDesc' => 'max:255',
          'prodImagen' => 'mimes:jpeg,png,jpg,gif,JPEG,PNG,JPG,GIF',
          'prodSabor' => 'required', 'min:1', 'max:2',
          'ingredients' => 'required', 'min:1',
          'categories' => 'required', 'min:1',

      ]);
      if ($request->file('prodImagen')) {
        $folder = 'public/productos';
        $path = $request->file('prodImagen')->storePublicly( $folder );
        $product->image = $path??null;
      }
        $product->name = $request->input('prodName');
        $product->price = $request->input('prodPrecio');
        $product->description = $request->input('prodDesc');
        $product->stock = $request->input('prodStock');
        $product->flavour = $request->input('prodSabor');
        $product->save();
        //borrar relaciones
        $product->categories()->detach();
        $product->ingredients()->detach();
        //agregar nuevas relaciones
        foreach ($request->input('categories') as $category) {
          $product->categories()->attach($category);
        }
        foreach ($request->input('ingredients') as $ingredient) {
          $product->ingredients()->attach($ingredient);
        }

      return redirect('/verProducto/'.$id);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $product = Product::find($id);
      $product->categories()->detach();
      $product->ingredients()->detach();
      $product->delete();
      return redirect('/catalogo');
    }
}
