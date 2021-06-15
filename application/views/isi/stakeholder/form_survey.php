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
                    


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h3 class="page-title"><b><font color="#075875"><i class='fas fa-tasks'></i>&nbsp;Form Penilaian Kualitas Alumni</font></b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Universitas Catur Insan Cendekia </li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                            
                                            <a href="<?php echo site_url();?>halaman_stakeholder/survey">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fas fa-backward"></i>&nbsp; Kembali</button>
                                </a>                
                                            
                                
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
                                <h4><i class="fas fa-tasks"></i>&nbsp; Informasi dan Panduan Penilaian</h4>
                            
                            </div>
                                    <div class="card m-b-20">
                                        <div class="card-body">

                                    


                                     <div class="row">
                                          <div class="col-lg-5 col-md-6 col-5">
 <center><h5><b><font color="#075875"><i class='fas fa-user-tie'></i>&nbsp;&nbsp;Informasi Alumni dan Stakeholder :</font></b></h5></center><br>


                                          <table width="99%">
                                            <tr>
                                              <td rowspan="3"><img src="<?php echo base_url('assets/images/users/'.$alumku->foto) ?>" height='100' width='90'></td>
                                              <td>&nbsp;</td>
                                              <td>Nama Alumni</td>
                                              <td>:</td>
                                              <td><?php echo $alumku->nama ?></td>
                                             </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>Jabatan</td>
                                              <td>:</td>
                                              <td><?php echo $alumku->jabatan ?></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>Tanggal Bekerja</td>
                                              <td>:</td>
                                              <td><?php echo $alumku->tgl_bekerja ?></td>
                                            </tr>
</table>
<br>
<table width="99%">
                                            <tr>
                                              <td rowspan="3"><img src="<?php echo base_url('assets/images/users/'.$myuser2->foto) ?>" height='100' width='90'></td>
                                              <td>&nbsp;</td>
                                              <td>Nama Penilai</td>
                                              <td>:</td>
                                              <td><?php echo $myuser2->nama_p ?></td>
                                             </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>Jabatan</td>
                                              <td>:</td>
                                              <td><?php echo $myuser2->jabatan_p ?></td>
                                            </tr>
                                            <tr>
                                              <td>&nbsp;</td>
                                              <td>Asal Instansi</td>
                                              <td>:</td>
                                              <td><?php echo $myuser2->nm_instansi ?></td>
                                            </tr>
</table>
                                          
                          
                 </div>



                                          <div class="col-lg-7 col-md-6 col-7">
      <center><h5><b><font color="#075875"><i class='fas fa-exclamation-circle '></i>&nbsp;Petunjuk Pengisian :</font></b></h5></center>                                    
                               <p align="justify">
                                     
Sesuai dengan yang diketahui, berilah penilaian secara jujur, objektif, dan penuh tanggung jawab terhadap Penilaian Alumni. 
Informasi yang didapat digunakan untuk melihat Kinerja Alumni dan Bahan Akreditasi di Universitas CIC. 
Penilaian dilakukan terhadap indikator-indikator dalam tabel kuesioner dengan cara memilih angka (1-4) pada kolom skor, 
pemilihan skor tersebut dilakukan penilaian Kinerja Alumni dan Tingkat Kepentingan Pihak Penilai :</p>

<table width="99%">
<tr>
<th width="50"></b></th>
<th><b>Tingkat Kinerja</b></th>
<th width="50"><b></b></th>
<th><b>Tingkat Kepentingan</b></th>
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

                                          </div>
                      </div>  
                      <br>         
                       <a data-toggle="modal" data-target="#modal-edit">
                                            <button type="button" class="btn btn-primary waves-effect waves-light col-12">
                                    <i class="fa fa-check"></i>&nbsp; Beri Penilaian Sekarang</button>
                                </a>                      
    
                                        
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
             


                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->




<div class="modal fade text-left" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'><i class="fas fa-book-open"></i>&nbsp;&nbsp;Kuesioner Kepuasan Pengguna Lulusan (<?php echo $alumku->nama ?> - <?php echo $alumku->jabatan ?>)</font></h6>
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
                          <form id="wrapped" action="<?php echo site_url('halaman_stakeholder/proses_survey'); ?>" method="POST" autocomplete="off">
                              <input id="website" name="website" type="hidden" value="">
                              <input type="hidden" readonly value="<?php echo $alumku->id_kep ?>" name="id_kep" class="form-control">

                              <!-- Leave for security protection, read docs for details -->
                              <div id="middle-wizard">

                               <div class="step">

                               
                               <div class='alert bg-primary3 alert-dismissible col-12'>
                                <center><font color="white"><i class='fa fa-user'></i>&nbsp;&nbsp;&nbsp;Informasi Lulusan yang dinilai :</font></center>
                                </div>


                               <div class="row">
                                          <div class="col-lg-3 col-md-6 col-3">
                                          <center><img src="<?php echo base_url('assets/images/users/'.$alumku->foto) ?>" alt="" height="175" width='155'></center>
                                          </div>

                                          <div class="col-lg-9 col-md-6 col-9">

                                      <div class="form-group">
                                          <label for="email"><font color='red'>NIM</font></label>
                                          <input type="text" name="email" value="<?php echo $alumku->nim ?>" id="email" class="form-control" readonly="">
                                      </div>
                                      <div class="form-group">
                                          <label for="lastname">Nama Alumni</label>
                                          <input type="text" name="lastname" value="<?php echo $alumku->nama ?>" readonly id="lastname" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="email">Jabatan</label>
                                          <input type="text" value="<?php echo $alumku->jabatan ?>" readonly name="email" id="email" class="form-control">
                                      </div>
                                      <div class="form-group">
                                          <label for="lastname">Penilai</label>
                                          <input type="text" name="lastname" value="<?php echo $myuser2->nama_p ?> (<?php echo $myuser2->nama_p ?>)" readonly id="lastname" class="form-control">
                                      </div>
                                       <div class="form-group">
                                          <label for="email">Periode Survei Kepuasan Pengguna</label>
                                          <input type="text" value="Periode <?php echo $myuser2->nama_p ?>" readonly name="email" id="email" class="form-control">
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
                                          <font color="#40606d">Kinerja Alumni :</font><br><br>
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


 

  

 <!-- COMMON SCRIPTS -->
  <script src="<?php echo base_url();?>assets/survey/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url();?>assets/survey/js/common_scripts.js"></script>
  <script src="<?php echo base_url();?>assets/survey/js/functions.js"></script>

  <!-- Wizard script -->
  <script type="text/javascript">
/*  Wizard */
  jQuery(function ($) {
    "use strict";
    $("#wizard_container").wizard({
      stepsWrapper: "#wrapped",
      submit: ".submit",
      beforeSelect: function (event, state) {
        if ($('input#website').val().length != 0) {
          return false;
        }
        if (!state.isMovingForward)
          return true;
        var inputs = $(this).wizard('state').step.find(':input');
        return !inputs.length || !!inputs.valid();
      }
    }).validate({
      errorPlacement: function (error, element) {
        if (element.is(':radio') || element.is(':checkbox')) {
          error.insertBefore(element.next());
        } else {
          error.insertAfter(element);
        }
      }
    });
    //  progress bar
    $("#progressbar").progressbar();
    $("#wizard_container").wizard({
      afterSelect: function (event, state) {
        $("#progressbar").progressbar("value", state.percentComplete);
        $("#location").text("(" + state.stepsComplete + "/" + state.stepsPossible + ")");
      }
    });
    // Validate select
    $('#wrapped').validate({
      ignore: [],
      rules: {
        select: {
          required: true
        }
      },
      errorPlacement: function (error, element) {
        if (element.is('select:hidden')) {
          error.insertAfter(element.next('.nice-select'));
        } else {
          error.insertAfter(element);
        }
      }
    });
  });

// Summary 
function getVals(formControl, controlType) {
  switch (controlType) {

    case 'question_1':
      // Get the value for a radio
      var value = $(formControl).val();
      $("#question_1").text(value);
      break;

    case 'additional_message':
      // Get the value for a textarea
      var value = $(formControl).val();
      $("#additional_message").text(value);
      break;

    case 'question_2':
      // Get the value for a radio
      var value = $(formControl).val();
      $("#question_2").text(value);
      break;

    case 'additional_message_2':
      // Get the value for a textarea
      var value = $(formControl).val();
      $("#additional_message_2").text(value);
      break;

    case 'question_3':
      // Get name for set of checkboxes
      var checkboxName = $(formControl).attr('name');

      // Get all checked checkboxes
      var value = [];
      $("input[name*='" + checkboxName + "']").each(function () {
        // Get all checked checboxes in an array
        if (jQuery(this).is(":checked")) {
          value.push($(this).val());
        }
      });
      $("#question_3").text(value.join(", "));
      break;
  }
}
  </script>

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
                  