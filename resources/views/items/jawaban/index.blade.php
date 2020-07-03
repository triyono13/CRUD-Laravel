@extends('templated.master')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Blank Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Judul Pertanyaan : {{$pertanyaan->judul.' - ID Pertanyaan :'.$pertanyaan->id}}</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          @foreach ($jawaban as $result => $hasil)
          {{$result +1}}.
          {{$hasil->isi}}<br>
          @endforeach
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <form class="form-horizontal" action="{{route('jawaban.simpan', $pertanyaan->id)}}" method="POST">
          @csrf
          <div class="form-group row">
              <label class="col-lg-5 col-form-label" for="simpleinput"> - Isi Jawaban</label>
              <div class="col-lg-12">
                  <textarea class="form-control" name="isi" id="deskripsi"></textarea>
              </div>
          </div><hr>
          <div class="form-group row">
              <button class="btn btn-primary btn-block">Simpan Jawaban</button>
          </div>
          </form>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
    @endsection
