<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('header')
</head>
<body>
    <h2> The Employee Form </h2>
    <form action="" method="POST">

       <label>Employee ID: </label>
       <input type = "text" name="emp_ID">
       <br>
       <label>Employee Name: </label>
       <input type = "text" id = "name" name = "emp_name">
<br>
        <label>Employee Email: </label>
       <input type = "email" id = "email" name = "emp_email">
<br>
        <label>Employee Password: </label>
       <input type = "password" id = "password" name = "emp_password"><br>


       <button type="submit">Submit<button>
    </form>
    
</body>
</html>