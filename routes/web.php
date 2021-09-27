<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AwardController;

//import
use App\Http\Controllers\LawyerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::redirect('/', '/pages/home');


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');


Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {

    //Users
    //Route::resource('users', UserController::class);

    //Route::view('users','users.index')->name('users.index');
    
    // Administradores
    Route::get('/users', \App\Http\Livewire\User\Index::class)->name('users.index');
    Route::get('users/create',\App\Http\Livewire\User\Create::class)->name('users.create');
    Route::get('users/edit/{user}', \App\Http\Livewire\User\Edit::class)->name('users.edit');
    
    //Páginas
    Route::get('pages/add', \App\Http\Livewire\Page\Create::class)->name('pages.add');
    Route::get('pages/{page:slug}', \App\Http\Livewire\Page\Edit::class)->name('pages');

    //Sub Páginas
    Route::get('subpages/add', \App\Http\Livewire\SubPage\Create::class)->name('subpages.add');
    Route::get('subpages/{subPage:slug}', \App\Http\Livewire\SubPage\Edit::class)->name('subpages');
    
    //Newsletter
    Route::get('newsletters', \App\Http\Livewire\Newsletter\Index::class)->name('newsletters');
    
    //Informações complementares
    Route::get('award_types', \App\Http\Livewire\AwardType\Index::class)->name('award_types');
    Route::get('awards', \App\Http\Livewire\Award\Index::class)->name('awards');
    Route::get('cities', \App\Http\Livewire\City\Index::class)->name('cities');
    Route::get('experiences', \App\Http\Livewire\Experience\Index::class)->name('experiences');
    Route::get('graduations', \App\Http\Livewire\Graduation\Index::class)->name('graduations');
    Route::get('languages', \App\Http\Livewire\Language\Index::class)->name('languages');
    Route::get('lawyer_types', \App\Http\Livewire\LawyerType\Index::class)->name('lawyer_types');
    Route::get('lawyer_subtypes', \App\Http\Livewire\LawyerSubtype\Index::class)->name('lawyer_subtypes');
    Route::get('offices', \App\Http\Livewire\Office\Index::class)->name('offices');
    
    //Conteúdo
    Route::get('lawyers', \App\Http\Livewire\Lawyer\Index::class)->name('lawyers');
    Route::get('areas', \App\Http\Livewire\Area\Index::class)->name('areas');
    Route::get('events', \App\Http\Livewire\Event\Index::class)->name('events');
    Route::get('partners', \App\Http\Livewire\Partner\Index::class)->name('partners');
    Route::get('speakers', \App\Http\Livewire\Speaker\Index::class)->name('speakers');
    Route::get('timeline', \App\Http\Livewire\Timeline\Index::class)->name('timeline');

    //Modal de idiomas
    Route::get('modal_lang', \App\Http\Livewire\Modal\Index::class)->name('modal_lang');

    //Termos de uso
    Route::get('terms', \App\Http\Livewire\Term\Index::class)->name('terms');

    //Política de privacidade
    Route::get('privacy', \App\Http\Livewire\Privacy\Index::class)->name('privacy');
    //Route::get('privacy/add', \App\Http\Livewire\Privacy\Create::class)->name('privacy.add');
    //Route::get('privacy/edit/{privacy}', \App\Http\Livewire\Privacy\Edit::class)->name('privacy.edit');

    //Política de privacidade - FAQ
    Route::get('privacy_faq', \App\Http\Livewire\PrivacyFaq\Index::class)->name('privacy_faq');



    //import
    Route::get('lawyer/import', [LawyerController::class, 'import']);

//     Route::get('/posts/{post:slug}', function (Post $post) {
//     return $post;
// });

    //Route::view('home', 'pages.edit', ['slug' => 'home'])->name('home');

    //Route::view('pages/{slug}', 'pages.edit')->name('pages.edit');



    //Route::view('home', 'home')->name('home');
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('forms', 'forms')->name('forms');
    Route::view('cards', 'cards')->name('cards');
    Route::view('charts', 'charts')->name('charts');
    Route::view('buttons', 'buttons')->name('buttons');
    Route::view('modals', 'modals')->name('modals');
    Route::view('tables', 'tables')->name('tables');
    Route::view('calendar', 'calendar')->name('calendar');


    //import

});
