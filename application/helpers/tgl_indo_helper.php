<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');
      
    if(!function_exists('tgl_indo'))
    {
        function date_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.' '.$bulan.' '.$tahun;
        }
    }
      
    if(!function_exists('bulan'))
    {
        function bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Januari";
                    break;
                case 2:
                    return "Februari";
                    break;
                case 3:
                    return "Maret";
                    break;
                case 4:
                    return "April";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Juni";
                    break;
                case 7:
                    return "Juli";
                    break;
                case 8:
                    return "Agustus";
                    break;
                case 9:
                    return "September";
                    break;
                case 10:
                    return "Oktober";
                    break;
                case 11:
                    return "November";
                    break;
                case 12:
                    return "Desember";
                    break;
            }
        }
    }
 
    //Format Shortdate
    if(!function_exists('shortdate_indo'))
    {
        function shortdate_indo($tgl)
        {
            $ubah = gmdate($tgl, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = short_bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.'/'.$bulan.'/'.$tahun;
        }
    }
      
    if(!function_exists('short_bulan'))
    {
        function short_bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "01";
                    break;
                case 2:
                    return "02";
                    break;
                case 3:
                    return "03";
                    break;
                case 4:
                    return "04";
                    break;
                case 5:
                    return "05";
                    break;
                case 6:
                    return "06";
                    break;
                case 7:
                    return "07";
                    break;
                case 8:
                    return "08";
                    break;
                case 9:
                    return "09";
                    break;
                case 10:
                    return "10";
                    break;
                case 11:
                    return "11";
                    break;
                case 12:
                    return "12";
                    break;
            }
        }
    }
 
    //Format Medium date
    if(!function_exists('mediumdate_indo'))
    {
        function mediumdate_indo($tgl)
        {
            $ubah = gmdate(date('Y-m-d',strtotime($tgl)), time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tanggal = $pecah[2];
            $bulan = bulan($pecah[1]);
            $tahun = $pecah[0];
            return $tanggal.' '.$bulan.' '.$tahun;
        }
    }
      
    if(!function_exists('medium_bulan'))
    {
        function medium_bulan($bln)
        {
            switch ($bln)
            {
                case 1:
                    return "Jan";
                    break;
                case 2:
                    return "Feb";
                    break;
                case 3:
                    return "Mar";
                    break;
                case 4:
                    return "Apr";
                    break;
                case 5:
                    return "Mei";
                    break;
                case 6:
                    return "Jun";
                    break;
                case 7:
                    return "Jul";
                    break;
                case 8:
                    return "Ags";
                    break;
                case 9:
                    return "Sep";
                    break;
                case 10:
                    return "Okt";
                    break;
                case 11:
                    return "Nov";
                    break;
                case 12:
                    return "Des";
                    break;
            }
        }
    }
     
    //Long date indo Format
    if(!function_exists('longdate_indo'))
    {
        function longdate_indo($tanggal)
        {
            $ubah = gmdate($tanggal, time()+60*60*8);
            $pecah = explode("-",$ubah);
            $tgl = $pecah[2];
            $bln = $pecah[1];
            $thn = $pecah[0];
            $bulan = bulan($pecah[1]);
      
            $nama = date("l", mktime(0,0,0,$bln,$tgl,$thn));
            $nama_hari = "";
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jumat";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $tgl.' '.$bulan.' '.$thn;
        }
    }

    if(!function_exists('hari'))
    {
        function hari($tanggal)
        {
            $nama = date("l", strtotime($tanggal));
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jumat";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $nama_hari;
        }
    }


    if(!function_exists('hari_indo'))
    {
        function hari_indo($nama)
        {
            if($nama=="7") {$nama_hari="Minggu";}
            else if($nama=="1") {$nama_hari="Senin";}
            else if($nama=="2") {$nama_hari="Selasa";}
            else if($nama=="3") {$nama_hari="Rabu";}
            else if($nama=="4") {$nama_hari="Kamis";}
            else if($nama=="5") {$nama_hari="Jumat";}
            else if($nama=="6") {$nama_hari="Sabtu";}
            return $nama_hari;
        }
    }


    if(!function_exists('hari_tanggal'))
    {
        function hari_tanggal($tanggal)
        {
            $nama = date("l", strtotime($tanggal));
            if($nama=="Sunday") {$nama_hari="Minggu";}
            else if($nama=="Monday") {$nama_hari="Senin";}
            else if($nama=="Tuesday") {$nama_hari="Selasa";}
            else if($nama=="Wednesday") {$nama_hari="Rabu";}
            else if($nama=="Thursday") {$nama_hari="Kamis";}
            else if($nama=="Friday") {$nama_hari="Jumat";}
            else if($nama=="Saturday") {$nama_hari="Sabtu";}
            return $nama_hari.', '.mediumdate_indo(date('Y-m-d',strtotime($tanggal)));
        }
    }

    if(!function_exists('nilai'))
    {
        function nilai($nilai)
        {
          $nilai = floatval($nilai);
            if(90 < $nilai && $nilai <= 200){
                $value = 'Istimewa';
            } elseif(80 < $nilai && $nilai <= 90){
                $value = 'Sangat Baik';
            } elseif(70 < $nilai && $nilai <= 80){
                $value = 'Baik';
            } elseif(60 < $nilai && $nilai <= 70){
                $value = 'Cukup';
            } elseif(50 < $nilai && $nilai <= 60){
                $value = 'Kurang';
            } else {
                $value = 'Sangat Kurang';
            }

            return $value;
        }
    }

    if(!function_exists('course_status'))
    {
        function course_status($nilai)
        {
            if($nilai == 'progress'){
                $value = '<a href="javascript:void(0)" class="btn btn-sm btn-warning">'.$nilai.'</a>';
            } elseif($nilai == 'open'){
                $value = '<a href="javascript:void(0)" class="btn btn-sm btn-success">'.$nilai.'</a>';
            } elseif($nilai == 'close'){
                $value = '<a href="javascript:void(0)" class="btn btn-sm btn-dark">'.$nilai.'</a>';
            } elseif($nilai == 'tutup'){
                $value = '<a href="javascript:void(0)" class="btn btn-sm btn-dark">'.$nilai.'</a>';
            } elseif($nilai == 'full'){
                $value = '<a href="javascript:void(0)" class="btn btn-sm btn-danger">'.$nilai.'</a>';
            } 

            return $value;
        }
    }