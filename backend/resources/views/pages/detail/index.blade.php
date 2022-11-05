<x-layouts.app>
    <x-slot:title>Detail</x-slot:title>
    {{-- Prepend Style --}}
    <x-slot:prependStyle>
        <link rel="stylesheet" href="{{ asset('frontend/vendor/xzoom/xzoom.min.css') }}">
    </x-slot:prependStyle>

    <!-- Main -->
    <main>
        <section class="section-detail-header"></section>
        <section class="section-detail-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav class="ms-3 ms-md-0">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Travel Packages</li>
                                <li class="breadcrumb-item active">Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 ps-lg-0">
                        <div class="card card-details">
                            <h1>Nusa Penida</h1>
                            <p>Republic of Indonesia Raya</p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{ asset('frontend/img/details/detail1.jpg') }}" class="xzoom" id="xzoom-default" 
                                        xoriginal="{{ asset('frontend/img/details/detail1.jpg') }}">
                                </div>
                                <div class="xzoom-thumbs">
                                    <a href="{{ asset('frontend/img/details/detail1.jpg') }}">
                                        <img src="{{ asset('frontend/img/details/detail1.jpg') }}" class="xzoom-gallery" width="128" 
                                            xpreview="{{ asset('frontend/img/details/detail1.jpg') }}">
                                    </a>
                                    <a href="{{ asset('frontend/img/details/detail1.jpg') }}">
                                        <img src="{{ asset('frontend/img/details/detail1.jpg') }}" class="xzoom-gallery" width="128" 
                                            xpreview="{{ asset('frontend/img/details/detail1.jpg') }}">
                                    </a>
                                    <a href="{{ asset('frontend/img/details/detail1.jpg') }}">
                                        <img src="{{ asset('frontend/img/details/detail1.jpg') }}" class="xzoom-gallery" width="128" 
                                            xpreview="{{ asset('frontend/img/details/detail1.jpg') }}">
                                    </a>
                                    <a href="{{ asset('frontend/img/details/detail1.jpg') }}">
                                        <img src="{{ asset('frontend/img/details/detail1.jpg') }}" class="xzoom-gallery" width="128" 
                                            xpreview="{{ asset('frontend/img/details/detail1.jpg') }}">
                                    </a>
                                    <a href="{{ asset('frontend/img/details/detail1.jpg') }}">
                                        <img src="{{ asset('frontend/img/details/detail1.jpg') }}" class="xzoom-gallery" width="128" 
                                            xpreview="{{ asset('frontend/img/details/detail1.jpg') }}">
                                    </a>
                                </div>
                            </div>
                            <h2>About Travel</h2>
                            <p>
                                Nusa Penida is an island located in the southeastern Indonesian island of Bali and 
                                a district of Klungkung Regency that includes the neighbouring small island of Nusa 
                                Lembongan and twelve even smaller islands. The Badung Strait separates the island 
                                and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. 
                                It is drier than the nearby island of Bali. 
                            </p>
                            <p>
                                There are thirteen small islands nearby - Nusa Lembongan, Nusa Ceningan and eleven
                                even smaller - which are included within the district (kecamatan).
                            </p>
                            <div class="features row">
                                <div class="col-4 text-center text-md-start">
                                    <img src="{{ asset('frontend/img/icon/ic_event.svg') }}" alt="Icon" class="featured-icon d-md-inline mx-auto d-block float-none float-md-start">
                                    <div class="description float-none float-md-left ps-xs-0 ps-md-2 mt-3 mt-md-0">
                                        <h3>Featured Event</h3>
                                        <p>Tari Kecak</p>
                                    </div>
                                </div>
                                <div class="col-4 border-start ps-lg-4 text-center text-md-start">
                                    <img src="{{ asset('frontend/img/icon/ic_lang.svg') }}" alt="Icon" class="featured-icon d-md-inline mx-auto d-block float-none float-md-start">
                                    <div class="description float-none float-md-left ps-xs-0 ps-md-2 mt-3 mt-md-0">
                                        <h3>Languange</h3>
                                        <p>Bahasa Indonesia</p>
                                    </div>
                                </div>
                                <div class="col-4 border-start ps-lg-4 text-center text-md-start">
                                    <img src="{{ asset('frontend/img/icon/ic_food.svg') }}" alt="Icon" class="featured-icon d-md-inline mx-auto d-block float-none float-md-start">
                                    <div class="description float-none float-md-left ps-xs-0 ps-md-2 mt-3 mt-md-0">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="card card-details card-right">
                            <h2>Members Are Going</h2>
                            <div class="members my-2">
                                <img src="{{ asset('frontend/img/members/member1.jpg') }}" class="member-image mr-2 rounded-circle">
                                <img src="{{ asset('frontend/img/members/member2.jpg') }}" class="member-image mr-2 rounded-circle">
                                <img src="{{ asset('frontend/img/members/member3.jpg') }}" class="member-image mr-2 rounded-circle">
                                <img src="{{ asset('frontend/img/members/member4.jpg') }}" class="member-image mr-2 rounded-circle">
                                <span class="member-image rounded-circle d-inline-block member-circle">
                                    <p class="d-flex align-items-center justify-content-center h-100 rounded-circle">9+</p>
                                </span>
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Depature</th>
                                    <td width="50%" class="text-end">
                                        22 Aug 2022
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-end">
                                        4D 3N
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-end">
                                        Open Type
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-end">
                                        $80,00 / Person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout') }}" class="btn d-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    {{-- Add On Script --}}
    <x-slot:addOnScript>
        <script src="{{ asset('frontend/vendor/xzoom/xzoom.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </x-slot:addOnScript>
</x-layouts.app>