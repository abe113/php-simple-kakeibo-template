<?php

//新しいレコードを追加するための処理
//〜処理の流れ〜
//最終のゴール：新しいゴールが追加されて、TOPに戻る。
//1,入力された値の取得
//2,PHPからMySQLへ接続
//3,SQL文を作成して、画面で入力された値をrecordsテーブルに追加
//4,index.phpに画面遷移する

$date = $_POST['date'];
$title = $_POST['title'];
$amount = $_POST['amount'];
$type= $_POST['type'];

echo $date;
echo '<br>';
echo $title;
echo '<br>';
echo $amount;
echo '<br>';
echo $type;
?>