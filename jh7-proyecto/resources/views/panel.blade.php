{{-- Hereda la plantilla principal --}}
@extends('layouts.base')

@section('titulo', 'Panel')

@section('contenido')

<section class="contenedor seccion">

    {{-- Cabecera del panel de administración --}}
    <div class="panel-cabecera">

        <div>
            <span class="etiqueta naranja">ADMINISTRACIÓN</span>
            <h1>Solicitudes recibidas</h1>
            <p> ----sesión iniciada----</p>
        </div>

        {{-- Formulario para cerrar sesión --}}
        <form method="POST" action="/logout">
            @csrf

            <button class="boton secundario-oscuro" type="submit">
                Cerrar sesión
            </button>
        </form>

    </div>

    {{-- Tabla de solicitudes registradas --}}
    <div class="tabla-contenedor">

        <table>
            <thead>
                <tr>
                    <th>Fecha</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Servicio</th>
                    <th>Mensaje</th>
                </tr>
            </thead>

            <tbody>

                {{-- Recorre y muestra las solicitudes recibidas --}}
                @forelse($solicitudes as $solicitud)

                    <tr>
                        <td>{{ $solicitud->created_at->format('d/m/Y') }}</td>
                        <td>{{ $solicitud->nombre }}</td>
                        <td>{{ $solicitud->correo }}</td>
                        <td>{{ $solicitud->telefono ?: '—' }}</td>
                        <td>{{ $solicitud->servicio }}</td>
                        <td>{{ $solicitud->mensaje }}</td>
                    </tr>

                {{-- Mensaje cuando no existen solicitudes --}}
                @empty

                    <tr>
                        <td colspan="6">
                            Todavía no hay solicitudes registradas.
                        </td>
                    </tr>

                @endforelse

            </tbody>
        </table>

    </div>

</section>

@endsection