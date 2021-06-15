<textarea id="printing-css" style="display:none;">.no-print{display:none}</textarea>
<iframe id="printing-frame" name="print_frame" src="about:blank" style="display:none;"></iframe>
<script type="text/javascript">
function printDiv(elementId) {
 var a = document.getElementById('printing-css').value;
 var b = document.getElementById(elementId).innerHTML;
 window.frames["print_frame"].document.title = document.title;
 window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
 window.frames["print_frame"].window.focus();
 window.frames["print_frame"].window.print();
}
</script>
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
                                    <h3 class="page-title"><b><i class="fas fa-chart-pie"></i>&nbsp;Hasil Survey Kepuasan Alumni</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Universitas Catur Insan Cendekia</li>
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
<p align="left">
<a href="<?php echo site_url();?>adm/hasil_survey/alumni">
                                            <button type="button" class="btn btn-warning waves-effect waves-light">
                                    <i class="fas fa-angle-double-left"></i> Kembali</button>

                                </a>
</p>
<div class="row">                                           
<div class="col-xl-6 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
               
                                                <div class="text-white">
                                                    <h6 class="mb-3 mt-0"><b>
Periode Survei Kepuasan <?=$periodeku2->tahun;?></b></h6>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock display-2"></i>
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

<?php echo $this->db->where('id_periode', $periodeku2->id_periode)->count_all_results('kep_alumni');?>
                                                    Total Alumni yang menilai</b></h6>
                                                    
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


            
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><font color=""><i class="fa fa-users"></i>&nbsp; Alumni yang mengisi</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><font color=""><i class="fas fa-chart-bar"></i>&nbsp; Grafik Alumni yang mengisi</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#home2" role="tab"><b><font color=""><i class="fas fa-chart-pie"></i>&nbsp; Grafik Jawaban Alumni</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><font color=""><b><i class="fas fa-th-large"></i>&nbsp; Laporan Tingkat Ketercapaian (Performa)</font></b></a>
                                                </li>
                                                
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                    <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="3"><b>No.</b></th>
                                    <th width="50"><b>Nama</b></th>
                                    <th width="50"><b>Program Studi</b></th>
                                    <th width="200"><b>Kritik Saran</b></th>
                                    <th width="90"><b>Tanggal Isi Survei</b></th>
                                    <th width="50"><b>Aksi</b></th>

                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                 <?php $no=1; foreach ($isiku as $isi): ?>
                                             <tr>
                                            <td width="3" align="center"><?php echo $no++; ?></td>
                                            <td width="99"><?php echo $isi->nama ?></td>
                                            <td width="125"><?php echo $isi->nm_prodi ?></td>
                                            <td width="250"><?php echo $isi->kritik_saran ?></td>
                                            <td width="125"><?php echo $isi->tgl_input ?></td>
                                            <td width="50"><a data-toggle="modal" data-target="#modal-list<?php echo $isi->id_kep?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Lihat Detail Penilaian"><font color="white"><i class="fas fa-sort-numeric-down"></i></font></span></a></td>
                                             </tr>
                                   <?php endforeach; ?>
                                                </tbody>
                                            </table>
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                                    <canvas id="grafik" height="120"></canvas>
                                                </div>

                                                <div class="tab-pane p-3" id="home2" role="tabpanel">


                                                <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Jawaban Tingkat Kepuasan Alumni</b></h4></center>
            
                                                        
                                            <canvas id="chart_jawab" height="175"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Jawaban Tingkat Harapan Alumni</b></h4></center>
            
                                                       
                                            <canvas id="chart_jawab2" height="175"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->             

                                <center><h4 class="mt-0 header-title"><b>Tingkat Kinerja dan Harapan Alumni (Indikator)</b></h4></center>                      
                                            <canvas id="alum" height="100"></canvas>

                                                </div>

                                                 <div class="tab-pane p-3" id="profile2" role="tabpanel">
                    <div id="box"> 
                                                 <img src="<?php echo base_url();?>assets/images/ucic.jpg" alt="">
                                                 <center><h5><font color="#233c46"><b>Laporan Survei Kepuasan Alumni<br> Periode <?=$periodeku2->tahun;?></b></font></h5></center>

                                                 <table class="" cellpadding="9" border="1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr bgcolor="#ced8dc">
                                    <th width="30" rowspan="2"><b><center>No.</center></b></th>
                                    <th rowspan="2"><b><center>Indikator Penilaian</center></b></th>
                                    <th align="center" colspan="4"><b><center>Tingkat Ketercapaian (%)</center></b></th>
                           
                                      </tr>
                                      <tr bgcolor="#ced8dc" align="center">
                                    <th width="125"><b>Sangat Baik</b></th>
                                    <th width="99"><b>Baik</b></th>
                                    <th width="99"><b>Cukup</b></th>
                                    <th width="99"><b>Kurang</b></th>
                           
                                      </tr>
                                                </thead>
    
    
                                                <tbody>
                                                <?php $no=1; foreach ($lapku as $lap): ?>
                                                <tr align="center">
                                                  <td width="50"><?php echo $no++; ?></td>
                                                  <td align="left"><?php echo $lap->nm_indikator ?></td>
                                                  <td><?php echo number_format(($lap->aa/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ab/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ac/$lap->total)*100,2) ?> %</td>
                                                  <td><?php echo number_format(($lap->ad/$lap->total)*100,2) ?> %</td>
                                                 </tr>
                                                 <?php endforeach; ?>
                               
                                                </tbody>
                                                </table>

</div>
        <br>
        <center>
        <a href="javascript:printDiv('box');">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-print"></i> &nbsp;&nbsp;Cetak&nbsp;&nbsp;&nbsp;</button>
                                </a></center>

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
 <?php $no=2; foreach ($isiku as $isi): ?>
                  <div class="modal fade text-left" id="modal-list<?php echo $isi->id_kep ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Detail Penilaian Survei Kepuasan Alumni (<?php echo $isi->nama ?> - <?php echo $isi->nm_prodi ?>)</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">



                         <table  class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr>
                                    <th width="9"><b>No.</b></th>
                                    <th><b>Pertanyaan</b></th>
                                    <th width="50"><b>Penilaian Kinerja</b></th>
                                    <th width="50"><b>Penilaian Harapan</b></th>
                                  
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no2=1; foreach ($hasilku as $hasil): ?>
                    <?php if ($hasil->id_kep == $isi->id_kep){ ?>
                                <tr>
                                 <td><center><?php echo $no2++; ?></center></td> 
                                 <td><?php echo $hasil->pertanyaan ?></td>  
                                  <td><center><?php echo $hasil->skor_kinerja ?></center></td>  
                                  <td><center><?php echo $hasil->skor_harapan ?></center></td>    
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

 <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>

     <script>
    
$(function () {

'use strict';
if( $('#grafik').length > 0 ){
        var ctx2 = document.getElementById("grafik").getContext("2d");
        var data2 = {
            labels: [
<?php foreach ($grafikku as $grafik): ?>
          "<?php echo $grafik->nm_prodi ?>",
         <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Total Responden",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [
<?php foreach ($grafikku as $grafik): ?>
          <?php echo $grafik->total ?>,
         <?php endforeach; ?>
                    ]
                }
            ]
        };
        
        var hBar = new Chart(ctx2, {
            type:"horizontalBar",
            data:data2,
            
            options: {
                tooltips: {
                    mode:"label"
                },
                scales: {
                    yAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#324148"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#324148"
                        }
                    }],
                    
                },
                elements:{
                    point: {
                        hitRadius:40
                    }
                },
                animation: {
                    duration:   3000
                },
                responsive: true,
                legend: {
                    display: false,
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                }
                
            }
        });
    }


    if( $('#chart_jawab').length > 0 ){
        var ctx6 = document.getElementById("chart_jawab").getContext("2d");
        var data6 = {
             labels: [
            "Sangat Baik",
            "Baik",
            "Cukup",
            "Kurang"
        ],

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_kinerja', 4);
      $this->db->from('kep_alumni');
      $a = $this->db->count_all_results();
 ?>

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_kinerja', 3);
      $this->db->from('kep_alumni');
      $b = $this->db->count_all_results();
 ?>

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_kinerja', 2);
      $this->db->from('kep_alumni');
      $c = $this->db->count_all_results();
 ?>

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_kinerja', 1);
      $this->db->from('kep_alumni');
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


    if( $('#chart_jawab2').length > 0 ){
        var ctx6 = document.getElementById("chart_jawab2").getContext("2d");
        var data6 = {
             labels: [
            "Sangat Penting",
            "Penting",
            "C.Penting",
            "K.Penting"
        ],

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_harapan', 4);
      $this->db->from('kep_alumni');
      $e = $this->db->count_all_results();
 ?>

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_harapan', 3);
      $this->db->from('kep_alumni');
      $f = $this->db->count_all_results();
 ?>

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_harapan', 2);
      $this->db->from('kep_alumni');
      $g = $this->db->count_all_results();
 ?>

 <?php
      $this->db->select('pertanyaan.pertanyaan');
      $this->db->join('alumni', 'kep_alumni.id_user = alumni.id_user');
      $this->db->join('periode', 'kep_alumni.id_periode = periode.id_periode');
      $this->db->join('detail_respon', 'kep_alumni.id_kep = detail_respon.id_kep');
      $this->db->join('pertanyaan', 'pertanyaan.id_pertanyaan = detail_respon.id_pertanyaan');
      $this->db->join('indikator', 'pertanyaan.id_indikator = indikator.id_indikator');
      $this->db->where('periode.id_periode', $idku);
      $this->db->where('indikator.level', "Alumni");
      $this->db->where('detail_respon.skor_harapan', 1);
      $this->db->from('kep_alumni');
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


 if( $('#alum').length > 0 ){
        var ctx2 = document.getElementById("alum").getContext("2d");
        var data2 = {
            labels: [
                   <?php foreach ($grafikku2 as $grafik2): ?>
          "<?php echo $grafik2->nm_indikator ?>",
         <?php endforeach; ?>
            ],
            datasets: [
                {
                    
                    label: "Rata-rata Kinerja",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [

                    <?php foreach ($grafikku2 as $grafik2): ?>
          <?php echo number_format($grafik2->rata2_kinerja, 2) ?>,
         <?php endforeach; ?>

                    ]
                },
                {
                    label: "Rata-rata Harapan",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [

                    <?php foreach ($grafikku2 as $grafik2): ?>
          <?php echo number_format($grafik2->rata2_harapan, 2) ?>,
         <?php endforeach; ?>

                    ]
                }
            ]
        };
        
        var hBar = new Chart(ctx2, {
            type:"horizontalBar",
            data:data2,
            
            options: {
                tooltips: {
                    mode:"label"
                },
                scales: {
                    yAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#324148"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#324148"
                        }
                    }],
                    
                },
                elements:{
                    point: {
                        hitRadius:40
                    }
                },
                animation: {
                    duration:   3000
                },
                responsive: true,
                legend: {
                    display: false,
                },
                tooltip: {
                    backgroundColor:'rgba(33,33,33,1)',
                    cornerRadius:0,
                    footerFontFamily:"'Poppins'"
                }
                
            }
        });
    }



  }); // End of use strict
    </script>             