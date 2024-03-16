<?php
#File read
$a=fopen("note.txt","r");
$b=fgets($a);
echo $b."<br>";

#$c=file_get_contents("note.txt");
#echo $c;

#File Write
#$d="new content";
#file_put_contents("note.txt",$d);

#File Append
#$e="Adding another content to the note.txt file";
#file_put_contents("note.txt",$e);
?>