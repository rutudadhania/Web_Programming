<?php
#File Write (It will write the text in notepad)
$d="We will put some of the content in it.";
file_put_contents("file.txt",$d);

#File Append (It will add the written text to the notepad)
$e="\n Adding the new text in the file.txt file in the already written text so it will add 
up the text in it.";
file_put_contents("file.txt",$e,FILE_APPEND);

#File Read (It will print the text in the localhost first read the written text, then write 
#and append text is readed)
$a=fopen("file.txt","r");
$b=fgets($a);
echo $b."<br>";

$c=file_get_contents("file.txt");
echo $c;
?>