@extends('layouts.dash')
@section('content') 
    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container">
     <h3>Tambah Karyawan</h3>
       
    
   </div>
 </div>
 <div class="card-body">
  <form action="{{ route('karyawan.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nik</label>
      <input style="color: black" type="text" name="nik" class="form-control" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Nama</label>
      <input style="color: black" type="text" name="nama" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Alamat</label>
      <input style="color: black" type="text" name="alamat" class="form-control">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Jenis Kelamin</label>
      <select style="color: black"  class="custom-select form-control-border" name="jenis_kelamin">
        <option selected> Pilih jenis Kelamin </option>
        <option style="color: black">Laki-Laki</option>
        <option style="color: black">Perempuan</option>
      </select>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Jabatan</label>
      <input style="color: black" type="text" name="jabatan" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form></div>

</div>
 <!-- /.content-header -->

 <!-- Main content --> 

 <!-- /.content -->
</div>
@endsection