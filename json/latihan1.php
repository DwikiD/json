<?php  
		// $mahasiswa = [
		// 	"nama" => "Dwiki Ganteng",
		// 	"nrp" => "173040069",
		// 	"email" => "Dwikigmail.com"
		// ];

		$dbh = new PDO('mysql:host=localhost;dbname=wpu_gue', 'root', '');
		$db = $dbh->prepare('SELECT * FROM mahasiswa');
		$db->execute();
		$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);
		$data = json_encode($mahasiswa);
		echo $data;