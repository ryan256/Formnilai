<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ALL TABLE</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href="assets/font-awesome/font-awesome.css" rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                    <span class="fa fa-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FUK-UP</a> 
            </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/lur.jpg" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.php"><i class="fa fa-edit fa-3x"></i>Form Prodi</a>
                    </li>
                      <li>
                        <a  href="formmahasiswa.php"><i class="fa fa-edit fa-3x"></i> Form Mahasiswa</a>
                    </li>
                    <li>
                        <a href="matakuliah.php"><i class="fa fa-edit fa-3x"></i> Form Matakuliah</a>
                    </li>
						   <li  >
                        <a href="nilai.php"><i class="fa fa-edit fa-3x"></i>Form Nilai Mahasiswa</a>
                    </li>	
                      <li  >
                        <a  class="active-menu" href="alltabel.php"><i class="fa fa-table fa-3x"></i>All Table</a>
                    </li>
                    
                                      
            </div>
            
        </nav>  
<!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>All Table</h2>   
                        <h5>----</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <br>
				<div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Tabel Prodi
                        </div>
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
									<thead>
                                        <tr>
                                            <th>Kode Prodi</th>
                                            <th>Nama Prodi</th>
											</tr>
                                    </thead>
                                    <tbody>
									<?php
									include "koneksi.php";
									$data= mysqli_query($koneksi,"SELECT * FROM prodi");
									while($row=mysqli_fetch_array($data)){
									
									?>
                                        <tr>
											<td><?php echo $row["kode_prodi"]?></td>
											<td><?php echo $row["nama_prodi"]; ?></td>
                                           
											</tr>
									
                                    </tbody>
									<?php
									}
									?>
                                </table>
                        </div>
                    </div>
                </div>
            </div>         

<div class="col-md-5 col-sm-7">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Tabel Matakuliah
                        </div>
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
									<thead>
                                        <tr>
                                            <th>Kode Matakuliah</th>
                                            <th>Nama Matakuliah</th>
											<th>SKS</th>
										 </tr>
                                    </thead>
                                    <tbody>
									<?php
									include "koneksi.php";
									$data= mysqli_query($koneksi,"SELECT * FROM matakuliah");
									while($row=mysqli_fetch_array($data)){
									
									?>
                                        <tr>
											<td><?php echo $row["kode_mtkul"]?></td>
											<td><?php echo $row["nama_mtkul"]; ?></td>
											<td><?php echo $row["sks"]; ?></td>
                                           																	
									    </tr>
									
                                    </tbody>
									<?php
									}
									?>
                                </table>
                            </div>
                        </div>
                </div>
            </div>          			
    <div class="col-md-9">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                        Tabel Mahasiswa
                        </div>
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
									<thead>
                                        <tr>
                                            <th>NPM</th>
											<th>Nama Mahasiswa</th>
                                            <th>Kelas</th>
											<th>Semester</th>
                                           	<th>Kode Prodi</th>
										</tr>
                                    </thead>
                                    <tbody>
									<?php
									include "koneksi.php";
									$data= mysqli_query($koneksi,"SELECT * FROM mahasiswa");
									while($row=mysqli_fetch_array($data)){
									
									?>
                                        <tr>
											<td><?php echo $row["npm"]?></td>
											<td><?php echo $row["nama_mhs"]; ?></td>
											<td><?php echo $row["kelas"]?></td>
											<td><?php echo $row["semester"]; ?></td>
											<td><?php echo $row["kode_prodi"]?></td>
									    </tr>
									
                                    </tbody>
									<?php
									}
									?>
                                </table>
                            </div>
                        </div>
                </div>
            </div>          
	<div class="col-md-9">
                      <div class="panel panel-default">
                        <div class="panel-heading">
                        Tabel Nilai Mahasiswa
                        </div>
                       <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    
									<thead>
                                        <tr>
                                            <th>NPM</th>
											<th>Kode Matakuliah</th>
                                            <th>Nilai Tugas</th>
											<th>Nilai UTS</th>
                                           	<th>Nilai UAS</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									include "koneksi.php";
									$data= mysqli_query($koneksi,"SELECT * FROM nilai");
									while($row=mysqli_fetch_array($data)){
									
									?>
                                        <tr>
											<td><?php echo $row["npm"]?></td>
											<td><?php echo $row["kode_mtkul"]; ?></td>
											<td><?php echo $row["nilai_tugas"]?></td>
											<td><?php echo $row["nilai_uts"]; ?></td>
											<td><?php echo $row["nilai_uas"]?></td>
							
                                    </tbody>
									<?php
									}
									?>
                                </table>
                         </div>
                    </div>
                </div>
            </div> 
	
	</div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>