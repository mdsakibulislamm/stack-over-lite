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
    //Post a Answer 
    public function makeAnswer($q_id,$user_id, $answer){
        $query = "INSERT INTO answers (question_id,user_id,details) VALUES ('$q_id','$user_id','$answer')";
        $this->dataWrite($query);

    }
    //Get One Question ANSWER
    public function getOneQuesAnswer($q_id){
        $query = "SELECT * FROM answers join users on users.id=answers.user_id where question_id='$q_id'";
        return $this->dataFetch($query);
    }
    	//EDIT QUESTION
	public function editQuestion($qid,$title,$details)
	{
		$query = "UPDATE questions set title='$title',details='$details' WHERE id = '$qid'";
		$this->dataWrite($query);
	}


	//DELETE QUESTIONS
	public function delete($qid)
	{
		$query = "DELETE FROM questions where id='$qid'";

		$this->dataWrite($query);
	}

     

}

 ?>