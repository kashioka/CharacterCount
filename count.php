<?php
$goal = 83200;
//指定したディレクトリのファイルの文字数をカウントする
$dir = "./";
//ディレクトリのファイルを取得
$files = scandir($dir);
//ファイルの文字数をカウントする
foreach($files as $file){
    $file = $dir.$file;
    if(is_file($file)){
        $count = mb_strlen(file_get_contents($file));
        echo $file."の文字数は".$count."です。" . PHP_EOL;
    }
}
//ファイルの文字数をカウントして合計を出す
$total = 0;
foreach($files as $file){
    if(is_file($file)){
        $total += mb_strlen(file_get_contents($file));
    }
}
echo "全体の文字数は" . $total . PHP_EOL;
echo "全体の目標は" . $goal . PHP_EOL;
echo "現在の割合は" . round($total / $goal * 100, 2) . "%" . PHP_EOL;
