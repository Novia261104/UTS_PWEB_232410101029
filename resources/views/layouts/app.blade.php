<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyAssignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        .navbar {
            background-color: #3D365C;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #ddd;
        }
        .logo {
            margin-left: 5%;
        }
        .logo h2 {
            color: #e9ecef
        }
        .navbar-section {
            margin-right: 5%;
            margin-top: 1.5rem;
        }
        .navbar-section a {
            text-decoration: none;
            color: #fefefe;
            font-weight: bold;
            padding: 40px;

        }
        .content {
            flex: 1;
            padding: 2rem;
        }
        .footer {
            background-color: #3D365C;
            padding: 1rem;
            text-align: center;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-around;
        }

        .footer h4{
            color: #fefefe
        }

        .footer a {
            text-decoration: none;
            color: antiquewhite;
        }
        .task-categories {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }
        .task-categories a {
            padding: 0.5rem 1rem;
            background-color: #e9ecef;
            border-radius: 4px;
            text-decoration: none;
            font-weight: 600;
            color: grey;
        }
        .task-categories .active {
            background: yellow;
            color: rgb(107, 107, 10);
        }
        .task-list {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 2rem;
        }
        .task-card {
            border: 2px solid #ddd;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .task-list :hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .login-container {
            max-width: 400px;
            margin: 2rem auto;
            padding: 2rem;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .login-container input {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
        }
        .login-container button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
        }
        .profile-form {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-control {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
            background: #f9f9f9;
        }
        .btn-edit {
            background: #4CAF50;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="content">
        @yield('content')
    </div>

    @include('components.footer')
</body>
</html>
