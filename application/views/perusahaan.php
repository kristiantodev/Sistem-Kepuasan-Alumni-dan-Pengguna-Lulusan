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

<?php echo $this->db->count_all_results('instansi');?>
                                                    Total data Instansi atau Perusahaan</b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-building display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 </div>
  <!-- selesai row -->

                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="">
                                                <tr>
                                    <th width="9"><b>No</b></th>
                                    <th><b>Nama Instansi</b></th>
                                    <th><b>Alamat</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($instansiku as $instansi): ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $instansi->nm_instansi ?></td>
                                    <td><?php echo $instansi->alamat ?></td>
                                    
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

    </body>

</html>

                