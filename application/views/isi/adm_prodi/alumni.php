
        
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
                                    <h3 class="page-title"><b><i class="fas fa-user-graduate"></i>&nbsp;Data Alumni atau Lulusan</b></h3>
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
                                                    Responden Survei Kepuasan Alumni</b></h6>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-check-square display-2"></i>
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

<?php 
echo $this->db->where('id_prodi', $this->session->userdata('prodi'))->count_all_results('alumni');?>
                                                    Total Alumni</b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-graduation-cap display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 </div>
  <!-- selesai row -->
                         

              <?php if ($this->session->flashdata('gagal')): ?>
             
                               <div class='alert alert-warning'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <font color="#eb9000"><h5><i class="fas fa-exclamation-triangle "></i> Gagal !!</h5>
                        <?php echo $this->session->flashdata('gagal'); ?></font></div>
                            <?php endif; ?>

                

                                        <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><i class="fas fa-th-large"></i> &nbsp;Program Studi : <?=$myprodi->nm_prodi;?></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><i class="fas fa-th-large"></i> &nbsp;</b></a>
                                                </li>
                                                
                                                
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                  <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>Foto</b></th>
                                    <th><b>NIM</b></th>
                                    <th><b>Nama</b></th>
                                    <th><b>Tanggal Yudisium</b></th>
                                    <th><b>Tempat Bekerja</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1; foreach ($alumniku as $alumni): ?>

                                <tr>
                                    <td><img src="<?php echo base_url('assets/images/users/'.$alumni->foto) ?>" alt="" class="thumb-md rounded-circle"></td>
                                    <td><?php echo $alumni->nim ?></td>
                                    <td><?php echo $alumni->nama ?></td>
                                    <td><?php echo $alumni->tgl_yudisium ?></td>
                                    <td><?php echo $alumni->nm_instansi ?></td>
                                    
                                    <td>

                 <a data-toggle="modal" data-target="#modal-edit<?php echo $alumni->id_user ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('adm_prodi/alumni/hapus/'.$alumni->id_user); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                 <a data-toggle="modal" data-target="#modal-profil<?php echo $alumni->id_user ?>" class="btn btn-dark waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Profil Alumni"><font color="white"><i class="fas fa-user"></i></font></span></a>
                 <a data-toggle="modal" data-target="#modalku<?php echo $alumni->id_user ?>" class="btn btn-success waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Kirim Email"><font color="white"><i class="fab fa-facebook-messenger"></i></font></span></a>
                 
                                        </a>
                 
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                           
                                                </div>

                                                

                                                
                                            
    
                                        </div>
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
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Tambah Alumni</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/alumni/add'); ?>" method="post" enctype="multipart/form-data">
                      <div class="modal-body">

                      <div class="row">
                                          <div class="col-lg-6 col-md-6 col-6">
                                          
                          <fieldset class="form-group floating-label-form-group">
                          <label for="email">NIM</label>
                          <input type="text" name="nim" class="form-control  round <?php echo form_error('nim') ? 'is-invalid':'' ?>" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
             
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Alumni</label>
                          <input type="text" name="nama" class="form-control" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">HP</label>
                          <input type="text" name="hp" class="form-control">
             
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Foto</label><br>
                          <input type="file" name="foto">
                        </fieldset>
                 </div>



                                          <div class="col-lg-6 col-md-6 col-6">
                                          
                                <fieldset class="form-group floating-label-form-group">
                          <label for="email">Program Studi</label>
                          <select name="id_prodi" id="select" class="custom-select">
                  <option value="<?php echo $this->session->userdata('prodi') ?>">-- Pilih Prodi--</option>
                  
                  <?php foreach ($prodiku as $p): ?>
                  <option value="<?php echo $this->session->userdata('prodi') ?>"><?php echo $p->nm_prodi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tanggal Yudisium</label>
                          <input type="text" name="tgl_yudisium" class="form-control" id="date">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tanggal Bekerja</label>
                          <input type="text" name="tgl_bekerja" class="form-control">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Jabatan</label>
                          <input type="text" name="jabatan" class="form-control">
                        </fieldset>

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Asal Instansi</label>
                          <select name="id_instansi" id="select" class="custom-select">
                  <option value="">-- Pilih Asal Instansi--</option>
                  
                  <?php foreach ($instansiku as $k): ?>
                  <option value="<?php echo $k->id_instansi ?>"><?php echo $k->nm_instansi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                                          </div>
                      </div>
                        
                         
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
 <?php $no=0; foreach ($alumniku as $alumni): ?>
                  <!-- Modal -->
                  <div class="modal fade text-left" id="modal-edit<?php echo $alumni->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Edit Data Alumni</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/alumni/edit'); ?>" method="post" enctype="multipart/form-data">
                       <input type="hidden" readonly value="<?=$alumni->id_user;?>" name="id_user" class="form-control" >
                      <div class="modal-body">

                      <div class="row">
                                          <div class="col-lg-6 col-md-6 col-6">
                                    
                          <fieldset class="form-group floating-label-form-group">
                          <label for="email">NIM</label>
                          <input type="text" name="nim" value="<?=$alumni->nim;?>" class="form-control  round <?php echo form_error('nim') ? 'is-invalid':'' ?>" required>
             
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Alumni</label>
                          <input type="text" name="nama" value="<?=$alumni->nama;?>" class="form-control" required>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">HP</label>
                          <input type="text" name="hp" value="<?=$alumni->hp;?>" class="form-control">
             
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" value="<?=$alumni->email;?>" class="form-control">
                        </fieldset>
                       

                 </div>



                                          <div class="col-lg-6 col-md-6 col-6">
                                    
                                

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tanggal Yudisium</label>
                          <input type="text" name="tgl_yudisium" value="<?=$alumni->tgl_yudisium;?>" class="form-control" id="date">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tanggal Bekerja (Bisa diisi oleh Alumni)</label>
                          <input type="text" name="tgl_bekerja" value="<?=$alumni->tgl_bekerja;?>" class="form-control">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Jabatan</label>
                          <input type="text" name="jabatan" value="<?=$alumni->jabatan;?>" class="form-control">
                        </fieldset>

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Asal Instansi</label>
                          <select name="id_instansi" id="select" class="custom-select">
                  <option value="">-- Pilih Asal Instansi--</option>
                  
                  <?php foreach ($instansiku as $k): ?>
                  <option value="<?php echo $k->id_instansi ?>"
                  <?php
                              if ($alumni->id_instansi == $k->id_instansi){
                              echo "selected";
                                    }else{
                              echo "";
                              }
                              ?>><?php echo $k->nm_instansi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                                          </div>
                      </div>
                        
                         
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
 <?php endforeach; ?>


 <!-- Modal -->
 <?php $no=2; foreach ($alumniku as $alumni): ?>
                  <!-- Modal -->
                  <div class="modal fade text-left" id="modal-profil<?php echo $alumni->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Profil Alumni Universitas CIC</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">

                      <div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-user-graduate'></i>&nbsp;&nbsp;&nbsp;<b>Profil Alumni :</b></font></center>
                      </div>

                      <div class="row">
                                          <div class="col-lg-5 col-md-6 col-5">
                                          
                    <center><img src="<?php echo base_url('assets/images/users/'.$alumni->foto) ?>" height='175'></center>      
                 </div>



                                          <div class="col-lg-7 col-md-6 col-7">
                                          
                                <table width="99%" cellpadding="5">
                                  <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->nim ?></td>
                                  </tr>
                                  <tr>
                                    <td>Nama Alumni</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->nama ?></td>
                                  </tr>
                                  <tr>
                                    <td>Program Studi</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->nm_prodi ?></td>
                                  </tr>
                                  
                                  <tr>
                                    <td>Tanggal Yudisium</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->tgl_yudisium ?></td>
                                  </tr>
                                   <tr>
                                    <td>Hp</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->hp ?></td>
                                  </tr>
                                   <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->email ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tanggal Bekerja</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->tgl_bekerja ?></td>
                                  </tr>
                                   <tr>
                                    <td>Tempat Bekerja</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->nm_instansi ?></td>
                                  </tr>
                                   <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><?php echo $alumni->jabatan ?></td>
                                  </tr>
                                  
                                </table>

                                          </div>
                      </div>
<br>
                      <div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-toolbox'></i>&nbsp;&nbsp;&nbsp;<b>Riwayat Pekerjaan Alumni :</b></font></center>
                      </div>


                      <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                           <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Nama Instansi</b></th>
                                    <th><b>Tanggal Bekerja</b></th>
                                    <th><b>Tanggal Selesai</b></th>
                                    <th><b>Jabatan</b></th>
                                    <th><b>Kesesuaian Pekerjaan</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                   <?php $no=1;
         foreach ($riwayatku as $riwayat): ?>
         <?php if ($alumni->id_user == $riwayat->id_user){ ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $riwayat->nm_instansi ?></td>
                                    <td><?php echo $riwayat->tgl_bekerja ?></td>
                                    <td><?php echo $riwayat->tgl_keluar ?></td>
                                    <td><?php echo $riwayat->jabatan ?></td>
                                    <td><?php echo $riwayat->kesesuaian ?></td>
                                </tr>
                                <?php } ?>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>

                        
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Tutup
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>


    <!-- Modal -->
 <?php $no=0; foreach ($alumniku as $alumni): ?>
                  <div class="modal fade text-left" id="modalku<?php echo $alumni->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Kirim Notifikasi Email</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/alumni/kirim_email'); ?>" method="post">
                      
                      <div class="modal-body">
 <div class="row">
                                          <div class="col-lg-6 col-md-6 col-6">
                                          <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email Pengirim</label>
                          <input type="text" readonly name="email" value="cic@cic.ac.id" class="form-control" placeholder="Jabatan">
                        </fieldset>
                                          </div>
                                          <div class="col-lg-6 col-md-6 col-6">
                                           <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email Penerima</label>
                          <input type="text" readonly name="email_penerima" value="<?php echo $alumni->email ?>" class="form-control" placeholder="Jabatan">
                        </fieldset>
                                          </div>
   </div>                                       


                       

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Subjek</label>
                          <input type="text" name="subjek" readonly value="Survei Kepuasan Alumni Universitas CIC" class="form-control" placeholder="Subjek Email">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Pesan</label>
                          <textarea id="elm1" name="isi" rows="5"></textarea>
                        </fieldset>


                                     
      
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="far fa-paper-plane "></i>&nbsp;Kirim
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
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

<!--Wysiwig js-->
<!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.min.js"></script>

        <script>
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:125,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>

  
