@extends('layouts.app')

@section('title', 'Account Deposit')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Account Deposit</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Account Deposit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addDepositModal">Add New Deposit</button>
                    <button class="btn btn-secondary">Export Deposit List</button>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-6">
                    <input type="text" class="form-control" placeholder="Search Deposits...">
                </div>
                <div class="col-6 text-right">
                    <select class="form-control d-inline-block w-auto">
                        <option value="">All Statuses</option>
                        <option value="pending">Pending</option>
                        <option value="approved">Approved</option>
                        <option value="rejected">Rejected</option>
                    </select>
                    <select class="form-control d-inline-block w-auto">
                        <option value="">All Deposit Types</option>
                        <option value="personal">Personal</option>
                        <option value="business">Business</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Depositor Name</th>
                                <th>Deposit Amount</th>
                                <th>Deposit Type</th>
                                <th>Status</th>
                                <th>Date Applied</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                                <tr>
                                    <td>{{ $deposit->id }}</td>
                                    <td>{{ $deposit->depositor_name }}</td>
                                    <td>${{ $deposit->deposit_amount }}</td>
                                    <td>{{ $deposit->deposit_type }}</td>
                                    <td>{{ $deposit->status }}</td>
                                    <td>{{ $deposit->created_at->format('Y-m-d') }}</td>
                                    <td>
                                        @if ($deposit->status == 'pending')
                                            <a href="{{ route('accountdeposit.approve', $deposit->id) }}" class="btn btn-success btn-sm">Approve</a>
                                            <a href="{{ route('accountdeposit.reject', $deposit->id) }}" class="btn btn-danger btn-sm">Reject</a>
                                        @endif
                                    </td>
                                </tr>
                         
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <nav>
                        <ul class="pagination">
                            {{ $deposits->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Add Deposit Modal -->
    <div class="modal fade" id="addDepositModal" tabindex="-1" aria-labelledby="addDepositModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="addDepositModalLabel">Add New Deposit</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="depositor_name" class="form-label">Depositor Name</label>
                            <input type="text" name="depositor_name" class="form-control" id="depositor_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="deposit_amount" class="form-label">Deposit Amount</label>
                            <input type="number" name="deposit_amount" class="form-control" id="deposit_amount" required>
                        </div>
                        <div class="mb-3">
                            <label for="deposit_type" class="form-label">Deposit Type</label>
                            <select name="deposit_type" class="form-control" id="deposit_type" required>
                                <option value="personal">Personal</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Deposit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
