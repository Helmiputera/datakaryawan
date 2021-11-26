@extends('layouts.dash')
@section('content') 
    

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
 <!-- Content Header (Page header) -->
 <div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0">DATA ABSENSI</h1>
         
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->

 <!-- Main content --> 
 <section class="content">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">NAMA</th>
            <th scope="col">TANGGAL</th>
            <th scope="col">JAM MASUK</th>
            <th scope="col">JAM KELUAR</th>
            <th scope="col">JAM STATUS</th>
            <th scope="col">KETERANGAN</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Helmi</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            </tr>
        </tbody>
      </table>

 </section>
 <!-- /.content -->
</div>
@endsection