@extends('layout.app')
@section('title','Lihat Arsip')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-1 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Arsip Surat >> Lihat</h5>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Nomor
                                    </p>
                                </div>
                                <div class="col">
                                    : 2020/PD3/TU/001
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Kategori
                                    </p>
                                </div>
                                <div class="col">
                                    : Pengumuman
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Judul
                                    </p>
                                </div>
                                <div class="col">
                                    : Nota Dinas WFH
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p class="mb-4">
                                        Waktu Unggah
                                    </p>
                                </div>
                                <div class="col">
                                    : 2021-06-21 17:23
                                </div>
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
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-12">
                        <div class="card-body">
                            <div class="mb-4">
                                <form action="#" method="get">
                                    @csrf
                                    <div class="input-group">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Cari Surat
                                        </label>
                                        <input type="text" class="form-control" placeholder="Input Judul"
                                            aria-label="Recipient's username" aria-describedby="button-addon2" />
                                        <button class="btn btn-outline-primary" type="submit" id="button-addon2">Cari
                                            !</button>
                                    </div>

                                </form>
                            </div>

                            <div class="table table-bordered table-responsive">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Nomer Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-danger"
                                                    data-bs-toggle="modal" data-bs-target="#basicModal">
                                                    Hapus
                                                </button>
                                                <a href="" type="button" class="btn btn-sm btn-warning">Unduh</a>
                                                <a href="" type="button" class="btn btn-sm btn-primary">Lihat</a>
                                            </td>
                                            <!-- Default Modal -->
                                            <div class="col-lg-4 col-md-6">
                                                <div class="mt-3">
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="basicModal" tabindex="-1"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header align-center">
                                                                    <h5 class="modal-title " id="exampleModalLabel1">
                                                                        Alert</h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal"
                                                                        aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col mb-3 ">
                                                                            <label for="nameBasic"
                                                                                class="form-label align-center">Apakah
                                                                                anda yakin ingin menghapus arsip surat
                                                                                ini ?</label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                        class="btn btn-outline-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        Batal
                                                                    </button>
                                                                    <button type="button"
                                                                        class="btn btn-primary">Ya!</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Nomer Surat</th>
                                            <th>Kategori</th>
                                            <th>Judul</th>
                                            <th>Waktu Pengarsipan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="">
                                <br>
                                <a href="{{route('unggah')}}" type="button" class="btn btn-primary">Arsipkan Surat</a>
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