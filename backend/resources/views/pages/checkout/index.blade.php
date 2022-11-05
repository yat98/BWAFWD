<x-layouts.checkout>
    <x-slot:title>Checkout</x-slot:title>
    {{-- Prepend Style --}}
    <x-slot:prependStyle>
        <link rel="stylesheet" href="{{ asset('frontend/vendor/jquery-ui/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/vendor/jquery-ui/css/jquery-ui.theme.min.css') }}">
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
                                <li class="breadcrumb-item">Details</li>
                                <li class="breadcrumb-item active">Checkout</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 ps-lg-0">
                        <div class="card card-details">
                            <h1>Who is Going?</h1>
                            <p>Trip to Ubud, Bali, Indonesia</p>
                            <div class="attendee">
                                <table class="table table-responsive-sm text-center">
                                    <thead>
                                        <tr">
                                            <td class="border-bottom py-3">Picture</td>
                                            <td class="border-bottom py-3">Name</td>
                                            <td class="border-bottom py-3">Nationality</td>
                                            <td class="border-bottom py-3">Visa</td>
                                            <td class="border-bottom py-3">Passport</td>
                                            <td class="border-bottom py-3"> </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="align-middle py-3">
                                                <img src="{{ asset('frontend/img/testimonials/testimonial1.jpg') }}" class="attendee-picture rounded-circle">
                                            </td>
                                            <td class="align-middle py-3">Angga Rizky</td>
                                            <td class="align-middle py-3">CN</td>
                                            <td class="align-middle py-3">N/A</td>
                                            <td class="align-middle py-3">Active</td>
                                            <td class="align-middle py-3">
                                                <a href="">
                                                    <img src="{{ asset('frontend/img/icon/ic_times.svg') }}">
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="align-middle py-3">
                                                <img src="{{ asset('frontend/img/testimonials/testimonial2.jpg') }}" class="attendee-picture rounded-circle">
                                            </td>
                                            <td class="align-middle py-3">Galih Pratama</td>
                                            <td class="align-middle py-3">SG</td>
                                            <td class="align-middle py-3">30 Days</td>
                                            <td class="align-middle py-3">Active</td>
                                            <td class="align-middle py-3">
                                                <a href="">
                                                    <img src="{{ asset('frontend/img/icon/ic_times.svg') }}">
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="member mt-3">
                                <h2>Add Member</h2>
                                <form action="">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-lg-0 pe-lg-1">
                                            <label for="username" class="visually-hidden">Username</label>
                                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" id="username">
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-2 mb-3 mb-lg-0 px-lg-1">
                                            <label for="name" class="visually-hidden">Visa</label>
                                            <select class="form-select">
                                                <option value="visa" selected>Visa</option>
                                                <option value="30 days">30 Days</option>
                                                <option value="N/A">N/A</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-4 mb-3 mb-lg-0 px-lg-1">
                                            <label for="name" class="visually-hidden">DOE Passport</label>
                                            <div class="position-relative">
                                                <input type="text" class="form-control datepicker position-relative" placeholder="DOE Passport" aria-label="DOE Passport">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-2 mb-3 mb-lg-0 px-lg-1">
                                            <input type="submit" value="Add Now" class="btn btn-add-now w-100">
                                        </div>
                                    </div>
                                </form>
                                <h3 class="mt-4 b-0">Note</h3>
                                <p class="disclaimer mb-0">
                                    You are only able to invite the member that has registered in Nomads
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-5 mt-lg-0">
                        <div class="card card-details card-right">
                            <h2>Checkout Informations</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Members</th>
                                    <td width="50%" class="text-end">
                                        2 Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Additional Visa</th>
                                    <td width="50%" class="text-end">
                                        $190,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Trip Price</th>
                                    <td width="50%" class="text-end">
                                        $80,00 / Person
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Total Price</th>
                                    <td width="50%" class="text-end">
                                        $280,00
                                    </td>
                                </tr>
                                <tr>
                                    <th width="55%">Total (+Unique Code)</th>
                                    <td width="45%" class="text-end">
                                        <span class="unique-code-blue">$279,</span>
                                        <span class="unique-code-yellow">33</span>
                                    </td>
                                </tr>
                            </table>
                            <hr>
                            <h2>Payment Instructions</h2>
                            <p class="text-muted payment-instruction">
                                Please complete the payment before you 
                                <br>
                                continue the wonderful trip
                            </p>
                            <div class="bank">
                                <div class="bank-item pb-3">
                                    <img src="{{ asset('frontend/img/icon/ic_bank.svg') }}" class="bank-icon">
                                    <div class="description">
                                        <h3>PT. Nomads ID</h3>
                                        <p class="my-1">
                                            8261 16251 262666
                                        </p>
                                        <p>
                                            Bank Central Asia
                                        </p>
                                    </div>
                                </div>
                                <div class="bank-item pb-3">
                                    <img src="{{ asset('frontend/img/icon/ic_bank.svg') }}" class="bank-icon">
                                    <div class="description">
                                        <h3>PT. Nomads ID</h3>
                                        <p class="my-1">
                                            777 126261 27211
                                        </p>
                                        <p>
                                            Bank HSBC
                                        </p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="join-container">
                            <a href="{{ route('checkout.success') }}" class="btn d-block btn-join-now mt-3 py-2">
                                I Have Made Payment
                            </a>
                        </div>
                        <div class="text-center mt-3">
                            <a href="{{ route('detail') }}" class="text-muted">
                                Cancel Booking
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    {{-- Add On Script --}}
    <x-slot:addOnScript>
        <script src="{{ asset('frontend/vendor/jquery-ui/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('frontend/js/main.js') }}"></script>
    </x-slot:addOnScript>
</x-layouts.checkout>