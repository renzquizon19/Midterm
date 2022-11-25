<?php
    session_start();
    include('datasets.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Home Page</title>
</head>
<body>
<form action="details.php" method="post">
	<div class="container">
			<div class ="row mt-5">
				<div class ="col-10">
					<h2><i class="fa-solid fa-store"></i>LEARN IT EASY ONLINE SHOP</h2>
				</div>
				<div class ="col-2 text-right">
					<a href="cart.php" class = "btn btn-secondary">
						<i class="fa-solid fa-cart-shopping"></i>Cart
						<span class="badge badge-light">
							<?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    	</span>
					</a>
				</div>
	<div class="container">
    <hr>
    <div class="row">
        <?php
            if(isset($arrProducts)):
            foreach($arrProducts as $arrProductsKey => $arrProductsValue):?>
            	<div class="col-md-3 col-sm-6  mb-5">
                    	<div class="product-grid2 border">
                        	<div class="product-image2">
                                    <a href="details.php?id=<?php echo $arrProductsKey; ?>">
                                    	<img class="pic-1" src="img/<?php echo $arrProducts[$arrProductsKey]['photo1'];?>">
										<img class="pic-2" src="img/<?php echo $arrProducts[$arrProductsKey]['photo2'];?>">
                                	</a>
                                	<a class="add-to-cart" href="details.php?id=<?php echo $arrProductsKey; ?>"><i class="fa-solid fa-cart-plus mx-1"></i>Add to Cart</a>
                        	</div>
                            	<div class="product-content">
                                	<h4><?php echo $arrProducts[$arrProductsKey]['name'];?><span class="badge badge-secondary mx-1">₱ <?php echo $arrProducts[$arrProductsKey]['price'];?></span></h4>
                            	</div>

								<?php
								$_SESSION['productArr'][$arrProductsKey]['name'] = $arrProducts[$arrProductsKey]['name'];
								$_SESSION['productArr'][$arrProductsKey]['description'] = $arrProducts[$arrProductsKey]['description'];
								$_SESSION['productArr'][$arrProductsKey]['price'] = $arrProducts[$arrProductsKey]['price'];
								$_SESSION['productArr'][$arrProductsKey]['photo1'] = $arrProducts[$arrProductsKey]['photo1'];
								$_SESSION['productArr'][$arrProductsKey]['photo2'] = $arrProducts[$arrProductsKey]['photo2'];

								?>
                    	</div>
            	</div>
        	<?php endforeach;  ?>  
        <?php endif;  ?>  
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>