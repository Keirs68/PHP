<?php
require_once 'abstract.php';

class Lingkaran extends Bentuk2D{
    public $jari2;

    public function __construct($jari2){
        $this->jari2 = $jari2;

    }
    public function namaBidang(){
        echo "Lingkaran";
    }
    public function luasBidang(){
        $luas = 3.14 * $this->jari2 * $this->jari2;
        return $luas;
    }
    public function kelilingBidang(){
        $keliling = 2 * 3.14 * $this->jari2;
        return $keliling;
    }
    public function cetak(){
        echo "<table border='1' style='background-color:#D8D8D8;border:1px;'>";
        echo "<tr>
                <th>Luas</th>
                <th>Keliling</th>
            </tr>";
        echo "<tr> 
                <td>".$this->luasBidang()." cm</td>
                <td>".$this->kelilingBidang()." cm</td>
            </tr>";
        echo "</table>";
        echo "<br>";
    }
}
?>