<?php include './_partials/_template/header.php';
$isLogin = isset($_POST['login']) ?? false;

if ($isLogin) {
    $email = $_POST['email'] ?? 'email';
    $password = $_POST['password'] ?? 'password';

    echo "<h1> $email $password </h1>";       
}
?>


<form action="./?page=login" method="post">
    <div class="w-50 my-5 mx-auto bg-dark p-3">
        <!-- email -->
        <div class="mb-3 text-center px-1">
            <label for="email" class="text-light h2">Email</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <!-- password -->
        <div class="mb-3 text-center px-1">
            <label for="password" class="text-light h2">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        
        <div class="row">
            <div class="col-6">
                <input type="submit" value="login" class="btn btn-primary w-100" name="login">
            </div>
            <div class="col-6">
                <input type="submit" value="register" class="btn btn-success w-100" name="register">
            </div>
        </div>
        
        
    </div>
</form>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>
</html>