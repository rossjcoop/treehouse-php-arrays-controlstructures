<?php 
$learn = array('Conditionals', 'Arrays', 'Loops');
$learn[] = 'Build something awesome!';
array_push($learn, 'Functions', 'Forms', 'Objects');
array_unshift($learn, 'HTML', 'CSS');
asort($learn);
sort($learn);
rsort($learn);
//echo 'you removed' . array_shift($learn);
//echo 'you removed' . array_pop($learn);
//var_dump($learn)
shuffle($learn);
echo $learn[0];
//unset($learn[1], $learn[2]);
//$learn = array_values($learn);
//$learn[0] = 'Email';
//var_dump($learn);


//$keys = array(
//  1 => 'a',
//  '1' => 'b',
//  1.5 => 'c',
//  true => 'd'
//);
//var_dump($keys);
//echo $learn[1];
//echo implode("\n",$learn);
?>