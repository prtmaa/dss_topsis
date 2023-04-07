<?php


class topsis
{
    public $alternatif = array();
    public $kriteria = array();
    public $data_hp;
    public $pembagi;
    public $normalisasi;
    public $normxbobot;
    public $bobot;
    public $cmin;
    public $cmax;
    public $ymax;
    public $ymin;
    public $atribut;
    public $dmin;
    public $dplus;
    public $dplusmin;


    public function __construct()
    {
        include('../database/koneksi.php');


        $W1    = 5;
        $W2    = $_POST['ram'];
        $W3    = $_POST['memori'];
        $W4    = $_POST['processor'];
        $W5    = $_POST['kamera_b'];
        $W6    = $_POST['kamera_d'];
        $W7    = $_POST['batrai'];
        $W8    = $_POST['os'];
        $W9    = $_POST['resolusi'];
        $W10    = $_POST['warna'];


        array_push($this->kriteria, array('Harga', $W1, 'Benefit'));
        array_push($this->kriteria, array('RAM', $W2, 'Benefit'));
        array_push($this->kriteria, array('Memori', $W3, 'Benefit'));
        array_push($this->kriteria, array('Processor', $W4, 'Benefit'));
        array_push($this->kriteria, array('Kamera Belakang', $W5, 'Benefit'));
        array_push($this->kriteria, array('Kamera Depan', $W6, 'Benefit'));
        array_push($this->kriteria, array('Batrai', $W7, 'Benefit'));
        array_push($this->kriteria, array('Sistem Operasi', $W8, 'Benefit'));
        array_push($this->kriteria, array('Resolusi Layar', $W9, 'Benefit'));
        array_push($this->kriteria, array('Warna', $W10, 'Benefit'));


        $query = mysqli_query($koneksi, "SELECT * FROM tb_hp_user");
        while ($result = mysqli_fetch_array($query)) {
            $harga[] = $result['harga_hp'];
        }

        $max = MAX($harga);
        $min = MIN($harga);



        $alternatif = mysqli_query($koneksi, "SELECT * from tb_hp_user WHERE  harga_hp BETWEEN '$min' AND '$max'");
        while ($row = mysqli_fetch_array($alternatif)) {

            include('value_user.php');


            // array_push($this->alternatif, array(
            //     $row['nama_hp'], $row['ram_value'], $wr, $wh, $row['procesor_value'], $row['kamd_value'],
            //     $row['kamb_value'], $row['batrai_value'], $row['os_value'], $row['layar_value']
            // ));

            array_push($this->alternatif, array(
                $row['nama_hp'], $wh, $wr, $wm, $wp, $wkb,
                $wkd, $wb, $ws, $wl, $ww
            ));
        }



        $this->pembagi();
        $this->normalisasi();
        $this->bobot();
        $this->normxbobot();
        $this->cmax();
        $this->cmin();
        $this->atribut();
        $this->ymaxmin();
        $this->dplusmin();
    }




    public function pembagi()
    {

        $this->pembagi = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($this->alternatif as $a) {
            for ($i = 0; $i < count($this->kriteria); $i++) {
                $this->pembagi[$i] += pow($a[$i + 1], 2);
            }
        }
        for ($i = 0; $i < count($this->pembagi); $i++) {
            $this->pembagi[$i] = round(sqrt($this->pembagi[$i]), 3);
        }
    }

    public function normalisasi()
    {
        $this->normalisasi = array();
        foreach ($this->alternatif as $a) {
            for ($i = 0; $i < count($this->pembagi); $i++) {
                $a[$i + 1] = $a[$i + 1] / $this->pembagi[$i];
                $a[$i + 1] = round($a[$i + 1], 3);
            }
            array_push($this->normalisasi, $a);
        }
    }

    public function bobot()
    {
        $this->bobot = array();
        foreach ($this->kriteria as $k) {
            array_push($this->bobot, $k[1]);
        }
    }

    public function normxbobot()
    {
        $this->normxbobot = array();
        foreach ($this->normalisasi as $n) {
            for ($i = 0; $i < count($this->bobot); $i++) {
                $n[$i + 1] = $n[$i + 1] * $this->bobot[$i];
                $n[$i + 1] = round($n[$i + 1], 3);
            }
            array_push($this->normxbobot, $n);
        }
    }

    public function cmin()
    {
        $this->cmin = array(10, 10, 10, 10, 10, 10, 10, 10, 10, 10);
        foreach ($this->normxbobot as $nb) {
            if ($this->cmin[0] > $nb[1]) $this->cmin[0] = $nb[1];
            if ($this->cmin[1] > $nb[2]) $this->cmin[1] = $nb[2];
            if ($this->cmin[2] > $nb[3]) $this->cmin[2] = $nb[3];
            if ($this->cmin[3] > $nb[4]) $this->cmin[3] = $nb[4];
            if ($this->cmin[4] > $nb[5]) $this->cmin[4] = $nb[5];
            if ($this->cmin[5] > $nb[6]) $this->cmin[5] = $nb[6];
            if ($this->cmin[6] > $nb[7]) $this->cmin[6] = $nb[7];
            if ($this->cmin[7] > $nb[8]) $this->cmin[7] = $nb[8];
            if ($this->cmin[7] > $nb[8]) $this->cmin[7] = $nb[8];
            if ($this->cmin[8] > $nb[9]) $this->cmin[8] = $nb[9];
            if ($this->cmin[9] > $nb[10]) $this->cmin[9] = $nb[10];
        }
    }

    public function cmax()
    {
        $this->cmax = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
        foreach ($this->normxbobot as $nb) {
            if ($this->cmax[0] < $nb[1]) $this->cmax[0] = $nb[1];
            if ($this->cmax[1] < $nb[2]) $this->cmax[1] = $nb[2];
            if ($this->cmax[2] < $nb[3]) $this->cmax[2] = $nb[3];
            if ($this->cmax[3] < $nb[4]) $this->cmax[3] = $nb[4];
            if ($this->cmax[4] < $nb[5]) $this->cmax[4] = $nb[5];
            if ($this->cmax[5] < $nb[6]) $this->cmax[5] = $nb[6];
            if ($this->cmax[6] < $nb[7]) $this->cmax[6] = $nb[7];
            if ($this->cmax[7] < $nb[8]) $this->cmax[7] = $nb[8];
            if ($this->cmax[8] < $nb[9]) $this->cmax[8] = $nb[9];
            if ($this->cmax[9] < $nb[10]) $this->cmax[9] = $nb[10];
        }
    }

    public function atribut()
    {
        $this->atribut = array();
        foreach ($this->kriteria as $k) {
            array_push($this->atribut, $k[2]);
        }
    }

    public function ymaxmin()
    {
        $this->ymax = array();
        $this->ymin = array();
        for ($i = 0; $i < count($this->atribut); $i++) {
            if ($this->atribut[$i] == 'Benefit') {
                array_push($this->ymax, $this->cmax[$i]);
                array_push($this->ymin, $this->cmin[$i]);
            } else if ($this->atribut[$i] == 'Cost') {
                array_push($this->ymax, $this->cmin[$i]);
                array_push($this->ymin, $this->cmax[$i]);
            }
        }
    }

    public function dplusmin()
    {
        $this->dplusmin = array();
        foreach ($this->normxbobot as $nb) {
            $this->dplus = 0;
            $this->dmin = 0;
            for ($i = 0; $i < count($this->ymax); $i++) {
                $this->dplus += pow($this->ymax[$i] - $nb[$i + 1], 2);
                $this->dmin += pow($this->ymin[$i] - $nb[$i + 1], 2);
            }
            $nb[6] = round(sqrt($this->dplus), 3);
            $nb[7] = round(sqrt($this->dmin), 3);

            array_push($this->dplusmin, $nb);
        }
    }
}
