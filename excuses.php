<!DOCTYPE html>
<html>
	<head>
		<title>Why is James not on Xbox</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<section>
			<h1>Why is James not on Xbox?</h1>
      <h2>
        <?php
        $input = array("Digging up a raspberry patch", 
                       "Running a bath for someone", 
                       "Cooking a paella", "Watching Taskmaster", 
                       "Been at the allotment", 
                       "Going out for a wander", 
                       "Taking pictures of a vegetable risotto", 
                       "Cooking a roast gammon", 
                       "Just going to B&Q", 
                       "Building a Billy bookcase", 
                       "Waiting for Steph to cook Fajitas", 
                       "At the Zoom pub", 
                       "I can smell dinner", 
                       "My Xbox has gone into a state of idle", 
                       "Convincing Steph to cook tacos");
        $rand_keys = array_rand($input, 2);
        echo $input[$rand_keys[0]] . "\n";
        ?>
    </h2>
		</section>
	</body>
</html>
