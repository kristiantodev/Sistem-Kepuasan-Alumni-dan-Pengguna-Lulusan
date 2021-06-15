
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
                                                    <h6 class="mt-0 text-white-50">Status Login : Alumni</h6>
                                                    <h4 class="mb-3 mt-0"><b><?php echo $myuser2->nama ?></b></h4>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-user-graduate  display-2"></i>
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
                                                    <h6 class="mt-0 text-white-50">Asal Prodi :</h6>
                                                    <h4 class="mb-3 mt-0"><b> <?php echo $myuser2->nm_prodi ?></b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-tablet-alt display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
        
                   
                            </div>
                            <!-- end row -->


                             
 <div class="col-xl-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-user-graduate'></i>&nbsp;&nbsp;&nbsp;<b>Profil Alumni :</b></font></center>
                      </div>
        
            

<div class="row">
                                          <div class="col-lg-5 col-md-6 col-5">
                                          
                    <center><img src="<?php echo base_url('assets/images/users/'.$myuser2->foto) ?>" height='175'></center>  
                    <br>
                    <center>
                      <a data-toggle="modal" data-target="#modal-edit">
                                            <button type="button" class="btn btn-primary waves-effect waves-light">
                                    <i class="fa fa-edit"></i> Lengkapi Profil</button>
                                </a>
                    </center>    
                 </div>



                                          <div class="col-lg-7 col-md-6 col-7">
                                          
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
                                    <td>Tanggal Yudisium</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->tgl_yudisium ?></td>
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
                                    <td>Tanggal Bekerja</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->tgl_bekerja ?></td>
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

                                </table>

                                          </div>
                      </div>

            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            
                            


                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->


  <!-- Modal -->
                  <div class="modal fade text-left" id="modal-edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel16" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                      <div class="modal-header bg-primary">
                      <h6 class="modal-title"><font color='white'>Form Edit Profil Alumni</font></h6>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                      </div>
                      <form action="<?php echo site_url('halaman_alumni/edit'); ?>" method="post" enctype="multipart/form-data">
                       <input type="hidden" readonly value="<?php echo $myuser2->id_user ?>" name="id_user" class="form-control" >
                      <div class="modal-body">

                      <div class="row">
                                          <div class="col-lg-6 col-md-6 col-6">
                                    
                          <fieldset class="form-group floating-label-form-group">
                          <label for="email">NIM</label>
                          <input type="text" readonly name="nim" value="<?php echo $myuser2->nim ?>" class="form-control  round <?php echo form_error('nim') ? 'is-invalid':'' ?>" required>
             
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Nama Alumni</label>
                          <input type="text" readonly name="nama" value="<?php echo $myuser2->nama ?>" class="form-control" required>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">HP</label>
                          <input type="text" name="hp" value="<?php echo $myuser2->hp ?>" class="form-control">
             
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Email</label>
                          <input type="email" name="email" value="<?php echo $myuser2->email ?>" class="form-control">
                        </fieldset>
                       

                 </div>



                                          <div class="col-lg-6 col-md-6 col-6">
                                    
                                <fieldset class="form-group floating-label-form-group">
                          <label for="email">Program Studi</label>
                          <select name="id_prodi" readonly id="select" required class="custom-select">
                  <option value="">-- Pilih Prodi--</option>
                  
                  <?php foreach ($prodiku as $p): ?>
                  <option value="<?php echo $p->id_prodi ?>"
                  <?php
                              if ($myuser2->id_prodi == $p->id_prodi){
                              echo "selected";
                                    }else{
                              echo "";
                              }
                              ?>><?php echo $p->nm_prodi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tanggal Yudisium</label>
                          <input type="text" readonly name="tgl_yudisium" value="<?php echo $myuser2->tgl_yudisium ?>" class="form-control">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Tanggal Bekerja (Pekerjaan Pertama)</label>
                          <input type="text" name="tgl_bekerja" value="<?php echo $myuser2->tgl_bekerja ?>" class="form-control">
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                          <label for="email">Jabatan</label>
                          <input type="text" name="jabatan" value="<?php echo $myuser2->jabatan ?>" class="form-control">
                        </fieldset>

<fieldset class="form-group floating-label-form-group">
                          <label for="email">Asal Instansi</label>
                          <select name="id_instansi" id="select" class="custom-select">
                  <option value="">-- Pilih Asal Instansi--</option>
                  
                  <?php foreach ($instansiku as $k): ?>
                  <option value="<?php echo $k->id_instansi ?>"
                  <?php
                              if ($myuser2->id_instansi == $k->id_instansi){
                              echo "selected";
                                    }else{
                              echo "";
                              }
                              ?>><?php echo $k->nm_instansi ?></option>
                  <?php endforeach; ?>
                </select>
                        </fieldset>

                                          </div>
                      </div>
                        
                         
                      </div>
                      <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-1"  data-dismiss="modal" value="close">
                                    <i class="fas fa-times"></i>&nbsp;Keluar
                                </button>
                                <button type="submit"  class="btn btn-primary">
                                    <i class="fa fa-save"></i>&nbsp;Simpan
                                </button>
                        
                      </div>
                      </form>
                    </div>
                    </div>
                  </div>