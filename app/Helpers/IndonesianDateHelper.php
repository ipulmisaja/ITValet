<?php

function inadate($date)
{
    $month = array(
        1 => 'Januari',
		'Februari',
		'Maret',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Agustus',
		'September',
		'Oktober',
		'November',
		'Desember'
    );

    $pecahkan = explode('-', $date);

    return $pecahkan[2] . ' ' . $month[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}

?>
