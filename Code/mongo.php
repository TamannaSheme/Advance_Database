<!DOCTYPE html>
<?php
require 'vendor/autoload.php';
   // connect to mongodb
   $m = new MongoDB\Client;
   //echo "Connection to database successfully";
   // select a database
   $db = $m->mydb;
   //echo "Database mydb selected";
   #$collection = $db->createCollection("member");
   #echo "Collection created succsessfully";
   $collection = $db->member;
 
   if(isset($_POST['submit'])){
    $in = array(
        "id" =>$_POST['id'],
        "club" =>$_POST['club'],
        "position" => $_POST['pos']
    );
    
   // $query = insert('temp_subscribed_users', $in);
   if($collection->insertOne($in)){
       echo "Data is inserted";
   } 

   else {
          echo "some issue found";
   }
}
else{
    echo "no data is inserted!!";
}
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
    <form action="mongo.php" method="post" style="text-align: center; color: #000000; font-style: bold; font-size: 25px; background-color: #1E90FF; border: 4px solid white;" >
     <b>Student ID
     <input type="text" name="id">
     <br>
     <br>
     Club
     <select name="club">
         <option>Select  </option>
         <option name="Computer Programming Club" value="Computer Programming Club">Computer Programming Club (EWUCoPC)</option>
         <option name="Club for Performing Arts" value="Club for Performing Arts">Club for Performing Arts</option>
         <option name="Debating Club" value="Debating Club">Debating Club</option>
         <option name="Business Club" value="Business Club">Business Club(EWUBC)</option>
         <option name="Environmental and Social Club" value="Environmental and Social Club">Environmental and Social Club</option>
         
     </select>
     <br>
     <br>
        Position: <select name="pos">
         <option>Select  </option>
         <option name="General member" value="General member">General member</option>
         <option name="President" value="President">President</option>
         <option name="Vice President" value="Vice President">Vice President</option>
         <option name="Moderator" value="Moderator">Moderator</option>
         <option name="Treasurer" value="Treasurer">Treasurer</option>
         <option name="Communications Chair" value="Communications Chair">Communications Chair</option>
         
     </select>
       
        <br>
        <br>
        <button type="submit" name="submit">Save</button>
        
    </b>
</form>
</body>
</html>   
?>