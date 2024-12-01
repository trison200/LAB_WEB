<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Detail</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Product Detail</h1>
    <div id="product-detail" class="product-detail"></div>
    <a href="list.php">Back to Product List</a>

    <script>
        $(document).ready(function() {
            const urlParams = new URLSearchParams(window.location.search);
            const productId = urlParams.get('id');

            $.ajax({
                url: 'fetch_detail.php',
                method: 'GET',
                data: { id: productId },
                dataType: 'json',
                success: function(product) {
                    let productDetail = $('#product-detail');
                    productDetail.html(`
                        <img src="${product.image}" alt="${product.name}">
                        <h2>${product.name}</h2>
                        <p>${product.description}</p>
                        <p>Price: ${product.price} VND</p>
                    `);
                },
                error: function() {
                    alert('Failed to load product details.');
                }
            });
        });
    </script>
</body>
</html>