@extends('layouts.dash')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Master Karyawan</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
 </section>
<!-- /.content-header -->


<!-- Main content -->
<section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <a href="/tambah" class="btn btn-primary mb-2"><i class="small material-icons">add</i> Tambah Karyawan</a>
            </div>
            <!-- /.card-header -->
            <div class="card">
              <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">NIK</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">ALAMAT</th>
                        <th scope="col">JENIS KELAMIN</th>
                        <th scope="col">JABATAN</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($karyawans as $value)


                     <tr>
                       <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->nik }}</td>
                       <td>{{ $value->nama }}</td>
                       <td>{{ $value->alamat }}</td>
                       <td>{{ $value->jenis_kelamin }}</td>
                       <td>{{ $value->jabatan }}</td>
                       <td>
                          <a href= "{{ route('edit', $value->id) }}" class="btn btn-outline-primary btn-sm edit" title="Edit">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="/karyawan/hapus/{{ $value->id }}" class="btn btn-outline-primary btn-sm edit" title="Delete">
                          <i class="fas fa-eraser"></i>
                      </a>
                       </td>
                     </tr>
                     @endforeach
                    </tbody>
                  </table>
              </div>
          </div>
            <!-- /.card-body -->
        </div>
          <!-- /.card -->
        
       </div>
    </div>
<!-- /.container-fluid -->
</section>
</div>
@endsection
