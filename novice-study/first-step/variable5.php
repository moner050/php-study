<html>
    <body>
    <?php
    # a에 정수 지정
    $a = 100;
    # $a 의 datatype 을 출력
    echo gettype($a);
    # $a 의 datatype 을 double 로 변경 후 출력
    settype($a, 'double');
    echo '<br>';
    echo gettype($a);
    ?>
    </body>
</html>