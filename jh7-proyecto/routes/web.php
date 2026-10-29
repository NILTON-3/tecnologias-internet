<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Solicitud;

// Página principal 
Route::get('/', function () {
    return view('inicio');
});

// Página de servicios
Route::get('/servicios', function () {
    return view('servicios');
});

// Mostrar formulario de contacto
Route::get('/contacto', function () {
    return view('contacto');
});

// Validar y guardar solicitudes de clientes
Route::post('/contacto', function (Request $request) {

    $datos = $request->validate([
        'nombre' => 'required|max:100',
        'correo' => 'required|email',
        'telefono' => 'nullable|max:30',
        'servicio' => 'required',
        'mensaje' => 'required|max:2000',
    ]);

    Solicitud::create($datos);

    return redirect('/contacto')
        ->with('exito', '¡Tu solicitud fue enviada correctamente!');
});

// Mostrar formulario de inicio de sesión
Route::get('/login', function () {
    return view('login');
})->name('login');

// Verificar las credenciales del administrador
Route::post('/login', function (Request $request) {

    $datos = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($datos)) {
        $request->session()->regenerate();

        return redirect('/panel');
    }

    return back()->with('error', 'Correo o contraseña incorrectos.');
});

// Panel administrativo protegido
Route::get('/panel', function () {

    $solicitudes = Solicitud::latest()->get();

    return view('panel', compact('solicitudes'));

})->middleware('auth');

// Cerrar sesión del administrador
Route::post('/logout', function (Request $request) {

    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
})->middleware('auth');