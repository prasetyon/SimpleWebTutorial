<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Produk | Toko Batu Permata</title>
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
			<li class="">
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
            <li class="active">
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
				<h1 class="page-header">Delete Berita</h1>
			</div>
		</div>
        
        <div class="row" style="padding-top:10px;">
      <div class="col-md-12">
          <p>Please select news...</a>
        <div class="panel panel-default">
          <div class="panel-body">
            <form method="GET" action="<?php $_PHP_SELF ?>">
              <div class="form-group">
                <div class="controls">
                  <select class="form-control" name='id'>
                    <?php
                    include "connect.php";
                  $rows = mysql_query("select * from BERITA ORDER BY NO"); // multiple rows
                  while ($row = mysql_fetch_array($rows)) {
                    $id = $row['ID_BERITA'];
                    $judul = $row['JUDUL_BERITA'];
                    
                    echo "<option value='$id'>";
                    echo "$judul</option>";
                  }
                 ?>
                  </select>
                </div>
              </div>
                <div class="pull-right">
				<input class="btn btn-primary" type="submit" value="Select"/>
                </div>
        </form>
      </div>
    </div>
  </div>
</div>
    
    <?php
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = mysql_query("select * from BERITA where ID_BERITA='$id'");
        $row = mysql_fetch_array($query);
            ?>
            <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">ID Berita : <?php echo $id; ?></div>
					<div class="panel-body">
						<div class="col-md-6">
							<form role="form" method="POST" action="del_news.php">
								<div class="form-group">
									<label>ID Berita</label>
                                    <input class="form-control" placeholder="ID Berita" name="id_berita" value="<?php echo $id; ?>" readonly></div>
                                <div class="form-group">
									<label>Judul Berita</label>
									<input class="form-control" placeholder="Judul Berita" name="judul" value="<?php echo $row['JUDUL_BERITA']; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Keterangan Berita</label>
									<input class="form-control" type="text"  maxlength="250" placeholder="Keterangan Berita" name="keterangan" value="<?php echo $row['KETERANGAN_BERITA']; ?>" readonly>
								</div>
								<div class="form-group">
									<label>Gambar Produk</label>
									<a class="thumbnail">
					<img src="<?php echo $row['GAMBAR_BERITA']; ?>">
							</a>
								</div>
								
								<button type="submit" class="btn btn-danger" >Delete</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> <?php
        }
    ?>
    
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