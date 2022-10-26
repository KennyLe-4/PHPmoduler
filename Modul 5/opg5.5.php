<?php 
// This function makes sure that the alfabeth from (A-Z) will have a given number from (0-25). Modulo operator is used. 
function Mod($a, $b)
{
	return ($a % $b + $b) % $b;
}

// This function generates the key repetitive until it´s lenghts isnt equal to the lenght of the orignal text
function Cipher($input, $key, $encipher)
{
	$keyLen = strlen($key);
// iterate over each line in text
// if the letter is alpha, encrypt it
	for ($i = 0; $i < $keyLen; ++$i)
		if (!ctype_alpha($key[$i]))
			return ""; // Error

// intialize variables 
	$output = "";
	$nonAlphaCharCount = 0;
	$inputLen = strlen($input);

	// Iterate over each line in text
	for ($i = 0; $i < $inputLen; ++$i)
	{
	
		if (ctype_alpha($input[$i]))
		{
			// Checks for uppercase
			$cIsUpper = ctype_upper($input[$i]);
			$offset = ord($cIsUpper ? 'A' : 'a');
			$keyIndex = ($i - $nonAlphaCharCount) % $keyLen;

			// Convert all uppercase to lowercase for simplicity 
			$k = ord($cIsUpper ? strtoupper($key[$keyIndex]) : strtolower($key[$keyIndex])) - $offset;
			$k = $encipher ? $k : -$k;
			$ch = chr((Mod(((ord($input[$i]) + $k) - $offset), 26)) + $offset); 
			$output .= $ch;
		}
		else
		{
			// update the index of key
			$output .= $input[$i];
			++$nonAlphaCharCount;
		}
	}

	return $output;
}
// This function return the encrypted text 
// generated with the help of the key
function Encipher($input, $key)
{
	return Cipher($input, $key, true);
}

// This function decrypts the encrypted text 
// and returns the orginal text
function Decipher($input, $key)
{
	return Cipher($input, $key, false);
}

$text = "Hemmelig";
$cipherText = Encipher($text, "cipher");
$plainText = Decipher($cipherText, "cipher");

echo "This is plain text: " . $plainText . "<br>";
echo "This is cipher text: ". $cipherText . "<br>";


?> 