

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
             
                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50">Periode Survei Kepuasan</h6>
                                                    <h4 class="mb-3 mt-0"><b>
                                                        
                                              <?=$periodeku->tahun;?>
                                                    </b></h4>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock  display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='<?php echo site_url();?>halaman_stakeholder/survey' class="text-white">Perlu Dinilai</a></h6>
                                                    <h4 class="mb-3 mt-0"><b>
                    <?php $array = array('id_user' => $this->session->userdata('id_user'), 'id_periode' => $periodeku->id_periode, 'status_isi' => 2);
                    echo $total = $this->db->where($array)->count_all_results('kep_plulusan');?> Alumni</b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-user-plus  display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-md-6">
                                    <div class="card bg-primary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='<?php echo site_url();?>halaman_stakeholder/survey' class="text-white">Sudah Dinilai</a></h6>
                                                    <h4 class="mb-3 mt-0"><b>
                                                        <?php $array = array('id_user' => $this->session->userdata('id_user'), 'id_periode' => $periodeku->id_periode, 'status_isi' => 1);
                    echo $total = $this->db->where($array)->count_all_results('kep_plulusan');?> Alumni
                                                    </b></h4>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-check-circle  display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

        
                   
                            </div>
                            <!-- end row -->
<!--
                            <div class="row">
             <div class="col-xl-12 col-md-12">
                                    <div class="card bg-secondary mini-stat position-relative">
                                        <div class="card-body">
                                            <div class="mini-stat-desc">
                                                <h6 class="verti-label text-white-50">Alumni</h6>
                                                <div class="text-white">
                                                    <h6 class="mt-0 text-white-50"><a href='' class="text-white"><b>Visi dan Tujuan Universitas CIC</b></a></h6>
                                                    <h7 class="mb-3 mt-0">
Visi : <br>Menjadi Universitas yang Unggul dan Berprestasi di tingkat nasional, berbasis teknologi informasi dan berjiwa technopreneur tahun 2030.<br><br>
Tujuan : <br>a. Menghasilkan mahasiswa yang unggul dan berprestasi di tingkat nasional serta memiliki jiwa technopreneur.
<br>b.  Menghasilkan sistem pembelajaran yang bermutu berbasis teknologi informasi dan komputer.
<br>c.  Menghasilkan dosen yang bermutu dan kompeten dalam bidangnya.
<br>d.  Menghasilkan penelitian dosen yang berkualitas dan memberi kontribusi bagi pengembangan riset di Indonesia.
<br>e.  Menghasilkan kerjasama yang produktif dan bermanfaat bagi institusi dan industri/UMKM.

                                                    </h7>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fa fa-list display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                   
                            </div>
                             -->


                             <div class="col-xl-12">
                                    <div class="card m-b-20">
                                        <div class="card-body">
            
                                            <div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='fas fa-user-tie'></i>&nbsp;&nbsp;&nbsp;<b>Profil Pengguna Lulusan :</b></font></center>
                      </div>
        
            

<div class="row">
                                          <div class="col-lg-5 col-md-6 col-5">
                                          
                    <center><img src="<?php echo base_url('assets/images/users/'.$myuser2->foto) ?>" height='175'></center>      
                 </div>



                                          <div class="col-lg-7 col-md-6 col-7">
                                          
                                <table width="99%" cellpadding="5">
                                  
                                  <tr>
                                    <td>Nama Pengguna</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->nama_p ?></td>
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
                                    <td>Alamat Kantor</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->alamat ?></td>
                                  </tr>
                                   <tr>
                                    <td>Jabatan</td>
                                    <td>:</td>
                                    <td><?php echo $myuser2->jabatan_p ?></td>
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
 