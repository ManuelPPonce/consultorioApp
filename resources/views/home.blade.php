@extends('layouts.app')

@section('title', 'Incio')

@section('content')
    <!-- Hero Section -->
    <div class="container-fluid p-0">
        <div class="hero"
            style="background-image: url('{{ asset('imgs/banner.jpg') }}'); background-size: cover; background-position: center; height: 400px; position: relative;">
            <div class="overlay"
                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5);">
            </div>
            <div class="hero-content text-white text-center d-flex flex-column justify-content-center align-items-center"
                style="position: relative; z-index: 2; height: 100%;">
                <h1 class="display-4">Bienvenido a Salud Dental A&C</h1>
                <p class="lead">Tu salud dental es nuestra prioridad.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Saber más</a>
            </div>
        </div>
    </div>


    <!-- Services Section -->
    <div class="container mt-5 pb-5">
        <h2 class="text-left mb-4">Nuestros Servicios</h2>
        <div class="line"></div>
        <h3 class="secundary-title">Lorem ipsum dolor sit amet consectetur</h3>
        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium eos alias quaerat a
            possimus debitis excepturi voluptatem ad enim iure labore veritatis obcaecati totam minima facere libero, modi
            illum repellendus.</p>
        <x-carousel></x-carousel>

    </div>
@endsection
