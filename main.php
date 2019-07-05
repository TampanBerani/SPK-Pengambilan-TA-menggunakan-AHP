<?php 
require 'functions.php';


$result_daftar_mk = query("SELECT * FROM daftar_mk");
$result_dosen = query("SELECT * FROM dosen");
$result_grup_tema = query("SELECT * FROM grup_tema");

//var_dump($result_daftar_mk);

if (isset($_POST["submit"])) {
	//var_dump($_POST);
	//echo $_POST["nama"];

	if (insert_nama($_POST["nama"]) > 0) {
		//echo "yeyeyeyyeyee id = ";
		$id = select_id();
		$nilai=[];

		foreach ($result_daftar_mk as $row) {
			$name_nilai = "nilai_".$row["nama"]; 
			$suka_nilai = "suka_".$row["nama"];
			if ($_POST[$name_nilai] == "0") {
				$result="0";
				$nilai[] = $result;
			}
			else {
				$result = ($_POST[$name_nilai]+ $_POST[$suka_nilai])/2;
				$nilai[] = $result;
			}
			//var_dump($_POST[$name_nilai]);
		}
		//var_dump($_POST[$name_nilai]);
		//var_dump($nilai);

		$image_processing = (($nilai[0]*1)+ ($nilai[1]*1)+ ($nilai[2]*1.5)+ ($nilai[3]*1.5)+ ($nilai[4]*1.5)+ ($nilai[5]*1)+ ($nilai[6]*1.5)+ ($nilai[7]*1.5)+ ($nilai[8]*1)+ ($nilai[9]*1)+ ($nilai[10]*1)+ ($nilai[11]*2)+ ($nilai[12]*1.5)+($nilai[13]*2))/14;

		$data_mining = (($nilai[0]*1)+($nilai[2]*1)+($nilai[4]*1)+($nilai[3]*1)+($nilai[5]*1)+($nilai[6]*1)+($nilai[7]*1)+($nilai[8]*1)+($nilai[14]*2)+($nilai[15]*1)+($nilai[16]*1)+($nilai[17]*1.5)+($nilai[18]*2)+($nilai[19]*2)+($nilai[20]*2))/15;

		$iot = (($nilai[0]*1.5)+($nilai[1]*1)+($nilai[21]*1)+($nilai[14]*1.5)+($nilai[22]*1.5)+($nilai[9]*1)+($nilai[23]*1)+($nilai[24]*1)+($nilai[10]*1)+($nilai[25]*1)+($nilai[26]*0.5)+($nilai[27]*1)+($nilai[28]*0.5)+($nilai[29]*1.5)+($nilai[30]*1.5)+($nilai[18]*1)+($nilai[31]*1)+($nilai[32]*1.5))/18;

		$jaringan = (($nilai[21]*1)+($nilai[22]*1)+($nilai[23]*2)+($nilai[28]*2)+($nilai[29]*2)+($nilai[30]*1.5)+($nilai[33]*1.5))/7;

		$rpl = (($nilai[0]*1.5)+($nilai[5]*1.5)+($nilai[21]*1)+($nilai[8]*1.5)+($nilai[14]*1)+($nilai[22]*1)+($nilai[9]*1.5)+($nilai[34]*0.5)+($nilai[24]*2)+($nilai[10]*1)+($nilai[25]*2)+($nilai[26]*2)+($nilai[35]*2)+($nilai[36]*0.5)+($nilai[12]*0.5)+($nilai[37]*1)+($nilai[38]*0.5)+($nilai[18]*1.5)+($nilai[39]*2)+($nilai[40]*1))/20;

		$nlp = (($nilai[0]*1.5)+($nilai[2]*2)+($nilai[3]*2)+($nilai[4]*2)+($nilai[5]*1)+($nilai[7]*2)+($nilai[8]*1)+($nilai[10]*1)+($nilai[27]*2)+($nilai[16]*1.5)+($nilai[41]*2))/11;

		$kripto = (($nilai[0]*1)+($nilai[2]*1.5)+($nilai[3]*1.5)+($nilai[4]*1.5)+($nilai[5]*1.5)+($nilai[9]*1)+($nilai[42]*2)+($nilai[15]*1.5)+($nilai[10]*1.5)+($nilai[43]*2)+($nilai[44]*1)+($nilai[31]*1)+($nilai[16]*2)+($nilai[7]*1.5)+($nilai[8]*1.5))/15;


		$image_processing_dosen=0.1;
		$data_mining_dosen=0.1;
		$iot_dosen=0.1;
		$jaringan_dosen=0.1;
		$rpl_dosen=0.1;
		$nlp_dosen=0.1;
		$kripto_dosen=0.1;

		for ($i=0; $i <4 ; $i++) { 
			$dosen_fav = "dosen_fav".$i; $nilai_dosen_fav = "nilai_dosen_fav".$i; 

			if ($_POST[$dosen_fav] == 1) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$kripto_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 2) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$kripto_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 3) {
				$nlp_dosen+= $_POST[$nilai_dosen_fav];
				$kripto_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 4) {
				$image_processing_dosen+= $_POST[$nilai_dosen_fav];
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 5) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 6) {
				$iot_dosen+= $_POST[$nilai_dosen_fav];
				$jaringan_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 7) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 8) {
				$image_processing_dosen+= $_POST[$nilai_dosen_fav];
				$nlp_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 9) {
				$image_processing_dosen+= $_POST[$nilai_dosen_fav];
				$nlp_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 10) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 11) {
				$image_processing_dosen+= $_POST[$nilai_dosen_fav];
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 12) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 13) {
				$iot_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 14) {
				$iot_dosen+= $_POST[$nilai_dosen_fav];
				$jaringan_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 15) {
				$jaringan_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 16) {
				$image_processing_dosen+= $_POST[$nilai_dosen_fav];
				$nlp_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 17) {
				$data_mining_dosen+= $_POST[$nilai_dosen_fav];
				$rpl_dosen+= $_POST[$nilai_dosen_fav];
			}
			elseif ($_POST[$dosen_fav] == 18) {
				$iot_dosen+= $_POST[$nilai_dosen_fav];
				$jaringan_dosen+= $_POST[$nilai_dosen_fav];
			}
		}

		// echo "image = ".$image_processing_dosen;
		// echo "  data mining = ".$data_mining_dosen;
		// echo "  iot = ".$iot_dosen;
		// echo "  jaringan = ".$jaringan_dosen;
		// echo "  rpl = ".$rpl_dosen;
		// echo "  nlp = ".$nlp_dosen;
		// echo "  kripto = ".$kripto_dosen;

		$image_processing_ditekuni=0.1;
		$data_mining_ditekuni=0.1;
		$iot_ditekuni=0.1;
		$jaringan_ditekuni=0.1;
		$rpl_ditekuni=0.1;
		$nlp_ditekuni=0.1;
		$kripto_ditekuni=0.1;

		for ($i=0; $i <4 ; $i++) { 
			$ditekuni = "ditekuni".$i; $nilai_ditekuni = "nilai_ditekuni".$i;
			if ($_POST[$ditekuni] == 1) {
				$image_processing_ditekuni += $_POST[$nilai_ditekuni];
			}
			elseif ($_POST[$ditekuni] == 2) {
				$data_mining_ditekuni += $_POST[$nilai_ditekuni];
			}
			elseif ($_POST[$ditekuni] == 3) {
				$iot_ditekuni += $_POST[$nilai_ditekuni];
			}
			elseif ($_POST[$ditekuni] == 4) {
				$jaringan_ditekuni += $_POST[$nilai_ditekuni];
			}
			elseif ($_POST[$ditekuni] == 5) {
				$rpl_ditekuni += $_POST[$nilai_ditekuni];
			}
			elseif ($_POST[$ditekuni] == 6) {
				$nlp_ditekuni += $_POST[$nilai_ditekuni];
			}
			elseif ($_POST[$ditekuni] == 7) {
				$kripto_ditekuni += $_POST[$nilai_ditekuni];
			}
		}

		// echo "image = ".$image_processing_ditekuni;
		// echo "  data mining = ".$data_mining_ditekuni;
		// echo "  iot = ".$iot_ditekuni;
		// echo "  jaringan = ".$jaringan_ditekuni;
		// echo "  rpl = ".$rpl_ditekuni;
		// echo "  nlp = ".$nlp_ditekuni;
		// echo "  kripto = ".$kripto_ditekuni;

// tambah();
		tambah("data_mining",$data_mining,$data_mining_dosen,$data_mining_ditekuni,$id);

		tambah("image_processing",$image_processing,$image_processing_dosen,$image_processing_ditekuni,$id);

		tambah("iot",$iot,$iot_dosen,$iot_ditekuni,$id);

		tambah("jaringan",$jaringan,$jaringan_dosen,$jaringan_ditekuni,$id);

		tambah("rpl",$rpl,$rpl_dosen,$rpl_ditekuni,$id);

		tambah("nlp",$nlp,$nlp_dosen,$nlp_ditekuni,$id);

		tambah("kriptografi",$kripto,$kripto_dosen,$kripto_ditekuni,$id);
		

		//var_dump($weight3);

		$weight = [0.5 , 0.2 , 0.3];
		$weight2 = [];
		for ($i=0; $i <3 ; $i++) { 
			for ($j=0; $j <3 ; $j++) { 
				$weight2[$i][$j] = $weight[$i]/$weight[$j];
			}
		}
		$weight_result = [];
		for ($i=0; $i <3 ; $i++) { 


			$weight_result[$i] = (($weight2[$i][0]/($weight2[0][0]+$weight2[1][0]+$weight2[2][0]))+($weight2[$i][1]/($weight2[0][1]+$weight2[1][1]+$weight2[2][1]))+($weight2[$i][2]/($weight2[0][2]+$weight2[1][2]+$weight2[2][2])))/3;
		}

		$nilai_result = hitung($image_processing, $data_mining, $iot, $jaringan, $rpl, $nlp, $kripto);
		$dosen_result = hitung($image_processing_dosen,$data_mining_dosen,$iot_dosen,$jaringan_dosen,$rpl_dosen,$nlp_dosen,$kripto_dosen);
		$tekuni_result = hitung($image_processing_ditekuni,$data_mining_ditekuni,$iot_ditekuni,$jaringan_ditekuni,$rpl_ditekuni,$nlp_ditekuni,$kripto_ditekuni);

		$final_result = [];
		for ($i=0; $i <7 ; $i++) { 
			$final_result[$i] = ($nilai_result[$i]*$weight_result[0])+($dosen_result[$i]*$weight_result[1])+($tekuni_result[$i]*$weight_result[2]);
		}
		//var_dump($final_result);
		$sum_final_res = 0;
		for ($i=0; $i <7 ; $i++) { 
			$sum_final_res +=$final_result[$i];
		}
//echo $sum_final_res;

	}

	

	// $nilai_result = hitung(4.54285714285714,4.15166666666667,3.61388888888889,4.05714285714286,3.855 ,5.42272727272727 ,4.75666666666667);
	// $dosen_result = hitung(2,5,3,0.1,6,2,2);
	// $tekuni_result = hitung(0.1,0.1,0.1,3,3,0.1,0.1);

	// var_dump($nilai_result);
	// var_dump($dosen_result);
	// var_dump($tekuni_result);
	
}
// echo "nilai image processing = ";
// echo $image_processing;
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

	<?php if (isset($_POST["submit"])) : ?>
		<div class="jumbotron">
			<div class="container">
				<p class="lead">Berikut adalah hasil Kalklulasi berdasarkan data anda</p>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Bidang Tema</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 0; ?>
						<?php foreach ($result_grup_tema as $row) : ?>
							<tr>
								<td><?= $no+1 ?></td>
								<td><?=$row["nama_grup"] ?></td>
								<td><?= ($final_result[$no]/$sum_final_res)*100 ?> %</td>
								<?php $no++; ?>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<p class="lead">Nilai yang dihasilkan menunjukkan tingkat kesesuaian anda terhadap bidang tema tersebut.</p>
				<hr class="my-4">
				<a class="btn btn-primary btn-lg" href="index.php" role="button">Kembali ke Halaman Awal!</a>
			</div>
		</div>
		<?php else : ?>
			<div class="jumbotron jumbotron-fluid">
				<div class="container">
					<h1 class="display-6">Sistem Pendukung Keputusan Pengambilan TA</h1>
					<p class="lead">Silahkan mengisi form dengan lengkap. Ingin kembali ke halama utama? <a href="index.php">kembali</a></p>
					<form action="" method="post">
						<div class="form-group row">
							<label for="nama" class="col-sm-2 col-form-label">Isikan nama Anda : </label>
							<div class="col-sm-7">
								<input type="text" class="form-control" name="nama" id="nama" placeholder="Isikan nama anda">
							</div>
						</div>
						<hr class="my-4">
						<h5 class="display-8">Mata Kuliah</h5>
						<?php foreach ($result_daftar_mk as $row)  : ?>
							<?php $name_nilai = "nilai_".$row["nama"]; $suka_nilai = "suka_".$row["nama"]; ?>
							<div class="form-group row">
								<label for="konsep_pemrograman" class="col-sm-2 col-form-label"><?=$row["nama_mk"] ?></label>
								<div class="col-sm-5">
									<input type="text" class="form-control" name=<?=$name_nilai ?> id="konsep_pemrograman" placeholder="Masukkan Nilai">
								</div>
								<div class="col-sm-5">
									<select class="custom-select mr-sm-2" name=<?=$suka_nilai ?> id="suka_konsep_pemrograman">
										<option value="4">Sangat Suka</option>
										<option value="3">Suka</option>
										<option value="2">Kurang Suka</option>
										<option value="1">Tidak Suka</option>
									</select>
								</div>
							</div>
						<?php endforeach ?>

						<hr class="my-4">
						<h5 class="display-8">Dosen favorit</h5>

						<?php for ($i=0; $i <4 ; $i++) : ?>
							<?php $dosen_fav = "dosen_fav".$i; $nilai_dosen_fav = "nilai_dosen_fav".$i; ?>

							<div class="form-group row">
								<label for="konsep_pemrograman" class="col-sm-2 col-form-label">Pilih Nama Dosen</label>
								<div class="col-sm-5">
									<select class="custom-select mr-sm-2" name=<?=$dosen_fav ?> id="dosen_fav1">
										<option selected value="00">Pilih Nama Dosen</option>
										<?php foreach ($result_dosen as $row) : ?>
											<?php $dosen = $row["nama_dosen"]; ?>
											<option value=<?=$row["id_dosen"] ?> ><?=$row["nama_dosen"] ?> </option>
										<?php endforeach ?>
									</select>
								</div>
								<div class="col-sm-5">
									<select class="custom-select mr-sm-2" name=<?=$nilai_dosen_fav ?> id="nilai_dosen_fav1">
										<option value="3">Sangat Senang</option>
										<option value="2">Senang</option>
										<option value="1">Cukup Senang</option>
									</select>
								</div>
							</div>
						<?php endfor ?>

						<hr class="my-4">
						<h5 class="display-8">Hal yang ditekuni saat ini</h5>


						<?php for ($i=0; $i <4 ; $i++) : ?>
							<?php $ditekuni = "ditekuni".$i; $nilai_ditekuni = "nilai_ditekuni".$i; ?>

							<div class="form-group row">
								<label for="konsep_pemrograman" class="col-sm-2 col-form-label">Bidang yang Ditekuni</label>
								<div class="col-sm-5">
									<select class="custom-select mr-sm-2" name=<?=$ditekuni ?> id="ditekuni1">
										<option selected value="00">Pilih Bidang yang Ditekuni</option>
										<?php foreach ($result_grup_tema as $row) : ?>
											<option value=<?=$row["id_grup_tema"] ?> ><?=$row["nama_grup"] ?></option>
										<?php endforeach ?>
										<option value="RPL">RPL</option>
										<option value="JARINGAN">JARINGAN</option>
									</select>
								</div>
								<div class="col-sm-5">
									<select class="custom-select mr-sm-2" name=<?= $nilai_ditekuni ?> id="nilai_ditekuni1">
										<option value="3">Sangat Senang</option>
										<option value="2">Senang</option>
										<option value="1">Cukup Senang</option>
									</select>
								</div>
							</div>
						<?php endfor ?>
						<hr class="my-4">
						<button class="btn btn-primary btn-lg" type="submit" name="submit">Lanjutkan!</button>
					</form>
				</div>
			</div>
		<?php endif ?>

		<p>Copyright by Abrar Fitrawan 2019</p>



		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>