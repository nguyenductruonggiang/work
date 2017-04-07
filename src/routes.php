<?php

use Illuminate\Session\TokenMismatchException;

/**
 * FRONT
 */
Route::get('work', [
    'as' => 'work',
    'uses' => 'Foostart\Work\Controllers\Front\WorkFrontController@index'
]);

Route::post('worker', [
    'as' => 'worker',
    'uses' => 'Foostart\Work\Controllers\Front\WorkFrontController@abc'
]);


/**
 * ADMINISTRATOR
 */
Route::group(['middleware' => ['web']], function () {

    Route::group(['middleware' => ['admin_logged', 'can_see']], function () {

        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
        /**
         * list
         */
        Route::get('admin/work', [
            'as' => 'admin_work',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/work/edit', [
            'as' => 'admin_work.edit',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/work/edit', [
            'as' => 'admin_work.post',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkAdminController@post'
        ]);

        /**
         * delete
         */
        Route::get('admin/work/delete', [
            'as' => 'admin_work.delete',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////SAMPLES ROUTE///////////////////////////////
        ////////////////////////////////////////////////////////////////////////

        Route::get('work/delete', [
            'as' => 'work.delete',
            'uses' => 'Foostart\Work\Controllers\Front\WorkFrontController@delete'
        ]);
        
        Route::get('work/edit', [
            'as' => 'work.edit',
            'uses' => 'Foostart\Work\Controllers\Front\WorkFrontController@edit'
        ]);
        
        Route::post('work/edit', [
            'as' => 'work.post',
            'uses' => 'Foostart\Work\Controllers\Front\WorkFrontController@post'
        ]);


        
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
         Route::get('admin/work_category', [
            'as' => 'admin_work_category',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkCategoryAdminController@index'
        ]);

        /**
         * edit-add
         */
        Route::get('admin/work_category/edit', [
            'as' => 'admin_work_category.edit',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkCategoryAdminController@edit'
        ]);

        /**
         * post
         */
        Route::post('admin/work_category/edit', [
            'as' => 'admin_work_category.post',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkCategoryAdminController@post'
        ]);
         /**
         * delete
         */
        Route::get('admin/work_category/delete', [
            'as' => 'admin_work_category.delete',
            'uses' => 'Foostart\Work\Controllers\Admin\WorkCategoryAdminController@delete'
        ]);
        ////////////////////////////////////////////////////////////////////////
        ////////////////////////////CATEGORIES///////////////////////////////
        ////////////////////////////////////////////////////////////////////////
    });
});
