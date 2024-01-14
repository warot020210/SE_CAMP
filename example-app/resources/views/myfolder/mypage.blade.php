<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            margin: 0;
            padding: 0;
            color: #ffffff;
            background-color: #383838;

            background-image: url('https://images.unsplash.com/photo-1465628976988-fe43bda15798?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
            background-size: cover;
        }
        h1{
            margin-top:50px;
            text-align: center;
            padding: 0;
        }

        .box {
            position: absolute;
            top:20%;
            left: 42.5%;
            transform: translate(-50px,-50px);
        }
        #btn_submit {
            padding: 10px;
            margin-left: -5px;
            border: none;
            border-radius: 0 25px 25px 0;
            background-color: #0077ff;
            height: 70px;
            font-size: 20px;
            font-weight: bold;
            box-shadow: 0px 0px 15px 5px rgba(255, 255, 255, 0.1);
        }
        #input_number {
            padding: 10px;
            border-radius: 25px 0 0 25px;
            border: none;
            outline: none;
            background-color: #F2F2F2;
            width: 200px;
            height: 50px;
            font-size: 20px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
        }
        #btn_submit:hover {
            background-color: #0077ff;
            color: #ffffff;
            cursor: pointer;
            transition: 0.5s;
            border-radius: 0px 0 0 0px;
        }
    </style>
</head>
<body>
    <h1>Multiplication Table</h1>
    <div class="box">
        <form method="post" action="/my-route">
            @csrf
            <input type="number" placeholder=" select number" name="myinput" id="input_number">
            <button type="submit" id="btn_submit">Generate Table</button>
        </form>
    </div>
</body>
</html>
