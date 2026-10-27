@extends('layouts.base')
@section('titulo','Contacto')
@section('contenido')
<section class="titulo-pagina"><div class="contenedor"><span class="etiqueta">ESCRÍBENOS</span><h1>Contacto</h1><p>Cuéntanos qué servicio necesitas.</p></div></section>
<section class="contenedor seccion estrecho"><div class="formulario-tarjeta">
<h2>Enviar una solicitud</h2>
@if (session('exito')) <p class="aviso exito">{{ session('exito') }}</p> @endif
@if ($errors->any()) <div class="aviso error"><strong>Revisa los datos:</strong><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
<form action="/contacto" method="POST">@csrf
<label for="nombre">Nombre completo *</label><input id="nombre" name="nombre" value="{{ old('nombre') }}" required maxlength="100">
<label for="correo">Correo electrónico *</label><input id="correo" name="correo" type="email" value="{{ old('correo') }}" required>
<label for="telefono">Teléfono (opcional)</label><input id="telefono" name="telefono" type="tel" value="{{ old('telefono') }}">
<label for="servicio">Servicio *</label><select id="servicio" name="servicio" required><option value="">Selecciona un servicio</option>
@foreach (['Fibra óptica última milla','Radiobases','Radioenlaces','Mantenimiento y ampliaciones FTTH'] as $opcion)<option value="{{ $opcion }}" @selected(old('servicio')===$opcion)>{{ $opcion }}</option>@endforeach
</select>
<label for="mensaje">Mensaje *</label><textarea id="mensaje" name="mensaje" rows="5" required maxlength="2000">{{ old('mensaje') }}</textarea>
<button class="boton" type="submit">Enviar solicitud</button>
</form></div></section>
@endsection
