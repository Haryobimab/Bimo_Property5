<?php


use App\Http\Controllers\Auth\SocialiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BelirukoController;
use App\Http\Controllers\AgenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FAQController;
use App\Http\Controllers\JualController;
use App\Http\Controllers\CommentController;





Route::get('/', function () {
    return view('Auth.Login');
})->middleware('guest');


// Auth::routes();
// Authentication Routes...
// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

// Handle login form submission
Route::post('/login', [LoginController::class, 'login']);
// Route::get('/auth/redirect', [SocialiteController::class, 'redirect']);

// Route::get('/auth/google/callback', [SocialiteController::class, 'callback']);

Route::get('/user/register', [RegisterController::class, 'register']);
Route::post('/user/create', [RegisterController::class, 'create']);

Route::get('/beranda', function () {
    return view('beranda');
});


Route::get('/profile', [UserController::class, 'profile']);
// Route::get('/profile', [UserController::class, 'update_profile']);


Route::get('/admin/profile', function () {
    return view('admin/profileAdmin');
});





Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

// kita atur juga untuk middleware menggunakan group pada routing
// didalamnya terdapat group untuk mengecek kondisi login
// jika user yang login merupakan admin maka akan diarahkan ke AdminController
// jika user yang login merupakan user biasa maka akan diarahkan ke UserController
Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:admin']], function () {
        Route::resource('admin', AdminController::class);
    });
    Route::group(['middleware' => ['cek_login:user']], function () {
        Route::resource('user', UserController::class);
    });
});

//Rute Auth
Route::view('/beranda', 'beranda')->name('beranda')->middleware('auth');


//Rute Fitur Ulasan
Route::get('/ulasan', [UlasanController::class, 'index'])->name('ulasan.index');
Route::get('/ulasan/create', [UlasanController::class, 'create'])->name('ulasan.create');
Route::post('/ulasan', [UlasanController::class, 'store'])->name('ulasan.store');

//Rute dashboard
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'show'])->name('admin.dashboard');
    Route::get('/admin/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/admin/tambahagen', [AdminController::class, 'agen'])->name('admin.addAgen');
});




// ------- keranjang --------
Route::get('/keranjang', [KeranjangController::class, 'show'])->name('user.keranjang');
Route::get('/checkout', [KeranjangController::class, 'checkout'])->name('user.checkout');
Route::post('/checkout', [KeranjangController::class, 'processCheckout'])->name('user.checkout');
Route::delete('/keranjang/{id}', [KeranjangController::class, 'destroy'])->name('keranjang.destroy');
Route::post('add_cart/{id}', [KeranjangController::class, 'add_cart'])->name('add_cart');


// Route::get('/berita', function () {
//     return view('berita');
// });
Route::get('/berita', [BeritaController::class, "index"])->name('berita.index');
Route::put('/posts/{id}', [BeritaController::class, 'update'])->name('posts.update');
Route::delete('/posts/{id}', [BeritaController::class, 'destroy'])->name('posts.destroy');
Route::post('/berita', [BeritaController::class, 'store'])->name('berita.store');


//route fitu beli ruko 
Route::get('/beli', [BelirukoController::class, 'index'])->name('beli.index');
Route::prefix('admin')->middleware('cek_login:admin')->group(function () {
 
    Route::get('ruko', [AdminController::class, 'ruko'])->name('admin.ruko');
    Route::post('ruko', [AdminController::class, 'add_ruko'])->name('admin.ruko');
    Route::get('get_ruko_by_id/{id}', [AdminController::class, 'get_ruko_by_id'])->name('admin.get_ruko_by_id');

    Route::post('update_ruko/{id}', [AdminController::class, 'update_ruko'])->name('admin.update_ruko');

    Route::get('destroy_ruko/{id}', [AdminController::class, 'destroy_ruko'])->name('admin.destroy_ruko');

    Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');
   
});



//route agen
Route::get('/cariagen', [AgenController::class, 'show']);
//tambah agen

//Rute Fitur Beli Bahan bagunan
Route::get('/materials/belibahanbangunan', [ProductController::class, 'index'])->name('belibahanbangunan.index');
Route::get('/materials/halaman2', [ProductController::class, 'show'])->name('hal2.index');
Route::get('/materials/halaman3', [ProductController::class, 'show2'])->name('hal3.index');

//Rute views detail Produk
Route::get('/materials/ProductDetail/semen', [ProductController::class, 'show3'])->name('semen1.index');
Route::get('/materials/ProductDetail/Besibeton', [ProductController::class, 'show4'])->name('besi.index');
Route::get('/materials/ProductDetail/WP', [ProductController::class, 'show5'])->name('wp.index');
Route::get('/materials/ProductDetail/Cat', [ProductController::class, 'show6'])->name('cat.index');
Route::get('/materials/ProductDetail/genteng', [ProductController::class, 'show7'])->name('genteng.index');
Route::get('/materials/ProductDetail/lantai', [ProductController::class, 'show8'])->name('lantai.index');
Route::get('/materials/ProductDetail/pipa', [ProductController::class, 'show10'])->name('pipa.index');
Route::get('/materials/ProductDetail/bajari', [ProductController::class, 'show9'])->name('bajari.index');


// FAQ Admin
Route::get('/admin/faq/faq', [FAQController::class, 'adminIndex'])->name('admin.faq.index');
// Route::get('/admin/faq/faq', [FAQController::class, 'index'])->name('admin.faq.index');
// Route::post('/admin/faq/faq/store', [FAQController::class, 'delete'])->name('faq.store');
Route::delete('/admin/faq/{id}', [FAQController::class, 'delete'])->name('faq.delete');
Route::get('/faq/{id}', [FAQController::class, 'show'])->name('faq.show');
Route::get('/faq/edit/{id}', [FAQController::class, 'edit'])->name('faq.edit');
Route::put('/faq/{id}', [FAQController::class, 'update'])->name('faq.update');
Route::match(['post', 'put'], '/faq', [FAQController::class, 'storeOrUpdate'])->name('faq.storeOrUpdate');
Route::post('/admin/faq/faq', [FAQController::class, 'store'])->name('faq.store');
Route::put('/faq/edit/{id}', [FAQController::class, 'edit'])->name('faq.edit');

// FAQ
// Route::get('/faq', [FAQController::class, "index"])->name('faq.index');
Route::get('/faq', [FAQController::class, 'userIndex'])->name('user.faq.index');

// Jual
Route::resource('jual', JualController::class);
Route::get('/juals', [JualController::class, 'index']);
Route::post('jual/{jual}/comments', [CommentController::class, 'store'])->name('comments.store');


// Route Rental Rumah
 Route::get('profile', [AdminController::class, 'profile'])->name('admin.profile');

    Route::get('rumah', [AdminController::class, 'rumah'])->name('admin.rumah');
    Route::post('rumah', [AdminController::class, 'add_rumah'])->name('admin.rumah');
    Route::get('get_rumah_by_id/{id}', [AdminController::class, 'get_rumah_by_id'])->name('admin.get_rumah_by_id');

    Route::post('update_rumah/{id}', [AdminController::class, 'update_rumah'])->name('admin.update_rumah');
   
    Route::get('destroy_rumah/{id}', [AdminController::class, 'destroy_rumah'])->name('admin.destroy_rumah');




