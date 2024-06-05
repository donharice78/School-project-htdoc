<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
    <title>Sign in</title>

</head>

<body>

    <h1>Home</h1>

    <?php if (isset($_SESSION["user_id"])): ?>

        <p>Hello <?= htmlspecialchars($user["name"]) ?></p>
        <p><a href="logout.php">Log Out</a></p>


        <?php else: ?>
           <p><a href="signIn.php">login</a> or <a href="signUp.html">signup</a></p> 
    
    <?php endif; ?>



</body>


</html>