<?php
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.index');
Route::view('/about', 'pages.about');
Route::view('/service', 'pages.service');
Route::view('/price', 'pages.price');
Route::view('/team', 'pages.team');
Route::view('/testimonial', 'pages.testimonial');
Route::view('/appointment', 'pages.appointment');
Route::view('/contact', 'pages.contact');