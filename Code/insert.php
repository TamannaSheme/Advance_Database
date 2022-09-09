<!DOCTYPE html>
<?php
require 'vendor/autoload.php';
   // connect to mongodb
   $m = new MongoDB\Client;
   //echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
   //echo "Database mydb selected";
   //$collection = $db->createCollection("student");
   //echo "Collection created succsessfully";
   $collection = $db->student;
 
   if(isset($_POST['submit'])){
    $in = array(
        "id" =>$_POST['id'],
        "name" =>$_POST['name'],
        "dep" => $_POST['select'],
        "mobile" => $_POST['mobile'],
        "email" => $_POST['email']
    );
    
   // $query = insert('temp_subscribed_users', $in);
   if($collection->insertOne($in)){
      # echo "Data is inserted";?>
     <dialog open>Data is inserted</dialog>
     <?php
   } 

   else {
          echo "some issue found";
   }
}
#else{
    #echo "no data is inserted!!";
#}
?>
<html>
    <head>
    <mta charset="utf-8">
        <style>
    body {
            background-image: url("b2.jpg");
            background-repeat: no-repeat;
            /* Full height */
           height: 390px;
            
            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        h1 {
            font: bold small-caps  Georgia, 'Times New Roman';
            font-size: 50px;
            font-style: 'bold';
            background-color: #ffffff;
            text-align: center;
            text-decoration-color: rgb(255, 252, 252);
        }

        </style>
        <title></title>
</head> 
<body>
    <h1> Insert Student Info</h1>
    <form action="insert.php" method="post" style="text-align: center; color: #000000; font-style: bold; font-size: 25px; background-color: #1E90FF; border: 4px solid white;" >
     <b>Student ID
     <input type="text" name="id">
     <br>
     <br>
     Name <input type="text" name="name" value="">
     <br>
     <br>
     Department
     <select name="select">
         <option>Select  </option>
         <option name="cse" value="cse">CSE</option>
         <option name="eee" value="eee">EEE</option>
         <option name="ece" value="ece">ECE</option>
         <option name="bba" value="bba">BBA</option>
         <option name="eco" value="eco">ECO</option>
         <option name="geb" value="geb">GEB</option>
         <option name="sociology" value="sociology">Sociology</option>
         
     </select>
     <br>
     <br>
        Mobile: <input type="text" name="mobile" value="">
        <br>
        <br>
       Email <input type="email" name="email" value="">
        <br>
        <br>
        <button type="submit" name="submit">Save</button>
        
    </b>
</form>
</body>
</html>   