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
                                    <h3 class="page-title"><b><i class="fas fa-tasks"></i>&nbsp;Survei Kepuasan Pengguna Lulusan</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Universitas Catur Insan Cendekia</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">

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
            
<h6><b><font color="#02729a"><i class='fas fa-clock'></i>&nbsp;Periode Survei Kepuasan <?=$periodeku->tahun;?></font></b></h6>
  <!-- start row -->           
 <div class="row">                                           
<div class="col-xl-6 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
               
                                                <div class="text-white">
                                                    <h6 class="mb-3 mt-0"><b>
  <?php $array = array('id_user' => $this->session->userdata('id_user'), 'id_periode' => $periodeku->id_periode, 'status_isi' => 2);
  echo $total = $this->db->where($array)->count_all_results('kep_plulusan');?> Alumni Belum Dinilai</b></h6>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-window-close display-2"></i>
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

<?php $array = array('id_user' => $this->session->userdata('id_user'), 'id_periode' => $periodeku->id_periode, 'status_isi' => 1);
  echo $total = $this->db->where($array)->count_all_results('kep_plulusan');?> Alumni Sudah Dinilai</b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-check-square  display-2"></i>
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
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><i class="fas fa-user-check"></i>&nbsp; Penilaian Alumni Periode Ini</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><i class="fas fa-user-clock"></i>&nbsp; History Penilaian Alumni</b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><b><i class="fas fa-chart-pie"></i>&nbsp; Grafik Jawaban</b></a>
                                                </li>
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                    <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Foto</b></th>
                                    <th><b>Nama Alumni (Pekerja)</b></th>
                                    <th><b>Jabatan</b></th>
                                    <th><b>Tanggal Bekerja</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1; foreach ($alumku as $alum): ?>
           <?php if ($alum->id_periode == $periodeku->id_periode){ ?>  
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><center><img src="<?php echo base_url('assets/images/users/'.$alum->foto) ?>" alt="" class="thumb-md rounded-circle"></center></td>
                                    <td><?php echo $alum->nama ?></td>
                                    <td><?php echo $alum->jabatan ?></td>
                                    <td align="center"  width="130"><?php echo $alum->tgl_bekerja ?></td>
                                    <td>
                  <?php if ($alum->status_isi == 1){ ?>  
                 <button type="button" class="btn btn-success waves-effect waves-light"><font color="white">
                                    <i class="fas fa-check "></i> &nbsp;Dinilai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></button>
                 <?php }else{ ?>
                 <a href="<?php echo site_url('halaman_stakeholder/form_penilaian/'.$alum->id_kep) ?>">
                                            <button type="button" class="btn btn-primary waves-effect waves-light"><font color="white">
                                    <i class="fas fa-feather"></i> &nbsp;Penilaian</font></button><a>
                 <?php } ?>

                                    </td>
                                </tr>
               <?php } ?>
                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                                          <table id="datatable2" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Foto</b></th>
                                    <th><b>Nama Alumni (Pekerja)</b></th>
                                    <th><b>Jabatan</b></th>
                                    <th><b>Tanggal Bekerja</b></th>
                                    <th><b>Periode Penilaian</b></th>
                                    <th><b>Status</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no2=1; foreach ($alumku as $alum): ?>
     
                                <tr>
                                    <td width="7" align="center"><?php echo $no2++; ?></td>
                                    <td><center><img src="<?php echo base_url('assets/images/users/'.$alum->foto) ?>" alt="" class="thumb-md rounded-circle"></center></td>
                                    <td><?php echo $alum->nama ?></td>
                                    <td><?php echo $alum->jabatan ?></td>
                                    <td align="center"><?php echo $alum->tgl_bekerja ?></td>
                                    <td align="center"><?php echo $alum->tahun ?></td>
                                    <td>
                  <?php if ($alum->status_isi == 1){ ?>  
                 <button type="button" class="btn btn-primary waves-effect waves-light"><font color="white">
                                    <i class="fas fa-check "></i> &nbsp;Dinilai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></button>
                 <?php }else{ ?>
                                            <button type="button" class="btn btn-secondary waves-effect waves-light"><font color="white">
                                    <i class="fas fa-times"></i> &nbsp;Belum Dinilai</font></button>
                 <?php } ?>

                                    </td>
                                </tr>

                                <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                
                                            </div>

                                             <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                   


                       <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><b>Jawaban Tingkat Kepuasan</b></h4>
            
                                                        
                                            <canvas id="chart_stake" height="175"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><b>Jawaban Tingkat Kepentingan</b></h4>
            
                                                       
                                            <canvas id="chart_stake2" height="175"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                                                
                                            </div>


                                            

                                            
    
                                      
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->



  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>

     <script>
    
$(function () {

'use strict';
if( $('#chart_stake').length > 0 ){
        var ctx6 = document.getElementById("chart_stake").getContext("2d");
        var data6 = {
             labels: [
            "Sangat Baik",
            "Baik",
            "Cukup",
            "Kurang"
        ],
<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_kinerja', 4);
      $this->db->from('kep_plulusan');
      $a = $this->db->count_all_results();
?>
<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_kinerja', 3);
      $this->db->from('kep_plulusan');
      $b = $this->db->count_all_results();
?>
<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_kinerja', 2);
      $this->db->from('kep_plulusan');
      $c = $this->db->count_all_results();
?>
<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_kinerja', 1);
      $this->db->from('kep_plulusan');
      $d = $this->db->count_all_results();
?>
        datasets: [
            {
                data: [<?php echo $a; ?>, <?php echo $b; ?>, <?php echo $c; ?>, <?php echo $d; ?>],
                backgroundColor: [
                    "#0293c9",
                    "#22af47",
                    "#c3cc34",
                    "#cf020d"
                ],
                hoverBackgroundColor: [
                    "#00a0df",
                    "#69c982",
                    "#d0d962",
                    "#ff2f26"
                ]
            }]
        };
        
        var pieChart  = new Chart(ctx6,{
            type: 'pie',
            data: data6,
            options: {
                animation: {
                    duration:   3000
                },
                responsive: true,
                legend: {
                    labels: {
                    fontFamily: "Poppins",
                    fontColor:"#878787"
                    }
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                }
            }
        });
    }


    if( $('#chart_stake2').length > 0 ){
        var ctx6 = document.getElementById("chart_stake2").getContext("2d");
        var data6 = {
             labels: [
            "Sangat Penting",
            "Penting",
            "Cukup",
            "Kurang Penting"
        ],
    <?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_harapan', 4);
      $this->db->from('kep_plulusan');
      $e = $this->db->count_all_results();
?>

<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_harapan', 3);
      $this->db->from('kep_plulusan');
      $f = $this->db->count_all_results();
?>

<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_harapan', 2);
      $this->db->from('kep_plulusan');
      $g = $this->db->count_all_results();
?>

<?php 
      $this->db->join('alumni', 'kep_plulusan.nim = alumni.nim');
      $this->db->join('periode', 'kep_plulusan.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_plulusan.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('kep_plulusan.status_isi', 1);
      $this->db->where('kep_plulusan.id_user', $this->session->userdata('id_user'));
      $this->db->where('indikator.level', "Stakeholder");
      $this->db->where('detail_respon.skor_harapan', 1);
      $this->db->from('kep_plulusan');
      $h = $this->db->count_all_results();
?>
        datasets: [
            {
                data: [<?php echo $e; ?>, <?php echo $f; ?>, <?php echo $g; ?>, <?php echo $h; ?>],
                backgroundColor: [
                    "#0293c9",
                    "#22af47",
                    "#c3cc34",
                    "#cf020d"
                ],
                hoverBackgroundColor: [
                    "#00a0df",
                    "#69c982",
                    "#d0d962",
                    "#ff2f26"
                ]
            }]
        };
        
        var pieChart  = new Chart(ctx6,{
            type: 'pie',
            data: data6,
            options: {
                animation: {
                    duration:   3000
                },
                responsive: true,
                legend: {
                    labels: {
                    fontFamily: "Poppins",
                    fontColor:"#878787"
                    }
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                },
                elements: {
                    arc: {
                        borderWidth: 0
                    }
                }
            }
        });
    }


    

  }); // End of use strict
    </script>                