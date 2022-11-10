<x-layouts.admin>
    <x-slot:title>Detail Transaction</x-slot:title>
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Detail Transaction</h1>
        </div>

        <!-- Content Row -->
        <x-errors.all />
        <div class="card shadow">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>ID</th>
                            <td>{{ $transaction->id }}</td>
                        </tr>
                        <tr>
                            <th>Travel Package</th>
                            <td>{{ $transaction->travelPackage->title }}</td>
                        </tr>
                        <tr>
                            <th>Buy by</th>
                            <td>{{ $transaction->user->name }}</td>
                        </tr>
                        <tr>
                            <th>Additional Visa</th>
                            <td>${{ $transaction->additional_visa }}</td>
                        </tr>
                        <tr>
                            <th>Total Transaction</th>
                            <td>${{ $transaction->transaction_total }}</td>
                        </tr> 
                        <tr>
                            <th>Status Transaction</th>
                            <td>{{ $transaction->transaction_status }}</td>
                        </tr>
                        <tr>
                            <th>Members</th>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <th>ID</th>
                                        <th>Username</th>
                                        <th>Nationality</th>
                                        <th>Visa</th>
                                        <th>DOE Passport</th>
                                    </tr>
                                    @forelse($transaction->transactionMembers as $member)
                                        <tr>
                                            <td>{{ $member->id }}</td>
                                            <td>{{ $member->username }}</td>
                                            <td>{{ $member->nationality }}</td>
                                            <td>{{ $member->is_visa ? '30 Days' : 'M/A' }}</td>
                                            <td>{{ $member->doe_passport }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center">Data Kosong...</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </td>
                        </tr> 
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layouts.admin>