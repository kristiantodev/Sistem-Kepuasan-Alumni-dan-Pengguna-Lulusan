

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
                                <h3 class="page-title"><b><i class='fa fa-home'></i>&nbsp;Dashboard Sistem Kepuasan</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Alumni dan Pengguna Lulusan</li>
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
            
                                <div class="col-xl-6 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Periode Aktif</h6>
                                                    <h4 class="mb-3 mt-0"><b><?=$periodeku->nm_periode;?> <?=$periodeku->tahun;?></b></h4>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock  display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Program Studi</h6>
                                                    <h4 class="mb-3 mt-0"><b><?=$prodiku->nm_prodi;?></b></h4>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-bookmark display-2"></i>
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
            
                                            <center><h4 class="mt-0 header-title"><b>Kepuasan Alumni </b></h4></center>
            
                                                        
                                            <canvas id="chart_alum" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                          <center>  <h4 class="mt-0 header-title"><b>Kepuasan Pengguna Lulusan </b></h4></center>
            
                                                       
                                            <canvas id="chart_stake" height="180"></canvas>
            
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
            "Tingkat Kinerja/Kepuasan",
            "Tingkat Harapan/Kepentingan"
        ],
         datasets: [
            {
                data: [<?php echo number_format($stake->rata2_kinerja,2); ?>, <?php echo number_format($stake->rata2_harapan,2); ?>],
                backgroundColor: [
                    "#00a0df",
                    "#c3cc34"
                ],
                hoverBackgroundColor: [
                    "#00acf0",
                    "#d0d962"
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


    if( $('#chart_alum').length > 0 ){
        var ctx6 = document.getElementById("chart_alum").getContext("2d");
        var data6 = {
             labels: [
            "Tingkat Kinerja/Kepuasan",
            "Tingkat Harapan/Kepentingan"
        ],
        datasets: [
            {
                data: [<?php echo number_format($alum->rata2_kinerja,2); ?>, <?php echo number_format($alum->rata2_harapan,2); ?>],
                backgroundColor: [
                    "#0293c9",
                    "#c3cc34"
                ],
                hoverBackgroundColor: [
                    "#00a0df",
                    "#d0d962"
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