<html>

<head>
    <title>Form Screen Center</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100%;
        }
        .tengah {
            padding: 1rem 0;
            width: 400px;
            height: fit-content;
            border-radius: 2rem;
            background-color: #f3f4f6;
            box-shadow: 0px 0px 3px rgba(0, 0, 0, .25);
        }
    </style>
</head>

<body>
    <p align="center">
        <font face="verdana" size="4" color="black"><b>Login Pengguna</b></font>
    </p>
    <div align="center" class="tengah">
        <form action="login.php" method="get">
            <font face="verdana" size="2" color="black">
                <p>Username</p>
                <input type="text" name="username" style="margin-top: .2rem; background:#f3f4f6; outline: none; border: 1px solid black; border-radius: 0.3rem " /></br>
                <p>Password</p>
                <input type="password" style="margin-top: .2rem; background:#f3f4f6; outline: none; border: 1px solid black; border-radius: 0.3rem " name="psw" /></br></br>
                <input type="submit" value="Login" />
            </font>
        </form>
    </div>
</body>

</html>