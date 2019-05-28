<?php include 'header.php'?>
    <main class="login text-center">
        <form class="form-signin">
            <img class="mb-4" src="/imgs/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Create account</h1>
            
            <label for="name" class="sr-only">Your name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required autofocus>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required>
    
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>

            <label for="inputPasswordRepeat" class="sr-only">Re-enter password</label>
            <input type="password" id="inputPasswordRepeat" name="passwordRepeat" class="form-control" placeholder="Re-enter password" required>
            
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