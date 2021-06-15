
<link href="<?php echo base_url();?>assets/style.css" rel="stylesheet" />
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
                                    <h3 class="page-title"><b><i class="far fa-smile"></i>&nbsp;Indeks Kepuasan Metode CSI</b></h3>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active">Kepuasan Pengguna Lulusan Universitas CIC</li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">

                                    <div class="state-graph">
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
Periode Survei Kepuasan <?=$periodeku2->tahun;?></b></h6>
                                                   
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-clock display-2"></i>
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
Program Studi : <?=$myprodi->nm_prodi;?></b></h6>
                                                    
                                                </div>
                                                <div class="mini-stat-icon">
                                                    <i class="fas fa-graduation-cap display-2"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
 </div>
  <!-- selesai row -->

            
                                            <!-- Nav tabs -->
                                            <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home1" role="tab"><b><font color=""><i class="fas fa-th-list"></i>&nbsp; Tahap 1 : MIS dan MSS</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile1" role="tab"><b><font color=""><i class="fas fa-th-large"></i>&nbsp; Tahap 2 : Nilai WF</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#home2" role="tab"><b><font color=""><i class="fas fa-th-list"></i>&nbsp; Tahap 3 : Nilai WS</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile2" role="tab"><font color=""><b><i class="fas fa-th-large"></i>&nbsp; Tahap 4 : Indeks CSI</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile3" role="tab"><font color=""><b><i class="fas fa-th-list"></i>&nbsp; Gap CSI</font></b></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile4" role="tab"><font color=""><b><i class="far fa-smile"></i>&nbsp; Kesimpulan</font></b></a>
                                                </li>
                                                
                                            </ul>
            
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div class="tab-pane active p-3" id="home1" role="tabpanel">

                                                <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Means Satisfaction Score (MSS) adalah nilai rata-rata dari penilaian tingkat kepuasan/kinerja dari responden.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Means Importance Score (MIS) adalah nilai rata-rata dari penilaian tingkat harapan/kepentingan dari responden.</font>
                                              
                                                </div>

                                                    <table class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="250"><b>Pertanyaan</b></th>
                                    <th width="50" align="center"><b><center>Means Satisfaction Score (MSS)</center></b></th>
                                    <th width="40" align="center"><b><center>Means Importance Score (MIS)</center></b></th>
                                  
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; $jumlahmis=0; $jumlahmss=0; foreach ($ratarata as $rata): ?>
                                    <?php 
                                    $jumlahmis = $jumlahmis + $rata->rata2_harapan;
                                    $jumlahmss = $jumlahmss + $rata->rata2_kinerja;
                                     ?>
                                             <tr>
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="250"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_kinerja,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_harapan,2) ?></td>
                                            
                                            </tr>
                                   <?php endforeach; ?>
                                <tr align="center">
                                  <td colspan="2"><b>Jumlah</b></td>
                                  <td><b><?php echo number_format($jumlahmss,2); ?></b></td>
                                  <td><b><?php echo number_format($jumlahmis,2); ?></b></td>
                                </tr>
                                                </tbody>
                                            </table>
                                                </div>


                                                <div class="tab-pane p-3" id="profile1" role="tabpanel">

                                                <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Means Importance Score (MIS) adalah nilai rata-rata dari penilaian tingkat harapan/kepentingan dari responden.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Weight Factor (Faktor Tertimbang) adalah prosentase (%) nilai MIS terhahap total MIS kemudian dikalikan 100 %.</font>
                                              
                                                </div>

                                                    <table class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="250"><b>Pertanyaan</b></th>
                                    <th width="50" align="center"><b><center>Means Importance Score (MIS)</center></b></th>
                                    <th width="40" align="center"><b><center>Weight Factor (WF)</center></b></th>
                                  
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; $totalwf=0; foreach ($ratarata as $rata): ?>
                                     <?php 
                                     $wf= ($rata->rata2_harapan/$jumlahmis*100); 
                                    $totalwf = $totalwf + $wf;
                                     ?>
                                             <tr>
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="250"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_harapan,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($wf,2) ?> %</td>
                                    
                                            </tr>
                                   <?php endforeach; ?>
                                             <tr align="center">
                                  <td colspan="2"><b>Jumlah</b></td>
                                  <td><b><?php echo number_format($jumlahmis,2); ?></b></td>
                                  <td><b><?php echo number_format($totalwf,2); ?> %</b></td>
                                </tr>
                                                </tbody>
                                            </table>
                                                </div>

                                                <div class="tab-pane p-3" id="home2" role="tabpanel">

                                                <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Weight Factor (WF) adalah prosentase (%) nilai MIS terhahap total MIS kemudian dikalikan 100 %.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Weight Score (WS) adalah perkalian antara Means Satisfaction Score (MIS) dengan Weight Factor (WF).</font>
                                              
                                                </div>

                                               <table class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="250"><b>Pertanyaan</b></th>
                                    <th width="50" align="center"><b><center>Means Satisfaction Score (MIS)</center></b></th>
                                    <th width="40" align="center"><b><center>Weight Factor (WF)</center></b></th>
                                    <th width="40" align="center"><b><center>Weight Score (WS)</center></b></th>
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; $totalwf=0;$totalws=0; foreach ($ratarata as $rata): ?>
                                     <?php 
                                     $wf= ($rata->rata2_harapan/$jumlahmis*100);
                                     $ws = $wf * $rata->rata2_kinerja;
                                     $totalws = $totalws+$ws; 
                                     $totalwf = $totalwf + $wf;
                                     ?>
                                             <tr>
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="250"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_kinerja,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($wf,2) ?> %</td>
                                            <td width="2" align="center"><?php echo number_format($ws,2) ?></td>
                                            </tr>
                                   <?php endforeach; ?>
                                             <tr align="center">
                                  <td colspan="2"><b>Jumlah</b></td>
                                  <td><b><?php echo number_format($jumlahmis,2); ?></b></td>
                                  <td><b><?php echo number_format($totalwf,2); ?> %</b></td>
                                  <td><b><?php echo number_format($totalws,2); ?></b></td>
                                </tr>
                                                </tbody>
                                            </table>
                                                </div>

                                                 <div class="tab-pane p-3" id="profile2" role="tabpanel">

                                                 <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Customer Satisfaction Index (Indeks CSI) adalah Indeks Kepuasan yang menyatakan kepuasan pelanggan secara menyeluruh. Indeks CSI didapat dari perhitungan total Weight Score (WS) dibagi skor skala tertinggi, kemudian dikalikan 100 %.<br>
                                                 </font>
                                              
                                                </div>

                                                <table class="table table-striped table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="400"><b>Pertanyaan</b></th>
                                    <th width="50" align="center"><b><center>Means Satisfaction Score (MSS)</center></b></th>
                                    <th width="50" align="center"><b><center>Means Importance Score (MIS)</center></b></th>
                                    <th width="40" align="center"><b><center>Weight Factor (WF)</center></b></th>
                                    <th width="40" align="center"><b><center>Weight Score (WS)</center></b></th>
                                    <th width="40" align="center"><b><center>Customer Satisfaction Index</center></b></th>

                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; $totalwf=0;$totalws=0;$totalcsi=0; foreach ($ratarata as $rata): ?>
                                     <?php 
                                     $wf= ($rata->rata2_harapan/$jumlahmis*100);
                                     $ws = $wf * $rata->rata2_kinerja;
                                     $totalws = $totalws+$ws; 
                                     $totalwf = $totalwf + $wf;
                                     $csi = ($ws/4);
                                     $totalcsi = $totalcsi+$csi;
                                     ?>
                                             <tr>
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="400"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_kinerja,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_harapan,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($wf,2) ?> %</td>
                                            <td width="2" align="center"><?php echo number_format($ws,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($csi,2) ?></td>
                                            </tr>
                                   <?php endforeach; ?>
                                             <tr align="center">
                                  <td colspan="6"><b>Indeks Kepuasan CSI</b></td>
                                  <td><b><?php echo number_format($totalcsi,2); ?></b> %</td>
                                </tr>
                                                </tbody>
                                            </table>
                                                </div>

                                                <div class="tab-pane p-3" id="profile3" role="tabpanel">

                                                <div class="alert alert-ku" role="alert">
                                                    <h6><b><font color="#0285b4"><i class='fas fa-exclamation-circle'></i>&nbsp;Keterangan :</b></h6>
                                                  
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Nilai Kesenjangan (Gap) >= 0 dan Tingkat Kesesuaian >= 100% artinya sudah sesuai harapan responden.<br>
                                                 <i class='fas fa-angle-double-right'></i>&nbsp; Nilai Kesenjangan (Gap) < 0 dan Tingkat Kesesuaian < 100% artinya belum sesuai dengan harapan responden.</font>
                                              
                                                </div>

                                                <table class="table table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="1" align="center"><b><center>No.</center></b></th>
                                    <th width="400"><b>Pertanyaan</b></th>
                                    <th width="50" align="center"><b><center>Means Satisfaction Score (MSS)</center></b></th>
                                    <th width="40" align="center"><b><center>Means Importance Score (MIS)</center></b></th>
                                    <th width="40" align="center"><b><center>Nilai Kesenjangan (Gap)</center></b></th>
                                    <th width="40" align="center"><b><center>Tingkat Kesesuaian (%)</center></b></th>
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>

                                 <?php $n=1; foreach ($ratarata as $rata): ?>
                                  <?php  $gap = $rata->rata2_kinerja - $rata->rata2_harapan;
                                         $tk = ($rata->rata2_kinerja/$rata->rata2_harapan)*100;
                                         if ($tk < 100) {
                                           $warna = '#fef19a';
                                       }else{
                                          $warna = '';
                                         }
                                   ?>
                                             <tr bgcolor="<?php echo $warna; ?>">
                                            <td width="1" align="center"><?php echo $n++; ?></td>
                                            <td width="400"><?php echo $rata->pertanyaan?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_kinerja,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($rata->rata2_harapan,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($gap,2) ?></td>
                                            <td width="2" align="center"><?php echo number_format($tk,2) ?></td>
                                    
                                            </tr>
                                   <?php endforeach; ?>
                                
                                                </tbody>
                                            </table>
                                                </div>

<div class="tab-pane p-3" id="profile4" role="tabpanel">
<!-- Mulai -->
<div class="row">

<div class='alert alert-primary col-12'>
                      <center><font color="#02729a"><i class='far fa-smile'></i>&nbsp;&nbsp;&nbsp;<b>Kesimpulan Hasil Akhir Analisis Customer Satisfaction Index </b></font></center>
                      </div>

            <div class="col-lg-5 col-md-6 col-5">
                  <?php $csiku = number_format($totalcsi,2); ?>
                  <?php
                    if ($csiku >= 81) { 
                      $ket = "Sangat Puas";
                      $emoji = "emoji-sbaik.png";
                    }elseif ($csiku >= 66) {
                      $ket = "Puas";
                      $emoji = "emoji-baik2.png";
                    }elseif ($csiku >= 51) {
                      $ket = "Cukup Puas";
                      $emoji = "emoji-cukup.png";
                    }elseif ($csiku >= 35) {
                      $ket = "Kurang Puas";
                      $emoji = "emoji-k.png";
                    }else{
                      $ket = "Tidak Puas";
                      $emoji = "emoji-sk.png";
                    }
                      ?>
                       
                   
                    <center>
                      <img src="<?php echo base_url();?>assets/images/<?php echo $emoji; ?>" height='230'>
                    </center>                      
                      <center><h5><b><font color="#075875"><?php echo $csiku; ?> % - <?php echo $ket; ?></font></b></h5></center>                                    
                                   
                 </div>



                                          <div class="col-lg-7 col-md-6 col-7">
     <table class="table table-bordered dt-responsive nowrap">
                                                <thead>
                                                <tr>
                                    <th width="20" align="center"><b><center>No.</center></b></th>
                                    <th width="200" align="center"><b>Nilai Indeks CSI</b></th>
                                    <th align="center" colspan="2"><b><center>Keterangan</center></b></th>
                        
                                </tr>
                                                </thead>
    
    
                                                <tbody>
                                                <tr align="center" bgcolor="<?php if ($csiku >= 81) { echo '#b2e6fa';}?>">
                                               <td>1.</td>
                                               <td width="200" align="left">&nbsp;&nbsp;81 - 100 %</td>
                                               <td align="left">Sangat Puas</td>
                                               <td>
                                                 
                                                 <center>
                      <img src="<?php echo base_url();?>assets/images/emoji-sbaik.png" height='35'>
                    </center>
                                               </td>
                                </tr>
                                <tr align="center" bgcolor="<?php if ($csiku >= 66 && $csiku < 81) { echo '#b2e6fa';}?>">
                                               <td>2.</td>
                                               <td width="200" align="left">&nbsp;&nbsp;66 - 80,99 %</td>
                                               <td align="left">Puas</td>
                                               <td>
                                                 
                                                 <center>
                      <img src="<?php echo base_url();?>assets/images/emoji-baik2.png" height='35'>
                    </center>
                                               </td>
                                </tr>
                                <tr align="center" bgcolor="<?php if ($csiku >= 51 && $csiku < 66) { echo '#fef19a';}?>">
                                               <td>3.</td>
                                               <td width="200" align="left">&nbsp;&nbsp;51 - 65,99 %</td>
                                               <td align="left">Cukup Puas</td>
                                               <td>
                                                 
                                                 <center>
                      <img src="<?php echo base_url();?>assets/images/emoji-cukup.png" height='35'>
                    </center>
                                               </td>
                                </tr>
                                <tr align="center" bgcolor="<?php if ($csiku >= 35 && $csiku < 51) { echo '#fdc5c3';}?>">
                                               <td>4.</td>
                                               <td width="200" align="left">&nbsp;&nbsp;35 - 50,99 %</td>
                                               <td align="left">Kurang Puas</td>
                                               <td>
                                                 
                                                 <center>
                      <img src="<?php echo base_url();?>assets/images/emoji-k.png" height='35'>
                    </center>
                                               </td>
                                </tr>
                                <tr align="center" bgcolor="<?php if ($csiku < 35) { echo '#fdc5c3';}?>">
                                               <td>5.</td>
                                               <td width="200" align="left">&nbsp;&nbsp;0 - 34,99 %</td>
                                               <td align="left">Tidak Puas</td>
                                               <td>
                                                 
                                                 <center>
                      <img src="<?php echo base_url();?>assets/images/emoji-sk.png" height='35'>
                    </center>
                                               </td>
                                </tr>
                                                </tbody>
                                            </table>
                                            <br>

                     </div>
                      </div>  
<!-- Selesai -->
                                      
                                                </div>



                                            </div>


                                            

                                            
    
                                      
                                    </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
    

        

                           
    
                        </div>
                        <!-- end page content-->

                    </div> <!-- container-fluid -->

                </div> <!-- content -->




              