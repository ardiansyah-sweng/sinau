<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("dataset.csv","r");
while(! feof($file)){
    $berkas = fgetcsv($file);
    $tes[] = $berkas;
    print_r(fgetcsv($file, 4096));
}
fclose($file);
//print_r($tes);
echo '<p>';
for($i=0; $i<=2; $i++){
    for($j=0; $j<=5; $j++){
       $data[] = $tes[$j];
       $data[] = $tes[$j];
       $data[] = $tes[$j];
       $data[] = $tes[$j];
       $data[] = $tes[$j];
       $data[]=  $tes[$j];
    }
}
print_r($data);
?>
</body>
</html>