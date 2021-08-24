<?php
for ($i=0; $i<=8 ; $i++) { 
	for ($j=1; $j<=$i; $j++) { 
		
		echo "*";
		

		# code...
	}
	echo "<br>";
	# code...
}
echo "<br>";
for ($i=1; $i<=8 ; $i++) { 
	for ($j=8; $j>=$i ; $j--) { 
		echo "*";
		# code...
	}
	echo "<br>";
	# code...
}
echo "<br>";
for ($i=0; $i<=8 ; $i++) { 
	for ($j=1; $j<=$i; $j++) { 
		
		echo "*";
		

		# code...
	}
	echo "<br>";
	# code...
}
for ($i=1; $i<=8 ; $i++) { 
	for ($j=8; $j>=$i ; $j--) { 
		echo "*";
		# code...
	}
	echo "<br>";
	# code...
}
echo "<br>";
$n=4;
for ($i=1; $i<=$n ; $i++) { 
	for ($j=1; $j<=(2*$n)-1; $j++) { 
		if ($j>=$n-($i-1) && $j>=$n+($i-1)) {
			# code...
		
		echo "*";
	   }else{
			echo "&nbsp;&nbsp";
		    }# code...
	}
	echo "<br>";
	# code...
}

?>
