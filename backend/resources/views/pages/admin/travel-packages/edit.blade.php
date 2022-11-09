<x-layouts.admin>
    <x-slot:title>Edit Travel Packages</x-slot:title>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Travel Packages</h1>
        </div>

        <!-- Content Row -->
        <x-errors.all />
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.travel-package.update',$travelPackage) }}" method="POST">
                    @csrf
                    @method('put')
                    @include('pages.admin.travel-packages.form')
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</x-layouts.admin>