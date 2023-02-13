<?php 
session_start();
include_once './templetes/header_.php';
include_once 'core/MainPage.php';

$main = new MainPage();
$res = $main->getAllquestions();

?>
<body>
	<!---Header Start -->
	<?php include_once './templetes/header.php'; ?>
	<!---Header end -->
        <br><br><br><br><br>
<div class="containter">
			<div class="row">
		<div class="col-8 offset-2 mt-3 mb-2" style="border: 1px dotted grey">
			
			<?php foreach($res as $question): ?>

				<div class="row">
						<div class="col-2">
							<h3><?= $question['answer_count']; ?></h3>
							<p>Answers</p>
						</div>
						<div class="col-10">
							<a href="questionDetails.php?qid=<?= $question['id']; ?>" class="d-block pt-4"><?= $question['title']; ?></a>

							<?php if($_SESSION['user_id'] == $question['q_user_id']): ?>

							<a style="color:orange" href="edit.php?qid=<?= $question['id']; ?>">Edit</a>
							<a style="color:red" onclick="return confirm('ARe you Sure?')" href="delete.php?qid=<?= $question['id']; ?>">Delete</a>
							
							<?php endif; ?>

						</div>
				</div>

			<?php endforeach; ?>

		</div>
	</div>
</div>
	<!---Footer start --->
	<?php include_once("./templetes/footer.php"); ?>
	<!---Footer end --->

</body>
</html>



