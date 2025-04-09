<?php
$file = "counter.txt";

// لو الملف مش موجود، اعملي ملف جديد وابدئي برقم ابتدائي
if (!file_exists($file)) {
    file_put_contents($file, data: "1097266");
}

// قراءة الرقم من الملف
$count = (int)file_get_contents($file);

// زيادة الرقم بـ 1
$count++;

// حفظ الرقم الجديد
file_put_contents($file, $count);

// طباعة الرقم
echo $count;
?>