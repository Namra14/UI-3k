<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body{
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(45deg, #E3F4F4, #98EECC, #EEE2DE, #967E76);
            background-size: 400% 400%;
            animation: wavingColor 10s ease infinite;
        }
        @keyframes wavingColor {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }
        .wrapper{
            position: relative;
            width: 450px;
            height: 650px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            box-shadow: 0 0 50px rgba(0, 0, 0, 0.1);
            padding: 40px;
        }
        .form-wrapper{
            display: flex;
            align-items: center;
            width: 100%;
            height: 100%;
            transition: 1s ease-in-out;
        }
        .wrapper.active .form-wrapper.sign-up{
            transform: scale(0) translate(-300px, 500px);
        }
        .wrapper .form-wrapper.Log-in{
            position: absolute;
            top: 0;
            transform: scale(0) translate(200px, 500px);
        }
        .wrapper.active .form-wrapper.Log-in{
            transform: scale(1) translate(0, 0);
        }
        h2 {
            font: 30px;
            color: #47A992;
            text-align: center;
        }
        .input-group{
            position: relative;
            margin: 30px 0;
            border-bottom: 2px solid white;
        }
        .input-group label{
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            font-size: 16px;
            color: black;
            pointer-events: none;
        }
        .input-group input{
            width: 320px;
            height: 40px;
            font-size: 16px;
            color: black;
            padding: 0 50px;
            background: transparent;
            border: none;
            outline: none;
        }
        .input-group input:focus~label,
        .input-group input:valid~label{
            top: -5px;
        }
        .remember{
            margin: -5px 0 15px 5px;
        }
        .remember label{
            color: black;
            font-size: 14px;
        }
        .remember input{
            accent-color: black;

        }
        button{
            position: relative;
            width: 100%;
            height: 40px;
            background: #666968;
            font-size: 16px;
            color: white;
            cursor: pointer;
            border-radius: 30px;
            border: none;
            outline: none;

        }
        button:hover{
            background: #359381;
            color: black;
            transition: 0.5s;
        }
        .signUp-link{
            font-size: 14px;
            text-align: center;
            margin: 15px 0;
        }
        .signUp-link p{
            color: black;

        }
        .signUp-link p a{
            color: #47A992;
            text-decoration: none;
            font-weight: 500;
        }
        .signUp-link p a:hover{
            text-decoration: underline;
        }
        .signIn-link{
            font-size: 14px;
            text-align: center;
            margin: 15px 0;
        }
        .signIn-link p{
            color: black;

        }
        .signIn-link p a{
            color: #666968;
            text-decoration: none;
            font-weight: 500;
        }
        .signIn-link p a:hover{
            text-decoration: underline;
        }
         /* Responsive Styles */
         @media (max-width: 768px) {
            .wrapper {
                max-width: 350px;
            }
            .input-group input {
                width: 100%;
            }
        }
        @media (max-width: 480px) {
            .wrapper {
                max-width: 280px;
            }
            .input-group input {
                width: 100%;
            }
            button {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">School ID</label>
                </div>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Fullname</label>
                </div>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Year Level</label>
                </div>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Confirm Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>
                <button type="submit">Sign In</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
                </div>
            </form>
        </div>





    </style>
    
</head>
<body>
    <div class="wrapper">
        <div class="form-wrapper sign-up">
            <form action="">
                <h2>Sign Up</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">School ID</label>
                </div>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Fullname</label>
                </div>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Year Level</label>
                </div>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Confirm Password</label>
                </div>
               
                <div class="remember">
                    <label><input type="checkbox"> I agree to the terms & conditions</label>
                </div>
                <button type="submit">Sign In</button>
                <div class="signUp-link">
                    <p>Already have an account? <a href="#" class="signUpBtn-link">Sign Up</a></p>
                </div>
                

            </form>
        </div>

        <div class="form-wrapper Log-in">
            <form action="">
                <h2>Log in</h2>
                <div class="input-group">
                    <input type="text" required>
                    <label for="">Username</label>
                </div>
                <div class="input-group">
                    <input type="password" required>
                    <label for="">Password</label>
                </div>
               
                <div class="remember">
                    <label><input type="checkbox"> Remember Me</label>
                </div>
                <button type="submit">Sign In</button>
                <div class="signIn-link">
                    <p>Don't have an account? <a href="#" class="signInBtn-link">Sign Up</a></p>
                </div>
                

            </form>
        
        </div>
    </div>

    <script src="services.js"></script>
</body>
</html>