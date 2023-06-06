<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 0; $i < 10; $i++)
        {
            if($i%2 == 0)
            {
                ?>
                    <h1 style="color: green"><?php echo "Tile from server"; ?></h1>
                <?php
            }
            else
            {
                ?>
                    <h2 style="color: red"><?php echo "Tile from server"; ?></h2>
                <?php
            }
        }
    ?>

    <?php
        //Khai báo biến bắt đầu bằng dấu $//
        //Kiểu dữ liệu tự nhận khi gán giá trị của biến
        $a = 5;
        $b = 10;
        $c = $a + $b;
        echo $c;
        print_r($a);
        $a = "James";
        $b = "Bond";
        $c = $a . " " .$b;
        echo $c;
         // biến mảng khai báo bằng từ khóa array
        $arr = array("một", "hai", "ba", "bốn"); //mảng 3 phần tử kiểu chuỗi 
        $arr2 = array(
            array(1, "Nguyễn Văn an", "1/1/2000", 9.5, 8.5, 4.5),
            array(2, "Trần Thị Bích", "2/2/2002", 7.1, 5.0, 9.1),
            array(3, "Lê Trung Hiếu", "3/4/2002", 1.2, 9.1, 2.3),
            array(4, "Nguyễn Hải Hà", "4/4/2020", 5.1, 1.2, 1.2)
        );

        function tb($t, $l, $h)
        {
            return ($t+$l+$h)/3;
        }
        function dg($t, $l, $h)
        {
            if(tb($t, $l, $h) >= 5)
            {
                return "Pass";
            }
            else
            {
                return "Fail";
            }
        }
            
    ?>

    <ul>
        <?php
            for($i = 0; $i < count($arr); $i++)
            {
                ?>
                    <li><?=$arr[$i]?></li>
                <?php
            }
        ?>
    </ul>
    <table>
        <thead>
            <th>ID</th>
            <th>Fullname</th>
            <th>DoB</th>
            <th>Average</th>
            <th>Grade</th>
        </thead>
        <tbody>
            <?php
                for($i = 0; $i < count($arr2); $i++)
                {
                    ?>
                        <tr>
                            <td><?=$arr2[$i][0]?></td>
                            <td><?=$arr2[$i][1]?></td>
                            <td><?=$arr2[$i][2]?></td>
                            <td><?=tb($arr2[$i][3], $arr2[$i][4], $arr2[$i][5])?></td>
                            <td><?=dg($arr2[$i][3], $arr2[$i][4], $arr2[$i][5])?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>