<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController ;
use App\Http\Controllers\LoginController ;
use App\Http\Controllers\ResepsionisController ;
use App\Http\Controllers\FasilitasKamarController ;
use App\Http\Controllers\FasilitasKamar2Controller ;
use App\Http\Controllers\FasilitasHotelController ;
use App\Models\Pesanan ;
use App\Models\FasilitasKamar ;
use App\Models\FasilitasKamar2 ;
use App\Models\FasilitasHotel ;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'index' ]);
Route::post('/register', [RegisterController::class, 'store' ]);


Route::get('/login', [LoginController::class, 'index' ])
->name('login');
Route::post('/login', [LoginController::class, 'login' ]);
Route::get('/editfasilitaskamar', [FasilitasKamarController::class, 'index' ])->middleware(['checkRole:administrator','auth']);
Route::get('/tambahfasilitaskamar', [FasilitasKamarController::class, 'create' ])->middleware(['checkRole:administrator','auth']);
Route::post('/tambahFasilitas', function(Request $request) {
    // dd($request->Fasilitas_Kamar);
    FasilitasKamar::create([
        'Fasilitas_Kamar' => $request->Fasilitas_Kamar
    ]);

    return redirect('/editfasilitaskamar'); 
});
route::get('/deletefasilitas/{fasilitasKamar}',[FasilitasKamarController::class, 'destroy']);

Route::get('/tambahfasilitaskamar2', [FasilitasKamar2Controller::class, 'create' ])->middleware(['checkRole:administrator','auth']);
Route::post('/tambahFasilitas2', function(Request $request) {
    // dd($request->Fasilitas_Kamar);
    FasilitasKamar2::create([
        'Fasilitas_Kamar2' => $request->Fasilitas_Kamar2
    ]);

    return redirect('/editfasilitaskamar'); 
});
route::get('/deletefasilitas2/{fasilitasKamar2}',[FasilitasKamar2Controller::class, 'destroy']);


Route::get('/resepsionis', [ResepsionisController::class, 'index' ])->middleware(['checkRole:administrator,resepsionis','auth']);
Route::get('/pesan', [ResepsionisController::class, 'create' ])->middleware(['auth']);
Route::get('/editpesanan/{id}', [ResepsionisController::class, 'edit' ])->middleware(['checkRole:administrator,resepsionis','auth']);
Route::post('/updatedata/{id}', [ResepsionisController::class, 'update' ]);
Route::post('/simpandata', [ResepsionisController::class, 'store' ]);
Route::get('/deletedata/{id}', [ResepsionisController::class, 'destroy' ]);


Route::get('/editfasilitashotel', [FasilitasHotelController::class, 'index' ])->middleware(['checkRole:administrator','auth']);
Route::get('/tambahfasilitashotel', [FasilitasHotelController::class, 'create' ])->middleware(['checkRole:administrator','auth']);
route::post('/tambahgambar', function(Request $request) {
    // dd($request->Gambar);
        $nm = $request->Gambar;
            $namafile = $nm->getClientOriginalName();

            $dtUpload = new fasilitashotel;
            $dtUpload->Fasilitas_Hotel = $request->Fasilitas_Hotel;
            $dtUpload->Gambar = $namafile;

            $nm->move(public_path().'/image',$namafile);
            $dtUpload->save();

    //   FasilitasHotel::create([
    //         'Fasilitas_Hotel' => $request->Fasilitas_Hotel,
    //         'Gambar' => $request->Gambar
    //     ]);

    return redirect('/editfasilitashotel'); 
});
Route::get('/deletegambar/{fasilitasHotel}', [FasilitasHotelController::class, 'destroy' ]);


Route::get('/kamar', function () {
    return view('kamar',[
         'fasilitaskamar' => FasilitasKamar::all(),
         'fasilitaskamar2' => FasilitasKamar2::all(),
    ]); 
})->middleware(['auth']);

Route::get('/fasilitas', function () { return view('fasilitas',[
    'fasilitashotel' => FasilitasHotel::all(),
]); })->middleware(['auth']);

Route::post('/logout', [LoginController::class, 'logout' ]);