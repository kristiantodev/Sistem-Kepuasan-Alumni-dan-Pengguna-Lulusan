<!DOCTYPE html>
<html>

    <head>
        
        <title>Sistem Alumni Universitas Catur Insan Cendekia</title>
        
        <link rel="shortcut icon" href="<?php echo base_url();?>assets/images/cic.png">

        <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/morris/morris.css">
        <!-- DataTables -->
        <link href="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <!-- Responsive datatable examples -->
        <link href="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/metismenu.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="<?php echo base_url();?>assets/css/style2.css" rel="stylesheet" type="text/css">
    </head>

    <body class="bg-muted">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <img src="<?php echo base_url();?>assets/images/cic.png" alt="" height="70" width="154">
                </div>

                <nav class="navbar-custom">

                    <ul class="navbar-right d-flex list-inline float-right mb-0">
                        
 <li></li>
                        
                          

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            
                        </li>                        
                        <li class="d-none d-sm-block">
                            
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->

           







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
                                <h3 class="page-title"><b><i class='fa fa-home'></i>&nbsp;Sistem Kepuasan Alumni dan Stakeholder</b></h3>
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
<a href="<?php echo site_url();?>portal/" class="text-white"><i class="fas fa-angle-double-left"></i>&nbsp; Kembali ke Halaman Awal</a></b></b></h6>
                                                   
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

Survei Kepuasan Alumni Periode <?=$periodeku->tahun;?></b></h6>
                                                    
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

                                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <center><h4 class="mt-0 header-title"><b>Kepuasan Alumni
                                            (<?php echo $this->db->where('id_periode', $periodeku->id_periode)->count_all_results('kep_alumni');?> Penilaian) Periode <?=$periodeku->tahun;?></b></h4></center>
            
                                                        
                                            <canvas id="chart_alum" height="180"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
            
                                <div class="col-xl-6">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                           <center><h4 class="mt-0 header-title"><b>Kepuasan Alumni</b></h4></center>
                                                                  
                                            <canvas id="chart_88" height="300"></canvas>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                                            

                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->



                <footer class="footer">
                    © 2020 Kristianto - Sistem Alumni Universitas CIC. All Right Reserved
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/metisMenu.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery.slimscroll.js"></script>
        <script src="<?php echo base_url();?>assets/js/waves.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Peity JS -->
        <script src="<?php echo base_url();?>assets/plugins/peity/jquery.peity.min.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/morris/morris.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/raphael/raphael-min.js"></script>

        <script src="<?php echo base_url();?>assets/pages/dashboard.js"></script>
        <!-- Required datatable js -->
        <script src="<?php echo base_url();?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
        <!-- Buttons examples -->
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.buttons.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/jszip.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/pdfmake.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/vfs_fonts.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.html5.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.print.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/buttons.colVis.min.js"></script>
        <!-- Responsive examples -->
        <script src="<?php echo base_url();?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
        <script src="<?php echo base_url();?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>

        <!-- Datatable init js -->
        <script src="<?php echo base_url();?>assets/pages/datatables.init.js"></script>
           <script src="<?php echo base_url();?>assets/js/datatable-advanced.js"></script>
        <!-- App js -->
        <script src="<?php echo base_url();?>assets/js/app.js"></script>

         <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
                <!-- ChartJS -->
    <script src="<?php echo base_url();?>assets/Chart.min.js"></script>
    <!-- Superieur Admin for Chart purposes -->
    <script src="<?php echo base_url();?>assets/widget-charts2.js"></script>

 <script>
    
$(function () {

'use strict';

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


    if( $('#chart_88').length > 0 ){
        var ctx2 = document.getElementById("chart_88").getContext("2d");
        var data2 = {
            labels: [
                 <?php foreach ($grafikku3 as $grafik3): ?>
            "<?php echo $grafik3->tahun ?>",
<?php endforeach; ?>
            ],
            datasets: [
                {
                    label: "Tingkat Kinerja",
                    backgroundColor: "#0293c9",
                    borderColor: "#0293c9",
                    data: [
<?php foreach ($grafikku3 as $grafik3): ?>
                    <?php echo $grafik3->rata2_kinerja ?>,

                    <?php endforeach; ?>
                    ]
                },
                {
                    label: "Tingkat Harapan",
                    backgroundColor: "#c3cc34",
                    borderColor: "#c3cc34",
                    data: [
<?php foreach ($grafikku3 as $grafik3): ?>
                    <?php echo $grafik3->rata2_harapan ?>,

                    <?php endforeach; ?>
                    ]
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

    </body>

</html>

                