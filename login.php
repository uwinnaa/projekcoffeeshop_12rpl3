<?php

    //fungsi session untuk menjaga / memelihara informasi akses dari seorang pengakses / pemakai aplikasi web
    //session_start();
    if (!empty($_SESSION['username_bluucafe'])){
      header('location:../views/home');
    }
?>


<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>BluuCafe Login</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="assets/css/login.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" novalidate action="routers/r_login.php" method="POST">
            <center>
                <i class="bi bi-cup-hot fs-1"></i>
                <h1 class="h3 mb-3 fw-normal">Please log in</h1>

                <div class="form-floating">
                    <input name="username" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Email address</label>
                    <div class="invalid-feedback">
                    Enter a valid email.
                    </div>
                </div>

                <div class="form-floating">
                    <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                    <label for="floatingPassword">Password</label>
                    <div class="invalid-feedback">
                    Enter a password.
                    </div>
                </div>

                <div class="form-check text-start my-3">
                    <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Remember me
                    </label>
                </div>
                <button class="btn btn-primary w-100 py-2" type="submit" name="submit_validate" value="value" style="background-color: #374252;">Log
                    in</button>
                <p class="mt-5 mb-3 text-body-secondary">&copy; copyright 2023 BluuCafe</p>
            </center>
        </form>
    </main>

<!-- JAVA SCRIPT -->


    <script>

        // Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
    </script>

</body>

</html>