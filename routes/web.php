<?php

use Illuminate\Support\Facades\Route;
Route::get('email', 'SendMailController@sendEmail');
Route::get('email-with-queues', 'SendMailController@sendEmailQueues');