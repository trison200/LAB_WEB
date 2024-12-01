<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product List</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Product List</h1>
    <div id="product-list" class="product-list"></div>

    <script>
        $(document).ready(function() {
            $.ajax({
                url: 'fetch_products.php',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    let productList = $('#product-list');
                    data.forEach(function(product) {
                        productList.append(`
                            <div class="product-item">
                                <img src="${product.image}" alt="${product.name}">
                                <h2>${product.name}</h2>
                                <p>Price: ${product.price} VND</p>
                                <a href="detail.php?id=${product.id}">View Details</a>
                            </div>
                        `);
                    });
                },
                error: function() {
                    alert('Failed to load products.');
                }
            });
        });
    </script>
</body>
</html>