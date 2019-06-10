<?php
require_once('../../private/initialize.php');
// require_login();

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['admin'];
  $admin = new Admin($args);
  $result = $admin->save();

  if($result === true) {
    $new_id = $admin->id;
    $session->message('The admin was created successfully.');
    // redirect_to(url_for('/staff/admins/show.php?id=' . $new_id));
    echo ("Successful! - This message will be remove in the future <br>");
    echo ("Your username is" . $admin->username . "<br>");
    echo ("Your password is" . $admin->password . "<br>");
  } else {
    // show errors
  }

} else {
  // display the form
  $admin = new Admin;
}

?>    
<?php include 'header.php'?>
    <?php echo display_errors($admin->errors); ?>
    <main class="login text-center">
        <form class="form" action="<?php echo basename($_SERVER['PHP_SELF']); ?>" method="POST">
            <img class="mb-4" src="/imgs/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
            
            <label for="name" class="sr-only">Your name</label>
            <input type="text" id="firstName" name="admin[first_name]" value="<?php echo h($admin->first_name); ?>" class="form-control" placeholder="First name" required autofocus>

            <label for="name" class="sr-only">Your name</label>
            <input type="text" id="lastName" name="admin[last_name]" value="<?php echo h($admin->last_name); ?>" class="form-control" placeholder="Last name" required>

            <label for="username" class="sr-only">Email address</label>
            <input type="email" id="username" name="admin[username]" value="<?php echo h($admin->username); ?> "class="form-control" placeholder="Email address" required>
    
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="admin[password]" value="" class="form-control" placeholder="Password" required>

            <label for="confirm_password" class="sr-only">Re-enter password</label>
            <input type="password" id="confirm_password" name="admin[confirm_password]" value="" class="form-control" placeholder="Re-enter password" required>
            
            <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->
            <button class="btn btn-lg btn-primary btn-block" type="submit">Create your account</button>

            <div>
                <br>
                <p>Already have an account? 
                    <a href="/includes/login.php">Sign in ></a>
                </p>
            </div>
        </form>
    </main>
<?php include 'footer.php'?>