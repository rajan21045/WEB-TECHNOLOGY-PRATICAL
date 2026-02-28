<?php
session_start();

/* =========================
   DATABASE CONNECTION
========================= */
$conn = new mysqli("localhost", "root", "*rajan12345#", "ajax_login");
if ($conn->connect_error) {
    die("DB Connection failed");
}

/* =========================
   AJAX LOGIN HANDLER
========================= */
if(isset($_POST['action']) && $_POST['action'] == "login"){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=? AND password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0){
        $_SESSION['user'] = $username;
        echo "success";
    } else {
        echo "Invalid login credentials";
    }
    exit();
}

/* =========================
   LOGOUT HANDLER
========================= */
if(isset($_GET['logout'])){
    session_destroy();
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>AJAX Login System</title>
    <style>
        body{
            font-family: Arial;
            background:#f2f2f2;
        }
        .box{
            width:320px;
            margin:120px auto;
            background:white;
            padding:20px;
            border-radius:8px;
            box-shadow:0 0 10px rgba(0,0,0,0.2);
            text-align:center;
        }
        input{
            width:100%;
            padding:10px;
            margin:8px 0;
        }
        button{
            width:100%;
            padding:10px;
            background:#007bff;
            color:white;
            border:none;
            cursor:pointer;
        }
        #msg{
            color:red;
            margin-top:10px;
        }
        a{
            text-decoration:none;
            color:#007bff;
        }
    </style>
</head>
<body>

<?php if(isset($_SESSION['user'])): ?>
    <!-- DASHBOARD -->
    <div class="box">
        <h2>Welcome, <?php echo $_SESSION['user']; ?> 🎉</h2>
        <p>You are logged in using AJAX.</p>
        <a href="?logout=true">Logout</a>
    </div>

<?php else: ?>
    <!-- LOGIN FORM -->
    <div class="box">
        <h2>AJAX Login</h2>
        <input type="text" id="username" placeholder="Username">
        <input type="password" id="password" placeholder="Password">
        <button onclick="login()">Login</button>
        <div id="msg"></div>
    </div>

<script>
function login(){
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "login.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    xhr.onload = function(){
        if(this.responseText === "success"){
            location.reload(); // reload to show dashboard
        } else {
            document.getElementById("msg").innerHTML = this.responseText;
        }
    }

    xhr.send("action=login&username="+username+"&password="+password);
}
</script>

<?php endif; ?>

</body>
</html>