<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="test3.css">
    <title>Subpagina </title>
</head>
<body>
    <main>
        <?php
            include '../nav.php';
        ?>
        <section>
            <h1>Subpagina 3</h1>
            <h2>HTML Forms</h2>
                <form action="action.php" method="post">
                    <label for="name">Username:</label><br>
                        <input type="text" id="name" name="name" placeholder="Name" required><br>
                    <label for="pass">Password:</label><br>
                        <input type="password" id="pass" name="pass" placeholder="Password" required><br><br>
                    <input type="submit" value="submit">
                </form>
        </section>
    </main>
</body>
</html>