<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Refresher</title>
</head>
<body>
    
</body>
</html>
<?php 
//    echo "Hello"; 

   for($count=1; $count<=10; $count++){
    echo "$count times 6 is ". $count * 6;
    echo nl2br("\r\n");
   }

   for($i=0; $i<5; $i++) {
    echo nl2br("$i\r\n");
   } 


 
  

   function getUser() {
    if(isset($users)) {
        return $users["name"];
       }else{
        return "Nothing";
       }
   };

   $users = [
    "name" => "John Doe",
    "age" => "34",
    "school" => "Selborne College"
];

   $userOutput = getUser();
   echo $userOutput;

   phpinfo();
   
?>