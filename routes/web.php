<?php

use Illuminate\Support\Facades\Route;






Route::get('/',
[\App\Http\Livewire\HomePage::class, 'render']
);

Route::get('/resume',
[\App\Http\Livewire\ResumePage::class, 'render']
);

Route::get('/portfolio',
[\App\Http\Livewire\PortfolioPage::class, 'render']
);


Route::get('/blog',
[\App\Http\Livewire\BlogPage::class, 'render']
);


Route::get('/contact',
[\App\Http\Livewire\ContactPage::class, 'render']
);

Route::get('/post',
[\App\Http\Livewire\PostPage::class, 'render']
);


Route::get('/project',
[\App\Http\Livewire\ProjectPage::class, 'render']
);

testtttttttttt
