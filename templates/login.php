<?php
$error = '';

if(!empty($_POST['email']) && !empty($_POST['password'])) {
    if($_POST['email'] == 'ivan@gmail.com' && $_POST['password'] == '123456') {
        $_SESSION['login'] = 'ivan@gmail.com';
        header('Location: /admin/');
        die();
    } else {
        $error = 'Неверный логин или пароль';
    }
}

require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/header.php';
?>



<body>

    <?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/templates/menu.php'
        ?>


    <main role="main">

        <div class="container">
            <!-- Example row of columns -->
            <div class="row">
                <?=$error?>
                <form method="post" action="">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Enter email" name="email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <hr>

        </div> <!-- /container -->

    </main>

    <footer class="container">
        <p>&copy; Company 2017-2018</p>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <script src="/js/bootstrap.min.js"></script>
</body>

</html>