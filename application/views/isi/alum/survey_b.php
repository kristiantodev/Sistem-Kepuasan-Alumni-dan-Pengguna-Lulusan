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
                                    <h3 class="page-title"><b><font color="#075875"><i class='fas fa-tasks'></i>&nbsp;Kuesioner Kepuasan Alumni</font></b></h3>
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
                                <h4><i class="fas fa-tasks"></i>&nbsp;<?=$periodeku->nm_periode?> Alumni  Periode <?=$periodeku->tahun?></h4>
                            
                            </div>
                                    <div class="card m-b-20">
                                        <div class="card-body">
<center><h5><b><font color="#075875"><i class='fas fa-exclamation-circle '></i>&nbsp;Petunjuk Pengisian :</font></b></h5></center>

                                   <p align="justify">
                                     
Sesuai dengan yang Saudara ketahui, berilah penilaian secara jujur, objektif, dan penuh tanggung jawab terhadap Penilaian Saudara. 
Informasi yang Saudara berikan hanya akan dipergunakan dalam proses penilaian kualitas layanan di Universitas CIC, sehingga bisa digunakan bahan pembelajaran bagi kami untuk meningkatkan kualitas layanan Universitas CIC kedepannya. Penilaian dilakukan terhadap indikator-indikator dalam tabel kuesioner dengan cara memilih angka (1-4) pada kolom skor, 
pemilihan skor tersebut akan ditunjukan dengan perasaan dan harapan yang anda rasakan :</p>

<table width="80%" align="center">
<tr>
<th width="50"></b></th>
<th><b>Kinerja (Kenyataan)</b></th>
<th width="50"><b></b></th>
<th><b>Harapan / Kepentingan</b></th>
</tr> 
<tr>
<th align="center">4</th>
<th>Sangat Baik / Sangat Memuaskan</th>
<th align="center">4</th>
<th>Sangat Penting</th>
</tr>
<th align="center">3</th>
<th>Baik / Memuaskan</th>
<th align="center">3</th>
<th>Penting</th>
</tr>
<th align="center">2</th>
<th>Cukup / Cukup Memuaskan</th>
<th align="center">2</th>
<th>Cukup Penting</th>
</tr>
<th align="center">1</th>
<th>Kurang / Kurang Memuaskan</th>
<th align="center">1</th>
<th>Tidak Penting</th>
</tr> 
</table>
<br><br>
<center>
<a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Isi Survei Kepuasan Alumni Periode <?=$periodeku->tahun?> Sekarang</button>
                                </a>
</center>
    
                                        


                                                
                                            
    
                                        
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->





                <!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'><i class="fas fa-book-open"></i>&nbsp;&nbsp;Kuesioner Kepuasan Alumni</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      
                      <div class="modal-body">
                        

<div id="wizard_container">
                          <div id="top-wizard">
                              <div id="progressbar"></div>
                          </div>
                          <!-- /top-wizard -->
                          <form id="wrapped" action="<?php echo site_url('welcome/proses_survey'); ?>" method="POST" autocomplete="off">
                              <input id="website" name="website" type="text" value="">
                              <!-- Leave for security protection, read docs for details -->
                              <div id="middle-wizard">

                              <div class="step">

<div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-user-graduate'></i>&nbsp;&nbsp;&nbsp;<b>Profil Alumni :</b></font></center>
                      </div>
        
            

<div class="row">
                                          <div class="col-lg-5 col-md-6 col-5">
                                          
                    <center><img src="<?php echo base_url('assets/images/users/'.$myuser2->foto) ?>" height='150'></center>      
                 </div>



                                          <div class="col-lg-7 col-md-6 col-7">
                  <font color="black">                        
                                <table width="99%" cellpadding="5">
                                  <tr>
                                    <td>NIM</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->nim ?></td>
                                  </tr>
                                  <tr>
                                    <td>Nama Alumni</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->nama ?></td>
                                  </tr>
                                  <tr>
                                    <td>Program Studi</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->nm_prodi ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tahun Masuk</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->tahun_masuk ?></td>
                                  </tr>
                                  <tr>
                                    <td>Tahun Keluar</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->tahun_keluar ?></td>
                                  </tr>
                                   <tr>
                                    <td>Hp</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->hp ?></td>
                                  </tr>
                                   <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->email ?></td>
                                  </tr>
                                   <tr>
                                    <td>Tempat Bekerja</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->nm_instansi ?></td>
                                  </tr>
                                   <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->jabatan ?></td>
                                  </tr>
                                  <tr>
                                  <td>Status Alumni</td>
                                    <td>:</td>
                                    <td>
                  <?php if ($myuser2->status == 1){ ?>
                        <span class="badge badge-success badge-pill"><h7>Terlacak</h7></span>
                                
                 <?php }else{ ?>
                      <span class="badge badge-danger badge-pill"><h7>Tidak Terlacak</h7></span>
                <?php } ?>
                                    </td>
                                  </tr>
                                </table>

                      </div>
                      </div>
                      </font>


                                  </div>
                                  <!-- /step 5-->

<?php $no=1; $no2=1; $no3=1; $no4=1; $no5=1; $no6=1; $no7=1; $no8=1; $no9=1; $no66=1; $no77=1; $no88=1; $no99=1; $a=1; $b=1; $c=1; $d=1;
            $noo2=1; $noo3=1; $noo4=1; $noo5=1; $noo6=1; $noo7=1; $noo8=1; $noo9=1; $noo66=1; $noo77=1; $noo88=1; $noo99=1; $aa=1000; $bb=1000; $cc=10000; $dd=1000;
 foreach ($pertanyaanku as $pertanyaan): ?>
                               <div class="step">
<h3 class="main_question"><font color="#40606d"><strong>Pertanyaan Ke-<?php echo $no++; ?></strong><strong><font color="#40606d">Indikator Penilaian : <?php echo $pertanyaan->nm_indikator ?></font></strong><?php echo $pertanyaan->pertanyaan ?></font></h3>
                                      
<font color='#40606d'>Yang anda rasakan :</font>
<div class="review_block_smiles">

                                        <ul class="clearfix">
                                          <li>
                                             <div class="container_smile">
                                                      <input type="radio" id="very_bad_<?php echo $no6++; ?>" name="skor_kinerja<?php echo $no2++; ?>[]" class="required" value="1" onchange="getVals(this, 'question_<?php echo $a++; ?>');">
                                                      <label class="radio smile_1" for="very_bad_<?php echo $no66++; ?>"><span>Sangat Kurang</span></label>
                                                  </div>
                                          </li>
                                         
                                           
                                          <li>
                                                  <div class="container_smile">
                                                      <input type="radio" id="average_<?php echo $no7++; ?>" name="skor_kinerja<?php echo $no3++; ?>[]" class="required" value="2" onchange="getVals(this, 'question_<?php echo $b++; ?>');">
                                                      <label class="radio smile_3" for="average_<?php echo $no77++; ?>"><span>Cukup</span></label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="container_smile">
                                                      <input type="radio" id="good_<?php echo $no8++; ?>" name="skor_kinerja<?php echo $no4++; ?>[]" class="required" value="3" onchange="getVals(this, 'question_<?php echo $c++; ?>');">
                                                      <label class="radio smile_4" for="good_<?php echo $no88++; ?>"><span>Baik</span></label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="container_smile">
                                                      <input type="radio" id="very_good_<?php echo $no9++; ?>" name="skor_kinerja<?php echo $no5++; ?>[]" class="required" value="4" onchange="getVals(this, 'question_<?php echo $d++; ?>');">
                                                      <label class="radio smile_5" for="very_good_<?php echo $no99++; ?>"><span>Sangat Baik</span></label>
                                                  </div>
                                              </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                          
                                          <div class="col-3">
                                            <font color="black"><center>1</center></font>
                                          </div>
                                          
                                          <div class="col-3">
                                            <font color="black"><center>2</center></font>
                                          </div>
                                          <div class="col-3">
                                            <font color="black"><center>3</center></font>
                                          </div>
                                          <div class="col-3">
                                            <font color="black"><center>4</center></font>
                                          </div>
                                        </div>
                                      </div>




<font color='#40606d'>Yang anda Harapkan :</font>
<div class="review_block_smiles">

                                        <ul class="clearfix">
                                          <li>
                                             <div class="container_smile">
                                                      <input type="radio" id="very_bad2_<?php echo $noo6++; ?>" name="skor_harapan<?php echo $noo2++; ?>[]" class="required" value="1" onchange="getVals(this, 'question2_<?php echo $aa++; ?>');">
                                                      <label class="radio smile_1" for="very_bad2_<?php echo $noo66++; ?>"><span>Sangat Kurang</span></label>
                                                  </div>
                                          </li>
                                         
                                           
                                          <li>
                                                  <div class="container_smile">
                                                      <input type="radio" id="average2_<?php echo $noo7++; ?>" name="skor_harapan<?php echo $noo3++; ?>[]" class="required" value="2" onchange="getVals(this, 'question2_<?php echo $bb++; ?>');">
                                                      <label class="radio smile_3" for="average2_<?php echo $noo77++; ?>"><span>Cukup</span></label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="container_smile">
                                                      <input type="radio" id="good2_<?php echo $noo8++; ?>" name="skor_harapan<?php echo $noo4++; ?>[]" class="required" value="3" onchange="getVals(this, 'question2_<?php echo $cc++; ?>');">
                                                      <label class="radio smile_4" for="good2_<?php echo $noo88++; ?>"><span>Baik</span></label>
                                                  </div>
                                              </li>
                                              <li>
                                                  <div class="container_smile">
                                                      <input type="radio" id="very_good2_<?php echo $noo9++; ?>" name="skor_harapan<?php echo $noo5++; ?>[]" class="required" value="4" onchange="getVals(this, 'question2_<?php echo $dd++; ?>');">
                                                      <label class="radio smile_5" for="very_good2_<?php echo $noo99++; ?>"><span>Sangat Baik</span></label>
                                                  </div>
                                              </li>
                                        </ul>
                                        <div class="row justify-content-between add_bottom_25">
                                          
                                          <div class="col-3">
                                            <font color="black"><center>1</center></font>
                                          </div>
                                          
                                          <div class="col-3">
                                            <font color="black"><center>2</center></font>
                                          </div>
                                          <div class="col-3">
                                            <font color="black"><center>3</center></font>
                                          </div>
                                          <div class="col-3">
                                            <font color="black"><center>4</center></font>
                                          </div>
                                        </div>
                                      </div>




                               

                                  </div>
                                  <!-- /step 5-->

   <?php endforeach; ?>                               
                                  <div class="submit step">
                                      <h3 class="main_question"><strong>Berikan Saran anda untuk pengembangan selanjutnya</strong><font color="#40606d">Kritik dan Saran</font></h3>
                                      <div class="review_block">
                                        <textarea id="elm1" name="kritik_saran" rows="5"></textarea>  
                                      </div>
                                  </div>
                                  <!-- /step 3-->

<div id="bottom-wizard">
                                  <button type="button" name="backward" class="backward"><i class="fa fa-arrow-circle-left"></i>&nbsp;Sebelumnya</button>
                                  <button type="button" name="forward" class="forward">Selanjutnya &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                                  <button type="submit" name="process" class="submit"><i class="far fa-paper-plane "></i>&nbsp;Kirim</button>
                              </div>
                             
                           <div class="modal-footer">
                              </div>
                              <!-- /middle-wizard -->

                              
                              <!-- /bottom-wizard -->
</div>
                          </form>
                      </div>
                      <!-- /Wizard container -->


                      </div>
                      
                    </div>
                    </div>
                  </div>






 

  

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
                  