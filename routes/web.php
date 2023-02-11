<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\EmployeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RendezvousController;





Route::get('/', function () {
    return view('welcome');
});



/* CONTACT*/

Route::get('/contact',[ContactController::class, 'listeContact']);
Route::get('deleteContact/{id}',[ContactController::class, 'suppContact']);
Route::get('modifier-contact/{id}',[ContactController::class, 'getContactId']);
Route::post('/editContact',[ContactController::class, 'modifContact']);



/* CLIENT*/

Route::get('/client',[ClientController::class, 'listeClient']);
Route::get('deleteClient/{id}',[ClientController::class, 'suppClient']);
Route::get('modifier-client/{id}',[ClientController::class, 'getClientId']);
Route::post('/editClient',[ClientController::class, 'modifClient']);
Route::get('/ajouter', function () 
{
    return view('ajouter');
});
Route::post('addClient',[ClientController::class, 'addClient']);



/* RENDEZ-VOUS*/

Route::get('/rendezvous',[RendezvousController::class, 'listeRendezvous']);
Route::get('deleterendezvous/{id}',[RendezvousController::class, 'suppRendezvous']);
Route::get('modifier-rendezvous/{id}',[RendezvousController::class, 'getRendezvousId']);
Route::post('/editRendezvous',[RendezvousController::class, 'modifRendezvous']);




/* ADMIN*/

Route::get('/admin',[AdminController::class, 'listeAdmin']);
Route::get('deleteAdmin/{id}',[AdminController::class, 'suppAdmin']);
Route::get('modifier-admin/{id}',[AdminController::class, 'getAdminId']);
Route::post('/editAdmin',[AdminController::class, 'modifAdmin']);
Route::get('/ajouter-admin', function () 
{
    return view('ajouter-admin');
});
Route::post('/addAdmin',[AdminController::class, 'addAdmin']);




/* EMPLOYE*/

Route::get('/employe',[EmployeController::class, 'listeEmploye']);
Route::get('deleteEmploye/{id}',[EmployeController::class, 'suppEmploye']);
Route::get('modifier-employe/{id}',[EmployeController::class, 'getEmployeId']);
Route::post('/editEmploye',[EmployeController::class, 'modifEmploye']);
Route::get('/ajouter-employe', function () 
{
    return view('ajouter-employe');
});
Route::post('/addEmploye',[EmployeController::class, 'addEmploye']);




Route::get('/devis', function () {
    return view('devis');
});


Route::get('/missions', function () {
    return view('missions');
});


Route::get('/theme', function () {
    return view('theme');
});

Route::get('/test', function () {
    return view('test');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
