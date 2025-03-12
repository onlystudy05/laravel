<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\calculController;
use App\Http\Controllers\epargneController;
use App\Http\Controllers\EX1TP4Controller;
use App\Http\Controllers\FormulaireController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\Stagiaire;


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
// Q2


// Route::get('/login', function () {
//     return view('test');
// });
// Route::get('/page/{Npage}', function ($Npage) {
//     return ;
// });
// // Q3
// // Route::get('{n}', function($n) { 
// //     return 'Je suis la page ' . $n.  ' !'; 
//     // }); 
// Route::get('contact', function() { 
//     return "C'est moi le contact."; 
// });
// // Q3-a-b
// // Route::get('/test/{x}',function($x){
// //     return $x;
// // });
// // Q3-c
// Route::get('/test/{testV}', function($v) { 
//     return view('welcome', ["param" => $v]);
//     }); 

// // Q3-d
// Route::view("/app","welcom"); 
// // Q4-a
// // Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire}', function($x,$y,$z,$b) { 
// //     return $x."  ". $y."  ". $z."  ".$b;
// // });
// // Q4-b
// Route::get('/Formation/{formation}/filiere/{filiere}/groupe/{groupe}/stagiaire/{stagiaire?}', function($fo,$fi,$gr,$st=null) { 
//     if($st===null){
//         $st=date("Y");
//     };
//     return view("welcome",["fo"=>$fo,"fi"=>$fi,"gr"=>$gr,"st"=>$st]); 
//     });

// // EX2
// Route::get("/profile",function(){
//     return view("test");
// });
// Route::post("/profile",function(Request $request)
// {
//     $nom = $request['nom'];
//     $email = $request->input('email');
    
//     return "Nom: $nom, Email: $email";
// });
// Route::get('/', function () {
//     return 
//     view('calculView');
// });
// Route::post('/calcul',function(Request $request){
//     $a = $request->input('a');
//     $b = $request->input('b');

// });
// // ex1
// Route::get(uri: '/calcule', action: [calculController::class,'index']);
// Route::post(uri: '/calcule', action: [calculController::class,'calcule']);
// // ex 2
// Route::get(uri: '/insciption', action: [FormulaireController::class,'index']);
// Route::post(uri: '/submit', action: [FormulaireController::class,'Affiche']);

// // TP4 ex1

// Route::get(uri: '/notes', action: [EX1TP4Controller::class,'index']);
// Route::get(uri: '/notes/statistiques', action: [EX1TP4Controller::class,'stat']);
// Route::post(uri: '/notes/show', action: [EX1TP4Controller::class,'Affiche']);
// Route::get(uri: '/notes/decorate', action: [EX1TP4Controller::class,'decorate']);
// // TP4 ex2
// Route::get(uri: '/',  action: [EX1TP4Controller::class,'temp']);
// //Tp Redirections ex1

// Route::get('/ancienne-page',function(){
//     return redirect("/nouvelle-page ");
// });
// Route::get('/nouvelle-page ',function(){
//     return "Bienvenue sur la nouvelle page !" ;
// });
// //Tp Redirections ex2
// Route::get('/dashboard',function(){
//     if (session('id')){return session("id") ;}
        
//     else {return "Bienvenue sur le tableau de bord !";} 

    
    
// })->name("dash");
// Route::get('/rediriger-dashboard',function(){
//     return redirect()->route("dash");
// });
// //Tp Redirections ex3
// Route::get('/profil/{id}',function($id){
//     return "Profil de l'utilisateur ID : {$id}" ;
// })->name("pro");

// Route::get('/rediriger-profil',function(){
//     return redirect()->route("pro",["id"=>10]);
// });
// //Tp Redirections ex4
// Route::get('/connexion',function(){
//     return view("connexionView") ;
// })->name("conx");
// Route::get('/traiter-connexion',function(){
//     return redirect("/dashboard")->with(key: "id",value: "Connexion réussie !");
// });

// Route::get("/",[AuthController::class,"show"]);
// Route::post('/login',[AuthController::class,"connect"])->name("signIn");
// Route::get('/home/{nom?}',[AuthController::class,"index"])->name("home");


// Route::get('/epargne',[epargneController::class,"index"])->name("index");
// Route::post('/simuler',[epargneController::class,"simuler"])->name("simuler");

// Route::get('/show',[FormulaireController::class,"indexx"])->name("addfilm");
// Route::get('/Allfilms',[FormulaireController::class,"showall"])->name("showall");
// Route::post('/addfilm',[FormulaireController::class,"add"]);
// Route::get('/delete/{id}',[FormulaireController::class,"delete"])->name("delete");
// Route::get('/showfil/{id}',[FormulaireController::class,"x"])->name("showfil");
// Route::post('/updatefilm/{id}',[FormulaireController::class,"update"])->name("updatefilm");
Route::resource('stagiaire',Stagiaire::class);
