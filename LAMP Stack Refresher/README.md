# LAMP Stack Refresher

Timestamp: 5:57:00

## General Information
- http://www.google.com/page1.html
protocol host document 
How to understand the HTTP/HTTPS:
1. How (protocol)
2. Where (host)
3. What (document)

## General Comments
- When deciding when to use client vs server side validation, if it is going to be stored in a database, consider server side validation. Bear in mind client-side validation is faster then server-side validation. 

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

8. PHP Semantics
- Try to write code according to the MVC Model
- MVC:
    - Model: Handles data (Incoming data)
    - View: Produce Output
    - Controller: Orchestration / Routing 
    - Only your HTML will contain echo tag for outputting data

9. Relational Databases
<p>Relational databases model data by storing rows and columns in tables.</p>

- Commands:
    - Creating a database: create database (Database Name);
    - Use a specific database: use (Database Name);
    - Show the contents of a table: describe (Table Name);
    - Inserting data into a table: INSERT INTO (Table Name) (Name of Columns) VALUES (Data to be added to Table);
    - Delete a row in a table : DELETE FROM (Table Name) WHERE (Table Column = something);
    - Shows the data in a table : SELECT * FROM (Table Name);
    - Update table data according to a condition : UPDATE Users SET (Table Column = something) WHERE (Table column = something);
    - Retrieving records : 
        - SELECT * FROM (Table Name); OR
        - SELECT * FROM (Table Name) WHERE (Table Column = something)
    - Sorting the data from the database
        - SELECT * FROM (Table Name) ORDER BY (Table Column)
