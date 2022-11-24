<?php

	session_start();
    $arrProducts = array(
        array(
            'name'          => "Adidas",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 3,300.00",
            'photo1'        => "adidas1.jpg",
            'photo2'        => "adidas2.jpg",
        ),
        array(
            'name'          => "Adidas",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 3,600.00",
            'photo1'        => "adidas3.jpg",
            'photo2'        => "adidas4.jpg",
        ),
        array(
            'name'          => "Adidas",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 5,500.00",
            'photo1'        => "adidas5.jpg",
            'photo2'        => "adidas6.jpg",
        ),
        array(
            'name'          => "Adidas",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 4,000.00",
            'photo1'        => "adidas7.jpg",
            'photo2'        => "adidas8.jpg",
        ),
        array(
            'name'          => "Nike",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 3,295.00",
            'photo1'        => "nike2.jpg",
            'photo2'        => "nike1.jpg",
        ),
        array(
            'name'          => "Nike",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 4,195.00",
            'photo1'        => "nike3.jpg",
            'photo2'        => "nike4.jpg",
        ),
        array(
            'name'          => "Nike",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 3,295.00",
            'photo1'        => "nike5.jpg",
            'photo2'        => "nike6.jpg",
        ),
        array(
            'name'          => "Nike",
            'description'   => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis explicabo impedit commodi nostrum, incidunt dignissimos repellendus, hic laboriosam repudiandae alias fugiat, suscipit est ea natus? At fuga quis consequatur, dolor tenetur architecto atque laborum, tempora velit expedita odit sint, minima et. Aperiam quas corporis officiis aspernatur vero sunt aliquam eos.",
            'price'         => "₱ 3,295.00",
            'photo1'        => "nike7.jpg",
            'photo2'        => "nike8.jpg",
        )
    );
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
            foreach($arrProducts as $arrProductsKey => $arrProductsValue):?>
            	<div class="col-md-3 col-sm-6">
                    	<div class="product-grid2 border mb-5">
                        	<div class="product-image2">
                                	<a name="btnDetails" value="btnDetails" href="details.php?index= <?php echo $arrProductsKey; ?>">
                                    	<img class="pic-1" src="img/<?php echo $arrProducts[$arrProductsKey]['photo1'];?>">
										<img class="pic-2" src="img/<?php echo $arrProducts[$arrProductsKey]['photo2'];?>">
                                	</a>
                                	<a class="add-to-cart" href=""><i class="fa-solid fa-cart-plus mx-1"></i>Add to Cart</a>
                        	</div>
                            	<div class="product-content">
                                	<h4><?php echo $arrProducts[$arrProductsKey]['name'];?><span class="badge badge-secondary mx-1"><?php echo $arrProducts[$arrProductsKey]['price'];?></span></h4>
                            	</div>
                    	</div>
            	</div>
        	<?php endforeach;  ?>  
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>
</html>