@extends('layouts.app')

@section('content')
    <!-- BEGIN #general -->
    <div class="container">
        <div class="col-md-6">
            <div id="general" class="mb-5">
                <h4><i class="far fa-user fa-fw text-theme"></i> General</h4>
                <p>View and update your general account information and settings.</p>
                {{-- <div class="w-100px">
            <a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
        </div> --}}

                <div class="card">
                    <div class="list-group list-group-flush">
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-1 text-break">
                                <div>Name</div>
                                <div class="text-white text-opacity-50">{{ Auth::user()->name }}</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-1 text-break">
                                <div>Email address</div>
                                <div class="text-white text-opacity-50">{{ Auth::user()->email }}</div>
                            </div>
                        </div>
                        <div class="list-group-item d-flex align-items-center">
                            <div class="flex-1 text-break">
                                <div>Password</div>
                                <div class="text-white text-opacity-50"></div>
                                <form action="{{ route('changePassword', Auth::user()->_id ) }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-10">
                                        <input type="text" name="password" class="form-control" placeholder="New Password">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" name="submit"
                                            class="btn btn-outline-theme w-100px">Update</button>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>

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
    <!-- END #general -->
@endsection
