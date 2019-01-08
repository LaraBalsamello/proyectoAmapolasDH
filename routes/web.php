<?php

Route::get('/perfil', 'Views@showPerfil')->middleware('auth')->name('perfil');

Route::get('/subirProducto', 'Views@showSubirProducto')->middleware('auth')->name('subirProducto');
Route::post('/subirProducto', 'ProductController@create')->middleware('auth')->name('subirProductoPost');

Route::get('/editarProducto/{id}', 'Views@showEditarProducto')->middleware('auth')->name('editarProducto');
Route::post('/editarProducto/{id}', 'ProductController@edit')->middleware('auth')->name('editarProductoPost');

Route::get('/eliminarProducto/{id}', 'ProductController@destroy')->middleware('auth')->name('eliminarProductoPost');

Route::get('/borrarDireccion/{id}', 'UserController@borrarDireccion')->middleware('auth')->name('borrarDireccion');

Route::get('/subirIngrediente', 'IngredientController@index')->middleware('auth')->name('subirIngrediente');
Route::post('/subirIngrediente', 'IngredientController@create')->middleware('auth')->name('subirIngredientePost');

Route::get('/subirCategoria', 'CategoryController@index')->middleware('auth')->name('subirCategoria');
Route::post('/subirCategoria', 'CategoryController@create')->middleware('auth')->name('subirCategoriaPost');

Route::get('/cambiarContraseña', 'Views@showCambiarContraseña')->middleware('auth')->name('cambiarContraseña');
Route::post('/cambiarContraseña', 'UserController@passChange')->middleware('auth')->name('cambiarContraseñaPost');

Route::get('/recuperarContraseña', 'Views@showRecuperarContraseña')->middleware('auth')->name('recuperarContraseña');

Route::get('/editarPerfil', 'Views@showEditarPerfil')->middleware('auth')->name('editarPerfil');
Route::post('/editarPerfil', 'UserController@edit')->middleware('auth')->name('editarPerfilPost');

// Route::get('/register', 'Views@showRegistro')->name('register');
//
// Route::get('/login', 'Views@showLogin')->name('login');

Route::get('/catalogo', 'Views@showCatalogo')->name('catalogo');

Route::get('/verProducto/{id}', 'Views@showProducto')->name('verProducto');

Route::get('/carrito/{id}', 'Views@showCarrito')->name('carrito');

Route::get('/quienes-somos', 'Views@showQuienes')->name('quienes-somos');

Route::get('/preguntas-frecuentes', 'Views@showFaqs')->name('preguntas-frecuentes');

Route::get('/', 'Views@showHome')->name('home');

Auth::routes();

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');
Route::get('auth/{provider}', 'Auth\SocialAuthController@redirectToProvider')->name('social.auth');
Route::get('auth/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/home', 'HomeController@index')->name('home');
