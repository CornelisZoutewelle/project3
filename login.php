<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <header>
        <?php
            include 'index_nav.php';
        ?>
    </header>
    <main>
        <section>
            <form action="#" method="post">
                <label>Username</label>
                    <input type="text" name="username"><br>
                <label>Password</label>
                    <input type="password" name="password"><br>
                <input type="submit" name="inloggen" value="Inloggen">
            </form>
        </section>
    </main>
        <?php
            include 'footer.php';
        ?>
</body>
</html>
