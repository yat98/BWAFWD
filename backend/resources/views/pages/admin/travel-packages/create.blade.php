<x-layouts.admin>
    <x-slot:title>Create Travel Packages</x-slot:title>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Create Travel Packages</h1>
        </div>

        <!-- Content Row -->
        <x-errors.all />
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.travel-packages.store') }}" method="POST">
                    @csrf
                    @include('pages.admin.travel-packages.form')
                </form>            
            </div>
        </div>
    </div>
</x-layouts.admin>