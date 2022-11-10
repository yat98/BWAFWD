<x-layouts.admin>
    <x-slot:title>Edit Transactions</x-slot:title>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Transactions</h1>
        </div>

        <!-- Content Row -->
        <x-errors.all />
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('admin.transaction.update',$transaction) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    @include('pages.admin.galleries.form')
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Ubah</button>
                    </div>
                </form>            
            </div>
        </div>
    </div>
</x-layouts.admin>