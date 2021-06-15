<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" />
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">
      <div class="flash-data" data-flashdata="<?= $this->session->flashdata('sukses'); ?>"></div>
                    


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h3 class="page-title"><b><i class="fas fa-clock"></i>&nbsp;Setting Periode Survei Kepuasan</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Universitas Catur Insan Cendekia </li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                                            
                                            <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Tambah Data</button>
                                </a>
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">

                                
                                    <div class="card m-b-20">
                                        <div class="card-body">


                      <!-- start row -->           
 <div class="row">                                           
<div class="col-xl-6 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
               
                                                <div class="text-white">
                                                    <h6 class="mb-3 mt-0"><b>
2 Jenis Survei Kepuasan Pelanggan</b></h6>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-bookmark display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

             <div class="col-xl-6 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                            
                                                <div class="text-white">
                                                    <h6 class="mb-3 mt-0"><b>

<?php echo $this->db->count_all_results('periode');?>
                                                    Total data Periode Survei Kepuasan</b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 </div>
  <!-- selesai row -->

                                           <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Petunjuk :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Klik Ikon/Tombol &nbsp;<i class='far fa-eye'></i>&nbsp; Untuk Mengaktifkan Periode Survei yang Digunakan<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Klik Ikon/Tombol &nbsp;<i class='far fa-eye-slash'></i>&nbsp; Untuk Menonaktifkan Periode, setelah itu pastikan 1 periode lain Diaktifkan.</font>
                                              
                                                </div>                     

                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Nama Periode</b></th>
                                    <th><b>Tahun Periode</b></th>
                                    <th width="200" align="center"><b>Status</b></th>
                                    <th width="200"><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($periodeku as $periode): ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $periode->nm_periode ?></td>
                                    <td><?php echo $periode->tahun ?></td>
                                    <td>

                                          <?php if ($periode->isactive == 1){ ?>
                                          <button type="button" class="btn btn-outline-success waves-effect waves-light">
                                    <i class="fas fa-clock"></i> &nbsp;Periode Aktif&nbsp;&nbsp;</button>
                                                       
                 <?php }else{ ?>
                     <button type="button" class="btn btn-outline-danger waves-effect waves-light">
                                    <i class="fas fa-clock"></i> &nbsp;Tidak Aktif&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
                <?php } ?>
                                    </td>
                                    <td>

                 <a data-toggle="modal" data-target="#modal-edit<?php echo $periode->id_periode ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('adm/periode/hapus/'.$periode->id_periode); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                        </a>
                 <?php if($this->db->where('isactive', 1)->count_all_results('periode') == 1){ ?>
                              <?php if ($periode->isactive == 1){ ?>
                              <a data-toggle="modal" data-target="#modal-mati<?php echo $periode->id_periode ?>" class="btn btn-dark waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Matikan Periode"><font color="white"><i class="far fa-eye-slash"></i></font></span></a>
                              <?php } ?>

                 <?php }else{ ?>
<a data-toggle="modal" data-target="#modal-aktif<?php echo $periode->id_periode ?>" class="btn btn-success waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Aktifkan Periode"><font color="white"><i class="far fa-eye"></i></font></span></a>
                 <?php } ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>

                                            
    
                                       
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->



                <!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Tambah Periode</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/periode/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Periode</label>
                          <input type="text" name="nm_periode" class="form-control  round <?php echo form_error('nm_periode') ? 'is-invalid':'' ?>" id="email" placeholder="Nama Periode" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                       <font color="red"><?php echo form_error('nm_periode') ?></font>
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tahun Periode</label>
                          <input type="number" name="tahun" class="form-control round" id="email" placeholder="Tahun" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Simpan
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>




 <!-- Modal -->
 <?php $no=0; foreach ($periodeku as $periode): ?>
                  <div class="modal fade text-left" id="modal-edit<?php echo $periode->id_periode ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Data Periode</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/periode/edit'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$periode->id_periode;?>" name="id_periode" class="form-control" >
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Periode</label>
                          <input type="text" value="<?php echo $periode->nm_periode ?>" required name="nm_periode" class="form-control  round <?php echo form_error('nm_periode') ? 'is-invalid':'' ?>" id="email" placeholder="Email Address">
                       <font color="red"><?php echo form_error('nm_periode') ?></font>
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tahun</label>
                          <input type="number" value="<?php echo $periode->tahun ?>" name="tahun" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                       <input type="hidden" readonly value="<?=$periode->isactive;?>" name="isactive" class="form-control" >                 
      
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>

<!-- Modal -->
 <?php $no=2; foreach ($periodeku as $periode): ?>
  <!-- modal -->
<div class="modal modal-success fade" id="modal-aktif<?php echo $periode->id_periode ?>">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-success">
      <h5 class="modal-title"><font color='white'>Konfirmasi</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('adm/periode/aktif'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$periode->id_periode;?>" name="id_periode" class="form-control" >
      <p>Apakah anda yakin akan mengaktifkan periode <?php echo $periode->nm_periode ?> - <?php echo $periode->tahun ?> ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <button type="submit"  class="btn btn-success">
                                    <i class="fa fa-save"></i>&nbsp;Aktifkan
                                </button>
                                </form>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php endforeach; ?>


<!-- Modal -->
 <?php $no=3; foreach ($periodeku as $periode): ?>
  <!-- modal -->
<div class="modal modal-success fade" id="modal-mati<?php echo $periode->id_periode ?>">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-dark">
      <h5 class="modal-title"><font color='white'>Konfirmasi</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <form action="<?php echo site_url('adm/periode/mati'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$periode->id_periode;?>" name="id_periode" class="form-control" >
      <p>Apakah anda yakin akan mematikan periode <?php echo $periode->nm_periode ?> - <?php echo $periode->tahun ?> ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <button type="submit"  class="btn btn-dark">
                                    <i class="fa fa-save"></i>&nbsp;Matikan
                                </button>
                                </form>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->
<?php endforeach; ?>


 <!-- modal -->
<div class="modal modal-danger fade" id="modal-danger">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger">
      <h5 class="modal-title"><font color='white'>Konfirmasi Penghapusan</font></h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
      </div>
      <div class="modal-body">
      <p>Apakah anda yakin akan menghapus data ini ?</p>
      </div>
      <div class="modal-footer">
      <a type="button" class="btn btn-secondary" data-dismiss="modal"><font color='white'><i class="fas fa-times"></i>&nbsp;Batal</font></a>
      <a href="#" id="btn-delete" type="button" class="btn btn-danger mr-1"><i class="fas fa-trash"></i>&nbsp;Hapus</a>
      </div>
    </div>
    <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

  

  <script>
function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
}
</script>



                  