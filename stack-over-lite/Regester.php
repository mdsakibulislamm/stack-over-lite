<?php 
include_once 'core/user.php';
$user= new user();
 ?>

<?php include_once './templetes/header_.php'; ?>
<body>
     <!-- Regester Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Regester</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <?php 

                        if (isset($_POST['submit'])) {
                            
                            $user->register($_POST['username'],$_POST['email'],$_POST['password'],$_POST['phone'] );
                        }

                         ?>
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate" action="" method="POST">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label><input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." name="username" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label><input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." name="email" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Password</label><input class="form-control" id="phone" type="password" placeholder="Password" required="required" data-validation-required-message="Please enter your password." name="password" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone number</label><input class="form-control" id="phone" type="tel" placeholder="Phone number" required="required" data-validation-required-message="Please enter your phone number." name="phone" />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit" name="submit">Submit</button></div>
                            <p>Already registered? Login
                                <a href="login.php">here</a></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>


</body>
</html>




