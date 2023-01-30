<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Subpagina </title>
</head>
<body>
    <main>
        <nav>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <div class="space_between">
                    <li><div class="subnav">
                            <button class="subnavbtn">Niels</button>
                            <div class="subnav-content">
                                <a href="../Niels/Subpagina1.php">Subpagina1</a>
                            </div>
                        </div></li>
                    <li><div class="subnav">
                            <button class="subnavbtn">Lorenzo</button>
                            <div class="subnav-content">
                                <a href="../Lorenzo/Subpagina2.php">Subpagina2</a>
                            </div>
                        </div></li> 
                    <li><div class="subnav">
                            <button class="subnavbtn">Maohua</button>
                            <div class="subnav-content">
                                <a href="../Maohua/Subpagina3.php">Subpagina3</a>
                            </div>
                        </div></li>
                    <li><div class="subnav">
                            <button class="subnavbtn">Milan</button>
                                <div class="subnav-content">
                                    <a href="../Milan/Subpagina4.html">Subpagina4</a>
                                </div>
                        </div>
                    </li>
                </div>
            </ul>
        </nav>
        <section>
            <h1>Subpagina 3</h1>
            <?php
                print(date('l jS \of F Y h:i:s A'));
            ?>
        </section>
    </main>
</body>
</html>