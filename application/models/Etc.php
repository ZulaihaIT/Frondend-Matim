<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Etc
 *
 * @author lauwba
 */
class Etc extends CI_Model {

    function hariIndonesia($indexHari) {
        $hari = array(
            'Minggu',
            'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jum`at',
            'Sabtu'
        );
        return $hari[$indexHari];
    }
     function date_diff($date) {
        date_default_timezone_set("Asia/Jakarta");
        $now = date("Y-m-d H:i:s");
        $date1 = new DateTime($date);
        $date2 = new DateTime($now);

        $diff = $date2->diff($date1);

        $hours = $diff->h;
        $day = $diff->days;
        if ($day >= 365) {
            return round($day / 365) . ' Tahun lalu';
        } else if ($day > 0 && $day <=31) {
            return $day . ' Hari lalu';
        }else if ($day > 31 && $day <365) {
            return round($day / 31) . ' Bulan lalu';
        } else if ($hours <= 24) {
            return $hours . ' jam Lalu';
        }
    }

}
