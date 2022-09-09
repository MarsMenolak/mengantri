<?php

Route::get('/', 'antrian@index' );
Route::get('/antri_cs/{id}/{id1}/{id2}','antriam@antri_cs');
Route::get('/antri_teller1/{id}/{id1}/{id2}','antriam@antri_teller1');
Route::get('/antri_teller2/{id}/{id1}/{id2}','antriam@antri_teller2');