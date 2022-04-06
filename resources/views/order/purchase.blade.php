@extends('layouts.app')
@section('content')
    <ul class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">HOME</a></li>
        <li class="breadcrumb-item">Order</li>
        <li class="breadcrumb-item active">Purchase</li>
    </ul>

    <!-- basic usage -->
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header fw-bold small">
                        Live Number
                    </div>
                    <div class="card-header bg-none p-0">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Number: </li>
                            <li class="list-group-item">Service Name: </li>
                            <li class="list-group-item">Cost: </li>
                            <li class="list-group-item">Times Left: </li>
                        </ul>
                    </div>
                    <div class="card-body d-flex justify-content-center gap-2">
                        <button type="button" class="btn btn-theme">Copy Number</button>
                        <button type="button" class="btn btn-danger">Cancel</button>
                    </div>
                    <div class="card-arrow">
                        <div class="card-arrow-top-left"></div>
                        <div class="card-arrow-top-right"></div>
                        <div class="card-arrow-bottom-left"></div>
                        <div class="card-arrow-bottom-right"></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header fw-bold small">
                        Message Box
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Waiting for Message...</h5>
                        {{-- <h6 class="card-subtitle mb-3 text-white text-opacity-50">Card subtitle</h6> --}}
                        <div class="spinner-border"></div>
                        <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <button type="button" class="btn btn-theme">Refresh</button>
                    </div>
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
