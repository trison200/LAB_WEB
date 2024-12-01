<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <title>bai 2 phan 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php
        /*Connect database*/
		$servername = "localhost";
		$username = "root";
		$password = "";

		// Create connection
		$DBConnect = mysqli_connect($servername, $username, $password);

		// Check connection
		if (!$DBConnect) {
  			die("Connection failed: " . mysqli_connect_error());
		}

        // Select database
        $shop_DB = mysqli_select_db ($DBConnect, "shop");
        if (!$shop_DB) {
            die("Cannot use database" . mysqli_error($DBConnect));
        }
        
	?>
<div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Site Title</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Follow us</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-2">
        <div class="row mx-0 w-100">
            <div class="col-2">
                <ul class="list-unstyled ps-0">
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#home-collapse" aria-expanded="false">
                            Category
                        </button>
                        <div class="collapse show" id="home-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 1...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 2...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 3...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 4...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 5...</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="mb-1">
                        <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed"
                            data-bs-toggle="collapse" data-bs-target="#dashboard-collapse" aria-expanded="false">
                            Top Products
                        </button>
                        <div class="collapse" id="dashboard-collapse">
                            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 1...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 2...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 3...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 4...</a>
                                </li>
                                <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded">Item 5...</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="main">
                    <div class="productimg">
                        <?php 
                            $id = isset($_GET['id']) && is_numeric($_GET['id']) ? $_GET['id'] : 1;
                            $query = "SELECT id, name, price, description, image FROM products WHERE id = {$id}";
                            $product_info = mysqli_query($DBConnect, $query);

                            if (!$product_info) {
                                $message = 'Invalid query: ' . mysqli_error() . "<br>";
                                $message .= 'Whole query: ' . $query;
                                die($message);
                            }
                            $product_info = mysqli_fetch_assoc($product_info);

                        ?>
                        <?php
                            echo "<div class='bigimg'><img src='{$product_info['image']}' alt='Product image'></div>";
                        ?>
                        
                    </div>
                    <div class="productinfo">
                        <?php 
                            echo "<div class='title'>{$product_info['name']}</div>"; 
                            echo "<div class='price'>{$product_info['price']} VND</div>"; 
                        ?>
                        
                        <fieldset>
                            <legend>Summary</legend>
                            <p>
                                This is a simple paragrah which summarizes description of product
                            </p>
                        </fieldset>
                        <form>
                            <input type="button" value="MUA">
                        </form>
                    </div>
                </div>
                <fieldset>
                    <legend>Description</legend>
                    <p>
                           <?php echo $product_info['description']; ?>
                    </p>
                </fieldset>
                 

            
            <!-- Advertisement banner-->
            <div class="ad">
                <a href=""><img src="anh3.webp" alt="Advertises banner"></a>
            </div>

    <?php
        mysqli_close($DBConnect);
	?>
            <div class="col-2">
                <img src="color.jpg" alt="mycolor" width="80" height="600">
            </div>
        </div>
    </div>
    <footer class="py-3 my-4">
        <p class="text-center text-body-secondary border-bottom pb-3 mb-3">&copy;Son Ngo Tri</p>
        <ul class="nav justify-content-center ">
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Dia chi</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Lien he</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Fanpage</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Instagram</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Twitter</a></li>
        </ul>

    </footer>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>