<style>
.custom-main-content {
    margin-left: 0px; /* Space for the sidebar */
    width: 100%;
    padding: 100px;
    padding-top:20px;
    background-color: #0d1017;
    min-height: 100vh;
    padding-bottom:0px;
}
.login-container {
    width: 600px;
    padding: 20px;
    background-color: #0d1017;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 100px auto;
    color:white;
    margin-top:0;
}

h2 {
    text-align: center;
    margin-bottom: 20px;
    color: white;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="email"], input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #008cba;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 16px;
}

button:hover {
    background-color: #005f75;
}

.links {
    text-align: center;
    margin-top: 10px;
}

.links a {
    color: #008cba;
    text-decoration: none;
}

.links a:hover {
    text-decoration: underline;
}

div {
    margin-bottom: 0px;
}
.login-container img{
    margin-bottom:100px;
}
</style>

<div class="custom-main-content">
<div class="login-container">
    <img src="green-logo.png" width="500px" alt="">
    <h2>Login</h2>
    <form id="loginForm" action="dashboard.php" method="POST">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter password" required>

        <div>
            <input type="checkbox" id="showPassword" onclick="togglePassword()"> Show Password
        </div>

        <button type="submit">Sign In</button>

        <div class="links">
            <a href="#">Forgot Username / Password?</a><br>
            <span>Don't have an account? <a href="#">Sign up</a></span>
        </div>
    </form>
</div>
</div>

<script>
    function togglePassword() {
    const password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}
</script>