<?php
	// Declare your String 
	$var = "reverse string";
	echo strrev( $var );
?>
        <br />
        <br />
        <br />
        <br />
<?php
	// Declare your String 
	$var = "Reverse String";

	// Find the length of your string
	$count = strlen( $var );
	// Loop through to print in reverse
	for( $start = $count -1 ; $start >=0; $start -- )
{
		echo $var[$start]; 
	}
?> 

        
        <br />
        <br />
        <br />
        <br />

<?php
	// Declare String
	$var = "Drtuts";
	$start = 0;
While( isset( $var[$start] ) )
{
	$start++;
}
$start--;

While( isset( $var[$start] ) ) 
{
	echo $var[$start];
	$start--;
}
?>
        