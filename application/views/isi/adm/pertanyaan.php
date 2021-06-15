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
                                    <h3 class="page-title"><b><i class="fas fa-question-circle"></i>&nbsp;Pertanyaan Kuesioner</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Survei Kepuasan Alumni dan Stakeholder</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">

                                    <div class="state-graph">
                                           <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Tambah Data</button>
                                </a>
                                        </div>
                                        <div class="state-graph">
                                            
                                        </div>
                                                            
                                            

                                
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
                                                    <?php 
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('indikator.level', 'Alumni');
      $this->db->from('pertanyaan');
      echo $this->db->count_all_results();
      ?>
                                              
                                                    Pertanyaan Kepuasan Alumni</b></h6>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-question-circle display-2"></i>
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
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('indikator.level', 'Stakeholder');
      $this->db->from('pertanyaan');
      echo $this->db->count_all_results();
      ?>
                                                    Pertanyaan Kepuasan Pengguna Lulusan</b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-question-circle display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 </div>
  <!-- selesai row -->


                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><i class="fas fa-question-circle"></i>&nbsp; Pertanyaan Kuesioner Kepuasan Alumni</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><i class="fas fa-question-circle"></i>&nbsp; Pertanyaan Kuesioner Kepuasan Pengguna Lulusan</b></a>
                                                </li>
                                                
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                    <table id="datatable2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Pertanyaan</b></th>
                                    <th><b>Indikator</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($pertanyaanku as $pertanyaan): ?>
                                <?php if ($pertanyaan->level == "Alumni"){ ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $pertanyaan->pertanyaan ?></td>
                                    <td><?php echo $pertanyaan->nm_indikator ?></td>
                                    
                                    <td>

                 <a data-toggle="modal" data-target="#modal-edit<?php echo $pertanyaan->id_pertanyaan ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('adm/pertanyaan/hapus/'.$pertanyaan->id_pertanyaan); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                        </a>
                 
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Pertanyaan</b></th>
                                    <th><b>Indikator</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($pertanyaanku as $pertanyaan): ?>
          <?php if ($pertanyaan->level == "Stakeholder"){ ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $pertanyaan->pertanyaan ?></td>
                                    <td><?php echo $pertanyaan->nm_indikator ?></td>
                                    
                                    <td>

                 <a data-toggle="modal" data-target="#modal-edit<?php echo $pertanyaan->id_pertanyaan ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a onclick="deleteConfirm('<?php echo site_url('adm/pertanyaan/hapus/'.$pertanyaan->id_pertanyaan); ?>')" href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light tombol-hapus" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                        </a>
                 
                                    </td>
                                </tr>
                                <?php } ?>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
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
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Tambah Pertanyaan Kuesioner</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/pertanyaan/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Pertanyaan</label>
                          <textarea class="form-control" name="pertanyaan" id="title1" rows="3" required oninvalid="this.setCustomValidity('Harap Diisi...')" oninput="setCustomValidity('')"></textarea>
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Indikator Penilaian</label>
                          <select name="id_indikator" id="select" required class="custom-select">
                  <option value="">-- Pilih Indikator Penilaian--</option>
                  
                  <?php foreach ($indikatorku as $k): ?>
                  <option value="<?php echo $k->id_indikator ?>"><?php echo $k->nm_indikator ?> (<?php echo $k->level ?>)</option>
                  <?php endforeach; ?>
                </select>
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
 <?php $no=0; foreach ($pertanyaanku as $pertanyaan): ?>
                  <div class="modal fade text-left" id="modal-edit<?php echo $pertanyaan->id_pertanyaan ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Edit Pertanyaan Kuesioner</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('adm/pertanyaan/edit'); ?>" method="post">
                      <input type="hidden" readonly value="<?=$pertanyaan->id_pertanyaan;?>" name="id_pertanyaan" class="form-control" >
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Pertanyaan</label>
                          <textarea class="form-control" name="pertanyaan" id="title1" rows="3"><?=$pertanyaan->pertanyaan;?></textarea>
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Indikator Penilaian</label>
                          <select name="id_indikator" id="select" required class="custom-select">
                  <option value="">-- Pilih Indikator Penilaian--</option>
                  
                  <?php foreach ($indikatorku as $k): ?>
                  <option value="<?php echo $k->id_indikator ?>"

                             <?php
                              if ($pertanyaan->id_indikator == $k->id_indikator){
                              echo "selected";
                                    }else{
                              echo "";
                              }
                              ?>
                  ><?php echo $k->nm_indikator ?> (<?php echo $k->level ?>)</option>
                  <?php endforeach; ?>
                </select>
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



                  