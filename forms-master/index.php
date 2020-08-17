

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do List</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="clear">
                <i class="fa fa-refresh"></i>
            </div>
            <div id="date"></div>
            <h1>My To-do List</h1>
            <ul>
                <a href="../to do list - full/forms-master/login.php"><li>Login</li></a>
                <a href="../to do list - full/forms-master/Reg.php"><li>Register</li></a>
            </ul>
        </div>
        <div class="content">
            <ul id="list">
               <!-- 
                <li class="item">
                    <i class="fa fa-circle-thin co" job="complete" id="0"></i>
                    <p class="text">Drink Coffee</p>
                    <i class="fa fa-trash-o de" job="delete" id="0"></i> 
                </li> -->
            </ul>
        </div>
        <div class="add-to-do">
            <i class="fa fa-plus-circle"></i>
            <input type="text" id="input" placeholder="Add a to-do">
        </div>
    </div>
    <script src="js/app.js"></script>
</body>
</html>