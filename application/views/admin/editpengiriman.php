  <script language="JavaScript" type="text/javascript">
    function checkDelete(){
        return confirm('Anda yakin ingin membatalkan cuti ini ?');
    }
</script>
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
              <li class="breadcrumb-item active">Edit Admin</li>
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
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Admin Intan Daya Mandiri</h3>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-body">
                    <form class="form-horizontal" method="post" enctype="multipart/form-data">   
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nama Customer</label>
                        <div class="col-sm-8">
                          <input type="text" name="nama_pabrik" class="form-control" value="<?=isset($pengiriman)?$this->kode_converter->customer($pengiriman['id_customer']):'';?>" readonly>
                        </div>
                      </div>                       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Nomor PO</label>
                        <div class="col-sm-8">
                          <input type="text" name="no_po" class="form-control" value="<?=isset($pengiriman)?$pengiriman['no_po']:'';?>" readonly>
                        </div>
                      </div>                       
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label">Jangka Waktu</label>
                        <div class="col-sm-8">
                          <input type="text" name="jangka_waktu" class="form-control inputmask" value="<?=isset($pengiriman)?date('d-m-Y',strtotime($pengiriman['jangka_waktu'])):'';?>" >
                        </div>
                      </div><br><hr>
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nama Barang</label>
                          <div class="col-sm-8">
                          <select class="form-control" name="nama_barang">
                            <option>-- Pilih Barang -- </option>
                            <?php if ($barang!='') { foreach ($barang as $value) { ?>
                              <option <?=isset($pengiriman)&&$pengiriman['nama_barang']==$value['id_barang']?"selected":''; ?> value="<?=$value['id_barang']?>"><?=$value['nama_barang']?></option>
                            <?php }} ?>
                          </select>
                          </div>
                        </div>                       
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Dari</label>
                          <div class="col-sm-3">
                          <select class="form-control" name="dari">
                            <option>-- Pilih Kota -- </option>
                            <?php if ($kota!='') { foreach ($kota as $value) { ?>
                              <option <?=isset($pengiriman)&&$pengiriman['dari']==$value['kode']?"selected":''; ?> value="<?=$value['kode']?>"><?=$value['kota']?></option>
                            <?php }} ?>
                          </select>
                          </div>                        
                          <label for="inputName" class="col-sm-2 col-form-label">Tujuan</label>
                          <div class="col-sm-3">
                          <select class="form-control" name="tujuan">
                            <option>-- Pilih Kota -- </option>
                            <?php if ($kota!='') { foreach ($kota as $value) { ?>
                              <option <?=isset($pengiriman)&&$pengiriman['tujuan']==$value['kode']?"selected":''; ?> value="<?=$value['kode']?>"><?=$value['kota']?></option>
                            <?php }} ?>
                          </select>
                          </div>
                        </div>                      
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Keterangan</label>
                          <div class="col-sm-8">
                            <input type="text" name="keterangan" class="form-control" value="<?=isset($pengiriman)?$pengiriman['keterangan']:'';?>" >
                          </div>
                        </div>                         
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Vendor</label>
                          <div class="col-sm-8">
                          <select class="form-control" name="vendor" id="vendor">
                            <option>-- Pilih Vendor -- </option>
                            <?php if ($vendor!='') { foreach ($vendor as $value) { ?>
                              <option <?=isset($pengiriman)&&$pengiriman['vendor']==$value['id_vendor']?"selected":''; ?> value="<?=$value['id_vendor']?>"><?=$value['nama_vendor']?></option>
                            <?php }} ?>
                          </select>
                          </div>
                        </div>                                             
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Armada</label>
                          <div class="col-sm-8">
                            <select class="form-control" name="armada" id="armada">
                              <option>-- Pilih Armada -- </option>
                              <?php if ($armada!='') { foreach ($armada as $value) { ?>
                                <option <?=isset($pengiriman)&&$pengiriman['armada']==$value['id_armada']?"selected":''; ?> value="<?=$value['id_armada']?>"><?=$value['nama_vendor']?> - <?=$value['jenis_armada']?></option>
                              <?php }} ?>
                            </select>
                          </div>
                        </div>                       
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Jumlah Barang</label>
                          <div class="col-sm-8">
                            <input type="text" name="jumlah_barang" class="form-control" value="<?=isset($pengiriman)?$pengiriman['jumlah_barang']:'';?>" >
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Container</label>
                          <div class="col-sm-8">
                            <input type="text" name="container[]" class="form-control" value="<?=isset($pengiriman)?$pengiriman['container']:'';?>" >
                          </div>
                        </div> 
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Nilai Invoice</label>
                          <div class="col-sm-8">
                            <input type="text" name="nilai_inv" class="form-control" value="<?=isset($pengiriman)?$pengiriman['nilai_inv']:'';?>" >
                          </div>                        
                        </div> 
                      <br><hr>                    
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
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
    <script type="text/javascript">
        $(document).ready(function(){
            $('#vendor').change(function(){ 
                var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('ajax/get_armadabyvendor');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                        var html = '';
                        var i;
                        if (data) {

                              html += '<option value=""> -- Pilih Armada --</option>'; 
                                                       
                          for(i=0; i<data.length; i++){
                              html += '<option value='+data[i].id_armada+'>'+data[i].jenis_armada+'</option>';
                          }
                        $('#armada').html(html);                          
                        } else{
                              html = '<option></option>';
                        $('#armada').html(html);                          
                        }
                    }
                });
                return false;
            }); 
             
        });
    </script> 