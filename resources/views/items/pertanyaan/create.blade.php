@extends('templated.master')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
            <h1 class="header-title"><center>Tambah Data Lowongan</center></h1><hr>
                <form class="form-horizontal" action="{{route('store')}}" method="POST">
                @csrf
                <div class="form-group row">
                <label class="col-lg-2 col-form-label" for="simpleinput"> - Judul Pertanyaan</label>
                    <div class="col-lg-7">
                        <input type="text" class="form-control" name="judul" placeholder="Masukkan Nama Perusahaan Loker">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-lg-5 col-form-label" for="simpleinput"> - Isi Pertanyaan</label>
                    <div class="col-lg-12">
                        <textarea class="form-control" name="isi" id="deskripsi"></textarea>
                    </div>
                </div><hr>
                <div class="form-group row">
                    <button class="btn btn-primary btn-block">Simpan Post</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection