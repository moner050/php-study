<html>
    <body>
    <?php
    # 같은 변수에 다른 타입들 주입하기
    $a = 100;
    echo is_int($a)."\n";
    $a = "test";
    echo is_string($a)."\n";
    $a = array(1,2,3);
    echo is_array($a)."\n";
    ?>
    </body>
</html>