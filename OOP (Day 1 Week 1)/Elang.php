<?php
require_once('Hewan.php');
class Elang extends Hewan
{
    public function getInfoHewan()
    {
        echo 'Nama = '.$this->nama.'<br>';
        echo 'Darah = '.$this->darah.'<br>';
        echo 'Jumlah Kaki = '.$this->kaki.'<br>';
        echo 'keahlian = '.$this->keahlian.'<br>';
    }
}
