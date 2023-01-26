<?php 
include 'database.php';
class questions extends database{

    public function questionData($title,$details,$user_id)
    {
        $query= "INSERT INTO questions(title,details,user_id) VALUES ('$title','$details','$user_id')";
        $this->dataWrite($query);


    }

}

 ?>