# LAMP Stack Refresher

Timestamp: 4:36:10

## General Information
- http://www.google.com/page1.html
protocol host document 
How to understand the HTTP/HTTPS:
1. How (protocol)
2. Where (host)
3. What (document)

- HTML special characters (Just search Google for this characters)

## CSS
- When using float , you can add clear="all" to as a attribute to remove all floats

## PHP
1. Comments
- // : This is a c++ style comment
- /**/ : This is a multi line comment
- /# This is a shell-style command comment 

2. Breaking out of a loop
- The break statement ends the current loop and jumps to the statement immediately following the loop
FOR EXAMPLE:
for($count=1; $count<=600; $count++) {
    if($count == 5 ) break;
    echo "Count: $count\n";
}
echo "Done\n";

3. Finishing an iteration with continue 
- The continue statement ends the current iteration and jumps to the top of the loop and starts the next iteration. 

for($count=1; $count<=10; $count++>) {
    if(($count % 2) == 0) continue; {
        echo nl2br("Count: $count");
    }
}
echo nl2br("Done");

4. Array Functions
- array_key_exists($key, $ar) - Returns TRUE if key is set in the array
- isset($ar["key"]) - Returns TRUE if key is set in the array
- is_array($ar) - Returns TRUE if a variable is an array
- sort($ar) - Sorts the array values (loses key)
- ksort($ar) - Sorts array by value, keeping key association
- shuffle($ar) - Shuffles the array into random order

5. Exploding arrays
$inp = "This is a sentence with seven words";
$temp = explode(' ',$inp);
print_r($temp);

6. Global Scope
function doZap() {
    global $val;
    $val = 100;
}

$val = 10;
doZap();
echo "DoZap = $val\n";

// DoZap will output 100;

7. Coping with missing bits
This is valuable when it comes to backwards compatibility.

if(function_exists("array_combine)) {
    echo "";
}else{
    function array_combine() {
        return "Arrays have been combined";
    }
}

The else part we can define the function and usually the first part of the function is left blank.