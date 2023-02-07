<?php 
include 'database.php';
class questions extends database{

    public function questionData($title,$details,$user_id)
    {
        $query= "INSERT INTO questions(title,details,user_id) VALUES ('$title','$details','$user_id')";
        $this->dataWrite($query);


    }
    //Get Specific questions Data 
    public function getOnequestion($qid)
    {
        $query = "SELECT * FROM questions WHERE id='$qid'";
        return $this->dataFetch($query);
    }
    //Post Answer 
    public function makeAnswer($user_id, $q_id,$answer){
        $query = "INSERT INTO answers (user_id, question_id,details) VALUES ('$q_id','$user_id','$answer')";
        $this->dataWrite($query);

    }
     

}

 ?>