<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>萬年曆作業</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /*請在這裹撰寫你的CSS*/
        body {
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            width: 80%;
            height: 8vh;
            background-color: lightgray;
            text-align: center;
            margin: auto;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
            /* margin-bottom: 20px; */
            text-decoration: none;

        }

        table {
            border-collapse: collapse;
            border: 3px double #999;

        }

        /* td {
            border: 1px solid #999;
            padding: 5px 10px;
            text-align: center;
        } */

        td {
            width: 100px;
            height: 100px;
            font-size: 20px;
            text-align: center;
            background-color: white;
            font-family: 'Times New Roman', Times, serif;
            border: 1px solid black;
            border-radius: 30px 10px;
        }

        td:hover {
            width: 100px;
            height: 100px;
            font-size: 20px;
            text-align: center;
            background-color: lightblue;
            font-family: 'Times New Roman', Times, serif;
            border: 1px solid black;
            border-radius: 30px 10px;
        }

        .container1 {
            width: 80%;
            height: 8vh;
            background-color: lightgray;
            text-align: center;
            margin: auto;
            display: flex;
            font-size: 50px;
            font-family: '標楷體';
            background-color: lightblue;
            margin: auto;
            justify-content: center;
            flex-wrap: wrap;
            align-items: center;
            /* margin-bottom: 20px; */
            text-decoration: none;

        }
         .showtime {
            width: 80%;
            height: 8vh;
            text-align: center;
            font-size: 50px;
            font-family: '標楷體';
            background-color: lightblue;
            margin: auto;
        }
    </style>
</head>
<!-- 載入目前時間 -->
<script language="JavaScript">
    function ShowTime() {
        var NowDate = new Date();
        var y = NowDate.getFullYear();
        var mm = NowDate.getMonth();
        var d = NowDate.getDay();
        var h = NowDate.getHours();
        var m = NowDate.getMinutes();
        var s = NowDate.getSeconds();
        document.getElementById('showbox').innerHTML = y + '年' + mm + '月' + d + '日 ' + h + '時' + m + '分' + s + '秒';
        setTimeout('ShowTime()', 1000);
    }
</script>

<?php
/*請在這裹撰寫你的萬年曆程式碼*/
if (isset($_GET['month']) && isset($_GET['year'])) {
    $month = $_GET['month'];
    $year = $_GET['year'];
} else {
    $month = date('m');
    $year = date("Y");
}

$thisFirstDay = date("{$year}-{$month}-1");
$thisFirstDate = date('w', strtotime($thisFirstDay));
$thisMonthDays = date("t");
$thisLastDay = date("{$year}-{$month}-$thisMonthDays");
$weeks = ceil(($thisMonthDays + $thisFirstDate) / 7);
$firstCell = date("Y-m-d", strtotime("-$thisFirstDate days", strtotime($thisFirstDay)));
?>

<body style='background-image: url("./img/<?= $month; ?>.jpg");' onload="ShowTime()">
    <div class="container1">
    <div class="div" style='width:20%;'><a href="./calendar.php" style='text-decoration:none;'><i class="fa-solid fa-calendar-day"></i>回當月</a></div>
    <div class="div" style='width:80%;' class="showtime" id="showbox"></div>
    </div>

    <div style='width:490px;display:flex;margin:auto;justify-content:space-between'>
        <?php
        $nextYear = $year;
        $prevYear = $year;
        if (($month + 1) > 12) {
            $next = 1;
            $nextYear = $year + 1;
        } else {
            $next = $month + 1;
        }

        if (($month - 1) < 1) {
            $prev = 12;
            $prevYear = $year - 1;
        } else {
            $prev = $month - 1;
        }

        ?>

    </div>
    <div class="container">
        <div class="div" style='width:33%;text-align: right;'> <a href="?year=<?= $prevYear - 1; ?>&month=<?= $month; ?>" style='text-decoration:none;'> <i class="fa-solid fa-backward"></i>上一年</a></div>
        <div class="div" style='width:33%;'> <span style='text-align:center'> 西元<?= $year; ?>年</span></div>
        <div class="div" style='width:33%;text-align: left;'><a href="?year=<?= $prevYear + 1; ?>&month=<?= $month; ?>" style='text-decoration:none;'><i class="fa-solid fa-forward"></i>下一年</a></div>
        <br>
        <div class="div" style='width:33%;text-align: right;'><a href="?year=<?= $prevYear; ?>&month=<?= $prev; ?>" style='text-decoration:none;'> <i class="fa-solid fa-backward"></i> 上一個月</a></div>
        <div class="div" style='width:33%;'><span style='text-align:center'> <?= $month; ?>月</span></div>
        <div class="div" style='width:33%;text-align: left;'><a href="?year=<?= $nextYear; ?>&month=<?= $next; ?>" style='text-decoration:none;'><i class="fa-solid fa-forward"></i>下一個月</a></div>
    </div>

    <table style='width:700px;display:block;margin:auto'>
        <tr>
            <td style='background:lightpink'>日</td>
            <td>一</td>
            <td>二</td>
            <td>三</td>
            <td>四</td>
            <td>五</td>
            <td style='background:lightpink'>六</td>
        </tr>
        <?php
        for ($i = 0; $i < $weeks; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 7; $j++) {
                $addDays = 7 * $i + $j;
                $thisCellDate = strtotime("+$addDays days", strtotime($firstCell));
                if (date('w', $thisCellDate) == 0 || date('w', $thisCellDate) == 6) {
                    echo "<td style='background:lightpink'>";
                } else {
                    echo "<td>";
                }
                if (date("m", $thisCellDate) == date("m", strtotime($thisFirstDay))) {
                    echo date("j", $thisCellDate);
                }
                echo "</td>";
            }
            echo "</tr>";
        }

        echo "</table>";
        ?>

</body>

</html>