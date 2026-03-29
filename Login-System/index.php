<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <style>
        body {
            margin: 0;
            font-family: Arial;
            height: 100vh;

            background: linear-gradient(to right, #b37ade, #7d9fd2);

            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 350px;
            padding: 35px;
            border-radius: 20px;
            text-align: center;

            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(12px);

            border: 2px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
        }
        h2 {
            color: white;
            margin-bottom: 30px;
            text-shadow: 2px 2px 5px rgba(0,0,0,0.4);
        }

        .input-box {
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 14px;
            border-radius: 15px;
            border: none;
            outline: none;
            font-size: 15px;

            background: #eee;
            box-shadow: inset 2px 2px 5px rgba(0,0,0,0.1),
                        inset -2px -2px 5px rgba(255,255,255,0.7);
        }
        .show-pass {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 8px;
            color: white;
            font-size: 14px;
        }

        .show-pass input {
            width: auto;
            cursor: pointer;
        }

        button {
            width: 100%;
            padding: 14px;
            margin-top: 20px;
            border-radius: 15px;
            border: none;

            background-color: #FFD54F;
            font-size: 16px;
            cursor: pointer;

            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.98);
        }
    </style>

</head>
<body>

<div class="container">

    <h2>Login</h2>

    <form action="login.php" method="POST">

        <div class="input-box">
            <input type="text" name="userId" placeholder="Enter User ID" required>
        </div>

        <div class="input-box">
            <input type="password" id="password" name="password" placeholder="Enter Password" required>
            <div class="show-pass">
                <input type="checkbox" onclick="togglePassword()">
                <label>Show Password</label>
            </div>
        </div>

        <button type="submit">Login</button>

    </form>

</div>

<script>
function togglePassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

</body>
</html>