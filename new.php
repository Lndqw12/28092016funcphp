<?php
$f=fopen("C:\\OpenServer\\domains\\git\\new.txt", "a+t") or die('������');
//int fopen(string $filename, string $mode, bool $use_include_path = false)
//fwrite($f,"������ �����");//$use_include_path=false)
$str = fread($f,200);
echo $str;
?>