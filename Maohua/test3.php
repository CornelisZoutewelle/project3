<?php
$a ='$MTS13';
$var1 = 1; // 1 case
$var2 = 1; // 5 cases
$var3 = 1; // 2 cases
$var4 = 1; // 3 cases
switch($var1){
    case 1:
        $a = '$MTS13'; // ??
        break;
    default:
        $a = '$MTS13'; // ??
        break;
}
switch($var2){
    case 1:
        $b = '$PPSW'; // Color White
        break;
    case 2:
        $b = '$PBSB'; // Color Black
        break;
    case 3:
        $b = '$PMNG'; // Color Gray
        break;
    case 4:
        $b = '$PPSB'; // Color Blue
        break;
    case 5:
        $b = '$PR01'; // Color Red
        break;
    default:
        $b = '$PPSW'; // Color White
        break;
}
switch($var3){
    case 1:
        $c = '$WS91'; // Wheels Tempest
        break;
    case 2:
        $c = '$WS11'; // Wheels Arachnid
        break;
    default:
        $c = '$WS91'; // Wheels Tempest
        break;
}
switch($var4){
    case 1:
        $d = '$IBE00'; // Interior Black
        break;
    case 2:
        $d = '$IWW00'; // Interior Black & White
        break;
    case 3:
        $d = '$ICW00'; // Interior Cream
        break;
    default:
        $d = '$IBE00'; // Interior Black
        break;
} 

    echo'<a href="https://static-assets.tesla.com/configurator/compositor?context=design_studio_2&options='.$a.','.$b.','.$c.','.$d.'&view=FRONT34&model=ms&size=1920&bkba_opt=1&crop=1300,500,300,300&">Test Image</a>';
?>
