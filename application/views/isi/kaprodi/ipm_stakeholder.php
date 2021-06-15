
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
                                    <h3 class="page-title"><b><i class="fas fa-chart-line"></i>&nbsp;&nbsp;Importance Performance Matrix</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Kepuasan Pengguna Lulusan</li>
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
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><font color=""><i class="fas fa-th-list"></i>&nbsp; Tahap 1 dan 2 : Nilai Indeks Kinerja (NIK)</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><font color=""><i class="fas fa-th-large"></i>&nbsp; Tahap 3 : Pemetaan Atribut</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#home2" role="tab"><b><font color=""><i class="fas fa-chart-line"></i>&nbsp; Diagram Kartesius</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><font color=""><b><i class="fas fa-th-large"></i>&nbsp; Tahap 4 : Usulan Perbaikan</font></b></a>
                                                </li>

                                                
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">

                                                <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Nilai Indeks Kinerja Kepuasan (NIK<sub>p</sub>) adalah nilai rata-rata dari penilaian tingkat kepuasan/kinerja dari responden.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Nilai Indeks Kinerja Kepentingan (NIK<sub>i</sub>) adalah nilai rata-rata dari penilaian tingkat harapan/kepentingan dari responden.</font>
                                              
                                                </div>

                                                    <table class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="250"><b>Pertanyaan</b></th>
                                    <th width="50" align="center"><b><center>Nilai Indeks Kinerja Kepuasan (NIK<sub>p</sub>)</center></b></th>
                                    <th width="40" align="center"><b><center>Nilai Indeks Kinerja Kepentingan (NIK<sub>i</sub>)</center></b></th>
                                    
                                  
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
                                    <?php 
                                    $jumlahmis = $jumlahmis + $rata->rata2_harapan;
                                    $jumlahmss = $jumlahmss + $rata->rata2_kinerja;
                                    $i = $i+1;
                                     ?>
                                             <tr>
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="250"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_kinerja,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_harapan,2) ?></td>
                                            
                                            </tr>
                                   <?php endforeach; ?>
                                <tr align="center">
                                  <td colspan="2"><b>Jumlah</b></td>
                                  <td><b><?php echo number_format($jumlahmss,2); ?></b></td>
                                  <td><b><?php echo number_format($jumlahmis,2); ?></b></td>
                                </tr>
                                <?php 
                                $ratap = ($i!=0)?($jumlahmss/$i):0;
                                $ratai = ($i!=0)?($jumlahmis/$i):0;
                                 ?>
                                                </tbody>
                                            </table>
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">

                                                <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Jika Nilai NIK<sub>p</sub> <= Rata-rata NIK<sub>p</sub> dan Nilai NIK<sub>i</sub> >= Rata-rata NIK<sub>i</sub>, maka masuk kelompok Kuadran I.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Jika Nilai NIK<sub>p</sub> >= Rata-rata NIK<sub>p</sub> dan Nilai NIK<sub>i</sub> >= Rata-rata NIK<sub>i</sub>, maka masuk kelompok Kuadran II.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Jika Nilai NIK<sub>p</sub> <= Rata-rata NIK<sub>p</sub> dan Nilai NIK<sub>i</sub> <= Rata-rata NIK<sub>i</sub>, maka masuk kelompok Kuadran III.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Jika Nilai NIK<sub>p</sub> >= Rata-rata NIK<sub>p</sub> dan Nilai NIK<sub>i</sub> >= Rata-rata NIK<sub>i</sub>, maka masuk kelompok Kuadran IV.
                                                 </font>
                                              
                                                </div>

                                                    <table class="table table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="250"><b>Pertanyaan</b></th>
                                    <th width="40" align="center"><b><center>Nilai Indeks Kinerja Kepuasan (NIK<sub>p</sub>)</center></b></th>
                                    <th width="40" align="center"><b><center>Nilai Indeks Kinerja Kepentingan (NIK<sub>i</sub>)</center></b></th>
                                    <th width="40" align="center"><b><center>Kelompok Atribut (Pemetaan IPA Matrix)</center></b></th>
                                    <th width="40" align="center"><b><center>Keterangan Kelompok Atribut</center></b></th>
                                  
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
                                    <?php 
                                    $jumlahmis = $jumlahmis + $rata->rata2_harapan;
                                    $jumlahmss = $jumlahmss + $rata->rata2_kinerja;
                                    $i = $i+1;

                                    if ($rata->rata2_kinerja <= $ratap && $rata->rata2_harapan >= $ratai) {
                                      $kelompok = "Kuadran I";
                                      $colorku = "#f83f37";
                                      $ket = "Prioritas Utama";
                                    }elseif ($rata->rata2_kinerja >= $ratap && $rata->rata2_harapan >= $ratai) {
                                      $kelompok = "Kuadran II";
                                      $colorku = "#22af47";
                                      $ket = "Pertahankan";
                                    }elseif ($rata->rata2_kinerja <= $ratap && $rata->rata2_harapan <= $ratai) {
                                      $kelompok = "Kuadran III";
                                      $colorku = "#cdb308";
                                      $ket = "Prioritas Rendah";
                                    }elseif ($rata->rata2_kinerja >= $ratap && $rata->rata2_harapan <= $ratai) {
                                      $kelompok = "Kuadran IV";
                                      $colorku = "#6640b2";
                                      $ket = "Berlebihan";
                                    }
                                     ?>
                                             <tr>
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="400"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_kinerja,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_harapan,2) ?></td>
                                            <td width="2" align="center" bgcolor="<?php echo $colorku; ?>"><font color="white"><?php echo $kelompok; ?></font></td>
                                            <td width="2" align="center" bgcolor="<?php echo $colorku; ?>"><font color="white"><?php echo $ket; ?></font></td>
                                            
                                            </tr>
                                   <?php endforeach; ?>
                                <tr bgcolor="#eaecec"  align="center">
                                  <td colspan="2"><b>Rata-rata Nilai Indeks Kinerja</b></td>
                                  <td><b><?php echo number_format($ratap,2); ?></b></td>
                                  <td><b><?php echo number_format($ratai,2); ?></b></td>
                                </tr>
                                                </tbody>
                                            </table>

                                            <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Kelompok :</b> </font></h6>
                                                  
                                                 <p align="justify"><font color="#0285b4"><i class='fas fa-angle-double-right'></i>&nbsp;<b>Kuadran I (Prioritas Utama)</b>
Menunjukkan faktor atau atribut yang dianggap mempengaruhi kepuasan pelanggan, termasuk unsur-unsur jasa yang dianggap sangat penting, namun manajemen masih belum melaksanakannya sesuai dengan keinginan pelanggan. Sehingga dirasakan mengecewakan/tidak puas.
</font></p>
                                                <p align="justify"> <font color="#0285b4"><i class='fas fa-angle-double-right'></i>&nbsp;<b>Kuadran II (Pertahankan Prestasi)</b>
 Menunjukkan unsur jasa pokok yang telah berhasil dilaksanakan oleh perusahaan, untuk itu wajib dipertahankannya. Dianggap sangat penting dan sangat memuaskan.
</font></p>
                                                <p align="justify"><font color="#0285b4"> <i class='fas fa-angle-double-right'></i>&nbsp;<b>Kuadran III (Prioritas) </b>
Menunjukkan beberapa faktor/atribut yang kurang penting pengaruhnya bagi pelanggan/konsumen, pelaksanaan oleh perusahaan pun biasa-biasa saja. Dianggap kurang penting dan kurang memuaskan bagi pelanggan.
</font></p>
                                                 <p align="justify"><font color="#0285b4"><i class='fas fa-angle-double-right'></i>&nbsp;<b>Kuadran IV (Berlebihan) </b>
Menunjukkan faktor yang mempengaruhi pelanggan kurang penting, akan tetapi pelaksanaannya berlebihan. Dianggap kurang penting tetapi sangat memuaskan.</font></p>

                                                
                                              
                                                </div>

                                                </div>

                                                <div class="tab-pane p-3" id="home2" role="tabpanel">
                                               
  <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">           
                                                        
                                            <canvas id="chart_i" height="150"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
         
                                            <canvas id="chart_ii" height="150"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->             

<div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
                        
                                            <canvas id="chart_iii" height="150"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
         
                                            <canvas id="chart_iv" height="150"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->             
          
                                            <canvas id="chart_peta" height="125"></canvas>


            
                                                </div>

                                                 <div class="tab-pane p-3" id="profile2" role="tabpanel">

                                                 <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <p align="justify"><i class='fas fa-angle-double-right'></i>&nbsp; Usulan perbaikan atribut layanan atau atribut kinerja perusahaan dapat di berikan setelah hasil dari pemetaan/pengelompokan Importance-Performance Matrix selesai dilakukan. 
                                                 Dari pemetaan tersebut akan diperoleh variabel atau atribut apa saja yang berada pada kuadran I.</p>
                                                 </font>
                                              
                                                </div>

                                                <canvas id="terbaik" height="400" width='999'></canvas>

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

if( $('#chart_peta').length > 0 ){
    var ctx5 = document.getElementById("chart_peta").getContext("2d");
    var data5 = {
      datasets: [
        {
          label: 'Kuadran I (Prioritas Utama)',
          data: [
          <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja <= $ratap && $rata->rata2_harapan >= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#f83f37",
          hoverBackgroundColor: "#f83f37",
        },
        {
          label: 'Kuadran II (Pertahankan)',
          data: [
            <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja >= $ratap && $rata->rata2_harapan >= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#22af47",
          hoverBackgroundColor: "#22af47",
        },
        {
          label: 'Kuadran III (Prioritas Rendah)',
          data: [
            <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja <= $ratap && $rata->rata2_harapan <= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#cdb308",
          hoverBackgroundColor: "#cdb308",
        },
        {
          label: 'Kuadran IV (Berlebihan)',
          data: [
            <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja >= $ratap && $rata->rata2_harapan <= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#6640b2",
          hoverBackgroundColor: "#6640b2",
        }]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 5,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  }


  if( $('#terbaik').length > 0 ){
        var ctx2 = document.getElementById("terbaik").getContext("2d");
        var data2 = {
            labels: [
<?php foreach ($petaku as $terbaik): ?>
            <?php 
                if ($terbaik->rata2_kinerja <= $ratap && $terbaik->rata2_harapan >= $ratai) {
            ?>
            "<?php echo $terbaik->pertanyaan ?> (<?php echo $terbaik->nm_indikator ?>)",
            <?php } ?>
<?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Nilai Prioritas",
                    backgroundColor: "#f83f37",
                    borderColor: "#f83f37",
                    data: [
<?php foreach ($petaku as $terbaik): ?>
           <?php 
                if ($terbaik->rata2_kinerja <= $ratap && $terbaik->rata2_harapan >= $ratai) {
            ?>
            <?php echo ($terbaik->rata2_kinerja*$terbaik->rata2_harapan) ?>,
             <?php } ?>
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
                responsive: false,
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

 if( $('#chart_i').length > 0 ){
    var ctx5 = document.getElementById("chart_i").getContext("2d");
    var data5 = {
      datasets: [
        {
          label: 'Kuadran I (Prioritas Utama)',
          data: [
          <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja <= $ratap && $rata->rata2_harapan >= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#f83f37",
          hoverBackgroundColor: "#f83f37",
        },
        
        ]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 5,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  }  

  if( $('#chart_ii').length > 0 ){
    var ctx5 = document.getElementById("chart_ii").getContext("2d");
    var data5 = {
      datasets: [
        
        {
          label: 'Kuadran II (Pertahankan)',
          data: [
            <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja >= $ratap && $rata->rata2_harapan >= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#22af47",
          hoverBackgroundColor: "#22af47",
        },
        ]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 5,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  } 

  if( $('#chart_iii').length > 0 ){
    var ctx5 = document.getElementById("chart_iii").getContext("2d");
    var data5 = {
      datasets: [
        
        {
          label: 'Kuadran III (Prioritas Rendah)',
          data: [
            <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja <= $ratap && $rata->rata2_harapan <= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#cdb308",
          hoverBackgroundColor: "#cdb308",
        }]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 5,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  }

  if( $('#chart_iv').length > 0 ){
    var ctx5 = document.getElementById("chart_iv").getContext("2d");
    var data5 = {
      datasets: [
        
        {
          label: 'Kuadran IV (Berlebihan)',
          data: [
            <?php $n=1; $jumlahmis=0; $jumlahmss=0; $i=0; foreach ($ratarata as $rata): ?>
          <?php if ($rata->rata2_kinerja >= $ratap && $rata->rata2_harapan <= $ratai) { ?>
            {
              x: <?php echo number_format($rata->rata2_kinerja,2) ?>,
              y: <?php echo number_format($rata->rata2_harapan,2) ?>,
              r: 15
            },
            <?php } ?>
            <?php endforeach; ?>
          ],
          backgroundColor:"#6640b2",
          hoverBackgroundColor: "#6640b2",
        }]
    };
    
    var bubbleChart = new Chart(ctx5,{
      type:"bubble",
      data:data5,
      options: {
        elements: {
          points: {
            borderWidth: 1,
            borderColor: 'rgb(33, 33, 33)'
          }
        },
        scales: {
          xAxes: [
          {
            ticks: {
              min: 0,
              max: 5,
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }],
          yAxes: [
          {
            ticks: {
              fontFamily: "Poppins",
              fontColor:"#878787"
            },
            gridLines: {
              color: "rgba(135,135,135,0)",
            }
          }]
        },
        animation: {
          duration: 3000
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
        }
      }
    });
  }


  }); // End of use strict
    </script>   