<?php 
$conn = mysqli_connect("localhost","root","","dss");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($tabel,$mk,$dosen,$ditekuni,$id_nama){
	global $conn;
	$query = "INSERT INTO $tabel  VALUES ('', '$id_nama', '$mk', '$dosen', '$ditekuni')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);

}
function insert_nama ($nama){
	global $conn;
	$query = "INSERT INTO nama  VALUES ('','$nama')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
function select_id(){
	global $conn;
	$query = "SELECT max(id_nama) FROM nama";
	$result = mysqli_query($conn,$query);
	$row = mysqli_fetch_assoc($result);
	return $row["max(id_nama)"];

}
function hitung($a,$b,$c,$d,$e,$f,$j){
	$nilai = [$a,$b,$c,$d,$e,$f,$j];
	$nilai2 = [];
	for ($i=0; $i <7 ; $i++) { 
		for ($j=0; $j <7 ; $j++) { 
			$nilai2[$i][$j] = $nilai[$i]/$nilai[$j];
		}
	}


	$nilai3 = [];

	for ($i=0; $i <7 ; $i++) { 
		$nilai3[$i] = (
			($nilai2[$i][0]/($nilai2[0][0]+$nilai2[1][0]+$nilai2[2][0]+$nilai2[3][0]+$nilai2[4][0]+$nilai2[5][0]+$nilai2[5][0]))+
			($nilai2[$i][1]/($nilai2[0][1]+$nilai2[1][1]+$nilai2[2][1]+$nilai2[3][1]+$nilai2[4][1]+$nilai2[5][1]+$nilai2[5][1]))+
			($nilai2[$i][2]/($nilai2[0][2]+$nilai2[1][2]+$nilai2[2][2]+$nilai2[3][2]+$nilai2[4][2]+$nilai2[5][2]+$nilai2[5][2]))+
			($nilai2[$i][3]/($nilai2[0][3]+$nilai2[1][3]+$nilai2[2][3]+$nilai2[3][3]+$nilai2[4][3]+$nilai2[5][3]+$nilai2[5][3]))+
			($nilai2[$i][4]/($nilai2[0][4]+$nilai2[1][4]+$nilai2[2][4]+$nilai2[3][4]+$nilai2[4][4]+$nilai2[5][4]+$nilai2[5][4]))+
			($nilai2[$i][5]/($nilai2[0][5]+$nilai2[1][5]+$nilai2[2][5]+$nilai2[3][5]+$nilai2[4][5]+$nilai2[5][5]+$nilai2[5][5]))+
			($nilai2[$i][6]/($nilai2[0][6]+$nilai2[1][6]+$nilai2[2][6]+$nilai2[3][6]+$nilai2[4][6]+$nilai2[5][6]+$nilai2[5][6])) )/7;
	}
	return $nilai3;
}

//Copyright by Abrar Fitrawan 2019

?>