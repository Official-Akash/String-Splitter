<!--

// Authors: Akash Chouhan
// Version 1.0
// Open-Source Code

-->

<?php
	if(isset($_POST['submit']))
	{
		$text=$_POST['string'];
		$split=$_POST['n'];
		$sizestring=strlen($text);
		if($sizestring<$split)
		{
			echo "String size should be greater than split size";
		}
		else
		{
			echo "<strong>input is:</strong>".$text;
			$rev=strrev($text);
			$newstring=implode(" ", str_split($rev, $split));
			$finalstring=strrev($newstring);
			echo "<br><strong>output is:</strong>".$finalstring;
		}
	}
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
enter string<br><input type="text" name="string"/><br>
enter value to split<br>
<input type="number" name="n"/><br>
<input type="submit" name="submit">
</form>
<a href="string.txt" download="assignmentbyakash">Download code</a>