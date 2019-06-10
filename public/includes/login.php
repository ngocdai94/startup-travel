<?php
require_once('../../private/initialize.php');

$errors = [];
$username = '';
$password = '';

if(is_post_request()) {
  $username = $_POST['username'] ?? '';
  $password = $_POST['password'] ?? '';

  echo ("username is <br>" . $username . "<br>Password is <br>" . $password);

  // Validations
  if(is_blank($username)) {
    $errors[] = "Username cannot be blank.";
  }
  if(is_blank($password)) {
    $errors[] = "Password cannot be blank.";
  }

  // if there were no errors, try to login
  if(empty($errors)) {
    $admin = Admin::find_by_username($username);
    // test if admin found and password is correct
    if($admin != false && $admin->verify_password($password)) {
      // Mark admin as logged in
      $session->login($admin);
      redirect_to(url_for('/staff/admins/index.php'));
    } else {
      // username not found or password does not match
      $errors[] = "Log in was unsuccessful.";
    }
  }
}
?>
<?php include 'header.php'?>

    <?php echo display_errors($errors); ?>
    <main class="login text-center">
        <form class="form" action="login.php" method="POST">
            <img class="mb-4" src="/imgs/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="username" class="form-control" placeholder="Email address" value="<?php echo h($username); ?>" required autofocus>
    
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" value="" required>
            
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        </form>
    </main>
<?php include 'footer.php'?>