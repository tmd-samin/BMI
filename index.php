<?php
require 'auth.php';

$error = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $error = login($username, $password);
}
?>

<?php include 'header.php'; ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="card mt-5 shadow-sm">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Login</h2>
                    <form method="POST" action="" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                            <div class="invalid-feedback">Please enter your username.</div>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                            <div class="invalid-feedback">Please enter your password.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                        <div class="text-danger mt-3"><?php echo $error; ?></div>
                    </form>
                    <p class="text-center mt-3">Don't have an account? <a href="signup.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
