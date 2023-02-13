<?php 
session_start();
include_once 'core/questions.php';
$question= new questions();
if(!isset($_SESSION['user_id'])){
    header("location: login.php");
}


?>
<?php include_once './templetes/header_.php'; ?>
<body>
    <!---Header Start -->
    <?php include_once './templetes/header.php'; ?>
    <!---Header end -->
    <!-- Page content -->
    <br><br>
  <!-- Question Section-->
        <section class="page-section text-black mb-0" id="about">
            <div class="container">
            <?php 
            if(isset($_POST['submit'])){
                $question->questionData($_POST['title'],$_POST['details'],$_SESSION['user_id'] );
            }

             ?>
            <form action="" method="POST" class="form-group">
                <input type="text" name="title" placeholder="Title"><br>
                <textarea class="form-control" id="questionData" name="details"></textarea>
                <br>
               <input class="btn btn-success"type="submit" name="submit" value= "Add Question"> 
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

