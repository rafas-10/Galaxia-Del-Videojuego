<?php

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@getDashboard')->name('dashboard');

            //Modulo de Usuarios
    Route::get('/usuarios/{status}', 'Admin\UserController@getUsers')->name('user_list');
    Route::get('/user/{id}/edit', 'Admin\UserController@getUserEdit')->name('edit');
    Route::post('/user/{id}/edit', 'Admin\UserController@postUserEdit')->name('edit');
    Route::get('/user/{id}/banned', 'Admin\UserController@getUserBanned')->name('banned');
    Route::get('/user/{id}/permissions', 'Admin\UserController@getUserPermissions')->name('permissions');

    Route::get('/user/{id}/delete', 'Admin\UserController@getUserDelete')->name('delete');
    Route::post('/user/{id}/permissions', 'Admin\UserController@postUserPermissions')->name('permissions');

            //Modulo galeria
    Route::get('/galeria', 'Admin\GaleriaController@getGaleria')->name('galeria_view');
    Route::get('/galeria/new', 'Admin\GaleriaController@getNew')->name('galeria_new');
    Route::post('/galeria/add', 'Admin\GaleriaController@postAdd')->name('galeria_add');

    Route::get('/galeria/{id}/delete', 'Admin\GaleriaController@getDelete')->name('galeria_delete');//Get Eliminar
    
    
                //Modulo de FAQ
    Route::get('/faq', 'Admin\FaqController@getHome')->name('faq_list');//Get Listar
    Route::get('/faq/add', 'Admin\FaqController@getFaqAdd')->name('faq_add');//Get Añadir-1
    Route::get('/faq/{id}/edit', 'Admin\FaqController@getFaqEdit')->name('faq_edit');//Get Editar-2
    
    Route::get('/faq/{id}/delete', 'Admin\FaqController@getFaqDelete')->name('faq_delete');//Get Eliminar
    
    Route::post('/faq/add', 'Admin\FaqController@postFaqAdd')->name('faq_add');//Post Añadir-1
    Route::post('/faq/{id}/edit', 'Admin\FaqController@postFaqEdit')->name('faq_edit');//Post Editar-2
    
});
