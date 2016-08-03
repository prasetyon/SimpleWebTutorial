<?php
    include "connect.php";
    $id = $_POST['id_berita'];

    $query = "DELETE FROM BERITA WHERE ID_BERITA='$id'";
	//echo $query;
	//if($conn->exec($query))
    //mysqli_query($query);
	if(mysql_query($query))
    {
		header("Location:delete_news.php?sukses");	
	}
	else
	{
        die("Query failed with error:".mysql_error());
		header("Location:delete_news.php?gagal");
	}
?>