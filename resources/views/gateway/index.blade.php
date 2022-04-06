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
        <li class="breadcrumb-item">Setting</li>
        <li class="breadcrumb-item active">API</li>
    </ul>

    <!-- BEGIN #datatable -->
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center">
                    <div class="flex-1 text-break">
                        <h4>Gateway List</h4>
                    </div>
                    <div>
                        <button data-bs-toggle="modal" data-bs-target="#addGateway"
                            class="btn btn-outline-theme w-200px">+ Add Gateway</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table id="datatableDefault" class="table text-nowrap w-100">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Gateway Name</th>
                            <th>Balance</th>
                            <th>Numbers</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gateway as $key=>$item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->gateway_name }}</td>
                                <td>$34</td>
                                <td>20</td>
                                <td>
                                    <a href="{{ route('gatewayStatus', $item->_id) }}" class="badge d-block bg-{{ $item->status?'success':'danger' }} text-theme-900 rounded-0 pt-5px mt-2 w-70px"
                                        style="min-height: 18px;text-decoration: none">{{ $item->status?'Active':'Inactive' }}</a></td>
                                <td>
                                    <a type="button" class="btn btn-green" data-bs-toggle="modal" data-bs-target="#addGateway"
                                        onclick="handleEdit({{ $item }})">Edit</a>
                                    <a href="{{ route('deleteGateway', $item->_id) }}"
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

    <!-- modal-lg -->
    <div class="modal fade" id="addGateway">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Gateway Info</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form action="{{ route('storeGateway') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="d-flex justify-content-center">
                            <div class="col-md-6">
                                <div class="form-group row mb-2">
                                    <label class="col-sm-4 col-form-label">Gateway Name</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="gateway_name" class="form-control gateway-name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">API URL</label>
                            <div class="col-sm-10">
                                <input type="text" name="api_url" class="form-control api-url">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">API Key</label>
                            <div class="col-sm-10">
                                <input type="text" name="api_key" class="form-control api-key">
                            </div>
                        </div>
                        <div class="form-group row mb-2">
                            <label class="col-sm-2 col-form-label">API Secret</label>
                            <div class="col-sm-10">
                                <input type="text" name="api_secret" class="form-control api-secret">
                                <input type="hidden" class="id" name="id"   >
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-outline-theme">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
<script>
    var addModal = document.getElementById('addGateway')
        addModal.addEventListener('hidden.bs.modal', function() {
            $(".gateway-name").val('')
            $(".api-url").val('')
            $(".api-key").val('')
            $(".api-secret").val('')
            // $(".id").val('')
        })

    const handleEdit = (e) => {
            console.log(e);
            $(".gateway-name").val(e.gateway_name)
            $(".api-url").val(e.api_url)
            $(".api-key").val(e.api_key)
            $(".api-secret").val(e.api_secret)
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
