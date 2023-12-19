<?php

use App\Http\Controllers\AboutController;
use App\Models\Submit;
use App\Models\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\RequestsController;

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
    return view('welcome');
});

Route::get('/services', function () {
    $services = DB::table('services')->get();
    $all = DB::table('services')->get();
    //dd($services);
    return view('service', [
        'services' => $services,
        'all' => $all
    ]);
})->name('services');

Route::get('/search', [ServiceController::class, 'search']);
Route::get('/type', [ServiceController::class, 'type']);
Route::get('/region', [ServiceController::class, 'region']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        $type = DB::select("SHOW COLUMNS FROM services WHERE Field = 'type'")[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $typeOptions = explode("','", $matches[1]);

        $region = DB::select("SHOW COLUMNS FROM services WHERE Field = 'region'")[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $region, $matches);
        $regionOptions = explode("','", $matches[1]);

        /*$municipality = DB::select("SHOW COLUMNS FROM services WHERE Field = 'municipality'")[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $municipality, $matches);
        $municipalityOptions = explode("','", $matches[1]);*/

        return view('dashboard', compact('typeOptions'), compact('regionOptions'));
    })->name('dashboard');
    Route::get('/about', function () {
        $userId = auth()->id();
        $services = DB::select('SELECT * FROM services WHERE user_id = ?', [$userId]);
        //dd($services);
        $type = DB::select("SHOW COLUMNS FROM services WHERE Field = 'type'")[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $type, $matches);
        $typeOptions = explode("','", $matches[1]);

        $region = DB::select("SHOW COLUMNS FROM services WHERE Field = 'region'")[0]->Type;
        preg_match("/^enum\(\'(.*)\'\)$/", $region, $matches);
        $regionOptions = explode("','", $matches[1]);
        return view('about', [
        'services' => $services,
        'typeOptions' => $typeOptions,
        'regionOptions' => $regionOptions
    ]);
        return view('about');
    })->name('about');
    Route::get('/create', function() {
        return view('create');
    })->name('create');
    Route::get('/tos', function() {
        return view('tos');
    })->name('tos');
    Route::post('/create', [ServiceController::class, 'store'])->name('create');

        /*$service = new Services;
        $service->type = request('type');
        $service->title = request('title');
        $service->price = request('price');
        $service->region = request('region');
        $service->municipality = request('municipality');
        $service->city = request('city');
        $service->description = request('description');
        $service->url = request('url');
        $service->phone = request('phone');
        $service->email = request('email');
        $service->save();
        //return redirect()->to('services');*/

});
