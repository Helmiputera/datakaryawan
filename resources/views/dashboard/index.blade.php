 @extends('layouts.dash')
 @section('content') 
     

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">DASHBOARD</h1>
          
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
    <div class="alert alert-primary text-center" role="alert">
      <h1 class="alert-heading text-center">Selamat Datang di</h1> 
      <h2 class="alert-heading text-center"> Aplikasi Pendataan Karyawan PT KREASI INFORMATIKA MANDIRI</h2>
      <h6 class="mt-3"><br> Aplikasi berbasis website ini merupakan Tugas Akhir dari KERJA PRAKTIK.</h6>
      <small>2021</small>
   </div>

  </section>

  <div class="container">
    <!-- DIRECT CHAT -->
    <div class="card direct-chat direct-chat-primary">
      <div class="card-header">
        <h3 class="card-title">Absensi Karyawan</h3>

        <div class="card-tools">
          <span title="3 New Messages" class="badge badge-primary">3</span>
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
            <i class="fas fa-comments"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
       
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <form action="#" method="post">
          <div class="input-group">
            <input type="text" name="message" placeholder="Type Message ..." class="form-control" style="color: black">
            <span class="input-group-append">
              <button type="button" class="btn btn-primary">Send</button>
            </span>
          </div>
        </form>
      </div>
      <!-- /.card-footer-->
    </div>
    <!--/.direct-chat -->
  </div>
  
  <!-- /.content -->
</div>
@endsection