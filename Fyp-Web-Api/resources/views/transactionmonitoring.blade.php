<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Shop :: Administrative Panel</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="asset/plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="asset/css/adminlte.min.css">
    <link rel="stylesheet" href="asset/css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <div class="navbar-nav pl-2">
                <!-- Breadcrumb -->
            </div>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
                        <img src="asset/img/avatar5.png" class='img-circle elevation-2' width="40" height="40"
                            alt="User Image">
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
                        <h4 class="h4 mb-0"><strong>Mohit Singh</strong></h4>
                        <div class="mb-3">example@example.com</div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-user-cog mr-2"></i> Settings
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-lock mr-2"></i> Change Password
                        </a>
                        <div class="dropdown-divider"></div>
                        <form action="/logoutAdmin" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item text-danger nav-link">
                                <i class="fas fa-sign-out-alt mr-2"></i> Logout
                            </button>
                            <form>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="asset/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">P2P Lending</span>
            </a>
            <!-- Sidebar -->
            <div class="sidebar">
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/home" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>User Management</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/transactionmonitoring" class="nav-link">
                                <i class="nav-icon fas fa-search-dollar"></i>
                                <p>Transaction Monitoring</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/transfermonitoring" class="nav-link">
                                <i class="nav-icon fas fa-exchange-alt"></i>
                                <p>Transfer Monitoring</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/communication" class="nav-link">
                                <i class="nav-icon fas fa-comments"></i>
                                <p>Communication Tools</p>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Transaction Monitoring</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Transaction Monitoring</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <section class="content">
                <div class="container-fluid">
                    <!-- Header row with buttons -->
                    <div class="row mb-2">
                        <div class="col-12">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#addTransactionModal">Add
                                New Transaction</button>
                            <button class="btn btn-secondary">Export Transaction List</button>
                        </div>
                    </div>
                    <!-- Filter row -->
                    <div class="row mb-2">
                        <div class="col-6">
                            <input type="text" class="form-control" placeholder="Search Transactions...">
                        </div>
                        <div class="col-6 text-right">
                            <select class="form-control d-inline-block w-auto">
                                <option value="">All Statuses</option>
                                <option value="completed">Completed</option>
                                <option value="pending">Pending</option>
                                <option value="failed">Failed</option>
                            </select>
                            <select class="form-control d-inline-block w-auto">
                                <option value="">All Transaction Types</option>
                                <option value="credit">Credit</option>
                                <option value="debit">Debit</option>
                            </select>
                        </div>
                    </div>
                    <!-- Table row -->
                    <div class="row">
                        <div class="col-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Transaction ID</th>
                                        <th>Reference</th>
                                        <th>Username</th>
                                        <th>Account ID</th>
                                        <th>Amount</th>
                                        <th>Balance</th>
                                        <th>Category</th>
                                        <th>Confirmed</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->reference }}</td>
                                            <td>{{ $transaction->user_id }}</td>
                                            <td>{{ $transaction->account_id }}</td>
                                            <td>{{ $transaction->amount }}</td>
                                            <td>{{ $transaction->balance }}</td>
                                            <td>{{ ucfirst($transaction->category) }}</td>
                                            <td>{{ $transaction->confirmed ? 'Yes' : 'No' }}</td>
                                            <td>{{ $transaction->description }}</td>
                                            <td>{{ $transaction->date }}</td>
                                            <td>
                                                <a href="#" class="btn btn-info btn-sm">View</a>
                                                <a href="#" class="btn btn-warning btn-sm">Reject</a>
                                                <form action="{{ route('deleteTransaction', ['transaction' => $transaction->id]) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Pagination row -->
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!-- Add Transaction Modal -->
                    <div class="modal fade" id="addTransactionModal" tabindex="-1"
                        aria-labelledby="addTransactionModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form action="{{ url('/addTransaction') }}" method="POST">
                                    @csrf
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addTransactionModalLabel">Add New Transaction</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form fields -->
                                        <div class="mb-3">
                                            <label for="reference" class="form-label">Reference</label>
                                            <input type="text" name="reference" class="form-control" id="reference"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="account_id" class="form-label">Account ID</label>
                                            <input type="number" name="account_id" class="form-control" id="account_id"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="amount" class="form-label">Amount</label>
                                            <input type="number" name="amount" class="form-control" id="amount"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="balance" class="form-label">Balance</label>
                                            <input type="number" name="balance" class="form-control" id="balance">
                                        </div>
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <select name="category" class="form-control" id="category" required>
                                                <option value="deposit">Deposit</option>
                                                <option value="withdrawal">Withdrawal</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="confirmed" class="form-label">Confirmed</label>
                                            <select name="confirmed" class="form-control" id="confirmed" required>
                                                <option value="0">No</option>
                                                <option value="1">Yes</option>
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Description</label>
                                            <textarea name="description" class="form-control"
                                                id="description"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="date" class="form-label">Date</label>
                                            <input type="datetime-local" name="date" class="form-control" id="date"
                                                required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="meta" class="form-label">Meta</label>
                                            <textarea name="meta" class="form-control" id="meta"></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Transaction</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2022 AmazingShop All rights reserved.
        </footer>
    </div>

    <!-- ./wrapper -->
    <!-- jQuery -->
    <script src="{{ asset('asset/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('asset/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('asset/js/demo.js') }}"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
</body>

</html>