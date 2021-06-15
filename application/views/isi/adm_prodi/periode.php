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
                                                            
                                             <div class="state-graph">
                                          <div class="state-graph">
                                            <div id="header-chart-1"></div>
                                        </div>
                                        <div class="state-graph">
                                            <div id="header-chart-2"></div>
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
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Yang dapat menambah, menghapus, merubah, dan mengaktifkan periode adalah Ketua Kemahasiswaan atau Bagian Pusdatin.</font>
                                              
                                                </div>                     

                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Nama Periode</b></th>
                                    <th><b>Tahun Periode</b></th>
                                    <th width="200" align="center"><b>Status</b></th>
                                   
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