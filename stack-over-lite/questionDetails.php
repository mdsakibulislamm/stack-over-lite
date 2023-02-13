<?php 
session_start();
include_once './templetes/header_.php';
include_once 'core/questions.php';


if(!isset($_GET['qid'])){
    echo "Invalid Data";
    exit();
}

$q_id = $_GET['qid'];

$question = new questions();
$answer = new Questions();

$questionData = $question->getOnequestion($q_id);
$questionData = $questionData[0];
?>

<body>
    <!---Header Start -->
    <?php include_once './templetes/header.php'; ?>
    <!---Header end -->
    <!-- Page content -->
    <br><br><br><br><br>
    <div class="containter">
	<div class="row">
		<div class="col-10 offset-1 mt-3 mb-2">
			
			<div class="row">
				<div class="col-12">
					<h2 style="color:blue;"><?= $questionData['title'] ?></h2>
					<hr>
				</div>
				<div class="col-12">
					<?= $questionData['details'] ?>
				</div>
			</div>

			<hr>
			<?php if(isset($_SESSION['user_id'])): ?>
			<div class="row">
				<div class="col-12">

					<!-- ANSWER RENDER SECTION -->
					<?php
						$getAnswers = $question->getOneQuesAnswer($questionData['id']);
					?>

					<?php foreach($getAnswers as $answers): ?>
					<div class="row" style="border: 1px dotted grey;">
						<div class="col-10" style="border-right: 1px dotted grey">
							<p><?= $answers['details'] ?></p>
						</div>
						<div class="col-2">
							<p><?= $answers['username'] ?></p>
						</div>
					</div>
					<?php endforeach; ?>


				<!-- ANSER SUBMIT SECTION -->
					<?php
						if (isset($_POST['submit'])) {
							
							$answer->makeAnswer($questionData['id'],$_SESSION['user_id'],$_POST['answer']);
							echo "Answer Submitted";

						}
					?>
					<form action="" method="POST">
						<textarea name="answer"></textarea>
						<br>
						<input type="submit" name="submit" value="Submit Answer">
					</form>
				</div>
			</div>
			<?php else: ?>
			<div class="row">
				<div class="col-12">
					<p><a href="login.php">Login</a> to post a answer.</p>
				</div>
			</div>
			<?php endif; ?>

		</div>
	</div>
</div>


     <!---Footer start --->
    <?php include_once("./templetes/footer.php"); ?>
    <!---Footer end --->

</body>
</html>

