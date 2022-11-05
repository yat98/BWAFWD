<x-layouts.success-checkout>
    <x-slot:title>Checkout Success</x-slot:title>

    <!-- Main -->
    <main>
        <div class="section-success d-flex align-items-center">
            <div class="col text-center">
                <img src="{{ asset('frontend/img/icon/ic_mail.svg') }}" class="mail-icon">
                <h1>Yay! Success</h1>
                <p>
                    We sent you email for trip instruction 
                    <br>
                    please read it as well
                </p>
                <a href="{{ route('home') }}" class="btn btn-homepage mt-3 px-5">
                    Homepage
                </a>
            </div>
        </div>
    </main>
</x-layouts.success-checkout>