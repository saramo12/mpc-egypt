<?php
$file = "counter.txt"; // ملف لتخزين الرقم

if (!file_exists($file)) {
    file_put_contents($file, "1097266"); // الرقم الابتدائي
}

$count = (int)file_get_contents($file);
$count++;
file_put_contents($file, $count);

echo $count;
?>