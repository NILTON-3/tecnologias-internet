@extends('layouts.base')

@section('titulo', 'Inicio')

@section('contenido')

<section class="titulo-pagina">
    <div class="contenedor">
        <span class="etiqueta">BIENVENIDOS</span>

        <h1>JH7 S.R.L.</h1>

        <h2>Conectamos personas, acercamos soluciones</h2>

        <p>
            Somos una empresa dedicada a brindar
            servicios de telecomunicaciones.
        </p>

        <a href="/servicios" class="boton">
            Ver nuestros servicios
        </a>
    </div>
</section>

<section class="contenedor seccion">

    <h2>Nuestros servicios</h2>

    <p>
        En JH7 SRL ofrecemos soluciones
        para redes de telecomunicaciones.
    </p>

    <div class="servicios-grid">

        <div class="servicio-tarjeta">
            <h3>Fibra óptica última milla</h3>
            <p>Despliegue e implementacion de redes de acceso ftth.</p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio bases</h3>
            <p>Implementación, montaje y mantenimiento preventivo y correctivo de estaciones radio base (BTS).</p>
        </div>

        <div class="servicio-tarjeta">
            <h3>Radio enlaces</h3>
            <p>Implementación, configuración y mantenimiento preventivo y correctivo de enlaces inalámbricos de microondas.</p>
        </div>

        <div class="servicio-tarjeta">
            <h3>​Soluciones de Planta Externa y Enlaces Ópticos</h3>
            <p>​​Implementación y mantenimiento preventivo y correctivo de redes FTTH, infraestructura troncal y enlaces ópticos.</p>
        </div>

    </div>

    <a href="/contacto" class="boton">
        Solicitar un servicio
    </a>

</section>

@endsection