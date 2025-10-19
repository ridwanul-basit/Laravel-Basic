<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('about', function () {
    return "About Us";
});

Route::prefix('details')->group(function () {
    Route::get('students', function () {
        return "This is student view";
    })->name("Students Details");

    Route::get('teachers', function () {
        return "This is teacher view";
    })->name("Teachers Details");

});

Route::get('student/{id}/{reg}', function ($id,$reg) {
    return "Id is " .$id . " and Reg is " .$reg;
});

Route::fallback( function () {
    return "This is not found you hit the wrong url" ;
});


Route::get('about-us', function () {
    $name= "Ridwanul Basit";
    $id= "22299055";
    // return view('aboutus')->with('name',$name)->with('id',$id);
    // return view('aboutus',compact("name","id"));
    // return view('about-us',['name'=>"Ridwanul Basit", "id"=>"22299055"]);
    return view('aboutus',['name'=>$name, "id"=>$id]);

});

// Route::view("contact-us","contactus",['name'=>"Ridwanul Basit", "id"=>"22299055"]);
Route::view("contact-us/{name}/{id}","contactus",['name'=>"Ridwanul Basit", "id"=>"22299055"]);