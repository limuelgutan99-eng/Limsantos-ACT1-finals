<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACT Web Portal</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: linear-gradient(135deg, #eef2ff, #dbeafe);
            padding: 20px;
        }

        .container {
            width: 900px;
            max-width: 100%;
            display: grid;
            grid-template-columns: 1fr 1.2fr;
            background: white;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 35px #17255425;
        }

        .welcome {
            background: linear-gradient(150deg, #172554, #3157d5);
            color: white;
            padding: 45px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome h1 {
            font-size: 32px;
            margin-bottom: 15px;
        }

        .welcome p {
            line-height: 1.7;
            color: #dbeafe;
        }

        .semester {
            display: inline-block;
            background: #ffffff22;
            padding: 10px;
            border-radius: 8px;
            font-size: 13px;
            margin-top: 15px;
        }

        .form-area {
            padding: 40px;
        }

        .tabs {
            display: flex;
            background: #f1f5f9;
            padding: 5px;
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .tabs button {
            flex: 1;
            padding: 12px;
            border: none;
            cursor: pointer;
            border-radius: 6px;
            font-weight: bold;
            color: #64748b;
        }

        .tabs button.active {
            background: white;
            color: #3157d5;
        }

        h2 {
            color: #172554;
            margin-bottom: 8px;
        }

        .subtitle {
            color: #64748b;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .field {
            margin-bottom: 17px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-size: 13px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 13px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            outline: none;
        }

        input:focus {
            border-color: #3157d5;
        }

        .options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 12px;
            margin-bottom: 20px;
        }

        .options label {
            display: flex;
            align-items: center;
            gap: 5px;
            margin: 0;
        }

        .options input {
            width: auto;
        }

        a {
            color: #3157d5;
            text-decoration: none;
        }

        .submit {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 8px;
            background: #3157d5;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .submit:hover {
            background: #2446bd;
        }

        .hidden {
            display: none;
        }

        #message {
            font-size: 13px;
            margin-bottom: 15px;
        }

        footer {
            text-align: center;
            font-size: 11px;
            color: #94a3b8;
            margin-top: 20px;
        }

        @media(max-width: 650px) {
            .container {
                grid-template-columns: 1fr;
            }

            .welcome {
                padding: 25px;
            }

            .form-area {
                padding: 25px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <div class="welcome">
        <h2 style="color:white;">ACT WEB PORTAL</h2>

        <h1>Welcome Students!</h1>

        <p>
            Your learning space for Associate in Computer
            Technology. Learn, explore, and develop your
            skills in Web Applications.
        </p>

        <div class="semester">
            2nd Year ACT | CT-WA | 1st Semester
        </div>
    </div>

    <div class="form-area">

        <div class="tabs">
            <button id="loginTab" class="active"
                onclick="showForm('login')">Sign In</button>

            <button id="registerTab"
                onclick="showForm('register')">Register</button>
        </div>

        <p id="message"></p>
//loginform
        <form id="loginForm">

            <h2>Welcome Back!</h2>

            <p class="subtitle">
                Sign in to access your student account.
            </p>

            <div class="field">
                <label>Email Address</label>
                <input type="email" id="loginEmail"
                    placeholder="Enter your email" required>
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" id="loginPassword"
                    placeholder="Enter your password"
                    minlength="6" required>
            </div>

            <div class="options">
                <label>
                    <input type="checkbox">
                    Remember me
                </label>

                <a href="#" onclick="forgotPassword(event)">
                    Forgot Password?
                </a>
            </div>

            <button type="submit" class="submit">
                Sign In
            </button>

        </form>

//registerform
        <form id="registerForm" class="hidden">

            <h2>Create Account</h2>

            <p class="subtitle">
                Register your student account.
            </p>

            <div class="field">
                <label>Full Name</label>
                <input type="text" id="fullName"
                    placeholder="Enter your full name" required>
            </div>

            <div class="field">
                <label>Email Address</label>
                <input type="email" id="registerEmail"
                    placeholder="Enter your email" required>
            </div>

            <div class="field">
                <label>Password</label>
                <input type="password" id="registerPassword"
                    placeholder="Create a password"
                    minlength="6" required>
            </div>

            <div class="field">
                <label>Confirm Password</label>
                <input type="password" id="confirmPassword"
                    placeholder="Confirm your password"
                    minlength="6" required>
            </div>

            <button type="submit" class="submit">
                Create Account
            </button>

        </form>

        <footer>
            © 2026 ACT Web Portal<br>
            CT-WA | Web Applications | 1st Semester
        </footer>

    </div>
</div>

<script>

    function showForm(type) {
        const login = document.getElementById("loginForm");
        const register = document.getElementById("registerForm");
        const loginTab = document.getElementById("loginTab");
        const registerTab = document.getElementById("registerTab");

        document.getElementById("message").textContent = "";

        if (type === "login") {
            login.classList.remove("hidden");
            register.classList.add("hidden");

            loginTab.classList.add("active");
            registerTab.classList.remove("active");
        } else {
            login.classList.add("hidden");
            register.classList.remove("hidden");

            loginTab.classList.remove("active");
            registerTab.classList.add("active");
        }
    }

    document.getElementById("registerForm")
        .addEventListener("submit", function(event) {

        event.preventDefault();

        const password =
            document.getElementById("registerPassword").value;

        const confirm =
            document.getElementById("confirmPassword").value;

        if (password !== confirm) {
            document.getElementById("message").style.color = "red";
            document.getElementById("message").textContent =
                "Passwords do not match!";
            return;
        }

        document.getElementById("message").style.color = "green";
        document.getElementById("message").textContent =
            "Registration successful! (Demo only)";

        this.reset();
    });

    document.getElementById("loginForm")
        .addEventListener("submit", function(event) {

        event.preventDefault();

        document.getElementById("message").style.color = "green";
        document.getElementById("message").textContent =
            "Sign in submitted! (Demo only)";
    });

    function forgotPassword(event) {
        event.preventDefault();

        document.getElementById("message").style.color = "red";
        document.getElementById("message").textContent =
            "Password recovery is not yet connected.";
    }

</script>

</body>
</html>