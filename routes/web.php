<?php



// función anónima para obtener los datos del producto según el slug que se le pasa y que coincida con el 1ro encontrado
Route::bind('product', function($slug){
    return App\Product::where('slug', $slug)->first();
});

Route::get('/', [
    'as'    => 'home',
    'uses'  => 'StoreController@index'
]);


Route::get('product/{slug}', [
    'as'    => 'product-detail',
    'uses'  => 'StoreController@show'
]);

// Carrito
//mostrar productos agregados a nuestro carro
Route::get('cart/show', [
    'as'    => 'cart-show',
    'uses'  => 'CartController@show'
]);
//agregar productos a nuestro carro
Route::get('cart/add/{product}', [
    'as'    =>  'cart-add',
    'uses'  =>  'CartController@add'
]);
// borra un producto del carro
Route::get('cart/delete/{product}',[
    'as'    =>  'cart-delete',
    'uses'  =>  'CartController@delete'
]);

//vaciar carro
Route::get('cart/trash', [
    'as'    =>  'cart-trash',
    'uses'  =>  'CartController@trash'
]);
Route::get('/productos', function () {
    return view('productos');
});


//actualizar cantidad
Route::get('cart/update/{product}/{quantity?}',[
    'as'    =>  'cart-update',
    'uses'  =>  'CartController@update'
]);
//verifica que este autenticado para que pueda pasar a la vista de detalles
Route::get('order-detail',[
    'middleware' => 'auth',
    'as'    =>  'order-detail',
    'uses'  =>  'CartController@orderDetail'
]);

// Authentication routes...
Route::get('auth/login', [
    'as'    =>  'login-get',
    'uses'  =>  'HomeController@index'
]);

Route::post('auth/login', [
    'as'    =>  'login-post',
    'uses'  =>  'HomeController@index'
]);
Auth::routes();
Route::get('auth/logout', [
    'as'    =>  'logout',
    'uses'  =>  'Auth\LoginController@logout'
]);




