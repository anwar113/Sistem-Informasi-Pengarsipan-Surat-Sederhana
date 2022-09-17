@extends('layout.app')
@section('title','Edit / Perbarui Arsip')
@section('header')


@endsection
@section('content')
@include('sweetalert::alert')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 mb-1 order-0">
            <div class="card">
                <div class="d-flex align-items-end row">
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Arsip Surat >> Unggah</h5>
                            <p class="mb-4">
                                Unggah surat yang telah terbit pada form ini untuk diarsipkan.<br>
                                Catatan:<br>
                            <ul>
                                <li>Gunakan file berformat PDF</li>
                            </ul>

                            </p>
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
                            <div class="mb-2">
                                <form action="update_{{$surat->id}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="input-group">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Nomor Surat
                                        </label>
                                        <div class="col col-md-2">
                                            <input type="text" name="no_surat" value="{{$surat->no_surat}}"
                                                class="form-control" required>
                                            @if($errors->has('no_surat'))
                                            <br>
                                            <small class="error">{{ $errors->first('no_surat') }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <label class="col-md-2 col-form-label" for="inputGroupSelect01">Kategori</label>
                                        <select class="form-select" id="inputGroupSelect01" name="kategori" required>

                                            <option value="Undangan">Undangan</option>
                                            <option value="Pengumuman">Pengumuman</option>
                                            <option value="Nota Dinas">Nota Dinas</option>
                                            <option value="Pemberitahuan">Pemberitahuan</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <label for="html5-text-input" class="col-md-2 col-form-label">Judul
                                        </label>
                                        <div class="col-md-4">
                                            <input value="{{$surat->judul}}" type="text" name="judul"
                                                class="form-control" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="input-group">
                                        <label for="file" class="col-md-2 col-form-label">File Surat (PDF) </label>
                                        <input class="form-control" type="file" id="formFile" name="file" />
                                        @if($errors->has('file'))
                                        <br>
                                        <small class="error">{{ $errors->first('file') }}</small>
                                        @endif
                                    </div>

                            </div>
                            <div class="">
                                <br>
                                <a href="{{route('home')}}" type="button" class="btn btn-sm btn-primary">
                                    << Kembali</a>
                                        <button type="submit" class="btn btn-sm btn-success">
                                            Simpan</button>
                            </div>
                            </form>
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