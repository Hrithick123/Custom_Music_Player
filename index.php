<!DOCTYPE html>
<html>

<head>
    <title>HK's Music Player</title>
</head>

<link href="
https://cdn.jsdelivr.net/npm/gotham-fonts@1.0.3/css/gotham-rounded.min.css
" rel="stylesheet">

<input type="radio" name="optionScreen" id="SignIn" hidden checked>
<input type="radio" name="optionScreen" id="SignUp" hidden>

<section>
    <div id="logo">
        <img src="hk.png" alt="Hrithify-Logo" width="50">
        <h1>Hrithify</h1>
    </div>

    <nav>
        <label for="SignIn">Sign In</label>
        <label for="SignUp">Sign Up</label>
    </nav>

    <form action="login.php" method="POST" id="SignInFormData">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        
        <button type="submit" name="login" title="Sign In">Sign In</button>
    </form>

    <form action="register.php" method="POST" id="SignUpFormData">
        <input type="text" name="name" placeholder="Name Complete">
        <input type="email" name="email" placeholder="E-mail">
        <input type="password" name="new_password" placeholder="New Password">
        
        <button type="submit" name="register" title="Sign Up">Sign Up</button>
    </form>


</section>

<style>
    html {
        color: #eee;
    }

    * {
        font-family: "Gotham Rounded Book", "sans-serif";
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        min-height: 560px;
        height: 100vh;
        display: grid;
        place-content: center;
        background: #eee;
    }

    section {
        min-width: 450px;
        min-height: 520px;
        padding: 15px;
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        border-radius: 10px;
        background: #2c2d31;
    }

    #logo {
        justify-content: center;
        display: flex;
        align-items: center;
        margin: 30px;
    }

    img {
        margin-right: 10px;
    }

    nav {
        margin: 20px;
        display: flex;
        justify-content: center;
    }

    nav label {
        text-transform: uppercase;
        cursor: pointer;
    }

    nav label:first-child {
        margin-right: 20px;
    }

    form {
        padding-inline: 60px;
        display: none;
        flex-direction: column;
    }

    #SignIn:checked~section #SignInFormData {
        display: flex;
    }

    #SignIn:checked~section nav label:first-child {
        margin-bottom: -2px;
        border-bottom: 2px solid #1ed760;
    }

    #SignUp:checked~section #SignUpFormData {
        display: flex;
    }

    #SignUp:checked~section nav label:last-child {
        margin-bottom: -2px;
        border-bottom: 2px solid #1ed760;
    }

    input,
    button {
        border-radius: 50px;
        padding: 15px 20px;
        margin-bottom: 15px;
        border: none;
        outline: none;
        font-size: 16px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    button {
        background: #1ed760;
        text-transform: uppercase;
        font-weight: bold;
        color: #fff;
        cursor: pointer;
        margin-top: 5px;
    }

    form span {
        margin-left: 20px;
    }

    form span label {
        font-size: 14px;
        text-transform: lowercase;
    }

    input[type="checkbox"] {
        cursor: pointer;
        accent-color: #3498db;
    }

    a {
        color: #797a7e;
        font-weight: bold;
        text-decoration: none;
        margin-top: 30px;
        display: flex;
        justify-content: center;
        cursor: pointer;
    }
</style>

</html>