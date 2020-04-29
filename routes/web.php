<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// especialidades
Route::get('/especialidades', "SpecialtiesController@listado");

Route::post('/borrarEspecialidad', "SpecialtiesController@borrar");

Route::get('/agregarEspecialidad', function() {
    return view('agregarEspecialidad');
} );
Route::post('/agregarEspecialidad', "SpecialtiesController@agregar");

Route::get('/editarEspecialidad/{id}', "SpecialtiesController@editar");
Route::post('/editarEspecialidad', "SpecialtiesController@completarEdicion");

// -----------------------------------
// obras sociales
Route::get('/obrasSociales', "MedicalInsuranceController@listado");

Route::get('/agregarObraSocial', function() {
    return view('agregarObraSocial');
});
Route::post('/agregarObraSocial','MedicalInsuranceController@agregar');

Route::post('/borrarObraSocial', "MedicalInsuranceController@borrar");

Route::get('/editarObraSocial/{id}', "MedicalInsuranceController@editar");
Route::post('/editarObraSocial', "MedicalInsuranceController@completarEdicion");

// -----------------------------------
// usuarios
Route::get('/usuarios', "UsersController@listado");
Route::get('/agregarUsuario', function() {
    return view('agregarUsuario');
});
Route::post('/agregarUsuario','UsersController@agregar');
Route::post('/borrarUsuario','UsersController@borrar');
Route::get('/editarUsuario/{id}', "UsersController@editar");
Route::post('/editarUsuario', "UsersController@completarEdicion");

// admins
Route::get('/adminstradores', "AdminsController@listado");
Route::get('/agregarAdministrador', "AdminsController@listadoUsuarios");
Route::post('/hacerAdmin',"AdminsController@agregar");
Route::post('/eliminarAdmin',"AdminsController@eliminar");

// profesionales
Route::get('/profesionales', "ProfessionalsController@listado");
Route::get('/agregarProfesional', "ProfessionalsController@listadoUsuarios");
Route::get('/hacerProfesional/{id}', "ProfessionalsController@datosNecesarios" );
Route::post('/agregarProfesional', "ProfessionalsController@agregar");
Route::post('/eliminarProfesional', "ProfessionalsController@eliminar" );


// -----------------------------------
// pacientes / cuenta
Route::get('/cuenta', 'PatientsController@listado');

Route::get('/agregarPaciente/{id}', 'PatientsController@agregarPaciente');
Route::post('/agregarPaciente', 'PatientsController@completarAgregado');
Route::post('/borrarPaciente', 'PatientsController@borrar');

Route::get('/editarPaciente/{id}', "PatientsController@editar");
Route::post('/editarPaciente', "PatientsController@completarEdicion");

// -----------------------------------
// turnos
Route::get('/crearTurno/{id}', 'MeetingsController@nuevo');
