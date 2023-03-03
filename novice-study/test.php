<?php

// 문자열 형식과 숫자형식 알아보기.
echo "hello world " . " dlrow olleh\n";

var_dump(6.6);
var_dump(10);

echo var_dump("문자열입니다");
echo var_dump(10.08);
echo var_dump(10);

echo '그는 "안녕하세요" 라고 대답했다' . "\n";
echo "그는 \"안녕하세요\" 라고 대답했다\n";

// 변수 알아보기

$a = "안녕하세요";
echo "변수 \$a 에 저장된 값은 $a 입니다.\n";

$a = 10;
echo "변수 \$a 에 저장된 값은 $a 입니다.\n";

$a = 10.10;
echo "변수 \$a 에 저장된 값은 $a 입니다.\n";

// 변수 데이더형태 검사하기

echo gettype($a) . "\n";

settype($a, 'double');

echo gettype($a) . "\n";

settype($a, 'integer');
$b = 10;

echo $a != $b;

// 가변 변수 알아보기

$temp = "subjecthello";
$$temp = "PHP";

echo $temp . "\n" . $subjecthello . "\n";

// 상수 알아보기

define("TITLE", "PHP LARAVEL ELEMENT");
echo TITLE . "\n";

// 이미 정의된 상수를 재정의하려고 해서 출력이 안됨
// define("TITLE", "JAVA SPRING");
// echo TITLE;

// 이미 정의된 상수 알아보기
echo __LINE__;                  // 파일의 현재 줄 번호를 반환함
echo "\n";
echo __FILE__;                  // 파일의 전체 경로와 줄을 반환함 (Include 내부에서 사용하면 include 된 파일명을 반환함)
echo "\n";
echo __DIR__;                  // 파일의 디렉터리를 반환함 (포함된 파일 안에서 사용할경우 포함된 파일의 디렉터리를 반환함)(dirname(__FILE__)과 같은결과)
echo "\n";

class MyClass {

    // 클래스의 이름을 반환함
    public function className() {
        return __CLASS__;
    }

    // 함수의 이름을 반환함
    public function functionName() {
        return __FUNCTION__;
    }

    // 클래스의 메소드 이름을 반환함
    public function methodNames() {
        return __METHOD__;
    }
}

$tempClass = new MyClass();

echo $tempClass->className();
echo $tempClass->functionName();
echo $tempClass->methodNames();

echo __NAMESPACE__;
echo "\n";

?>

<?php


?>