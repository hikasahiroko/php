<?php
$a = 8;
if ($a === 5){
    echo "\$aは５です";
}elseif($a === 7){
    echo "\$aは7です";
}else{
    echo "\$aは５と７以外です";
}
?>

<?php
$people = "Taro";
echo "<br />";
switch($people){
    case "Taro":
        echo "太郎です";
        break;
    case "Jiro":
        echo "次郎です";
        break;
    case "Saburo":
        echo "三郎です";
        break;
    default:
    echo "太郎でも次郎でも三郎でもありません";
}
echo "<br />";
?>

<?php
$a = 7;
$result = ($a === 7) ? "TRUE" : "FALSE";
echo $result;