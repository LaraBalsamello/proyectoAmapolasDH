<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Ingredient;

class Views extends Controller
{
  public function showHome(){
      return view('home');
  }
  public function showSubirProducto(){
    $categories = Category::all();
    $ingredients = Ingredient::all();
    return view('subirProducto')->with(compact('categories'))->with(compact('ingredients'));
  }
  public function showFaqs(){
      return view('preguntas-frecuentes');
  }
  public function showQuienes(){
      return view('quienes');
  }
  public function showCatalogo(){
      $products = Product::paginate(6);
      $categories = Category::all();
      $ingredients = Ingredient::all();
      return view('catalogo')->with(compact('products'))->with(compact('categories'))->with(compact('ingredients'));
  }
  public function showProducto($id){
      $product = Product::find($id);
      $categories = Category::all();
      $ingredients = Ingredient::all();
      return view('verProducto')->with(compact('product'))->with(compact('categories'))->with(compact('ingredients'));
  }
  public function showEditarProducto($id){
      $product = Product::find($id);
      $categories = Category::all();
      $ingredients = Ingredient::all();
      return view('editarProducto')->with(compact('product'))->with(compact('categories'))->with(compact('ingredients'));
  }
  public function showLogin(){
      return view('login');
  }
  public function showRegistro(){
      return view('registro');
  }
  public function showPerfil(){
      return view('perfil');
  }
  public function showEditarPerfil(){
      return view('editarPerfil');
  }
  public function showRecuperarContraseña(){
      return view('recuperarContraseña');
  }
  public function showCambiarContraseña(){
      return view('cambiarContraseña');
  }
}
