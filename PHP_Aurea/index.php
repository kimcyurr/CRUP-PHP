<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activity</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        .container
        {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        form{
            display: grid;
            flex-direction: column;
            place-content: center;
            width: 500px;
            height: 300px;
            border: 1px solid  rgba(0,0,0,0.2);
            border-radius: 8px;
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url(data:image/jpeg;base64,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);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            align-items: center;
        }
        .card
        {
            border: 1px solid rgba(255,255,255,0.2);
            border-radius: 8px;
            width: 400px;
            display: grid;
            place-content: center;
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            height: 250px;
        }
        h1{
            text-align: center;
            font-family: 'Poppins';
        }
        label{
            color: #f6f6f6;
            font-family: 'Poppins';
        }
        button{
            margin-top: 10px;
            border: none;
            border-radius: 8px;
          
            
        }
        input{
            border-radius: 6px;
            border: 1px #f6f6f6;
            height: 20px;
            outline: none;
            background: transparent;
            color: white;
        }
        input:focus{
            border: 2px solid #f6f6f6;
        }
        
    </style>
</head>
<body>
    <div class="container">
    <form action="login.php" method="get"> 
        <div class="card">
            <h1>Login</h1>
            <div class="u">
            <label for="username">Username</label><br>
            <input type="text" name="username" id="username" autofocus>
            </div><br>
            <div class="pass">
            <label for="password">Password</label><br>
            <input type="password" id="password" name="password"><br>
            <button>Login</button><br>
        </div>
    </form>
    </div>
</body>
</html>

