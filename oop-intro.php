<?php
    //Do not repeat your self

    Class Buku
    {
        //scope visibility public, private, protected
        public $jumlahHalaman = 100;
        public $warnaHuruf;
        public $warnaCover;
        public $halamanSekarang = 20;

        public function pindahHalaman($halaman)
        {
            $this->halamanSekarang = $halaman;
        }

        public function ubahJumlahHalaman($halaman)
        {
            $this->jumlahHalaman = $halaman;
        }
    }

    $bukuTulis = New Buku();

    echo $bukuTulis->jumlahHalaman;
 ?>