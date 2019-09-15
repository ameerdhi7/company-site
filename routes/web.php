<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|]]
*/
Route::group(["middleware"=>"lang"],function (){
    Route::get("/","SiteController@home");
    Route::get("/projects","SiteController@getProjects");
    Route::get("/partners/{partner}","SiteController@getPartnerProjects");
    Route::view("/contact","site.contact");
    Route::view("/about","site.about");
    Route::get("/news","SiteController@getPosts");
    Route::get("/album","SiteController@getImages");
    Route::post("/contact","SiteController@storeMessage");
    Route::get("/search/","SiteController@search");
    Route::get("/news/{post}/","SiteController@getPostDetails");
    ;
});
Route::get("/lang/{lang}","SiteController@setUserLang");
