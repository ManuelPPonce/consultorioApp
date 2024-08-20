<div id="cardCarousel" class="carousel slide container mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">

        <!-- Primer item del carrusel -->
        <div class="carousel-item active">
            <div class="d-flex justify-content-center">
                <div class="card me-3">
                    <img src="{{ asset('imgs/servicio2.jpg') }}" class="card-img-top h-50" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Card 1</h5>
                        <p class="card-text">Descripción de la Card 1.</p>
                    </div>
                </div>
                <div class="card me-3">
                    <img src="{{ asset('imgs/servicio1.jpg') }}" class="card-img-top h-50" alt="Servicio 2">
                    <div class="card-body">
                        <h5 class="card-title">Card 2</h5>
                        <p class="card-text">Descripción de la Card 2.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imgs/servicio1.jpg') }}" class="card-img-top h-50" alt="Servicio 2">
                    <div class="card-body">
                        <h5 class="card-title">Card 3</h5>
                        <p class="card-text">Descripción de la Card 3.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Segundo item del carrusel -->
        <div class="carousel-item ">
            <div class="d-flex justify-content-center">
                <div class="card me-3">
                    <img src="{{ asset('imgs/servicio2.jpg') }}" class="card-img-top h-50" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Card 4</h5>
                        <p class="card-text">Descripción de la Card 4.</p>
                    </div>
                </div>
                <div class="card me-3">
                    <img src="{{ asset('imgs/servicio2.jpg') }}" class="card-img-top h-50" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Card 5</h5>
                        <p class="card-text">Descripción de la Card 5.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('imgs/servicio2.jpg') }}" class="card-img-top h-50" alt="Servicio 1">
                    <div class="card-body">
                        <h5 class="card-title">Card 6</h5>
                        <p class="card-text">Descripción de la Card 6.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Controles del carrusel -->
    <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
