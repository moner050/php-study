<html>
    <body>
    <?php
    # 상수에 값 지정 후 다시한번 정의해보기
    define('TITLE', 'PHP Tutorial');
    echo TITLE;
    # ERROR
    define('TITLE', 'JAVA Tutorial');
    ?>
    </body>
</html>