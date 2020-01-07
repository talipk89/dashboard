<pre>
<?php

$file = 'schimmel.json';
$content = file_get_contents($file);

$data = [];
$data['temp1'] = rand(140, 180) / 10;
$data['temp2'] = rand(160, 220) / 10;
$data['temp3'] = rand(180, 240) / 10;
// $data['count'] = rand(7, 14);
// $data['price'] = rand(30, 70) / 100;
// $data['load1'] = rand(70, 85);
// $data['load2'] = rand(80, 100);
// $data['load3'] = rand(85, 100);
// $data['phval'] = rand(60, 90) / 10;

$json = json_encode($data);

var_dump($content);
var_dump($json);

file_put_contents($file, $json);

?>
</pre>