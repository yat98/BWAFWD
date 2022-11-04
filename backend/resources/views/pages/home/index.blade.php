<x-layouts.app>
    <x-slot:title>Home</x-slot:title>
    <!-- Header -->
    <header class="text-center text-white">
        <h1>
            Explore the Beautiful World
            <br>
            As East One Click
        </h1>
        <p  class="mt-3">
            You will see beautiful
            <br>
            moment you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>

    <!-- Main -->
    <main>
        <!-- Statistic -->
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>23K</h2>
                    <p>Hotels</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>
        <!-- Popular -->
        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center section-popular-heading">
                        <h2>Popular Travel</h2>
                        <p>
                            Something that you never try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-popular-content mt-3" id="popular-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" 
                            style="background-image: url('frontend/img/travels/popular1.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DERATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" 
                            style="background-image: url('frontend/img/travels/popular2.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" 
                            style="background-image: url('frontend/img/travels/popular3.jpg');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENIDA</div>
                            <div class="travel-button mt-auto">
                                <a href="detail.html" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" 
                            style="background-image: url('frontend/img/travels/popular4.jpg');">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="#" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Network -->
        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 text-center text-md-start pb-5 pb-md-0">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="{{ asset('frontend/img/partners/ana.svg') }}" alt="Logo Partner" class="img-partner mb-3 mb-md-0  px-2 px-md-0">
                        <img src="{{ asset('frontend/img/partners/disney.svg') }}" alt="Logo Partner" class="img-partner mb-3 mb-md-0  px-2 px-md-0">
                        <img src="{{ asset('frontend/img/partners/shangri-la.svg') }}" alt="Logo Partner" class="img-partner mb-3 mb-md-0  px-2 px-md-0">
                        <img src="{{ asset('frontend/img/partners/visa.svg') }}" alt="Logo Partner" class="img-partner mb-3 mb-md-0  px-2 px-md-0">
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial -->
        <section class="section-testimonials-heading" id="testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They're Loving US</h2>
                        <p>
                            Moments were giving them 
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials-content" id="testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonials text-center">
                            <div class="testimonials-content">
                                <img src="{{ asset('frontend/img/testimonials/testimonial1.jpg') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Hidayat</h3>
                                <p class="testimonial">
                                    “ It was glorious and I could
                                    not stop to say wohooo for
                                    every single moment
                                    Dankeeeeee “
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="trip-to my-3">
                                    Trip to Ubud
                                </p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonials text-center">
                            <div class="testimonials-content">
                                <img src="{{ asset('frontend/img/testimonials/testimonial2.jpg') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">John Doe</h3>
                                <p class="testimonial">
                                    “ Lorem ipsum dolor sit 
                                    amet, consectetur 
                                    adipiscing elit. 
                                    Fusce rhoncus placerat “
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="trip-to my-3">
                                    Trip to Bromo
                                </p> 
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonials text-center">
                            <div class="testimonials-content">
                                <img src="{{ asset('frontend/img/testimonials/testimonial3.jpg') }}" alt="User" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Jane Doe</h3>
                                <p class="testimonial">
                                    “ Augue ac gravida
                                    Donec vestibulum quam
                                    vel nibh pharetra malesuada
                                    placerat “
                                </p>
                            </div>
                            <div class="card-footer">
                                <p class="trip-to my-3">
                                    Trip to Dubai
                                </p> 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-layouts.app>