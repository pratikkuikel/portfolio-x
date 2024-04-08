<?php

use App\Livewire\About;
use App\Livewire\Blog;
use App\Livewire\Coggle;
use App\Livewire\Home;
use App\Livewire\ShowPost;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');

Route::get('blog', Blog::class)->name('blog');

Route::get('blog/{slug}', ShowPost::class)->name('blog.show');

Route::get('about', About::class)->name('about');

Route::get('coggle-thumbnail-downloader', Coggle::class)->name('coggle-thumbnail-downloader');
