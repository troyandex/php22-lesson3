<?php
	$continents = [
	    'Africa' => ['Testudines', 'Crocodylus niloticus', 'test'],
	    'Europe' => ['Meles meles', 'Mesocricetus newtoni'],
	    'Asia' => ['Ursus arctos', 'Elephas maximus'],
	    'North America' => ['Buteo jamaicensis', 'Lynx rufus'],
	    'South America' => ['Hydrochoerus hydrochaeris', 'Ateles'],
	    'Australia' => ['Macropus', 'Ornithorhynchus anatinus'],
	    'Antarctica' => ['Spheniscidae', 'Lobodon carcinophagus'],
	];
	echo '<h2>animals array</h2>';
	echo "<pre>";
	print_r ($continents);

	foreach ($continents as $continents_key => $animals)
	{
	    $continent[] = $continents_key;
	    echo "<h3>$continents_key</h3>";
	    echo implode(", ", $animals); // заменил цикл на implode

	    foreach ($animals as $two) // подготовка для двойных названий
	    {
	        $two_words = explode(" ", $two);
	        if (count($two_words) == 2) 
	        {
	            $double_name[] = $two;
	            $first_world[] = $two_words[0];
	            $second_word[] = $two_words[1];
	        }
	    }
	}
	echo '<hr>';
	echo '<h2>Two words array</h2>';
	foreach ($double_name as $item) 
	{
	    echo "$item<br>";
	}
	echo '<hr>';
	shuffle($second_word);
	echo '<h2>Shuffle names</h2>';
	foreach ($second_word as $last)
	{
	    $title = array_shift($continent);
	    $first = array_shift($first_world);
	    echo "<h3>$title</h3>";
	    echo $first . ' ' . $last . '<br>';
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Домашнее задание к лекции 1.3 «Строки, массивы и объекты»</title>
  <style>
  	* { padding: 0; margin: 0; }
  	h2 { text-decoration:underline; margin: 1em 0 0 0; }
  	body { padding-left: 1em; }
  	hr { margin-top: 1em; }
  </style>
</head>
<body>	

</body>
</html>