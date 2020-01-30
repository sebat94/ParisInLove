<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/projects', 'ProjectsController@readAll');

Route::get('/projects/{id}', 'ProjectsController@read');

Route::get('/legal', function () {
    return view('cookies');
});

Route::post('/contact', function(Request $request){
    $data = array(
        'name' => $request->input('contactName'),
        'email' => $request->input('contactEmail'),
        'subject' => $request->input('contactTitle'),
        'msg' => $request->input('contactDescription'),
    );

    Mail::send('emails.contact', $data, function ($message) {

        $message->from('madstodolist1@gmail.com', 'parisinlovestudio.com');

        $message->to('pcl23ua@gmail.com')->subject('Nuevo mensaje desde la web');

    });

    return "200";
});

Route::post('/acceptCookies', function(){
    Cookie::queue('acceptCookies', 'true', 45000);
    return "200";
});
