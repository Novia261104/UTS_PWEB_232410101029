<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
        }
        .login-image {
            flex: 1;
            background: rgb(255, 255, 255);
        }
        .login-image img {
            width: 50vh;
            height: 50vh;
            margin-left: 25%;
            margin-top: 25%;
        }

        .login-form {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #3D365C;
        }
        .login-container {
            width: 70%;
        }
        h1 {
            color: #f8f8f8;
            margin-bottom: 2rem;
            text-align: center;
            font-size: 24px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background: #ed94f7;
            color: rgb(54, 48, 48);
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @yield('content')
</body>
</html>
