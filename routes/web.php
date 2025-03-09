<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('docs', function () {
    return redirect('docs/v12/introduction');
});

Route::get('docs/{path}', [PageController::class, 'page'])->name('docs.page')->where(['path' => '.*']);
Route::view('become-a-sponsor', 'become-a-sponsor')->name('become-a-sponsor');
