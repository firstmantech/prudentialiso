<?php

use App\Certificate;
use Anam\PhantomMagick\Converter;

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

Auth::routes();

Route::resource('/certificates', 'CertificateController');

Route::get('generate.certificates', 'CertificateController@generateCertificate')->name('generate.certificate');

Route::get('draft.certificates', 'CertificateController@draftCertificate')->name('draft.certificate');

Route::get('mycertificate/{id}', function ($id) {
    
    $certificate = Certificate::find($id);

    return view('certificate',compact('certificate')); 

})->name('mycertificate');

Route::get('draftcertificate/{id}', function ($id) {
    
    $certificate = Certificate::find($id);

    return view('draft',compact('certificate')); 

})->name('draft');

Route::get('certificates_path/{filename}', function($filename)
{
    // Check if file exists in app/storage/file folder
    $file_path = public_path() .'/certificates_path/'. $filename;
    if (file_exists($file_path))
    {
        // Send Download
        return Response::download($file_path, $filename, [
            'Content-Length: '. filesize($file_path)
        ]);
    }
    else
    {
        // Error
        exit('Requested file does not exist on our server!');
    }
})
->where('filename', '[A-Za-z0-9\-\_\.]+');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/search-certificate', 'SearchController@certificate')->name('certificate');

Route::post('/search-result', 'SearchController@search')->name('search');

Route::get('iso-9001-certification', function () {
    return view('iso-9001-certification');
});

Route::get('iso-14001-certification', function () {
    return view('iso-14001-certification');
});

Route::get('iso-18001-certification', function () {
    return view('iso-18001-certification');
});

Route::get('haccp-certification', function () {
    return view('haccp-certification');
});

Route::get('iso-22000-certification', function () {
    return view('iso-22000-certification');
});

Route::get('iso-27001-certification', function () {
    return view('iso-27001-certification');
});

Route::get('iso-20000-certification', function () {
    return view('iso-20000-certification');
});

Route::get('ce-marking', function () {
    return view('ce-marking');
});

Route::get('good-manufacturing-script', function () {
    return view('good-manufacturing-script');
});

Route::get('sa-8000-certification', function () {
    return view('sa-8000-certification');
});

Route::get('quality', function () {
    return view('quality');
});

Route::get('environment', function () {
    return view('environment');
});

Route::get('safety-training', function () {
    return view('safety-training');
});

Route::get('information-security', function () {
    return view('information-security');
});

Route::get('food-safety', function () {
    return view('food-safety');
});

Route::get('5s', function () {
    return view('5s');
});

Route::get('six-sigma', function () {
    return view('six-sigma');
});

Route::get('contact', function () {
    return view('contact');
});
