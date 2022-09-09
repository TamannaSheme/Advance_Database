<?php
$m = new MongoDB\Driver\Manager("mongodb://localhost:27017");
//print_r($m);
echo "Connection to database successfully";
// select a database
$db = $m->CSE464;
echo "Database mydb selected";
//$collection = $db->createCollection("Student");
echo "Collection created succsessfully";
$collection = $db->student;
if(isset($_POST)){
    $in = array(
        'name'=>$_POST['name'],
        'mobile'=> $_POST['mobile'],
        'email'=> $_POST['email']
    );
    
    $query = insert('temp_subscribed_users', $in);
   if($collection->$query){
       echo "data is inserted";
   } 

   else {
          echo "some issue";
   }
}
else{
    echo "no data";
}

?>