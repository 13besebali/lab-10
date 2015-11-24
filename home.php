<html>
	<head>
		<meta charset = "UTF-8">
		<title> Dictionary </title>
	</head>
	<body>
	
	<div style ="background-color:black;color:white;padding:5px; text-align:center"><h1> Dictionary </h1></div>
	
		<form action="" method= "post" style ="position:absolute; top: 20%">
			Search:
			<input type="text" name="search_word" value="">
			<input type="submit" value="Submit">
		</form> 
	
		<?php
		
			
				$str = file_get_contents('dictionary.json');
				$json = json_decode($str, true); // decode the JSON into an associative array
				//print_r($json);
				

				if(isset($_POST["search_word"]))
				{
					//echo ($_POST["search_word"]);
					$word_to_search = $_POST["search_word"];
					if(array_key_exists($word_to_search,$json))
						echo ("<h1 style=\"position:absolute;top:25%\">".$json[$word_to_search]."</h1>");
					else
						echo ("<h1 style=\"position:absolute;top:25%\">does not exist</h1>");
				}
				

		?>
	<div style ="background-color:black;color:white;position:absolute;top:97%;text-align:center;width:99%">dictionary.com </div>	
	</body>
</html>