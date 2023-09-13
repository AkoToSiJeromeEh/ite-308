<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web System And Technologies</title>
    <link rel="stylesheet" href="./orderSum.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
    <link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@700&family=Fraunces:wght@700&family=Lexend+Deca&family=Libre+Franklin:wght@300;600;700&family=Manrope:wght@300;400;800&family=Montserrat:wght@300;400;500;700;800&family=Open+Sans&family=Outfit:wght@400;700&family=Poppins:wght@400;600&family=Raleway:wght@400;500;700&family=Red+Hat+Display:wght@500;700;900&display=swap" rel="stylesheet">
</head>
<body>
<div class="main-container">
        <audio src="" autoplay>
            <source src="./Poem of the Clouds - Beautiful Piano Music for Relaxation｜BigRicePiano.mp3" type="mp3" >
        </audio>
       <div class="header-nav">
        <header>
            <div>
              <h2>   <i class="fa-solid fa-shop"></i>  Jeje One Stop Shop</h2>
            </div>
            <div class="header-description">
                <p>Your Ultimate One Stop Shop</p>
            </div>
        </header>
        <nav>

            <div class="navlinks">
                <ul>
                    <li>Home</li>
                    <li>Products</li>
                    <li>Contacts</li>
                    <li>About </li>
                </ul>
            </div>
        </nav>
       </div>
       <main class="main-contents">
<div class="container-wrapper">
    <div class="welcome-message">
    <h2>
     Welcome <?php echo $_POST["CustomerName"]; ?>
     </h2>
     <p> <i class="fa-solid fa-ticket"></i> Your Order Summary :</p>
    </div>
     <div class="person-details">
        <ul>
            <li>Customer Name : <?php echo $_POST["CustomerName"]; ?></li>
            <li> Age : <?php echo $_POST["Age"]; ?></li>
            <li>Male : <?php echo $_POST["Gender"]; ?></li>
            <li>Address : <?php echo $_POST["address"]; ?></li>
            <li>Cinema :  <?php echo $_POST["cinema"]; ?></li>
            <li>Add Ons : <?php echo $_POST["addOns"]; ?></li></li>
        </ul>
     </div>
</div>
<div class="iframe">
        <iframe width="550" height="350" src="https://www.youtube.com/embed/ghSM8YPG8BA?si=hBNOnoKkRv2PtRaL" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
       </main>
</div>

</body>
</html>
