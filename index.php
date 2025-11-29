
<!--
    Fiona Eliah L. Uy
    WD-201
    November 29, 2025 
-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles.css">
        <title>Macaroon Co</title>
    </head>

    <body>
        <header>
           <h1 class="mainheader"><a href="index.php">Macaroon Co. </a></h1>
            <nav class="navbar">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="order.php">Order</a></li>
            </ul>
          </nav>
        </header>

         <main class="welcome-message">
            <p> Welcome to Macaroon Co. Our goal is to create high-quality macaroons that are both beautiful and delicious, made with carefully selected ingredients and thoughtful craftsmanship. We’re glad you’re here, and we hope our treats brighten your day! </p>
        </main>
    </body>

</html>

<?php include 'header.php'; ?>

<!-- LOOP -->
<?php $flavors = ["Classic", "Vanilla", "Chocolate", "Coffee", "Strawberry", "Matcha"];

echo "<h2>Classic Macaroon Flavors</h2>";
echo "<ul>";

foreach ($flavors as $flavor) {
    echo "<li>$flavor</li>";
}

echo "</ul>"; ?>

<!-- CONDITIONAL STATEMENTS -->
<?php 
    $Macaroons = 'Classic';
    switch($Macaroons) {
        case 'Classic':
            break;
        case 'Vanilla':
            echo "Vanilla Flavored Macaroons";
            break;
        case 'Chocolate':
            echo "Chocolate Flavored Macaroons";
            break;    
        case 'Coffee':
            echo "Coffee Flavored Mcaroons";
            break;
        case 'Strawberry':
            echo "Strawberry Flavored Macaroons";
            break;
        case 'Matcha':
            echo "Matcha Flavored Macaroons";
            break;
        default:
            echo "No other flavors available";        
    }
?>

<?php $flavors = ["Espresso", "Pistachio", "Blueberry", "Lemon", "Red velvet", "Green Tea"];

echo "<h2>Special Macaroon Flavors</h2>";
echo "<ul>";

foreach ($flavors as $flavor) {
    echo "<li>$flavor</li>";
}

echo "</ul>"; ?>

<!-- CONDITIONAL STATEMENTS -->
<?php 
    $Macaroons = 'Espresso';
    switch($Macaroons) {
        case 'Espresso':
            break;
        case 'Pistachio':
            echo "Pistachio Flavored Macaroons";
            break;
        case 'Blueberry':
            echo "Blueberry Flavored Macaroons";
            break;    
        case 'Lemon':
            echo "Lemon Flavored Mcaroons";
            break;
        case 'Red velvet':
            echo "Red velvet Flavored Macaroons";
            break;
        case 'Green Tea':
            echo "Green Tea Flavored Macaroons";
            break;
        default:
            echo "No other special flavors available";        
    }
?>


<?php $Pieces = ["6 pieces", "12 pieces", "18 pieces", "24 pieces", "30 pieces", "36 pieces"];

echo "<h2>Assorted flavors Pack</h2>";
echo "<ul>";

foreach ($Pieces as $Piece) {
    echo "<li>$Piece</li>";
}

echo "</ul>"; ?>

<!-- CONDITIONAL STATEMENTS -->
<?php 
    $Pieces = '6';
    switch($Pieces) {
        case '6':
            break;
        case '12':
            echo "Assorted Flavored Macaroons";
            break;
        case '18':
            echo "Assorted Flavored Macaroons";
            break;    
        case '24':
            echo "Assorted Flavored Macaroons";
            break;
        case '30':
            echo "Assorted Flavored Macaroons";
            break;
        case '36':
            echo "Assorted Flavored Macaroons";
            break;
        default:
            echo "No other Assorted flavors pack available";        
    }
?>



<?php include 'footer.php'; ?>