<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Lihat Produk | Toko Batu Permata</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#" style="padding-top:7px;">
					<span><img alt="Portal Berita Pokemon" src="images/diamond.png" width="35px"></span> Admin Page
				</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> <?php echo $_SESSION['logged_user'] ?> <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li>
							<li><a href="logout_auth.php"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>		
		</div>
	</nav>

	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=""><a href="dashboard.php"><svg class="glyph stroked dashboard-dial"></svg> Dashboard</a></li>
			<li class="active">
				<a href="view_news.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"></svg></span> Lihat Berita
				</a>
			</li>
            <li class="">
				<a href="insert_news.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"></svg></span> Insert Berita
				</a>
			</li>
            <li class="">
				<a href="update_news.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"></svg></span> Update Berita
				</a>
			</li>
            <li class="">
				<a href="delete_news.php">
					<span data-toggle="collapse" href="#sub-item-1"><svg class="glyph stroked chevron-down"></svg></span> Delete Berita
				</a>
			</li>
		</ul>
	</div>

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Admin</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Daftar Berita</div>
					<div class="panel-body">
						<table class="table" style="text-align:center;">
							<thead>
								<tr>
									<th data-field="state" data-checkbox="true" style="text-align:center;">Nomor</th>
									<th data-field="id" data-sortable="true" style="text-align:center;">ID</th>
									<th data-field="judul"  data-sortable="true" style="text-align:center;">Judul</th>
									<th data-field="keterangan"  data-sortable="true" style="text-align:center;">Keterangan</th>
                                    <th data-field="price" data-sortable="true" style="text-align:center;">Gambar</th>
								</tr>
							</thead>
                            <tbody>
                <?php
                    include "connect.php";
                  //include "connection/connect_to_oracle.php";
                  $rows = mysql_query("select * from BERITA ORDER BY NO"); // multiple rows
                    $count=1;
                  while ($row = mysql_fetch_array($rows)) {
                    $nomor = $row['NO'];
                    $id = $row['ID_BERITA'];
                    $judul = $row['JUDUL_BERITA'];
                    $desc = $row['KETERANGAN_BERITA'];
                    $foto = $row['GAMBAR_BERITA'];
                    
                    echo '<td>'.$nomor.'</td>';
                    echo '<td>'.$id.'</td>';
                    echo '<td>'.$judul.'</td>';
                    echo '<td>'.$desc.'</td>';
                    echo "<td><div class='product_galery'><img src=".$foto."></div></td>";
                    echo '<tr>';
                      $count++;
                  }
                ?>
              </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script src="js/lumino.glyphs.js"></script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>
</body>
</html>