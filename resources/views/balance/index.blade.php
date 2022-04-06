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
        <li class="breadcrumb-item active">Balance</li>
    </ul>

    <!-- BEGIN #datatable -->
    <div id="datatable" class="mb-5">
        <div class="card">
            <div class="list-group list-group-flush">
                <div class="list-group-item d-flex align-items-center">
                    <div class="flex-1 text-break">
                        <h4>Balance Table</h4>
                    </div>
                    {{-- <div>
                        <button data-bs-toggle="modal" data-bs-target="#addGateway"
                            class="btn btn-outline-theme w-200px">+ Add Gateway</button>
                    </div> --}}
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label class="form-label" for="exampleFormControlSelect1">Select User</label>
                        <select  class="form-select">
                            <option>Select User</option>
                            @foreach ($user as $item)
                                <option onchange="displayForm({{ $item }})" value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach


                        </select>
                    </div>
                </div>
                <form action="">
                    <div class="col-md-12 row optional-form">
                        <div class="form-group col-md-4 mb-3 mt-3">
                            <label class="form-label" for="exampleFormControlInput1">Current Balance </label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="form-group col-md-4 mb-3 mt-3">
                            <label class="form-label" for="exampleFormControlInput1">Topup Balance </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-md-4 mb-3 mt-3">
                            <label class="form-label" for="exampleFormControlInput1">Action </label>
                            <input type="submit" value="Submit" class="form-control">
                        </div>
                </div>
                </form>
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
@endsection
@section('js')
<script>
    $('.optional-form').hide()
    function displayForm(e){
        console.log(e)
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
