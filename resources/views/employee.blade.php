<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Form</title>

    {{-- Remove if your header prints extra content --}}
    {{-- @include('header') --}}

    <!-- Font Awesome -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <style>

        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial, Helvetica, sans-serif;
        }

        body{
            display:flex;
            justify-content:center;
            align-items:center;
            min-height:100vh;
            overflow:hidden;
        }

        /* Background Video */

        .bg-video{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            object-fit:cover;
            z-index:-2;
            filter:brightness(1.35) contrast(1.1);
        }

        /* Light Overlay */

        .overlay{
            position:fixed;
            top:0;
            left:0;
            width:100%;
            height:100%;
            background:rgba(255,255,255,.05);
            z-index:-1;
        }

        /* Glass Card */

        .container{

            width:430px;
            padding:40px;

            background:rgba(255,255,255,.10);

            backdrop-filter:blur(20px);

            border:1px solid rgba(255,255,255,.2);

            border-radius:15px;

            color:white;

            box-shadow:0 8px 32px rgba(0,0,0,.3);

        }

        h2{

            text-align:center;

            margin-bottom:35px;

            font-size:40px;

        }

        .input-box{

            position:relative;

            margin-bottom:25px;

        }

        .input-box input{

            width:100%;

            padding:12px 45px 12px 5px;

            background:transparent !important;

            color:white !important;

            border:none !important;

            border-bottom:2px solid white !important;

            outline:none;

            font-size:16px;

            box-shadow:none !important;

        }

        .input-box input::placeholder{

            color:#eee;

        }

        .input-box input:focus{

            background:transparent !important;

            box-shadow:none !important;

            color:white;

        }

        /* Chrome Autofill Fix */

        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus{

            -webkit-text-fill-color:white;

            -webkit-box-shadow:0 0 0px 1000px transparent inset;

            transition:background-color 9999s ease-in-out 0s;

        }

        /* Eye Icon */

        .toggle-password{

            position:absolute;

            right:10px;

            top:50%;

            transform:translateY(-50%);

            cursor:pointer;

            color:white;

            font-size:18px;

        }

        .options{

            display:flex;

            justify-content:space-between;

            align-items:center;

            margin-bottom:25px;

            font-size:15px;

        }

        .options a{

            color:white;

            text-decoration:none;

        }

        .options a:hover{

            text-decoration:underline;

        }

        .btn{

            width:100%;

            padding:13px;

            border:none;

            border-radius:6px;

            background:white;

            color:black;

            font-size:20px;

            font-weight:bold;

            cursor:pointer;

            transition:.3s;

        }

        .btn:hover{

            background:#e5e5e5;

        }

        .footer{

            margin-top:25px;

            text-align:center;

        }

        .footer a{

            color:white;

            text-decoration:none;

            font-weight:bold;

        }

        .footer a:hover{

            text-decoration:underline;

        }

    </style>

</head>

<body>

    <!-- Background Video -->

    <video autoplay muted loop playsinline class="bg-video">
        <source src="{{ asset('images/rainyday.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="container">

        <h2>Employee Form</h2>

        <form method="POST" action="">

            @csrf

            <div class="input-box">
                <input
                    type="text"
                    name="emp_ID"
                    placeholder="Enter Employee ID"
                    required>
            </div>

            <div class="input-box">
                <input
                    type="text"
                    name="emp_name"
                    placeholder="Enter Employee Name"
                    required>
            </div>

            <div class="input-box">
                <input
                    type="email"
                    name="emp_email"
                    placeholder="Enter Employee Email"
                    required>
            </div>

            <div class="input-box">

                <input
                    type="password"
                    id="password"
                    name="emp_password"
                    placeholder="Enter Employee Password"
                    required>

                <i class="fa-solid fa-eye toggle-password" id="eye"></i>

            </div>
          

            <div class="options">

                <label>
                    <input type="checkbox">
                    Remember Me
                </label>

                <a href="#">Forgot Password?</a>

            </div>

            <button type="submit" class="btn">
                Submit
            </button>

            <div class="footer">
                Don't have an account?
                <a href="#">Register</a>
            </div>

        </form>

    </div>

<script>

const password = document.getElementById("password");
const eye = document.getElementById("eye");

eye.addEventListener("click",function(){

    if(password.type==="password"){

        password.type="text";

        eye.classList.remove("fa-eye");

        eye.classList.add("fa-eye-slash");

    }else{

        password.type="password";

        eye.classList.remove("fa-eye-slash");

        eye.classList.add("fa-eye");

    }

});

</script>

</body>
</html>