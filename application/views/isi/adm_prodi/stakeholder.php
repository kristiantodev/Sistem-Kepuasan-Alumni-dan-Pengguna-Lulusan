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
                                    <h3 class="page-title"><b><i class="fa fa-user-tie"></i>&nbsp;Pengguna Lulusan (Stakeholder)</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Alumni Universitas Catur Insan Cendekia </li>
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
Responden Survei Kepuasan Pengguna Alumni</b></h6>
                                                   
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

<?php echo $this->db->count_all_results('stakeholder');?>
                                                    Total Pengguna Lulusan</b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fab fa-black-tie display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 </div>
  <!-- selesai row -->

                                        <div class="alert alert-ku" role="alert">
                                                    <h4 class="alert-heading font-20"><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Petunjuk :</b></h4>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Klik Ikon/Tombol &nbsp;<i class='fas fa-user-plus'></i>&nbsp; Untuk Memilih Alumni yang Dinilai Pengguna Lulusan.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Klik Ikon/Tombol &nbsp;<i class='fas fa-address-book'></i>&nbsp; Untuk Melihat History Penilaian Alumni oleh Pengguna Lulusan.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Klik Ikon/Tombol &nbsp;<i class='fab fa-facebook-messenger'></i>&nbsp; Untuk Mengirim Notifikasi/Menghubungi Pengguna Lulusan untuk menilai Alumni.</font>
                                              
                                                </div>

      <?php if ($this->session->flashdata('gagal')): ?>
             
                               <div class='alert alert-warning'>
                               <a type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</a>
                                   <font color="#eb9000"><h5><i class="fas fa-exclamation-triangle "></i> Gagal !!</h5>
                        <?php echo $this->session->flashdata('gagal'); ?></font></div>
                            <?php endif; ?>                                  

                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Nama Pengguna</b></th>
                                    <th><b>Email</b></th>
                                    <th><b>Jabatan</b></th>
                                    <th><b>Asal Instansi</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($stakeholderku as $stakeholder): ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $stakeholder->nama_p ?></td>
                                    <td><?php echo $stakeholder->email ?></td>
                                    <td><?php echo $stakeholder->jabatan_p ?></td>
                                    <td><?php echo $stakeholder->nm_instansi ?></td>
                                    
                                    <td>

                 <a data-toggle="modal" data-target="#modal-edit<?php echo $stakeholder->id_user ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('adm_prodi/stakeholder/hapus/'.$stakeholder->id_user); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                 <a data-toggle="modal" data-target="#modal-pilih<?php echo $stakeholder->id_user ?>" class="btn btn-dark waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Pilih Alumni yang Dinilai"><font color="white"><i class="fas fa-user-plus"></i></font></span></a>
                 <a data-toggle="modal" data-target="#modal-list<?php echo $stakeholder->id_user ?>" class="btn btn-warning waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Lihat Alumni yang Dinilai"><font color="white"><i class="fas fa-address-book"></i></font></span></a>
                 <a data-toggle="modal" data-target="#modal-email<?php echo $stakeholder->id_user ?>" class="btn btn-success waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Kirim Email"><font color="white"><i class="fab fa-facebook-messenger"></i></font></span></a>
                 
                                        </a>
                 
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
                      <h6 class="modal-title"><font color='white'>Form Tambah Pengguna Lulusan</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/stakeholder/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Pengguna Lulusan</label>
                          <input type="text" name="nama" class="form-control  round <?php echo form_error('nama') ? 'is-invalid':'' ?>" placeholder="Nama" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                       <font color="red"><?php echo form_error('nama') ?></font>
                        </fieldset>

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Asal Instansi</label>
                          <select name="id_instansi" id="select" required class="custom-select" oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')">
                  <option value="">-- Pilih Asal Instansi--</option>
                  
                  <?php foreach ($instansiku as $k): ?>
                  <option value="<?php echo $k->id_instansi ?>"><?php echo $k->nm_instansi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Jabatan</label>
                          <input type="text" name="jabatan" class="form-control" placeholder="Jabatan">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" class="form-control" placeholder="email">
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
 <?php $no=0; foreach ($stakeholderku as $stakeholder): ?>
                  <div class="modal fade text-left" id="modal-edit<?php echo $stakeholder->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Data Pengguna Lulusan</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/stakeholder/edit'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$stakeholder->id_user;?>" name="id_user" class="form-control" >
                      <div class="modal-body">
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Pengguna Lulusan</label>
                          <input type="text" name="nama" value="<?php echo $stakeholder->nama_p ?>" class="form-control  round <?php echo form_error('nama') ? 'is-invalid':'' ?>" placeholder="Nama" required>
                       <font color="red"><?php echo form_error('nama') ?></font>
                        </fieldset>

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Asal Instansi</label>
                          <select name="id_instansi" id="select" required class="custom-select">
                  <option value="">-- Pilih Asal Instansi--</option>
                  
                  <?php foreach ($instansiku as $k): ?>
                  <option value="<?php echo $k->id_instansi ?>"

                  <?php
                              if ($stakeholder->id_instansi == $k->id_instansi){
                              echo "selected";
                                    }else{
                              echo "";
                              }
                              ?>>
                              <?php echo $k->nm_instansi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Jabatan</label>
                          <input type="text" name="jabatan" value="<?php echo $stakeholder->jabatan_p ?>" class="form-control" placeholder="Jabatan">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" value="<?php echo $stakeholder->email ?>" class="form-control" placeholder="email">
                        </fieldset>              
      
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
 <?php $no=0; foreach ($stakeholderku as $stakeholder): ?>
                  <div class="modal fade text-left" id="modal-pilih<?php echo $stakeholder->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Pilih Alumni yang Dinilai</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/stakeholder/savealum'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$stakeholder->id_user;?>" name="id_user" class="form-control" >
                      <div class="modal-body">

                      <div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-user-tie'></i>&nbsp;&nbsp;&nbsp;<b>Penilai : <?php echo $stakeholder->nama_p ?> - <?php echo $stakeholder->nm_instansi ?></b></font></center>
                      </div>
        
                         

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Periode Penilaian</label>
                          <select name="id_periode" id="select" required readonly class="custom-select">
                  <option value="<?php echo $periodeku->id_periode ?>"><?php echo $periodeku->nm_periode ?> Tahun <?php echo $periodeku->tahun ?></option>
                  
                </select>
                        </fieldset>

                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Pilih Alumni yang Dinilai :</label><br>
                          <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                          <thead>
                          <tr>
                                    <th width="30"><b></b></th>
                                    <th><b>Nama</b></th>
                                    <th><b>Asal Instansi</b></th>
                                    <th><b>Program Studi</b></th>
                           </tr> 
                           </thead>
                           <tbody>        
                          <?php $no=1; $no2=1; foreach ($alumku as $alum):?>
                        

                                       <tr>
                                            <td width="30" align="center"><input type="checkbox" name="pilihanku[]" value="<?php echo $alum->nim ?>" id="md_checkbox_<?php echo $no++; ?>" class="filled-in chk-col-navy"/></td>
                                            <td><?php echo $alum->nama ?> (<?php echo $alum->nim ?>)</td>
                                            <td><?php echo $alum->nm_instansi ?></td>
                                            <td><?php echo $alum->nm_prodi ?></td>
                                      </tr>
                    

                  <?php endforeach;?>
                  </tbody>
                  </table>
                        </fieldset>

                                     
      
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
 <?php $no=0; foreach ($stakeholderku as $stakeholder): ?>
                  <div class="modal fade text-left" id="modal-email<?php echo $stakeholder->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Kirim Notifikasi Email</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/stakeholder/kirim_email'); ?>" method="post">
                      
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
                          <input type="text" readonly name="email_penerima" value="<?php echo $stakeholder->email ?>" class="form-control" placeholder="Jabatan">
                        </fieldset>
                                          </div>
   </div>                                       


                       

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Subjek</label>
                          <input type="text" name="subjek" readonly value="Survei Kepuasan Pengguna Lulusan Universitas CIC" class="form-control" placeholder="Subjek Email">
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


  <!-- Modal -->
 <?php $no=2; foreach ($stakeholderku as $stakeholder): ?>
                  <div class="modal fade text-left" id="modal-list<?php echo $stakeholder->id_user ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>History Penilaian Alumni</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm_prodi/stakeholder/savealum'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$stakeholder->id_user;?>" name="id_user" class="form-control" >
                      <div class="modal-body">

                      <div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-user-tie'></i>&nbsp;&nbsp;&nbsp;<b>Penilai : <?php echo $stakeholder->nama_p ?> (<?php echo $stakeholder->nm_instansi ?>)</b></font></center>
                      </div>

                         <table id="datatable<?php echo $no++ ?>" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No.</b></th>
                                    <th><b>NIM</b></th>
                                    <th><b>Nama</b></th>
                                    <th><b>Jabatan</b></th>
                                    <th><b>Periode Penilaian</b></th>
                                    <th><b>Status</b></th>
                                  
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no2=1;
         foreach ($listalum as $list): ?>
         <?php if ($list->id_user == $stakeholder->id_user){ ?>
                                <tr>
                                    <td><?php echo $no2++ ?></td>
                                    <td><?php echo $list->nim ?></td>
                                    <td><?php echo $list->nama ?></td>
                                    <td><?php echo $list->jabatan ?></td>
                                    <td><?php echo $list->nm_periode ?> (<?php echo $list->tahun ?>)</td>
                                    <td>
                                      <?php if ($list->status_isi == 1){ ?>
                        <span class="badge badge-success badge-pill"><h7>Dinilai</h7></span>
                                
                 <?php }else{ ?>
                      <span class="badge badge-danger badge-pill"><h7>Belum Dinilai</h7></span>
                <?php } ?>
                                    </td>
                                    
                                </tr>
                                <?php } ?>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>            
      
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
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



                  