<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>変数を使ったプログラムの作成</title>
</head>
<body>
<?php
    $apple_price = 150;
    // $quantity    = 8;
    $quantity = number_format($_GET['quantity']);
    $total_price = number_format($apple_price * $quantity);

    // ダブルクォート内での変数展開
    echo 'ダブルクォートの展開<br>';
    echo "$apple_price 円のリンゴを $quantity 個買った場合の合計金額は $total_price 円です<br><br>";

    // ダブルクォート内での変数展開
    echo 'シングルクォートの展開<br>';
    echo '$apple_price 円のリンゴを $quantity 個買った場合の合計金額は $total_price 円です<br><br>';

    // ブレースでくくる場合
    echo '変数名をブレースでくくった場合<br>';
    echo "${apple_price}円のリンゴを${quantity}個買った場合の合計金額は${total_price}円です<br><br>";

    // 表示を分割
    echo '表示を分割<br>';
    echo $apple_price.'円のリンゴを'.$quantity.'個買った場合の合計金額は'.$total_price.'円です<br><br>';

?>
</body>
</html>
