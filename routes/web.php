<?php
use Illuminate\Support\Facades\Route;
Route::redirect('/', '/subjects');
Route::resource('subjects', 'SubjectController');
Route::get('subjects/{subject}/activities/create', 'GradeActivityController@create')->name('activities.create');
Route::post('subjects/{subject}/activities', 'GradeActivityController@store')->name('activities.store');
Route::get('subjects/{subject}/activities/{activity}/edit', 'GradeActivityController@edit')->name('activities.edit');
Route::patch('subjects/{subject}/activities/{activity}', 'GradeActivityController@update')->name('activities.update');
Route::delete('subjects/{subject}/activities/{activity}', 'GradeActivityController@destroy')->name('activities.destroy');
