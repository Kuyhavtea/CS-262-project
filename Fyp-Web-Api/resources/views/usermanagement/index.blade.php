<!-- resources/views/usermanagement/index.blade.php -->

@extends('layouts.app')

@section('title', 'User Management')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>User Management</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Management</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-12">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addUserModal">Add New
                    User</button>
                <button class="btn btn-secondary">Export User List</button>
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-6">
                <input type="text" class="form-control" placeholder="Search Users...">
            </div>
            <div class="col-6 text-right">
                <select class="form-control d-inline-block w-auto">
                    <option value="">All Roles</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
                <select class="form-control d-inline-block w-auto">
                    <option value="">All Statuses</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Date Joined</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone_number }}</td>
                                <td>{{ $user->created_at->format('Y-m-d') }}</td>
                                <td>
                                    <button class="btn btn-warning btn-sm edit-user-btn" data-bs-toggle="modal"
                                        data-bs-target="#editUserModal-{{ $user->id }}">
                                        Edit
                                    </button>
                                    <form action="{{ route('deleteUser', ['user' => $user->id]) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                @foreach ($users as $user)
                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUserModal-{{ $user->id }}" tabindex="-1"
                        aria-labelledby="editUserModalLabel-{{ $user->id }}" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <form id="editUserForm" method="POST" action="/editUser/{{$user->id}}">
                                    @csrf
                                    @method('PUT')
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editUserModalLabel-{{ $user->id }}">Edit User</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="edit_name_{{ $user->id }}" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control"
                                                id="edit_name_{{ $user->id }}" value="{{ $user->name }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_email_{{ $user->id }}" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                id="edit_email_{{ $user->id }}" value="{{ $user->email }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="edit_phone_number_{{ $user->id }}" class="form-label">Email</label>
                                            <input type="number" name="phone_number" class="form-control"
                                                id="edit_phone_number_{{ $user->id }}" value="{{ $user->phone_number }}"
                                                required>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Add User Modal -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/addUser" method="POST">
                @csrf
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Add New User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <input type="text" name="name" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">Phone Number</label>
                        <input type="text" name="phone_number" class="form-control" id="phone_number" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                        <input type="password" name="password_confirmation" class="form-control"
                            id="password_confirmation" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save User</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{{--
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const editUserModal = new bootstrap.Modal(document.getElementById('editUserModal'));
        const editUserForm = document.getElementById('editUserForm');

        document.querySelectorAll('.edit-user-btn').forEach(button => {
            button.addEventListener('click', function () {
                const userId = this.getAttribute('data-id');
                const userName = this.getAttribute('data-name');
                const userEmail = this.getAttribute('data-email');
                const userRole = this.getAttribute('data-role');
                const userStatus = this.getAttribute('data-status');

                document.getElementById('edit_name').value = userName;
                document.getElementById('edit_email').value = userEmail;
                document.getElementById('edit_role').value = userRole;
                document.getElementById('edit_status').value = userStatus;

                editUserForm.action = /usermanagement/${ userId }/update;
                editUserModal.show();
            });
        });
    });
</script> --}}
@endsection