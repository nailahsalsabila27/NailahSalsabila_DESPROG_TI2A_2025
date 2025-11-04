<?php
$pattern = '/[a-z]/'; ///cocokkan huruf kecil
$text = 'This is a Sample Text';
if (preg_match($pattern, $text)) {
    echo "huruf kecil ditemukan";
} else {
    echo "tidak ada huruf kecil";
}

$pattern = '/[0-9]+/'; //cocokkan satu atau lebih digit
$text = 'There are 123 apples.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>cocokkan : ". $matches[0];
} else {
    echo "<br>tidak ada yang cocok";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I like apple pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo "<br>" . $new_text;

$pattern = '/go*d/'; // cocokkan "god", "good", "goooood" dll
$text = 'god is good.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>cocokkan: ". $matches[0];
} else {
    echo "<br>tidak ada yang cocok";
}

$pattern = '/go?d/'; // cocokkan "gd" atau "god"
$text = 'god is good and gd is short.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>cocokkan: " . $matches[0];
} else {
    echo "<br>tidak ada yang cocok";
}

$pattern = '/go{2,4}d/'; // cocokkan "good", "goood", "gooood"
$text = 'god is good, goood, gooood, and gooooood.';
if (preg_match($pattern, $text, $matches)) {
    echo "<br>cocokkan: " . $matches[0];
} else {
    echo "<br>tidak ada yang cocok";
}


?>