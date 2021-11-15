
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?=$this->session->userdata('nama')?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Laporan Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-danger">
              <div class="card-header">
                <h3 class="card-title">LAPORAN Invoice</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <form>
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nomor Invoice</label>
                        <div class="col-sm-8">
                          <input type="text" name="nomor_invo" class="form-control" >
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn btn-info">Cetak</button>
                        </div>                       
                      </div> 
                </form>
              </div><!-- /.card-body -->
              <?php if (isset($output)) { ?>
              <div class="card-body">
                <center>
                <iframe  class='container' style='width: 100%; height: 1000px;'  src="<?php echo base_url('assets/pdf/web/viewer.html?file=../../../temp/'.$output);?>"></iframe>
              </center>
              </div>
              <?php } ?>
              </div>
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>      
    <!-- /.content -->
  </div>
