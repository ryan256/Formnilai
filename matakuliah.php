<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Matakuliah</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
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
                        <a  href="index.php"><i class="fa fa-edit fa-3x"></i> Form Prodi</a>
                    </li>
                     <li>
                        <a  href="formmahasiswa.php"><i class="fa fa-edit fa-3x"></i> Form Mahasiswa</a>
                    </li>
                    <li>
                        <a class="active-menu"  href="matakuliah.php"><i class="fa fa-edit fa-3x"></i> Form Matakuliah</a>
                    </li>
					<li>
                        <a  href="nilai.php"><i class="fa fa-edit fa-3x"></i>Form Nilai Mahasiswa</a>
                    </li>
                   
                    <li>
                        <a href="alltabel.php"><i class="fa fa-table fa-3x"></i>All Table</a>
                    </li>
                                      
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Form Matakuliah</h2>   
                        <h5>----</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <br>
				 
				<div class="row">
				<form class="form-login" action="insert3.php" method="post">
                <div class="col-md-4 col-sm-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Form Matakuliah
                        </div>
                        <div class="panel-body">
							
                            <div class="form-group">
                                 <label>Kode Matakuliah</label>
                                 <input type="number" name="kode_mtkul" class="form-control" placeholder="Masukan Kode Matakuliah...." required/>
                            </div>
							<div class="form-group">
                                 <label>Nama Matakuliah</label>
                                 <input type="text" name="nama_mtkul" class="form-control" placeholder="Masukan Nama Matakuliah...." required/>
                            </div>
							<div class="form-group">
                                 <label>SKS</label>
                                 <input type="number" name="sks" class="form-control" placeholder="Masukan SKS...." required/>
                            </div>
							
							<button class="btn btn-success" type="submit" >Save</button>
							
                        </div>
                    </div>
                </div>
				</form>
                <div class="col-md-7 col-sm-7">
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
											<th>Option</th>
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
                                           
											<td><a href="delete3.php ?kode_mtkul=<?php echo $row["kode_mtkul"]; ?>" class="btn btn-danger btn-xs">Delete</a>
							
									
									<!--Tombol edit-->
										<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal">
										Edit
										</button>
										
										<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
										<div class="modal-dialog">
										<div class="modal-content">
										<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Edit data</h4>
									</div>
									<form action ="edit3.php" method="post">
									
									<div class="modal-body">
									
									
										<div class="form-group">
										<div class="form-group">
										<div class="form-group">
										<label>Kode Matakuliah</label>
										<input type="number" name="kode_mtkul" class="form-control" placeholder="Masukan Kode Matakuliah...." required/>
										</div>
										<div class="form-group">
										<label>Nama Matakuliah</label>
										<input type="text" name="nama_mtkul" class="form-control" placeholder="Masukan Nama Matakuliah...." required/>
										</div>
										<div class="form-group">
										<label>SKS</label>
										<input type="number" name="sks" class="form-control" placeholder="Masukan SKS...." required/>
										</div>
																
									</div>
										<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary">Save changes</a>
							
                                        </div>
									</form>
                                    </div>
                                </div>
                            </div>
							
							<!--END TOMBOL EDIT-->
							
											</td>
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
