<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="indexPDC.css" />
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $PRODUCT_DESCRIPTION = $_POST["description"];
    $LIST_PRICE = $_POST["price"];
    $DISCOUNT_PERCENT = $_POST["discount_percent"];
    $DISCOUNT_AMOUNT = ($LIST_PRICE * $DISCOUNT_PERCENT)/100;
    $DISCOUNT_PRICE = $LIST_PRICE - $DISCOUNT_AMOUNT;
}
?>

<div id="content">
    <h1>Product Discount Calculator</h1>
    <label>Product Description: </label>
    <span><?php echo "$PRODUCT_DESCRIPTION"; ?></span><br/>
    <label>Price: </label>
    <span><?php echo "$LIST_PRICE"; ?></span><br/>
    <label>Discount Percent: </label>
    <span><?php echo "$DISCOUNT_PERCENT"; ?></span><br/>
    <label>Discount Amount:  </label>
    <span><?php echo "$DISCOUNT_AMOUNT"; ?></span><br/>
    <label>Discount Price: </label>
    <span><?php echo "$DISCOUNT_PRICE"; ?></span><br/>
</div>
</body>
</html>