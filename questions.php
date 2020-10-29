<?php
extract($_POST);

if (!$questionName || strlen($questionName)<4)
    die ("Question name missing or too short!");

if (!$questionBody || strlen($questionName)> 500)
    die ("Question body missing or too long!");

$skills = explode (",", $questionSkills);
$length = count($skills);
if ($length < 2)
    die("Not enough skills!");

echo "Length: $length <br/>";
for ($i = 0; $i < $length; $i++) {
    print "$i) $skills[$i] <br/>";
}
?>
<div><a href="project1index.html">Home</a></div>
