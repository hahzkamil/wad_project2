<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator</title>
    <style>
        body {
            text-align: center;
        }
        kalkulator {
            margin: 0 auto;
            width: 300px;
        }
    </style>
</head>
<body>
    <div id="kalkulator">
        <h2>Kalkulator</h2>
        <form action="" method="post">
            <!-- input nomer pertama -->
            <input type="angka" name="num1" placeholder="Enter angka">
            <!-- dropdown operator -->
            <select name="operator">
                <option value="tambah">+</option>
                <option value="kurang">-</option>
                <option value="kali">*</option>
                <option value="bagi">/</option>
            </select>
            <!-- input kedua -->
            <input type="angka" name="num2" placeholder="Enter angka">
            <!-- button -->
            <button type="submit" name="hitung">hitung</button>
        </form>
        <p>hasil:
            <!-- php buat ngitung  -->
            <?php
            if (isset($_POST['hitung'])) {
                // ngambil nilai dari htmm
                $num1 = (float)$_POST["num1"];
                $num2 = (float)$_POST["num2"];
                $operator = $_POST["operator"];
                $result = 0;

                // operator
                switch ($operator) {
                    case "tambah":
                        $result = $num1 + $num2;
                        break;
                    case "kurang":
                        $result = $num1 - $num2;
                        break;
                    case "kali":
                        $result = $num1 * $num2;
                        break;
                    case "bagi":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                        } else {
                            $result = "Tidak bisa dibagi dengan nol";
                        }
                        break;
                }
                // print hasilnya
                echo "Maka $num1 $operator $num2 adalah $result";
            }
            ?>
        </p>
    </div>
</body>
</html>
