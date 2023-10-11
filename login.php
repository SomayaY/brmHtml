<!DOCTYPE html>

<?php

session_start();

$members = [

    [
        'user' => "Ahmed",
        'password' => '34fd@6'
    ],
    [
        'user' => "sara",
        'password' => '5tjj@lol'
    ],
    [
        'user' => "lena",
        'password' => 'hges'
    ],
    [
        'user' => "omar",
        'password' => 'omar23hg$'
    ]
];


if (isset($_POST["login"])) {
    if (isset($_POST['UserName']) && isset($_POST['Password'])) {

        foreach ($members as $index => $member) {
            $user = $_POST['UserName'];
            $pass = $_POST['Password'];
            if ($user == $member['user'] && $pass == $member['password']) {
                $_SESSION['UserName'] = $user;
                header("Location: index.php");
                exit;
            }
        }
    }
}


?>



<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Robot Website</title>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-valus">
                <form action="" method="post">
                    <h2>Login Page</h2>
                    <div class="input-box"><ion-icon name="person-outline"></ion-icon><br><input type="text" name="UserName" required /></div>
                    <div class="input-box"><ion-icon name="lock-closed-outline"></ion-icon><br><input type="password" name="Password" required /></div>
                    <input type="submit" value="Login" name="login" id="log" />
                </form>
            </div>
        </div>
    </section>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>