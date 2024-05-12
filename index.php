<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form in HTML and CSS | Codehal </title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form action="">
            <h1>LOGIN</h1>
            <div class="input">
                <input type="text" placeholder="Username"
                required>
                <i class='bx bxs-user'></i>
            <div class="input">
                <input type="Password" placeholder="Password"
                required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div>
               <div class="rember-forgot">
                 <label> <input type="checkbox"> Remember me
                  <label>
                  <a href="#">Forgot Password</a>

                 </div>

                  <button type="submit" class="btn">Login</button>
                
                  <div class="register-link">
                    <p>
                        Don't Have an account? <a
                        href="#">Register</a></p>
                  </div>    

               </div>
            </div>
        </form>
    </div>
</body>
</html>