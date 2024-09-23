<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/tickets', [TicketController::class, 'index'])->name('tickets.index');

Route::get('/tickets/{id}', [TicketController::class, 'read'])->name('ticket.read');

Route::post('/tickets', [TicketController::class, 'create'])->name('ticket.create');

Route::get('/ticket/form/{operacao}', [TicketController::class, 'form'])->name('ticket.form');

Route::put('/tickets/{id}', [TicketController::class, 'update'])->name('ticket.update');

Route::delete('/tickets/{id}', [TicketController::class, 'delete'])->name('ticket.delete');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

Route::post('/categories', [CategoryController::class, 'create'])->name('category.create');

Route::get('/category/form', [CategoryController::class, 'form'])->name('category.form');

Route::put('/categories/{id}', [CategoryController::class, 'update'])->name('category.update');

Route::get('/categories/{id}', [CategoryController::class, 'get'])->name('category.get');

Route::delete('/categories/{id}', [CategoryController::class, 'delete'])->name('category.delete');
