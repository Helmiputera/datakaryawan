@extends('layouts.dash')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Update Karyawan</h1>
            </div>
          </div>
        </div><!-- /.container-fluid -->
     </section>

 <div class="content">
     <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                {{-- @foreach($karyawans as $value) --}}
                <form action="{{ url('karyawan-update/'.$karyawans->id) }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}

                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nik</label>
                    {{-- <input type="hidden" name="id" value="{{ $value->id }}" class="form-control"> --}}
                    <input style="color: black" type="text" name="nik" class="form-control"  value="{{ $karyawans->nik }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Nama</label>
                    <input style="color: black" type="text" name="nama" class="form-control" value="{{ $karyawans->nama }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat</label>
                    <input style="color: black" type="text" name="alamat" class="form-control" value="{{ $karyawans->alamat }}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
                    <select style="color: black" class="custom-select form-control-border" name="jenis_kelamin" >
                      <option selected> {{ $karyawans->jenis_kelamin }} </option>
                      <option style="color: black">Laki-Laki</option>
                      <option style="color: black">Perempuan</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Jabatan</label>
                    <input style="color: black" type="text" name="jabatan" class="form-control" value="{{ $karyawans->jabatan }}">
                  </div>
                  <a href="/karyawan" class="btn btn-danger"><i class="bi bi-back"></i> back</a>
                  <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Simpan</button>
                </form>
                {{-- @endforeach --}}
              </div>
            </div>
            <!-- /.card-body -->
     </div>
 </div>

</div>
@endsection