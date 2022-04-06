@extends('layouts.app')
@section('content')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">HOME</a></li>
        <li class="breadcrumb-item">Order</li>
        <li class="breadcrumb-item active">Top UP</li>
    </ul>

    <!-- basic usage -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header fw-bold small">
                        For TopUP Please Contact
                    </div>
                    <div class="card-header bg-none p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">bKash (Personal): <span class="text-theme fw-bold">+8801911362825</span> </li>
                            <li class="list-group-item">Skype: <span class="text-theme fw-bold">khanvoice</span> </li>
                            <li class="list-group-item">Exchange Rate: <span class="text-theme fw-bold">87TK</span>  </li>
                        </ul>
                    </div>
                    {{-- <div class="card-body d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-theme">Copy Number</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div> --}}
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
