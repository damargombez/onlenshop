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

function getCurlData($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
    $curlData = curl_exec($curl);
    curl_close($curl);
    return $curlData;
}

function get_combobox($query, $key, $value, $empty = FALSE, &$disable = ""){
    $combobox = array();
    $CI=& get_instance();
    $data = $CI->db->query($query);
    if($empty) $combobox[""] = "&nbsp;";
    if($data->num_rows() > 0){
        $kodedis = "";
        $arrdis = array();
        foreach($data->result_array() as $row){
            if(is_array($disable)){
                if($kodedis==$row[$disable[0]]){
                    if(!array_key_exists($row[$key], $combobox)) $combobox[$row[$key]] = "&nbsp; &nbsp;&nbsp;".$row[$value];
                }else{
                    if(!array_key_exists($row[$disable[0]], $combobox)) $combobox[$row[$disable[0]]] = $row[$disable[1]];
                    if(!array_key_exists($row[$key], $combobox)) $combobox[$row[$key]] = "&nbsp; &nbsp;&nbsp;".$row[$value];
                }
                $kodedis = $row[$disable[0]];
                if(!in_array($kodedis, $arrdis)) $arrdis[] = $kodedis;
            }else{
                $combobox[$row[$key]] = $row[$value];
            }
        }
        $disable = $arrdis;
    }
    return $combobox;
}
?>