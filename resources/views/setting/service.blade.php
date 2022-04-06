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
        <li class="breadcrumb-item active">Setting</li>
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
                        <h4>Service List</h4>
                    </div>
                    <div>
                        <a data-bs-toggle="modal" data-bs-target="#addService" class="btn btn-outline-theme w-200px">+ Add
                            Service</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatableDefault" class="table text-nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Service Name</th>
                            <th>Gateway Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($service as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->getGateway->gateway_name }}</td>
                                <td>${{ $item->price }}</td>
                                <td><a href="{{ route('updateService', $item->_id) }}"
                                        class="badge d-block bg-{{ $item->status ? 'success' : 'danger' }} text-theme-900 rounded-0 pt-5px mt-2 w-70px"
                                        style="min-height: 18px;text-decoration: none">{{ $item->status ? 'Active' : 'Inactive' }}</a>
                                </td>
                                <td>
                                    <a type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#addService"
                                        onclick="handleEdit({{ $item }})">Edit</a>
                                    <a href="{{ route('deleteService', $item->_id) }}"
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
    <div class="modal fade" id="addService">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Service Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('addService') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Service Name</label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control service-name">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Gateway Name</label>
                            <div class="col-sm-10">
                                <select class="form-select gateway-name" name="gateway_name">
                                    @foreach ($gateway as $item)
                                        <option value="{{ $item->id }}">{{ $item->gateway_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">Service Price</label>
                            <div class="col-sm-10">
                                <input type="text" name="price" class="form-control service-price">
                                <input type="hidden" class="id" name="id">
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
        var addModal = document.getElementById('addService')
        addModal.addEventListener('hidden.bs.modal', function() {
            $(".service-name").val('')
            $(".gateway-name").val('')
            $(".service-price").val('')
            // $(".id").val('')
        })
        const handleEdit = (e) => {
            console.log(e);
            $(".service-name").val(e.name)
            $(".gateway-name").val(e.gateway_name)
            $(".service-price").val(e.price)
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
