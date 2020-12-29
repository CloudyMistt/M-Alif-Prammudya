<!DOCTYPE html>
<html>
<head>
	<title>PDAM</title>
</head>
<body>
	<h1>Tagihan PDAM</h1>

		<?php
		$Jumlah = 85;
		if($Jumlah == 30){
			$DS = 30 * 150;
			echo nl2br("Biaya Pemakaian 30/m3 pertama = 150\r\n");
			echo nl2br("Biaya Pemakaian lebih 30/m3 pertama = 170\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 kedua = 210\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 ketiga dan seterusnya = 250\r\n");
			echo ("Total Pembayaran = "); echo $DS;
		}elseif($Jumlah <= 59) {
			$Dd = $Jumlah - 30;
			$DS = 30 * 150 + $Dd * 170;
			echo nl2br("Biaya Pemakaian 30/m3 pertama = 150\r\n");
			echo nl2br("Biaya Pemakaian lebih 30/m3 pertama = 170\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 kedua = 210\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 ketiga dan seterusnya = 250\r\n");
			echo ("Total Pembayaran = "); echo $DS;
		}elseif ($Jumlah <= 89) {
			$Dd = $Jumlah - 30;
			$DC = $Dd - 30;
			$DS = 30 * 150 + 30 * 170 + $DC * 210;
			echo nl2br("Biaya Pemakaian 30/m3 pertama = 150\r\n");
			echo nl2br("Biaya Pemakaian lebih 30/m3 pertama = 170\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 kedua = 210\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 ketiga dan seterusnya = 250\r\n");
			echo ("Total Pembayaran = "); echo $DS;
		}elseif ($Jumlah >= 90) {
			$Dd = $Jumlah - 30;
			$DC = $Dd - 30;
			$Dx = $DC - 30;
			$DS = 30 * 150 + 30 * 170 + 30 * 210 + $Dx * 250;
			echo nl2br("Biaya Pemakaian 30/m3 pertama = 150\r\n");
			echo nl2br("Biaya Pemakaian lebih 30/m3 pertama = 170\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 kedua = 210\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 ketiga dan seterusnya = 250\r\n");
			echo ("Total Pembayaran = "); echo $DS;
		}else{
			$DS = $Jumlah * 150;
			echo nl2br("Biaya Pemakaian 30/m3 pertama = 150\r\n");
			echo nl2br("Biaya Pemakaian lebih 30/m3 pertama = 170\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 kedua = 210\r\n");
			echo nl2br("Biaya Pemakaian 30/m3 ketiga dan seterusnya = 250\r\n");
			echo ("Total Pembayaran = "); echo $DS;
		}
		?>
		
</body>
</html>