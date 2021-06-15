

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                <h3 class="page-title"><b><i class='fa fa-home'></i>&nbsp;Selamat Datang di Sistem Alumni</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Universitas Catur Insan Cendekia </li>
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
                       
                        <div class="page-content-wrapper">
                            <div class="row">
             <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='<?php echo site_url();?>adm/alumni' class="text-white">Total</a></h6>
                                                    <h2 class="mb-3 mt-0"><b> 

<?php echo $this->db->count_all_results('alumni');?>
                                                    Alumni</b></h2>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-graduation-cap display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href="<?php echo site_url();?>adm/periode" class="text-white">Periode Aktif</a></h6>
                                                    <h2 class="mb-3 mt-0"><b><?=$periodeku->nm_periode;?> <?=$periodeku->tahun;?></b></h2>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock  display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href="<?php echo site_url();?>adm/stakeholder" class="text-white">Total</a></h6>
                                                    <h2 class="mb-3 mt-0"><b>
<?php echo $this->db->count_all_results('stakeholder');?>
 P.Lulusan</b></h2>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fab fa-black-tie display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                   
                            </div>
                            <!-- end row -->

                             

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><b>Kepuasan Alumni (2 Responden)</b></h4>
            
                                                        
                                            <canvas id="alum" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title"><b>Kepuasan Pengguna Lulusan ( Responden)</b></h4>
            
                                                       
                                            <canvas id="stake" height="180"></canvas>
            
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
if( $('#stake').length > 0 ){
        var ctx2 = document.getElementById("stake").getContext("2d");
        var data2 = {
            labels: ["Etika", "Keahlian Pada Bidang Ilmu (Kompetensi Utama)", "Kemampuan Berbahasa Asing", "Penggunaan Teknologi Informasi", "Kemampuan Berkomunikasi", "Kerjasama Tim", "Pengembangan Diri"],
            datasets: [
                {
                    label: "Kinerja",
                    backgroundColor: "#0285b4",
                    borderColor: "#0285b4",
                    data: [10, 59, 40, 80, 59, 40, 99]
                },
                {
                    label: "Kepentingan",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [48, 88, 50, 10, 59, 40, 80]
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
            labels: ["Kurikulum", "Pelayanan Karir", "Sarana dan Prasarana"],
            datasets: [
                {
                    
                    label: "Kinerja",
                    backgroundColor: "#0285b4",
                    borderColor: "#0285b4",
                    data: [10, 59, 40]
                },
                {
                    label: "Harapan",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [48, 88, 50]
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