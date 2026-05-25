<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AlimentoController;
use Illuminate\Support\Facades\Route;


#Route::get('/', function () {
#    return view('welcome');
#});

//cuando que no inciado sesion va obligadorio a 
//pagina de login
Route::get('/',function()
{
    return view('alimentos.home');
})->middleware('auth'); 

//alimentos/{categoria} es la ruta para mostrar los alimentos de cada categoria, 
//el parametro categoria se pasa a la funcion anonima para cargar la vista con los datos correspondientes a esa categoria
// Se usa controlador -> HAY QUE INVOCARLO PRIMERO ARRIBA
Route::get('/alimentos/{alimento}', [AlimentoController::class, 'show'])
    ->middleware('auth')
    ->name('alimento.show');

//usuario es la ruta para mostrar el perfil del usuario, esta ruta esta protegida por el middleware auth, lo que significa que solo los usuarios autenticados pueden acceder a ella, si un usuario no autenticado intenta acceder a esta ruta, sera redirigido a la pagina de login
Route::get('/user', function () 
{
    return view('alimentos.usuario');
})->middleware('auth');

//dashboard 
Route::get('/dashboard', function () {
    return redirect('/');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas para el perfil de usuario, cuando se cambiar algo en el perfil se actualiza la informacion
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
