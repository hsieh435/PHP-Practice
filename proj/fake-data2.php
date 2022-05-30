<div>
    <?php require __DIR__ . '/parts/connect_db.php';
    exit; // 關閉功能
    echo microtime(true) . "<br>";

    $lname = ['陳', '林', '李', '吳', '王', '張'];
    $fname = ['小明', '小華', '雅玲', '良', '大頭', '郎'];


    $sql = "INSERT INTO `address_book`(
    `name`, `email`, `mobile`, 
    `birthday`, `address`, `created_at`
    ) VALUES (
        ?, ?, ?,
        ?, ?, NOW()
    )";

    $stmt = $pdo->prepare($sql);

    for ($i = 0; $i < 100; $i++) {
        shuffle($lname);
        shuffle($fname);
        $ts = rand(strtotime('1980-01-01'), strtotime('1995-12-31'));
        $stmt->execute([
            $lname[0] . $fname[0],
            "ming{$i}@test.com",
            '09' . rand(10000000, 99999999),
            date('Y-m-d', $ts),
            '南投市',
        ]);
    }

    echo microtime(true) . "<br>";
    ?>
</div>