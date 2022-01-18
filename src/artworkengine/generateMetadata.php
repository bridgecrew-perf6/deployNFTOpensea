<?php
//generate nft artworks
$k=1;
for ($i = 1; $i <= 100; $i++) {
    //for($j=1;$j<=5;$j++) {
        $image = file_get_contents("../metadata/images/tigers/templates/tiger0" . $k . ".jpeg");
        file_put_contents("../metadata/images/tigers/tiger" . $i . ".jpeg", $image);
        echo(" generated " . $i . PHP_EOL);
    //}
    $k++;
    if($k==5) $k=1;
}

//===========================================================================
$metaData = file_get_contents("../metadata/json/tigers/tigerTemplate.json");
for($i=1;$i<=100;$i++) {
    //$metaData = str_replace("tiger1","tiger".$i, $metaData);
    file_put_contents("../metadata/json/tigers/tiger".$i.".json", str_replace("tiger1","tiger".$i, $metaData));
    echo(" generated ".$i.PHP_EOL);
}