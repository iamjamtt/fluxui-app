<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Inicio\Index as InicioIndex;
use App\Livewire\Task\Index as TaskIndex;

Route::get('/', InicioIndex::class)->name('inicio.index');

Route::get('/tasks', TaskIndex::class)->name('task.index');
//
