@extends('templated.master')

@section('content')
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <a href="{{route('pertanyaan.create')}}" class="btn btn-success btn-sm waves-effect waves-light">Tambah Pertanyaan</a><br><br>
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>No. </th>
            <th>Judul Pertanyaan</th>
            <th>Isi Pertanyaann</th>
            <th>Pertanyaan Dibuat</th>
            <th>Jawaban</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            @foreach ($pertanyaan as $result => $hasil)
            <td>{{$result + $pertanyaan -> firstitem()}}</td>
            <td>{{$hasil -> judul}}</td>
            <td><textarea cols="35" rows="5" readonly>{{$hasil -> isi}}</textarea></td>
            <td>{{$hasil -> created_at}}</td>
            <th><a href="{{route('jawaban', $hasil->id)}}" data-content="Lihat Jawaban" class="btn btn-primary btn-flat btn-xs">Lihat Jawaban</th>
          </tr>
          @endforeach
          </tbody>
          <tfoot>
          <tr>
            <th>No. </th>
            <th>Judul Pertanyaan</th>
            <th>Isi Pertanyaann</th>
            <th>Pertanyaan Dibuat</th>
            <th>Jawaban</th>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
@endsection

@push('script')
<script src="{{asset('/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush