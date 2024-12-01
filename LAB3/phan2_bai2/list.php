<?php
    include 'db_connection.php';
    $query = "SELECT id, name, price, image FROM products";
    $result = $connection->query($query);

    ?>
<!DOCTYPE html>
<html lang="vi">

<head>
    <link rel="stylesheet" href="style.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>Bai 1</title>
</head>

<body>
    <div class="container">
        <header>
            <div class="left">
                <p>Site Title</p>
                <a href="https://www.google.com/">Categories</a>|
                <a href="https://www.google.com/">Contact us</a>|
                <a href="https://www.google.com/">Follow us</a>|
            </div>
            <input type="text" name="username" placeholder="Search">
        </header>
        <main>
            <aside>
                <h1>Product List</h1>
                <div class="product-list">
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="product-item">
                            <img src="<?php echo htmlspecialchars($row['image']); ?>" alt="<?php echo htmlspecialchars($row['name']); ?>">
                            <h2><?php echo htmlspecialchars($row['name']); ?></h2>
                            <p>Price: <?php echo htmlspecialchars($row['price']); ?> VND</p>
                            <a href="detail.php?id=<?php echo $row['id']; ?>">View Details</a>
                        </div>
                    <?php endwhile; ?>
                </div>
</body>

</html>

<?php
$connection->close();
?>
<div class="category">
    <p>Category</p>
    Item 1...<br>
    Item 2...<br>
    Item 3...<br>
    Item 4...<br>
    Item 5...<br>
</div>
<div class="products">
    <p>Top Products</p>
    Item 1...<br>
    Item 2...<br>
    Item 3...<br>
    Item 4...<br>
    Item 5...<br>
</div>
</aside>
<article>
    <p id="how">Top Products</p>
    <div class="row1">
        <div class="img1 content">
            <img src="son.png" alt="mylogo">
            <p>Price: 10$</p>
            <button type="button">Buy Now</button>
        </div>
        <div class="img2 content">
            <img src="son.png" alt="mylogo">
            <p>Price: 10$</p>
            <button type="button">Buy Now</button>
        </div>
        <div class="img3 content">
            <img src="son.png" alt="mylogo">
            <p>Price: 10$</p>
            <button type="button">Buy Now</button>
        </div>
    </div>
    <div class="row2">
        <div class="img4 content">
            <img src="son.png" alt="mylogo">
            <p>Price: 10$</p>
            <button type="button">Buy Now</button>
        </div>
        <div class="img5 content">
            <img src="son.png" alt="mylogo">
            <p>Price: 10$</p>
            <button type="button">Buy Now</button>
        </div>
        <div class="img6 content">
            <img src="son.png" alt="mylogo">
            <p>Price: 10$</p>
            <button type="button">Buy Now</button>
        </div>
    </div>
    <div class="page">
        <a href="https://www.google.com/">prev</a>
        <a href="https://www.google.com/">1</a>
        <a href="https://www.google.com/">2</a>
        <a href="https://www.google.com/">3</a>
        <a href="https://www.google.com/">next</a>
    </div>
</article>
<div class="blank">
    160x600
</div>
</main>
</div>
<footer>
    Footer Information ...
    <a href="https://www.google.com/">Link 1</a>|
    <a href="https://www.google.com/">Link 2</a>|
    <a href="https://www.google.com/">Link 3</a>
</footer>
</body>

</html>