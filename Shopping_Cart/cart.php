<?php

    session_start();
    include('datasets.php');
    $_SESSION['totalAmount'] = 0;

    if(isset($_POST['Update'])) {
        $prodKey = $_POST['prodKey'];
        $prodSize = $_POST['prodSize'];
        $prodQuantity = $_POST['prodQuantity'];

        if(isset($prodKey) && isset($prodSize) && isset($prodQuantity)) {
            $_SESSION['totalQuantity'] = 0;

            foreach($prodKey as $index => $value) {
                $_SESSION['items'][$value][$prodSize[$index]] = $prodQuantity[$index];
                $_SESSION['totalQuantity'] += $prodQuantity[$index];
            }
        }
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
    <title>Learn IT Easy Online Shop | Cart </title>
</head>
<body>
    <form method="post">
    <div class="container">
        <div class="row mt-3">
            <div class="col-10">
                <h2><i class="fa fa-store"></i> Learn IT Easy Online Shop</h2>
            </div>
            <div class="col-2 text-right">
                <a href="cart.php" class="btn btn-secondary">
                    <i class="fa fa-shopping-cart"></i> Cart 
                    <span class="badge badge-light">
                        <?php echo (isset($_SESSION['totalQuantity']) ? $_SESSION['totalQuantity'] : "0"); ?>
                    </span>
                </a>
            </div>            
        </div>
        <hr>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Size</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-center">Price</th>
                                    <th scope="col" class="text-center">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($_SESSION['items'])): ?>
                                    <?php foreach($_SESSION['items'] as $key => $value): ?>
                                        <?php foreach($value as $size => $quantity): ?>
                                        <?php $_SESSION['totalAmount'] += $_SESSION['productArr'][$key]['price'] * $quantity; ?>
                                            <tr>
                                                <td><img src="img/<?php  echo $_SESSION['productArr'][$key]['photo1']; ?>" style="height: 50px;"/> </td>
                                                <td><?php echo $_SESSION['productArr'][$key]['name']; ?></td>
                                                <td><?php echo $size; ?></td>
                                                <td class="text-center">
                                                    <input type="hidden" name="prodKey[]" value="<?php echo $key; ?>">  
                                                    <input type="hidden" name="prodSize[]" value="<?php echo $size; ?>">
                                                    <input type="number" name="prodQuantity[]" value="<?php echo $quantity; ?>" style="width: 200px;" class="text-center" min="1" max="100" value="0" required>
                                                </td>
                                                <td class="text-center">₱ <?php echo number_format($_SESSION['productArr'][$key]['price'], 2); ?></td>
                                                <td class="text-center">₱ <?php echo number_format($_SESSION['productArr'][$key]['price'] * $quantity, 2); ?></td>
                                                <td class="text-center"><a href="remove-confirm.php?<?php echo 'key=' . $key . '&size=' . $size . '&quantity=' . $quantity; ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endforeach; ?>
                                        <tr>
                                            <td> </td>
                                            <td> </td>
                                            <td><b>Total</b></td>
                                            <td class="text-center"><?php echo $_SESSION['totalQuantity']; ?></td>
                                            <td class="text-center">----</td>
                                            <td class="text-center">₱ <b><?php echo number_format($_SESSION['totalAmount'], 2); ?><b></td>
                                            <td class="text-center">----</td>
                                        </tr>
                                <?php else: ?>
                                <tr>
                                    <td colspan="12">Cart is still Empty</td>
                                </tr>
                            <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <a href="index.php" class="btn btn-danger btn-block"><i class="fa fa-shopping-bag"></i> Continue Shopping</a>
                        </div>
                        <?php if(isset($_SESSION['items'])): ?>
                        <div class="col-sm-12 col-md-4">
                            <button type="submit" name="Update" class="btn btn-success btn-block"><i class="fa fa-edit"></i> Update Cart</button>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <a href="clear.php" class="btn btn-primary btn-block"><i class="fa fa-sign-out-alt"></i> Checkout</a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
 

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/js/all.min.js" integrity="sha512-rpLlll167T5LJHwp0waJCh3ZRf7pO6IT1+LZOhAyP6phAirwchClbTZV3iqL3BMrVxIYRbzGTpli4rfxsCK6Vw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>