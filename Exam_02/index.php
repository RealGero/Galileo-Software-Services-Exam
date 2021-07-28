<?php
// INITIALIZING OF WHAT EVER WE WILL PUT IN THE File
$txt = '<?php
// This is a comment
echo "This is a test page!";
echo "Exam number two!";
// This is the end of a comment';

// INITIALIZING THE FILE WITH FILE WITH MODE OF WRITE ONLY
$myfile = fopen("hello_there.php", "w");
// CREATING A FILE NAME AND HAVING TEXT WITH IT
fwrite($myfile,$txt );
// THEN CLOSE THE FILE FOR EVERY FILE THAT WAS CREATED
fclose($myfile);
?>