<?php 
function assets()
{
	return base_url().'assets/';
}

function dateFormat($date = "", $format = "")
{
    $ret = "";
    $bulan = array("Januari","February","Maret","April","Mei","Juni","Juli","Agustus","September","Okotober","November","Desember");
    $hari  = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");

    $month = intval(date('m', strtotime($date))) - 1;
    $days  = date('w', strtotime($date));
    $tg_angka = date('d', strtotime($date));
    $year  = date('Y', strtotime($date));

    switch ($format) {
        case 'bulanTxt':
            $ret = sprintf('%d %s %d', $tg_angka, $bulan[$month], $year);
            break;
        case 'hariTxt':
            $ret = sprintf('%s, %d %s %d', $hari[$days],$tg_angka, $bulan[$month], $year);
        default:
            $ret = "";
            break;
    }
    return $ret;
}

function phoneFormat($phone = "")
{
    $formated = '0';
    if ($phone!="") {
        $phone = preg_replace('/[^0-9]/', '', $phone);
        if (substr($phone, 0, 1)=='0') {
            $formated = '62'.substr($phone, 1);
        } elseif (substr($phone, 0, 2)=='62') {
            $formated = $phone;
        } else {
            $formated = '62'.$phone;
        }
    }
    return $formated;
}

function rupiah($angka)
{
	return 'Rp. ' . number_format($angka, 0 , '' , '.' ) . ',-';
}
?>