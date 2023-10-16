
<?php
    error_reporting(0);

	$env = 'lokal'; // lokal atau online

	if($env=='lokal'){
		$host	 		= "localhost";
		$user	 		= "root";
		$pass	 		= "";
		$dabname		= "territoryid_2023_db";
		$base			= "http://localhost/tera_byte/example/territory_id/";
	}else{
		$host	 		= "151.106.119.249";
		$user		 	= "deelabs_terabyte";
		$pass	 		= "bismIll@h";

		$dabname		= "deelabs_territory_terabyte_db";

		$base			= "http://territory.terabytee.my.id/";
	};

	// $koneksi = mysqli_connect( $host, $user, $pass) or die('Could not connect to mysql server.' );
	// mysqli_select_db($dabname, $conn) or die('Could not select database.');

	$koneksi = mysqli_connect($host, $user, $pass, $dabname) or die('<script>location.replace("error/db")</script>');
	$baseurl=$base;

?>
