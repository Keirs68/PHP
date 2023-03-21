<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 PHP</title>
</head>
<body bgcolor="#F5EBEB">
    <br>
    <form method = "POST">
        <table align="center" border="1" cellpadding="10" width="25%"> 
            <tr>
                <th colspan="2" style="background-color:#D5B4B4; font-family:">JAJAR GENJANG</th>
            </tr>
            <tr>
                <td>Alas</td>
                <td><input type="text" name="alas" require></td>
            </tr>
            <tr>
                <td>Tinggi</td>
                <td><input type="text" name="tinggi" require></td>
            </tr>
            <tr>
                <td>Sisi Miring</td>
                <td><input type="text" name="sisimiring" require></td>
            </tr>
            <tr>
                <td colspan="2" align="center" style="background-color:#D5B4B4;">
                    <input type="submit" name="luas" value="Luas">
                    <input type="submit" name="keliling" value="Keliling">
                </td>
            </tr>
        </table>
    </form>

    <br><br>
    <center>
    <?php
        
        if(isset($_POST['luas'])){
            $alas = $_POST['alas'];
            $tinggi = $_POST['tinggi'];

            $luasjajargenjang = $alas * $tinggi;
            echo 'Luas Jajar Genjang';
            echo '<br> Diketahui';
            echo '<br> Alas : '.$alas. 'cm';
            echo '<br> Tinggi : '.$tinggi. 'cm';

            echo '<br> Maka Luasnya adalah ' .$luasjajargenjang. 'cm';
        }

        if(isset($_POST['keliling'])){
            $alas = $_POST['alas'];
            $sisimiring = $_POST['sisimiring'];

            $kelilingjajargenjang = 2 * ($alas + $sisimiring);
            echo 'Keliling Jajar Genjang';
            echo '<br> Diketahui';
            echo '<br> Alas : '.$alas. 'cm';
            echo '<br> Sisi Miring : '.$sisimiring. 'cm';

            echo '<br> Maka Kelilingnya adalah ' .$kelilingjajargenjang. 'cm';
        }
    ?>
    </center>

</body>
</html>