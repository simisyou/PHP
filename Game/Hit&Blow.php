<?php
// Hit & Blow ゲーム

// 初期設定
echo '桁数をしてしてください。';
$digit = fscanf(STDIN , "%d");
$number = range(0,9);
shuffle($number);


$set_number = [];
for($i = 0; $i <= $digit['0'] - 1; $i++){
$set_number[$i] = $number[$i];
}

// ゲーム判定
