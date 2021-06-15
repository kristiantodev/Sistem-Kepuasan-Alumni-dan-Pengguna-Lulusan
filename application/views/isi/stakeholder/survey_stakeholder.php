<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" />
<link href="<?php echo base_url();?>assets/survey/css/style.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/survey/css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url();?>assets/survey/css/custom.css" rel="stylesheet">
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
                                    <h3 class="page-title"><b><font color="#075875"><i class='fas fa-tasks'></i>&nbsp;Kuesioner Kepuasan Pengguna Lulusan </font></b></h3>
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
                        </div>
                        <!-- end row -->

                        <div class="page-content-wrapper">
                            <div class="row">
                                <div class="col-12">

                                <div class="widget blue">
                            <div class="widget-title">
                                <h4><i class="fas fa-tasks"></i>&nbsp;<?=$periodeku->nm_periode?> Pengguna Lulusan  Periode <?=$periodeku->tahun?></h4>
                            
                            </div>
                                    <div class="card m-b-20">
                                        <div class="card-body">
<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <b><i class="fas fa-bullhorn"></i>&nbsp;&nbsp;Silahkan berikan penilaian terhadap Alumni yang bekerja ditempat Bapak/Ibu.</b>
                                                </div>
                   
                               <table class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="#eaecec">
                                                <tr>
                                    <th width="9"><b>No.</b></th>
                                    <th><b>Foto</b></th>
                                    <th><b>Nama Alumni (Pekerja)</b></th>
                                    <th><b>Jabatan (Posisi)</b></th>
                                    <th width="150"><b>Aksi</b></th>
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
                                    
                                    <td align="center">
                  <?php if ($alum->status_isi == 1){ ?>  
                 <button type="button" class="btn btn-success waves-effect waves-light"><font color="white">
                                    <i class="fas fa-check "></i> &nbsp;Dinilai&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></button>
                 <?php }else{ ?>
                 <a data-toggle="modal" data-target="#modal-edit<?php echo $alum->id_kep ?>">
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
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->




<?php $no=1; $i=1; foreach ($alumku3 as $alum2){ ?>
  <!-- Modal -->
<div class="modal fade text-left" id="modal-edit<?php echo $alum2->id_kep ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'><i class="fas fa-book-open"></i>&nbsp;&nbsp;Kuesioner Kepuasan Pengguna Lulusan (<?php echo $alum2->nama ?> - <?php echo $alum2->jabatan ?>)</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">
                        

                <div id="wizard_container<?php echo $i; ?>">
                          <div id="top-wizard">
                              <div id="progressbar<?php echo $i; ?>"></div>
                          </div>
                          <!-- /top-wizard -->
                          <form id="wrapped<?php echo $i; ?>" action="<?php echo site_url('halaman_stakeholder/proses_survey'); ?>" method="POST" autocomplete="off">
                              <input id="website<?php echo $i; ?>" name="website" type="hidden" value="">
                              <input type="hidden" readonly value="<?php echo $alum2->id_kep ?>" name="id_kep" class="form-control">

                              <!-- Leave for security protection, read docs for details -->
                              <div id="middle-wizard">

                               <div class="step">

                               
                               <div class='alert bg-primary3 alert-dismissible col-12'>
                                <center><font color="white"><i class='fa fa-user'></i>&nbsp;&nbsp;&nbsp;Informasi Lulusan yang dinilai :</font></center>
                                </div>


                               <div class="row">
                                          <div class="col-lg-3 col-md-6 col-3">
                                          <center><img src="<?php echo base_url('assets/images/users/'.$alum2->foto) ?>" alt="" height="175"></center>
                                          </div>

                                          <div class="col-lg-9 col-md-6 col-9">

                                      <div class="form-group">
                                          <label for="email"><font color='red'>NIM</font></label>
                                          <input type="text" name="email" value="<?php echo $alum2->nim ?>" id="email" class="form-control" readonly="">
                                      </div>
                                      <div class="form-group">
                                          <label for="lastname">Nama Alumni</label>
                                          <input type="text" name="lastname" value="<?php echo $alum2->nama ?>" readonly id="lastname" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Jabatan</label>
                                          <input type="text" value="<?php echo $alum2->jabatan ?>" readonly name="email" id="email" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="lastname">Penilai</label>
                                          <input type="text" name="lastname" value="<?php echo $myuser2->nama_p ?> (<?php echo $alum2->nm_instansi ?>)" readonly id="lastname" class="form-control">
                                      </div>
                                       <div class="form-group">
                                          <label for="email">Periode Survei Kepuasan Pengguna</label>
                                          <input type="text" value="Periode <?=$periodeku->tahun?>" readonly name="email" id="email" class="form-control">
                                      </div>
                                      
                                      
                                      </div>
                                      </div>

                                  </div>
                                  <!-- /step 5-->
<?php $no2=1; $u=1; foreach ($pertanyaanku as $pertanyaan){ ?>
                                  <div class="step">
                                      <h3 class="main_question"><font color="#40606d"><strong>Pertanyaan Ke-<?php echo $no2++; ?></strong><strong><font color="#40606d">Indikator Penilaian : <?php echo $pertanyaan->nm_indikator ?></font></strong><?php echo $pertanyaan->pertanyaan ?></font></h3>
                                      <input type="hidden" name="id_pertanyaan<?php echo $u; ?>"  value="<?php echo $pertanyaan->id_pertanyaan ?>" class="form-control" >
                                      <div class="review_block">                                 
                                      <div class="row">
                                          <div class="col-lg-6 col-md-6 col-6">
                                          <font color="#40606d">Kenyataan :</font><br><br>
                                              <ul>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="poor_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="4" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="poor_<?php echo $u; ?>"></label>
                                                      <label for="poor_<?php echo $u; ?>" class="wrapper">Sangat Baik</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="average_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="3" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="average_<?php echo $u; ?>"></label>
                                                      <label for="average_<?php echo $u; ?>" class="wrapper">Baik</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="excellent_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="2" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="excellent_<?php echo $u; ?>"></label>
                                                      <label for="excellent_<?php echo $u; ?>" class="wrapper">Cukup</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="outstanding_<?php echo $u; ?>" name="skor_kinerja<?php echo $u; ?>" class="required" value="1" onchange="getVals(this, 'question_<?php echo $u; ?>');">
                                                      <label class="radio" for="outstanding_<?php echo $u; ?>"></label>
                                                      <label for="outstanding_<?php echo $u; ?>" class="wrapper">Kurang</label>
                                                  </div>
                                              </li>
                                            
                                          </ul>
                                          </div>
                                          <div class="col-6">
                                         <font color="#40606d"> Tingkat Harapan/Kepentingan :</font><br><br>
                                              <ul>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="poor2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="4" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="poor2_<?php echo $u; ?>"></label>
                                                      <label for="poor2_<?php echo $u; ?>" class="wrapper">Sangat Penting</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="average2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="3" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="average2_<?php echo $u; ?>"></label>
                                                      <label for="average2_<?php echo $u; ?>" class="wrapper">Penting</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="excellent2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="2" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="excellent2_<?php echo $u; ?>"></label>
                                                      <label for="excellent2_<?php echo $u; ?>" class="wrapper">Cukup Penting</label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="checkbox_radio_container">
                                                      <input type="radio" id="outstanding2_<?php echo $u; ?>" name="skor_harapan<?php echo $u; ?>" class="required" value="1" onchange="getVals(this, 'question2_<?php echo $u; ?>');">
                                                      <label class="radio" for="outstanding2_<?php echo $u; ?>"></label>
                                                      <label for="outstanding2_<?php echo $u; ?>" class="wrapper">Kurang Penting</label>
                                                  </div>
                                              </li>
                                              
                                          </ul>
                                          </div>
                                      </div>
                                      <!-- /row -->                                         

                                      </div>
                                      
                                  </div>
                                  <!-- /step 1-->
   <?php $u++; } ?>    
                               <div class="submit step">
                                      <h3 class="main_question"><strong>Berikan Saran anda untuk pengembangan selanjutnya</strong><font color="#40606d">Kritik dan Saran</font></h3>
                                      <div class="review_block">
                                        <textarea id="elm1" name="kritik_saran" rows="5"></textarea>  
                                      </div>
                                  </div>
                                  <!-- /step 3-->

<input type="hidden" readonly value="<?php echo $periodeku->id_periode ?>" name="id_periode" class="form-control">
                             
                           <div class="modal-footer">
                              </div>
                              <!-- /middle-wizard -->

                              <div id="bottom-wizard">
                                  <button type="button" name="backward" class="backward"><i class="fa fa-arrow-circle-left"></i>&nbsp;Sebelumnya</button>
                                  <button type="button" name="forward" class="forward">Selanjutnya &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                  <button type="submit" name="process" class="submit"><i class="far fa-paper-plane "></i>&nbsp;Kirim</button>
                              </div>
                              <!-- /bottom-wizard -->
</div>
                          </form>
                      </div>
                      <!-- /Wizard container -->


                      </div>
                      
                    </div>
                    </div>
                  </div>
                   

 <?php $i++; } ?> 



 

  

 <!-- COMMON SCRIPTS -->
  <script src="<?php echo base_url();?>assets/survey/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/survey/js/common_scripts.js"></script>
  <script src="<?php echo base_url();?>assets/survey/js/functions.js"></script>

  <!-- Wizard script -->
  <script src="<?php echo base_url();?>assets/survey/js/survey_func.js"></script>

        <script src="<?php echo base_url();?>assets/plugins/tinymce/tinymce.min.js"></script>

        <script>
            $(document).ready(function () {
                if($("#elm1").length > 0){
                    tinymce.init({
                        selector: "textarea#elm1",
                        theme: "modern",
                        height:175,
                        plugins: [
                            "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                            "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                            "save table contextmenu directionality emoticons template paste textcolor"
                        ],
                        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
                        style_formats: [
                            {title: 'Bold text', inline: 'b'},
                            {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                            {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                            {title: 'Example 1', inline: 'span', classes: 'example1'},
                            {title: 'Example 2', inline: 'span', classes: 'example2'},
                            {title: 'Table styles'},
                            {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                        ]
                    });
                }
            });
        </script>
                  