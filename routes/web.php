<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Inicio\Index as InicioIndex;

Route::get('/', InicioIndex::class)->name('inicio.index');

//
