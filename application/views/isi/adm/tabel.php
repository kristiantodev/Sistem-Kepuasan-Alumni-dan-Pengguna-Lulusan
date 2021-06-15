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
                                    <h3 class="page-title"><b><i class="fa fa-graduation-cap"></i>&nbsp;Data Mahasiswa</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Universitas Catur Insan Cendekia </li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                                            
                                            <a data-toggle="modal" data-target="#bb">
                                            <button type="button" class="btn btn-warning waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Tambah Data</button>
                                </a>
                                <a data-toggle="modal" data-target="#bb2">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-plus"></i> Kuesioner</button>
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
                                    <div class="card m-b-20">
                                        <div class="card-body">

    
                                            <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead bgcolor="#1b82ec">
                                                <tr>
                                    <th><b>No</b></th>
                                    <th><b>NIM</b></th>
                                    <th><b>Nama</b></th>
                                    <th><b>Kode</b></th>
                                    <th><b>Alamat</b></th>
                                    <th><b>Kota</b></th>
                                    <th><b>Aksi</b></th>
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                             <?php $no=1;
         foreach ($biodataku as $agenda): ?>
                                <tr>
                                    <td width="7" align="center"><?php echo $no++; ?></td>
                                    <td><?php echo $agenda->nim ?></td>
                                    <td><?php echo $agenda->nama ?></td>
                                    <td><?php echo $agenda->kode ?></td>
                                    <td><?php echo $agenda->alamat ?></td>
                                    <td><?php echo $agenda->kota ?></td>
                                    <td>

                                        <a data-toggle="modal" data-target="#be<?php echo $agenda->nim ?>" class="btn btn-primary waves-effect waves-light"><span data-toggle="tooltip" data-original-title="Ubah"><font color="white"><i class="fas fa-pencil-alt"></i></font></span></a>
                 <a href="#!" data-toggle="tooltip" class="btn btn-danger waves-effect waves-light" data-original-title="Hapus"><span class="icon-label" data-toggle="modal" data-target="#modal-danger"><i class="fa fa-trash"></i> </span><span class="btn-text"></span></a>
                                        </a>
                                    </td>
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



                <!-- Modal -->
                  <div class="modal fade text-left" id="bb" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h5 class="modal-title"><font color='white'>Form Tambah Data</font></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('welcome/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">NIM</label>
                          <input type="text" required name="nim" class="form-control  round <?php echo form_error('nim') ? 'is-invalid':'' ?>" id="email" placeholder="Email Address">
                       <font color="red"><?php echo form_error('nim') ?></font>
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Kode</label>
                          <input type="text" name="kode" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama</label>
                          <input type="text" required name="nama" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                 
                        
                        <fieldset class="form-group floating-label-form-group">
                          <label for="title1">Alamat</label>
                          <textarea class="form-control" name="alamat" id="title1" rows="3" placeholder="Description"></textarea>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Kota</label>
                          <input type="text" name="kota" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="icon-close"></i> &nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i> &nbsp; Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>




 <!-- Modal -->
 <?php $no=1; foreach ($biodataku as $agenda): ?>
                  <div class="modal fade text-left" id="be<?php echo $agenda->nim ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h5 class="modal-title"><font color='white'>Form Tambah Data</font></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('welcome/add'); ?>" method="post">
                      <div class="modal-body">
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">NIM</label>
                          <input type="text" value="<?php echo $agenda->nim ?>" required name="nim" class="form-control  round <?php echo form_error('nim') ? 'is-invalid':'' ?>" id="email" placeholder="Email Address">
                       <font color="red"><?php echo form_error('nim') ?></font>
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Kode</label>
                          <input type="text" name="kode" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                         <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama</label>
                          <input type="text" required name="nama" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                 
                        
                        <fieldset class="form-group floating-label-form-group">
                          <label for="title1">Alamat</label>
                          <textarea class="form-control" name="alamat" id="title1" rows="3" placeholder="Description"></textarea>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Kota</label>
                          <input type="text" name="kota" class="form-control round" id="email" placeholder="Email Address">
                        </fieldset>
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="icon-close"></i> &nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i> &nbsp; Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>
 <?php endforeach; ?>



                   <!-- Modal -->
                  <div class="modal fade text-left" id="bb2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h5 class="modal-title"><font color='white'>Kuesioner Penilaian</font></h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('welcome/add'); ?>" method="post">
                      <div class="modal-body">


                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">NIM</label>
                          <input type="text" required name="nim" class="form-control  round <?php echo form_error('nim') ? 'is-invalid':'' ?>" id="email" placeholder="Email Address">
                       <font color="red"><?php echo form_error('nim') ?></font>
                        </fieldset>
                         
                 <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#d0d962"  width="275" align="center"><font size="5"><b>Etika</b></font></td>
                 </tr>
                 <tr bgcolor="#d0d962">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR3">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS3">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT3">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU3">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV3">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#d0d962"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR2">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS2">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT2">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU2">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV2">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
               
                 </table>

                 <br>

                  <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#7fd5f7" width="275" align="center"><font size="5"><b>Keahlian pada Bidang Ilmu</b></font></td>
                 </tr>
                 <tr bgcolor="#7fd5f7">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio4">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio5">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio6">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio7">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio8">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#7fd5f7"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>

                 </table>

                 <br>

                 <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#d0d962"  width="275" align="center"><font size="5"><b>Kemampuan Berbahasa Asing</b></font></td>
                 </tr>
                 <tr bgcolor="#d0d962">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR3">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS3">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT3">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU3">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV3">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#d0d962"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR2">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS2">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT2">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU2">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV2">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
               
                 </table>

                 <br>

                  <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#7fd5f7" width="275" align="center"><font size="5"><b>Penggunaan Teknologi Informasi</b></font></td>
                 </tr>
                 <tr bgcolor="#7fd5f7">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio4">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio5">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio6">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio7">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio8">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#7fd5f7"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>

                 </table>

                 <br>

                 <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#d0d962"  width="275" align="center"><font size="5"><b>Kemampuan Berkomunikasi</b></font></td>
                 </tr>
                 <tr bgcolor="#d0d962">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR3">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS3">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT3">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU3">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV3">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#d0d962"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR2">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS2">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT2">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU2">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV2">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
               
                 </table>

                 <br>

                  <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#7fd5f7" width="275" align="center"><font size="5"><b>Kerjasama Tim</b></font></td>
                 </tr>
                 <tr bgcolor="#7fd5f7">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio4">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio5" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio5">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio6" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio6">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio7" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio7">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadio8" name="customRadio" class="custom-control-input">
                               <label class="custom-control-label" for="customRadio8">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#7fd5f7"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV" name="v" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>

                 </table>

                 <br>

                 <table border="1" cellpadding="8" width="99%">
                 <tr>
                 	<td rowspan="5" bgcolor="#d0d962"  width="275" align="center"><font size="5"><b>Pengembangan Diri</b></font></td>
                 </tr>
                 <tr bgcolor="#d0d962">
                 	<td colspan="5"><b>Kinerja</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR3">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS3">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT3">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU3">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV3" name="v3" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV3">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
                

                 <tr>
                 	<td colspan="5"  bgcolor="#d0d962"><b>Harapan</b></td>
                 </tr>
                 <tr>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioR2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioR2">Sangat Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioS2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioS2">Baik</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioT2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioT2">Cukup</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 		<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioU2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioU2">Kurang</label>
                               </div>
                               </div>
                 	</td>
                 	<td>
                 	<div class="form-check-inline my-1">
                               <div class="custom-control custom-radio">
                               <input type="radio" id="customRadioV2" name="v2" class="custom-control-input">
                               <label class="custom-control-label" for="customRadioV2">Sangat Kurang</label>
                               </div>
                               </div>
                 	</td>
                 </tr>
               
                 </table>

                  
                        
                        
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="icon-close"></i> &nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i> &nbsp; Save
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>