<!-- 
 *Para definir una rota, se debe de especificar el tipo de petición que se esta realizando
 
 *//!Nota: Importa mucho el orden de 
  
  -->

<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Welcome to the Liz Page :D";
    //return view('welcome');
});

       //Tipo de petición que se esta realizando
Route::get('/post',function(){
    return "Post generales";
});

//'Definir rutas variables
//Opción 1
/* Route::get('/post/{post}', function($post){
    return "Pagina de post variables {$post}";
}); */

//Opción 2
/* Route::get('/post/{namePost}/{category}', function($namePost, $categoryPost){
    return "Pagina de post variables 2. Post de nombre {$namePost} con la categoría de {$categoryPost} ";
}); */

//'Segunda manera de hacer post variables, pero utilizando la primer opción.
                             //El signo de interrogación se emplea para decir que es opcional, asi mismo se debe definir la variable como null
/* Route::get('post/{namePost}/{category?}', function($namePost, $category = null){

    if ($category){
        return "Pagina de post variable 3. Dentro if";
    } 

    return "Pagina de post variable 3. Fuera if";
}); */

