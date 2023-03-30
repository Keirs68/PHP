<?php
    class Pegawai{
        // member variables
        protected $nip;
        public $nama;
        private $jabatan;
        private $agama;
        private $status;
        static $jml = 0;
        const PT = 'PT. HTP Indonesia';

        // konstruktor untuk menyimpan variable yang akan dikirimkan ke file object
        public function __construct($nip, $nama, $jabatan, $agama, $status){
            $this->nip = $nip;
            $this->nama = $nama;
            $this->jabatan = $jabatan;
            $this->agama = $agama;
            $this->status = $status;
            self::$jml++;
            
        }

        // menset gaji pokok
        public function setGajiPokok($jabatan){
            $this->jabatan = $jabatan;
            switch($jabatan){
                case 'Manager' : $gapok = 15000000; break;
                case 'Asisten Manager' : $gapok = 10000000; break;
                case 'Kepala Bagian' : $gapok = 7000000; break;
                case 'Staff' : $gapok = 5000000; break;
                default: $gapok = 0;
            }
            return $gapok;
        }

        // menset tunjangan jabatan
        public function setTunjab($jabatan){
            $this->jabatan = $jabatan;
            $tunjab = $this->setGajiPokok($jabatan) * 0.2;
            return $tunjab;
        }

        // menset tunjangan Keluaraga
        public function setTunkel($status){
            $this->status = $status;
            $tunkel = ($this->status == 'Menikah') ? $this->setGajiPokok($this->jabatan) * 0.1 : 0;
            return $tunkel;
        }

        // menset zakat profesi
        public function setZakatProfesi($agama){
            $this->agama = $agama;
            $zakat = ($this->agama == 'Islam' && $this->setGajiPokok($this->jabatan) > 6000000) ? $this->setGajiPokok($this->jabatan) * 0.025 : 0;
            return $zakat;
        }

        // mendapatkan nilai gaji pokok
        public function getGajiPokok(){
            return $this->setGajiPokok($this->jabatan);
        }

        // mendapatkan nilai tunjangan jabatan
        public function getTunjab(){
            return $this->setTunjab($this->jabatan);
        }

        // mendapatkan nilai tunjangan keluarga
        public function getTunkel(){
            return $this->setTunkel($this->status);
        }

        // mendapatkan nilai zakat profesi
        public function getZakatProfesi(){
            return $this->setZakatProfesi($this->agama);
        }

        // mendapatkan nilai gaji bersih
        public function getGajiBersih(){
            return $this->getGajiPokok() + $this->getTunjab() + $this->getTunkel() - $this->getZakatProfesi();
        }

        // cetak 
        public function cetak(){
            echo "NIP : ".$this->nip."<br>";
            echo "Nama : ".$this->nama."<br>";
            echo "Jabatan : ".$this->jabatan."<br>";
            echo "Agama : ".$this->agama."<br>";
            echo "Status : ".$this->status."<br>";
            echo "Gaji Pokok : Rp.".$this->getGajiPokok()."<br>";
            echo "Tunjangan Jabatan : Rp.".$this->getTunjab()."<br>";
            echo "Tunjangan Keluarga : Rp.".$this->getTunkel()."<br>";
            echo "Zakat Profesi : Rp.".$this->getZakatProfesi()."<br>";
            echo "Gaji Bersih : Rp.".$this->getGajiBersih()."<br>";
            echo "<hr>";
        }
    }

?>