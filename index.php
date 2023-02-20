<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../project3/style.css">
    <title>Subpagina </title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="../project3/index.php">Home</a></li>
                <div class="space_between">
                    <li><div class="subnav">
                            <button class="subnavbtn">Niels</button>
                            <div class="subnav-content">
                                <a href="../project3/Niels/Subpagina1.php">Subpagina1</a>
                            </div>
                        </div></li>
                    <li><div class="subnav">
                            <button class="subnavbtn">Lorenzo</button>
                            <div class="subnav-content">
                                <a href="../project3/Lorenzo/Subpagina2.php">Subpagina2</a>
                            </div>
                        </div></li> 
                    <li><div class="subnav">
                            <button class="subnavbtn">Maohua</button>
                            <div class="subnav-content">
                                <a href="../project3/Maohua/Subpagina3.php">Subpagina3</a>
                            </div>
                        </div></li>
                    <li><div class="subnav">
                            <button class="subnavbtn">Milan</button>
                                <div class="subnav-content">
                                    <a href="../project3/Milan/Subpagina4.php">Subpagina4</a>
                                </div>
                        </div>
                    </li>
                </div>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h1>Homepagina</h1>
        </section>
        <article>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam quo ipsam voluptatibus id magnam nemo deserunt, dolorum illum facere! Eum dolor animi blanditiis vel dolore beatae eligendi fugiat amet facilis.</p>
            <a href="https://www.aboutyou.nl/h/retourneren-terugbetaling--360003951139">Return Policy van About You:</a>
        </article>


        <img src="http://via.placeholder.com/640x360" alt="slide" width="1520" height="300" class="slide"  style="text-align:center">

        
<br><br><br>
        <h2 style="text-align:center">Top categorieën</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <h3>Card 1</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 2</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 3</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Card 4</h3>
      <p>Some text</p>
      <p>Some text</p>
    </div>
  </div>
</div>

<br><br><br>

<h2 style="text-align:center">Product Card</h2>

<div class="card">
  <img src="https://raw.githubusercontent.com/julien-gargot/images-placeholder/master/placeholder-portrait.png" alt="product" style="width:10%">
  <h1>Tailored Jeans</h1>
  <p class="price">$19.99</p>
  <p>Some text about the jeans. Super slim and comfy lorem ipsum lorem jeansum. Lorem jeamsun denim lorem jeansum.</p>
  <p><button>Add to Cart</button></p>
</div>


<div>
<br><br>
<h1 style="text-align:center">Nieuwsbrief</h1>
<p style="text-align:center">Lorem ipsum Lorem ipsum Lorem ipsum</p>
</div>


<br><br><br><br><br><br><br><br><br>

    </main>
    <?php
        include 'footer.php';
    ?>
</body>
</html>
