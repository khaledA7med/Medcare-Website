<?php
include 'ini.php';
include $tmplt . "header.php";
require_once('includes/functions/controller.Class.php');
$Controller = new Controller;
$db = new Connect;
$user = $db->prepare('SELECT * FROM users where id= ?');
$user->execute(array($_COOKIE['id']));
$userInfo = $user->fetch(PDO::FETCH_ASSOC);

?>
<div class="container" style="margin-top:200px; margin-left:480px;">
    <img src="layout/images/pr logo v2.png" alt="">
</div>

<!-- chat window html section start -->

<button class="chat-btn">
    <i class="material-icons"> comment </i>
</button>
<section class="chatbot">
    <div class="chat-popup" style="width: 750px; height: 88vh; right: 400px; bottom:5px; background-color:#30B9D8;">
        <div class="chat-area">
            <div class="card " id="chat2">
                <div class="card-header d-flex justify-content-between align-items-center p-3">
                    <h1 class="mb-0">medical bot</h1>
                    <div style="width:40px; height: 40px; background-color: #F5FCFF;
            border-radius: 50%; border: 2px solid #e84118;  padding: 2px">
                        <img src="layout/images/Asset 1@5x.png" class="img-fluid rounded-circle" alt="">
                    </div>
                </div>
            </div>

            <!-- bot msg -->
            <div class="card-body" data-mdb-perfect-scrollbar="true" style="position: relative; ">
                <div class="d-flex flex-row justify-content-start">
                    <img src="layout/images/Asset 1@5x.png" alt="bot" style="width: 15%; height: 100%; border-radius: 50%; border: 0.5px solid #e84118;">
                    <div>
                        <h2 class=" large p-2 ms-3 mb-1 rounded-3" style="background-color: #f5f6f7;">
                            <?php if (isset($_COOKIE['id']) && isset($_COOKIE['sess'])) { ?>
                                <span class="msg"> Hi, <?php echo $userInfo["f_name"] ?> How can I help you?</span>
                            <?php } else {  ?> <span class="msg"> Hi How can I help you?</span> <?php  } ?>
                        </h2>
                        <p><?php date_default_timezone_set("Africa/Cairo");
                            echo date("h:i"); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- user input part -->
        <div class="card-footer text-muted d-flex justify-content-start align-items-center p-3">
            <input id="chat_msg" type="text" class="form-control form-control-lg" name="user_msg" placeholder="Type message">
            <button class="btn-lg" id="emoji-btn"> &#127773;</button>
            <input onclick="sendmsg()" value="send" id="send" class="btn-lg btn-success chatbtn material-icons " name="">
        </div>

    </div>

    </div>
</section>

<!-- login section starts  -->


<!-- i want to make fade in here -->

<div class="modal " id="loginModal" tabindex="-1">

    <div class="modal-content" style="background: #D3E7EE">


        <section class="h-auto">

            <div class="container  py-5 h-auto">

                <div class="row d-flex align-items-center  justify-content-center h-100">

                    <!-- image of login form -->
                    <div class="col-md-8 col-lg-7 col-xl-6">

                        <img src="layout/images/draw2.svg"
                            class="img-fluid" style="height: 400px;" alt="Phone image">

                    </div>


                    <!-- login form -->
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <h1 class="close-div heading"> <span>Login</span> </h1>


                        <form>
                            <!-- Email input -->

                            <div class="form-outline mb-4">
                                <input type="email" placeholder="your email"
                                    class="box form-control form-control-lg">
                            </div>

                            <!-- Password input -->

                            <div class="form-outline mb-4">
                                <input type="password" placeholder="*******"
                                    class=" box form-control form-control-lg">
                            </div>

                            <!-- forget password section -->
                            <div class="d-flex justify-content-around align-items-center mb-4">
                                <!-- Checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" checked>
                                    <label class="form-check-label" for="form1Example3"> Remember me </label>
                                </div>

                                <!--create new page for password reset-->

                                <a href="#!">Forgot password?</a>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-lg btn-block">Sign in</button>

                            <div class="divider d-flex align-items-center my-4">
                                <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                            </div>

                            <!-- google button -->
                            <button onclick=" window.location = '<?php echo  $login_url ; ?> ' " 
                            type="button" class="btn btn-lg btn-block " 
                            style="background-color: #dd4b39;" >
                            <i class="fab fa-google me-2"></i> Login in with google</button>
                            
                            
                            
                        </form>

                    </div>

                </div>

            </div>




<!-- custom js file link  -->

<script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.1.1/dist/index.min.js"></script>
<script src="<?php echo $js; ?>jquery-3.5.1.min.js"></script>
<script src="<?php echo $js; ?>bootstrap.min.js"></script>
<script src="<?php echo $js; ?>script.js"></script>

</body>

</html>

</section>