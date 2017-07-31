<?php
//FizzBuzzプログラム
echo '数値を入力してください';
$count = fscanf(STDIN , "%d");
for($i = 1; $i <= $count['0']; $i++){
    if($i % 3 == 0 && $i % 5 == 0 ){
        echo 'FizzBuzz' , PHP_EOL;
    } elseif($i % 3 == 0 ){
        echo 'Fizz' , PHP_EOL;
    } elseif($i % 5 == 0){
        echo 'Bazz' , PHP_EOL;
    } else{
        echo $i,PHP_EOL;
    }
}
