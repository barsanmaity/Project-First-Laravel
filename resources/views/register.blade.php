<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

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

        /* Overlay */

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
            width:450px;
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
            margin-bottom:30px;
            font-size:38px;
        }

        .input-box{
            position:relative;
            margin-bottom:20px;
        }

        .input-box input{
            width:100%;
            padding:12px 45px 12px 8px;
            background:transparent;
            border:none;
            border-bottom:2px solid white;
            color:white;
            outline:none;
            font-size:16px;
        }

        .input-box input::placeholder{
            color:#eee;
        }

        .input-box input:focus{
            border-bottom:2px solid #00d4ff;
        }

        /* Autofill Fix */

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

        .btn{
            width:100%;
            padding:13px;
            margin-top:15px;
            border:none;
            border-radius:6px;
            background:white;
            color:black;
            font-size:18px;
            font-weight:bold;
            cursor:pointer;
            transition:.3s;
        }

        .btn:hover{
            background:#e5e5e5;
        }

        .footer{
            text-align:center;
            margin-top:25px;
            font-size:17px;
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
        <source src="{{ asset('images/rainydrem.mp4') }}" type="video/mp4">
    </video>

    <div class="overlay"></div>

    <div class="container">

        <h2>Register</h2>

        <form action="{{ url('/employee/register') }}" method="POST">

            @csrf

            <div class="input-box">
                <input type="text"
                       name="emp_id"
                       placeholder="Employee ID"
                       required>
            </div>

            <div class="input-box">
                <input type="text"
                       name="emp_name"
                       placeholder="Full Name"
                       required>
            </div>

            <div class="input-box">
                <input type="email"
                       name="emp_email"
                       placeholder="Email Address"
                       required>
            </div>

            <div class="input-box">
                <input type="password"
                       id="password"
                       name="emp_password"
                       placeholder="Password"
                       required>

                <i class="fa-solid fa-eye toggle-password" id="eye1"></i>
            </div>

            <div class="input-box">
                <input type="password"
                       id="confirm_password"
                       name="confirm_password"
                       placeholder="Confirm Password"
                       required>

                <i class="fa-solid fa-eye toggle-password" id="eye2"></i>
            </div>
              @error('emp_password')
            <span style ="color:white">
                {{$massage}}
</span>
@enderror

            <button type="submit" class="btn">
                Register
            </button>

            <div class="footer">
                Already have an account?
                <a href="{{ url('/login') }}">Login</a>
            </div>

        </form>

    </div>

<script>

function togglePassword(passwordId, eyeId){

    const password=document.getElementById(passwordId);
    const eye=document.getElementById(eyeId);

    if(password.type==="password"){

        password.type="text";
        eye.classList.remove("fa-eye");
        eye.classList.add("fa-eye-slash");

    }else{

        password.type="password";
        eye.classList.remove("fa-eye-slash");
        eye.classList.add("fa-eye");

    }

}

document.getElementById("eye1").addEventListener("click",function(){
    togglePassword("password","eye1");
});

document.getElementById("eye2").addEventListener("click",function(){
    togglePassword("confirm_password","eye2");
});

</script>

</body>
</html>