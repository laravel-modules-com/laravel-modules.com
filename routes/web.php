<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('docs', function () {
    return redirect('docs/v10/introduction');
});

Route::get('docs/{path}', [PageController::class, 'page'])->name('docs.page')->where(['path' => '.*']);

