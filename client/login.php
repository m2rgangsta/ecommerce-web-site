<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">
</head>
<style>
  *,
*::before,
*::after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  list-style: none;
  list-style-type: none;
  text-decoration: none;
  -moz-osx-font-smoothing: grayscale;
  -webkit-font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1rem;
  font-weight: normal;
  line-height: 1.5;
  color: #252a32;
  
}

img {
  display: block;
  width: 100%;
  height: auto;
}

a,
button {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit;
  cursor: pointer;
  border: none;
  outline: none;
  background: none;
  text-decoration: none;
}

.container {
  max-width: 85rem;
  width: 100%;
  height: auto;
  padding: 0 2rem;
  margin: 0 auto;
}

.wrapper {
  max-width: 28rem;
  width: 100%;
  margin: 0 auto;
  padding: 5rem 1.5rem;
}

.card {
  padding: 1.5rem 2rem;
  border: none;
  outline: none;
  border-radius: 4px;
  color: #252a32;
  background: #ffffff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 3px rgba(0, 0, 0, 0.24);
}

.icons {
  font-size: 1.45rem;
  line-height: inherit;
  margin-right: 0.5rem;
  border: none;
  outline: none;
  background: none;
}
.icons-google {
  color: #d32f2f;
}
.icons-facebook {
  color: #0f698a;
}
.icons-apple {
  color: #252a32;
}

.linktext {
  font-family: inherit;
  font-size: 0.95rem;
  line-height: inherit;
  color: #148cb8;
  text-rendering: optimizeLegibility;
}
.linktext:hover {
  text-decoration: underline;
}

.title {
  font-family: inherit;
  line-height: inherit;
  text-rendering: optimizeLegibility;
}
.title-large {
  font-size: 2rem;
  font-weight: 600;
  color: #252a32;
}
.title-subs {
  font-size: 0.95rem;
  font-weight: 400;
  line-height: inherit;
}

.main .wrapper .form {
  width: 100%;
  height: auto;
  margin: 2rem 0;
}
.main .wrapper .form-group {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  -webkit-box-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
          align-items: center;
  margin-bottom: 1rem;
}
.main .wrapper .form-group .input-field {
  font-family: inherit;
  font-size: 0.95rem;
  font-weight: 400;
  line-height: inherit;
  width: 100%;
  height: auto;
  padding: 0.75rem 1.25rem;
  border: none;
  outline: none;
  border-radius: 2rem;
  color: #252a32;
  background: #f1f5f8;
}
.main .wrapper .form-group .input-submit {
  font-family: inherit;
  font-size: 0.95rem;
  font-weight: 500;
  line-height: inherit;
  cursor: pointer;
  padding: 0.65rem 2rem;
  border: none;
  outline: none;
  border-radius: 2rem;
  text-align: center;
  color: #ffffff;
  background: #7579e7;
}
.main .wrapper .line {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  margin-bottom: 1rem;
}
.main .wrapper .line-bar {
  -webkit-box-flex: 1;
          flex: auto;
  flex-basis: auto;
  border: none;
  outline: none;
  height: 1.3px;
  background: #bed1df;
}
.main .wrapper .line-text {
  font-weight: 500;
  color: #252a32;
  padding: 0 1rem;
}
.main .wrapper .method-item {
  margin-bottom: 0.5rem;
}
.main .wrapper .method-item .btn-action {
  display: -webkit-box;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
          flex-direction: row;
  -webkit-box-pack: center;
          justify-content: center;
  -webkit-box-align: center;
          align-items: center;
  font-family: inherit;
  font-size: 0.95rem;
  font-weight: 500;
  line-height: inherit;
  padding: 0.2rem 1rem;
  width: 100%;
  height: auto;
  outline: none;
  border: 1.3px solid #bed1df;
  border-radius: 2rem;
  color: #252a32;
  background: #ffffff;
  -webkit-transition: all 0.35s ease;
  transition: all 0.35s ease;
}
.main .wrapper .method-item .btn-action:hover {
  background: #cfdde7;
}


  
</style>
<body>
  <?php include_once('header.php');  ?>
<main class="main">
    <div class="wrapper">
        <div class="card">
            <div class="title">
                <h1 class="title title-large">Sign In</h1>
                <p class="title title-subs">New user? <span><a href="#" class="linktext">Create an account</a></span></p>
            </div>
            <form class="form">
                <div class="form-group">
                    <input type="email" name="email" id="email" class="input-field" placeholder="Email address">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" class="input-field" placeholder="Password">
                </div>
                <div class="form-group">
                    <a href="./index.html" class="linktext">Forgot Password</a>
                    <input type="button" name="submit" class="input-submit" value="Login">
                </div>
            </form>
            <div class="line">
                <span class="line-bar"></span>
                <span class="line-text">Or</span>
                <span class="line-bar"></span>
            </div>
            <div class="method">
                <div class="method-item">
                    <a href="#" class="btn-action">
                        <i class="icons icons-google fab fa-google"></i>
                        <span>Sign in with Google</span>
                    </a>
                </div>
                <div class="method-item">
                    <a href="#" class="btn-action">
                        <i class="icons icons-facebook fab fa-facebook"></i>
                        <span>Sign in with Facebook</span>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
</main>
<?php include_once('footer.php'); ?>
</body>
</html>

