<?php

use Illuminate\Support\Facades\Schema;
use Jack\Scaffold\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Jack\Scaffold\Models\JackScaffoldRoute;

Route::resource('helpers/scaffold_jack', Controllers\ScaffoldController::class);



