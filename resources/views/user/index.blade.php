@extends('layouts.app')
@section('css')
    <!-- ================== BEGIN page-css ================== -->
    <link href="/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.css" rel="stylesheet" />
    <!-- ================== END page-css ================== -->
@endsection
@section('content')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">HOME</a></li>
        <li class="breadcrumb-item active">Users</li>
    </ul>
    @if (session()->has('success'))
        <div class="alert alert-theme alert-dismissible fade show w-25 ms-auto" role="alert">
            <strong>Weldone!</strong> {{ session()->get('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- BEGIN #datatable -->
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center">
                    <div class="flex-1 text-break">
                        <h4>User List</h4>
                    </div>
                    <div>
                        <a data-bs-toggle="modal" data-bs-target="#addUser"
                            class="btn btn-outline-theme w-200px">+ Add User</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatableDefault" class="table text-nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->passwordx }}</td>
                                <td>$33</td>
                                <td><a href="{{ route('userStatus', $item->_id) }}"
                                        class="badge d-block bg-{{ $item->status ? 'success' : 'danger' }} text-theme-900 rounded-0 pt-5px mt-2 w-70px"
                                        style="min-height: 18px;text-decoration: none">{{ $item->status ? 'Active' : 'Inactive' }}</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#addUser"
                                        onclick="handleEdit({{ $item }})">Edit</a>
                                    <a href="{{ route('deleteUser', $item->_id) }}"
                                        class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-arrow">
                <div class="card-arrow-top-left"></div>
                <div class="card-arrow-top-right"></div>
                <div class="card-arrow-bottom-left"></div>
                <div class="card-arrow-bottom-right"></div>
            </div>
        </div>
    </div>
    <!-- END #datatable -->

    <!-- Add modal-lg -->
    <div class="modal fade" id="addUser">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">User Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('addUser') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">User Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control user-name">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Email Address</label>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control user-email">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="text" name="password" class="form-control user-password">
                                <input type="hidden" class="id" name="id"   >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <input type="submit" value="submit" class="btn btn-outline-theme">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        var addModal = document.getElementById('addUser')
        addModal.addEventListener('hidden.bs.modal', function() {
            $(".user-name").val('')
            $(".user-email").val('')
            $(".user-password").val('')
            // $(".id").val('')
        })
        const handleEdit = (e) => {
            console.log(e);
            $(".user-name").val(e.name)
            $(".user-email").val(e.email)
            $(".user-password").val(e.passwordx)
            $(".id").val(e._id)

        }
    </script>
    <!-- ================== BEGIN page-js ================== -->
    <script src="/assets/plugins/highlight.js/highlight.min.js"></script>
    <script src="/assets/js/demo/highlightjs.demo.js"></script>
    <script src="/assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
    <script src="/assets/plugins/bootstrap-table/dist/bootstrap-table.min.js"></script>
    <script src="/assets/js/demo/table-plugins.demo.js"></script>
    <!-- ================== END page-js ================== -->
@endsection
