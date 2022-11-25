<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Remove Confirm</title>
</head>
<body>
<?php
    session_start();

    if(isset($_POST['process'])){
        unset($_SESSION['items'][$_POST['prodKey']][$_POST['prodSize']]);
        $_SESSION['totalQuantity'] -= $_POST['prodQuantity'];
        header("location: cart.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Learn IT Easy Online Shop | Remove-Confirm </title>
</head>
<body>
    <form method="post">
        <div class="container">
            <div class="row mt-3">
                <div class="col-10">
                    <h2><i class="fa fa-store"></i> Learn IT Easy Online Shop</h2>
                </div>
                <div class="col-2 text-right">
                    <a href="cart.php" class="btn btn-primary">
                        <i class="fa fa-shopping-cart"></i> Cart
                        <span class="badge badge-light">
                            <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                        </span>
                    </a>
                </div>            
            </div>
            <hr>
            <div class="row">
                <div class="col-3">
                    <div class="product-grid2">
                        <div class="product-image2">
							<img class="pic-1" src="img/<?php  echo $_SESSION['productArr'][$_GET['key']]['photo1'];?>"/>
							<img class="pic-2" src="img/<?php  echo $_SESSION['productArr'][$_GET['key']]['photo2'];?>"/>
                        </div>
                    </div>
                </div>
                <div class="col-9">
                    <h4 class="d-block">
                        <?php echo $_SESSION['productArr'][$_GET['key']]['name']; ?>
                        <span class="badge badge-secondary">₱ <?php echo $_SESSION['productArr'][$_GET['key']]['price']; ?></span>
                    </h4>
                    <p><?php echo $_SESSION['productArr'][$_GET['key']]['description']; ?></p>
                    <hr>
                    <h4>Size: <?php echo $_GET['size']; ?></h4>
                    <hr>
                    <h4>Quantity: <?php echo $_GET['quantity']; ?></h4>
                    <div class="d-block mt-3">
                        <button type="submit" name="process" class="btn btn-dark"><i class="fa fa-check-circle"></i> Confirm Product Removal</button>
                        <a href="cart.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Cancel / Go Back</a>
                    </div>

                    <input type="hidden" name="prodKey" value="<?php echo $_GET['key']; ?>">
                    <input type="hidden" name="prodSize" value="<?php echo $_GET['size']; ?>">
                    <input type="hidden" name="prodQuantity" value="<?php echo $_GET['quantity']; ?>">
                </div>
            </div>
        </div>
    </form>    

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
</body>
</html>