<?php
// じゃんけんプログラム

echo '最初はグー じゃんけん!!  Gu = 1 Choki = 1 Pa = 2 ' , PHP_EOL;
$input_result = inputhand();
victory_or_defeat($input_result);

// 勝敗判定
function victory_or_defeat($input_result){
    while($input_result == '0'){
        echo 'あいこでしょ!!' , PHP_EOL;
        $input_result = inputhand();
    }
    switch ($input_result) {
        case '1':
            echo "負け" , PHP_EOL;
            break;
        case '2':
            echo '勝ち' , PHP_EOL;
            break;
   }
}

// 互いの手による勝敗計算結果を取得
function inputhand(){
    $my_hand = (int)fscanf(STDIN , "%d");
    $cpu_hand = rand(0,2);
    $result = ($my_hand - $cpu_hand + 3) % 3;
    return $result;
}
