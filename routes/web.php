<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $title = 'About';
    return view('about', compact('title'));
});

Route::get('/contact', function () {
    $name = 'Bas';
    $age = '22';
    $salary = '1000';

    
    return view('contact', compact('name', 'age', 'salary'));

    
});

Route::get('profile', function () {
    return view('profile', ['name' => 'Bas', 'age' => 22]);
});

// params

Route::get('/params/{name}/{age}/{salary}', function ($name, $age, $salary) {
    return view('params', compact('name', 'age', 'salary'));
});

// POST

Route::get('/post', function () { //ฟอร์มกรอกข้อมูล
    return view('post');
});

Route::post('/post', function (Request $request) {
    $name = $request->name;
    return json_encode(['name' => $name]);
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/response', function () {
    return response()->json(['name' => 'Bas']);
});

Route::get('/products', function () {
    $products = [
        ['id' => 1, 'name' => 'Product 1', 'price' => 100],
        ['id' => 2, 'name' => 'Product 2', 'price' => 200],
        ['id' => 3, 'name' => 'Product 3', 'price' => 300],
    ];
    return response()->json(['products' => $products]);
});

// response type การตอบกลับ
Route::get('/rseponse-type', function () {
    //401 = unauthorized
    //403 = forbidden
    //404 = not found
    //500 = internet server error
    //200 = ok
    //201 = created
    //202 = accepted
    //204 = no content
    return response('Unauthorized', 401);
});

// Response Redirect การกระโดดจุดนึงไปอีกจุดนึง
Route::get('/redirect', function () {
    return redirect('/terget');
});

Route::get('/target', function () {
    return response()->json(['message' => 'Target']);
});

//Rout with Controller Customer
$customerController = CustomerController::class;

Route::get('/customers', [$customerController, 'list']);
Route::get('/customers/{id}', [$customerController, 'detail']);
Route::post('/customers', [$customerController, 'create']);
Route::put('/customers/{id}', [$customerController, 'update']);
Route::delete('/customers/{id}', [$customerController, 'delete']);