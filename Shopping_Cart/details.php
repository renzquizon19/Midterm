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
	<title>Details</title>
</head>
<body>

<div class="container">
        <div class="row mt-3">
            <div class="col-10">
                <h2><i class="fa fa-store"></i> Learn IT Easy Online Shop</h2>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-secondary">
                    <i class="fa fa-shopping-cart"></i> Cart <span class="badge badge-light">0</span>
                </a>
            </div>            
        </div>
        <hr>
        <div class="row">
		<?php
           echo '<div class="col-md-3 h-100 col-sm-6">
                	<div class="product-grid2">
                    	<div class="product-image2">
							<img class="pic-1" src="img/'. $arrProducts[$_GET['id']]['photo1'] .'">
							<img class="pic-2" src="img/'. $arrProducts[$_GET['id']]['photo2'] .'">
                    	</div>
                	</div>
				</div>';
		?>
            <div class="col-md-9 col-sm-6">
                <h4 class="d-block">
                    <?php echo $arrProducts[$_GET['id']]['name']; ?>
                    <span class="badge badge-secondary"><?php echo $arrProducts[$_GET['id']]['price']?></span>
                </h4>
                <p><?php echo $arrProducts[$_GET['id']]['description']; ?></p>
                <hr>
                <h4>Select Size: </h4>
                <input type="radio" name="size" id="size-xs" checked>
                <label for="size-xs" class="pr-3">XS</label>
                <input type="radio" name="size" id="size-sm">
                <label for="size-sm" class="pr-3">SM</label>
                <input type="radio" name="size" id="size-md">
                <label for="size-md" class="pr-3">MD</label>
                <input type="radio" name="size" id="size-lg">
                <label for="size-lg" class="pr-3">LG</label>
                <input type="radio" name="size" id="size-xl">
                <label for="size-xl" class="pr-3">XL</label>
                <hr>
                <h3>Enter Quantity</h3>
                <input type="number" name="qty" id="qty" style="width: 370px;" min="1" max="100" value="0" required>
                <div class="d-block mt-3">
                    <button type="submit" name="process" class="btn btn-dark"><i class="fa fa-check-circle"></i> Confirm Product Purchase</button>
                    <a href="index.php" class="btn btn-danger"><i class="fa fa-arrow-left"></i> Cancel / Go Back</a>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>