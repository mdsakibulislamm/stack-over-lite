<?php 
include 'database.php';
class MainPage extends database
{
    //FETCH ALL QUESTIONS

    public function getAllquestions()
    {

        $query = "SELECT questions.user_id as q_user_id,questions.title,questions.id,COUNT(answers.question_id) as answer_count from questions left join answers on questions.id=answers.question_id group by answers.question_id";
        return $this->dataFetch($query);

    }

}

 ?>