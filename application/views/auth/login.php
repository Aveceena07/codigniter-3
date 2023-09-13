<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://binusasmg.sch.id/ppdb/logobinusa.png" type="image/x-icon">
</head>
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
    background-color: #327ACF;   
    background-repeat: no-repeat;
    background-size: cover;
}

section {
	min-width: 450px;
	min-height: 520px;
	padding: 15px;
	box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
	border-radius: 10px;
    background-color: white;
}

#logo {
	justify-content: center;
	display: flex;
	align-items: center;
	margin: 30px;
}

nav {
	margin: 20px;
	display: flex;
	justify-content: center;
}

nav label {
	text-transform: uppercase;
	cursor: pointer;
    color: black;
}

nav label:first-child {
	margin-right: 20px;
}

form {
	padding-inline: 60px;
	display: none;
	flex-direction: column;
}

#SignIn:checked ~ section #SignInFormData {
	display: flex;
}

#SignIn:checked ~ section nav label:first-child {
	margin-bottom: -2px;
	border-bottom: 2px solid black;
}

#SignUp:checked ~ section #SignUpFormData {
	display: flex;
}

#SignUp:checked ~ section nav label:last-child {
	margin-bottom: -2px;
	border-bottom: 2px solid black;
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
	background: #3B3F44;
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
<body>
        <link href="
        https://cdn.jsdelivr.net/npm/gotham-fonts@1.0.3/css/gotham-rounded.min.css
        " rel="stylesheet">
        <input type="radio" name="optionScreen" id="SignIn" hidden checked>
        <section>
            <div id="logo">
                <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="Spotify-Logo" width="200">
            </div>
            <nav>
                <label for="SignUp">Login</label>
            </nav>
            <form action="" class="mt-5" id="SignInFormData">
                <input type="text" id="email" placeholder="Email">
                <input type="password" id="password" placeholder="Password">
                <button type="button" class="mt-3" title="Sing In">Login</button>
            </form>
        </section>
</body>
</html>