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

