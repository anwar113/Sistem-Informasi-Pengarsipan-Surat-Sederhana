@extends('layout.app')
@section('title','About')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-1 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">About</h5>
                            <div class="row">
                                <div class="col">
                                    <img src="/ft.jpg" class="img-thumbnail rounded border border-4" alt="" width="150" height="150">
                                    
                                </div>
                                <div class="col">
                                <p class="mb-4">
                                    Aplikasi ini dibuat oleh : <br>
                                    Nama    : Saiful Anwar <br>
                                    NIM     : 1931710051 <br>
                                    Tanggal : 13 September 2022
                                    </p>
                                </div>

                                <br>
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-4">
                            <img src="../assets/img/illustrations/man-with-laptop-light.png" height="140"
                                alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                                data-app-light-img="illustrations/man-with-laptop-light.png" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection