@extends('layouts.base')

@section('titulo', 'Servicios')

@section('contenido')

<!-- ENCABEZADO DE SERVICIOS -->
<section class="titulo-pagina">
    <div class="contenedor">

        <span class="etiqueta">NUESTROS SERVICIOS</span>

        <h1>Servicios de JH7 SRL</h1>

        <p>
            Conectamos personas, acercamos soluciones.
        </p>

    </div>
</section>

<!-- LISTA DE SERVICIOS -->
<section class="contenedor seccion">

    <h2>Nuestros servicios</h2>

    <p>
        Brindamos servicios en instalación,
        mantenimiento y ampliación de redes
        de telecomunicaciones.
    </p>

    <div class="servicios-grid">

        <div class="servicio-tarjeta">
            <h3>Fibra óptica última milla</h3>
            <p>
            Despliegue e implementacion de redes de acceso ftth.
            </p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio bases</h3>
            <p>
            Implementación, montaje y mantenimiento preventivo y correctivo de estaciones radio base (BTS).
            </p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio Enlaces</h3>
            <p>
            Implementación, configuración y mantenimiento preventivo y correctivo de enlaces inalámbricos de microondas.
            </p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Soluciones de Planta Externa y Enlaces Ópticos</h3>
            <p>
            ​​Implementación y mantenimiento preventivo y correctivo de redes FTTH, infraestructura troncal y enlaces ópticos.
            </p>
        </div>

    </div>

    <a href="/contacto" class="boton">
        Solicitar un servicio
    </a>

    <a href="/">
        Volver al inicio
    </a>

</section>

@endsection