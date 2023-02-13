<?php 
session_start();
include_once './templetes/header_.php';
include_once 'core/questions.php';

$question = new questions();
if(!isset($_SESSION['user_id'])){
	header("location: login.php");
}

if(!isset($_GET['qid'])){
    echo "Invalid";
}

$q_id = $_GET['qid'];

$getQuestion = $question->getOneQuestion($q_id);
$getQuestion = $getQuestion[0];


?>
<body>
	<!---Header Start -->
	<?php include_once './templetes/header.php'; ?>
	<!---Header end -->
        <br><br><br><br><br>
            <section class="page-section" id="contact">
    <div class="container">
    	
        <h2>Edit</h2>
    	<?php
            //EDIT DATA
    		if(isset($_POST['submit'])){

    			$question->editQuestion($getQuestion['id'],$_POST['title'],$_POST['details']);
                header("location: edit.php?qid=".$getQuestion['id']);

    		}

    	?>
    	<form action="" method="POST" class="form-group">
    		
    		<input class="form-control" type="text" name="title" placeholder="Title" value="<?= $getQuestion['title'] ?>"><br>

    		<textarea class="form-control" id="questionData" name="details">
                <?= $getQuestion['details'] ?>       
            </textarea>

    		<br>

    		<input class="btn btn-success" type="submit" name="submit" value="Edit Question">

    	</form>

    </div>
 </section>

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
      tinymce.init({
        selector: '#questionData'
      });
</script>

        
	

	<!---Footer start --->
	<?php include_once("./templetes/footer.php"); ?>
	<!---Footer end --->

</body>
</html>



