<?php 
session_start();
include_once 'core/user.php';
$user= new user();

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
    <br><br><br><br><br><br><br>
        <div class="container mt-5">
            <a href="#" class="btn btn-outline-dark"> +Create a new post</a>
            <h2 class="content-title">Recent Articles</h2>
            <hr>
            <!-- more content still to come here ... -->
        </div>
        <!-- // Page content -->
     <!-- Regester Section-->

     <!---Footer start --->
    <?php include_once("./templetes/footer.php"); ?>
    <!---Footer end --->

</body>
</html>

