<!-- ==================================== 
Author: Teguh Agung Prabowo
NIM: 512121230007
Major: Sistem Informasi
TimeStamp: 29 November 2021 13:02:00
=========================================-->

<?php 
	print("Pemrograman Web Tugas 9");
	printf("Pemrograman Web Tugas 9");

	$text = "Ini contoh text";
	echo($text);

	$weight = 60; /*dalam kilogram*/
	$height = 1.52; /*dalam meter*/

	function bmi($weight, $height)
	{
		$bmi = $weight / ($height * $height);

		if ($bmi < 18.5) {
			echo "Underweight";
		} else if ($bmi >= 18.5 || $bmi <= 24.9) {
			echo "Normal weight";
		} else if ($bmi >= 25 || $bmi <= 29.9) {
			echo "Overweight";
		} else if ($bmi >= 30 || $bmi <= 34.9) {
			echo "Obesity class 1";
		} else if ($bmi >= 35 || $bmi <= 39.9) {
			echo "Obesity class 2";
		} else if ($bmi >= 40) {
			echo "Obesity class 3";
		}
	}

	$array = [
		['weight' => 52, 'height' => 1.52],
		['weight' => 58, 'height' => 1.55],
	];

	for ($i = 0; $i < count($array); $i++) { 
		bmi($array[$i]['weight'], $array[$i]['height']);
	}

	foreach ($array as $value) {
		bmi($value['weight'], $value['height']);
	}

	$x = 0;

	while($x <= 100) {
		echo "While method. The number is: $x <br>";
		$x+=10;
	}

	$x = 1;

	do {
		echo "Do while method. The number is: $x <br>";
		$x++;
	} while ($x <= 5);


	/* ======= Array Numerik =====*/
	$numerik_array = [1, 2, 3, 4, 5, 6];

	/*======== Array Asosiatif =====*/
	$assosiatif_array = [
        0 => [
            'title' => 'dashboard',
            'parent_id' => null
        ],
        1 => [
            'title' => 'manajemen data',
            'parent_id' => null
        ],
        2 => [
            'title' => 'register loket',
            'parent_id' => null
        ],
        3 => [
            'title' => 'manajemen transaksi',
            'parent_id' => null
        ],
        4 => [
            'title' => 'approve/reject pembayaran',
            'parent_id' => 4
        ],
        5 => [
            'title' => 'edit pasien',
            'parent_id' => 4
        ],
        6 => [
            'title' => 'cetak kwitansi',
            'parent_id' => 4
        ],
        7 => [
            'title' => 'cetak hasil',
            'parent_id' => 4
        ],
        8 => [
            'title' => 'checkin',
            'parent_id' => 4
        ],
        9 => [
            'title' => 'sampling',
            'parent_id' => null
        ],
        10 => [
            'title' => 'ambil sample',
            'parent_id' => 10
        ],
        11 => [
            'title' => 'kirim sample',
            'parent_id' => 10
        ],
        12 => [
            'title' => 'edit instalasi',
            'parent_id' => 10
        ],
        13 => [
            'title' => 'pemeriksaan',
            'parent_id' => null
        ],
        14 => [
            'title' => 'beri hasil',
            'parent_id' => 14
        ],
        15 => [
            'title' => 'edit hasil',
            'parent_id' => 14
        ],
        16 => [
            'title' => 'otorisasi pemeriksaan',
            'parent_id' => 14
        ],
        17 => [
            'title' => 'reporting',
            'parent_id' => null
        ],
    ];
 ?>