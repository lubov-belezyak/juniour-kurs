<?php

use App\Http\Controllers\AuthFrontController;
use App\Http\Controllers\ItemsController;
use App\Http\Controllers\PersonController;
use App\Models\Item;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index', [
        'user' => Auth::user(),
    ]);
})
-> name('index');

Route::get('/hehe', function () {
    return view('hello');
});

Route::get('/table', function () {
    return view('Items.table', [
        'items' => Item::all(),
    ]);
});

Route::get('/table/add/{id?}', [ItemsController::class, 'editNewItem']);

Route::post('/table/add/{id?}',  [ItemsController::class, 'addItem']);

Route::get('/table/del/{id}', [ItemsController::class, 'removeItem']);

Route::get('/persons', [PersonController::class, 'showPersons'])
    -> name('persons')
    -> middleware(AuthController::class);

Route::get('/user/login', [AuthFrontController::class, 'loginPage'])
-> name('login.get');

Route::post('/user/login', [AuthFrontController::class, 'loginUser'])
-> name('login.post');

Route::get('/user/register', [AuthFrontController::class, 'regPage'])
-> name('register.get');

Route::post('/user/register', [AuthFrontController::class, 'registerUser'])
-> name('register.post');

Route::get('/user/logout', function(){
   $user = Auth::user();
   if($user) {
       Auth::logout();
       return redirect()->route('index');
   } else {
       return redirect()->route('index');
   }
})
    -> name('logout');

Route::get('/persons/edit/{id?}', [PersonController::class, 'editPerson'])
    -> middleware(AuthController::class)
    -> name('persons.edit');

Route::post('/persons/edit/{id?}', [PersonController::class, 'updatePerson'])
    -> middleware(AuthController::class)
    -> name('persons.update');

Route::get('/persons/destroy/{id}', [PersonController::class, 'removePerson'])
    -> middleware(AuthController::class)
    -> name('persons.destroy');
