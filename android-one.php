<!DOCTYPE html>
<html>
<head>
	<title>s</title>
</head>
<body>
<?php 


	    $username=$_POST["ad"];
        $password=$_POST["soyad"];
        print $username;

	   

   

try {
     $db = new PDO("mysql:host=localhost;dbname=androidthree", "root", "");
     print "başarılı".$username.$password;
} catch ( PDOException $e ){
     print $e->getMessage();
}



		
		

		$ekle=$db->query("insert into fitnesstthree(ad,soyad) values('$username','$password')"); 

		

		if($ekle){

			echo "Başarıyla Eklendi.";

		}else{

			echo "Eklenemedi.";

		}
           
           


 ?>
 <!--
 <form action="" method="post">
 	<input type="text" name="username">
 	<input type="text" name="password">
 	<button type="submit">gönder</button>
 </form>
-->
</body>
</html>


