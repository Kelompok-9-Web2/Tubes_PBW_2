<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <style>
        /* General Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #FFFAF0; /* Background theme oranye kuliner */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        /* Container */
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
        }

        .login-box {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 350px;
        }

        .login-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #FF6F00; /* Oranye */
        }

        /* Input Group */
        .input-group {
            margin-bottom: 20px;
            text-align: left;
        }

        .input-group label {
            display: block;
            font-size: 14px;
            color: #333;
            margin-bottom: 5px;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 14px;
        }

        /* Button */
        .login-button {
            background-color: #FF6F00; /* Oranye */
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #e65c00; /* Oranye lebih gelap */
        }

        /* Error Message */
        #errorMessage {
            color: red;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <h2 class="login-title">Admin Log in</h2>
            <form id="loginForm">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                </div>
                <button type="submit" class="login-button">Log in</button>
                <p id="errorMessage"></p>
            </form>
        </div>
    </div>
    <script>
        // Static admin credentials
        const adminUsername = "admin";
        const adminPassword = "admin123";

        // Handle login form submission
        document.getElementById('loginForm').addEventListener('submit', function (e) {
            e.preventDefault();

            // Get input values
            const username = document.getElementById('username').value;
            const password = document.getElementById('password').value;

            // Validate credentials
            if (username === adminUsername && password === adminPassword) {
                alert("Login successful!");
                window.location.href = "/add_menu"; // Redirect to add_menu page
            } else {
                document.getElementById('errorMessage').innerText = "Invalid username or password!";
            }
        });
    </script>
</body>
</html>
