<?php
extract($_POST);

if (!$questionName || strlen($questionName)<4)
    die ("Question Name Missing or too short!");

if (!$questionBody || strlen($questionName)> 500)
    die ("Question Body Missing or too long!");

$skills = explode (",", $questionSkills);
$length = count($skills);
if ($length < 2)
    die("Not enough skills");

echo "Length: $length <br/>";
for ($i = 0; $i < $length; $i++) {
    print "$i) $skills[$i] <br/>";
}
?>
<a href="index.html">Home</a>
