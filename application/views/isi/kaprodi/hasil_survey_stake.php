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
                                    <h3 class="page-title"><b><i class="fas fa-chart-pie"></i>&nbsp;Hasil Kepuasan Pengguna Lulusan</b></h3>
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

Program Studi : <?=$myprodi->nm_prodi;?></b></h6>
                                                    
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
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><font color=""><i class="fas fa-chart-area"></i>&nbsp; Grafik Pengguna Lulusan</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><font color=""><i class="fas fa-chart-bar"></i>&nbsp; Kinerja Alumni</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#home2" role="tab"><b><font color=""><i class="fas fa-chart-pie"></i>&nbsp; Grafik Tingkat Kepuasan dan Kepentingan</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><font color=""><b><i class="fas fa-th-large"></i>&nbsp; Laporan Tingkat Ketercapaian</font></b></a>
                                                </li>
                                                
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">
                                                    
                                                <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><b>Pengguna Lulusan (Mengisi)</b></h4>          
                                            <canvas id="grafik" height="150"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Pengguna Lulusan (Belum Mengisi)</b></h4></center>         
                                            <canvas id="grafiku" height="175"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->         
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">
                                              <center><h4 class="mt-0 header-title"><b>5 Kinerja Alumni Program Studi <?=$myprodi->nm_prodi;?> Terbaik</b></h4></center>      
                                                      
                                                      <canvas id="terbaik" height="300"></canvas>

                                                </div>

                                                <div class="tab-pane p-3" id="home2" role="tabpanel">

 

                                <center><h4 class="mt-0 header-title"><b>Tingkat Kinerja dan Harapan Pengguna Lulusan (Indikator)</b></h4></center>                      
                                            <canvas id="alum" height="150"></canvas>

                                                </div>

                                                 <div class="tab-pane p-3" id="profile2" role="tabpanel">
                                                 <div id="box">
                                                 <img src="<?php echo base_url();?>assets/images/ucic.jpg" alt="">
                                                 <center><h6><b>Laporan Survei Kepuasan Pengguna Lulusan<br> Program Studi <?=$myprodi->nm_prodi;?><br> Periode <?=$periodeku2->tahun;?></b></h6></center>

                                                 <table class="" cellpadding="7" border="1" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                <tr bgcolor="#ced8dc">
                                    <th width="30" rowspan="2"><b><center>No.</center></b></th>
                                    <th rowspan="2"><b><center>Indikator Penilaian</center></b></th>
                                    <th align="center" colspan="4"><b><center>Tingkat Kepuasan Pengguna (%)</center></b></th>
                           
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
          "<?php echo $grafik->nm_instansi ?>",
         <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Total Dinilai",
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


if( $('#grafiku').length > 0 ){
        var ctx2 = document.getElementById("grafiku").getContext("2d");
        var data2 = {
            labels: [
<?php foreach ($grafikku3 as $grafik3): ?>
          "<?php echo $grafik3->nm_instansi ?>",
         <?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Total Belum Dinilai",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [
<?php foreach ($grafikku3 as $grafik3): ?>
          <?php echo $grafik3->total ?>,
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


 
 if( $('#alum').length > 0 ){
        var ctx2 = document.getElementById("alum").getContext("2d");
        var data2 = {
            labels: [
                   <?php foreach ($grafikku2 as $grafik2): ?>
          "<?php echo $grafik2->nm_indikator ?> (<?php echo $grafik2->tahun ?>)",
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


    if( $('#terbaik').length > 0 ){
        var ctx2 = document.getElementById("terbaik").getContext("2d");
        var data2 = {
            labels: [
            <?php foreach ($terbaikku as $terbaik): ?>
            "<?php echo $terbaik->nama ?>",
<?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Rata-rata Kinerja",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [
         <?php foreach ($terbaikku as $terbaik): ?>
            <?php echo number_format($terbaik->rata2_kinerja, 2) ?>,

                    <?php endforeach; ?>]
                }
            ]
        };
        
        var hBar = new Chart(ctx2, {
            type:"bar",
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
                            fontColor:"#878787"
                        }
                    }],
                    xAxes: [{
                        stacked: true,
                        gridLines: {
                            color: "rgba(135,135,135,0)",
                        },
                        ticks: {
                            fontFamily: "Poppins",
                            fontColor:"#878787"
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
                maintainAspectRatio:false,
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