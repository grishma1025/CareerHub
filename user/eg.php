<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bill Form</title>
</head>
<body>
    <h2>Enter Bill Details</h2>
    <form action="preview.php" method="POST">
        <label for="customerName">Customer Name:</label><br>
        <input type="text" id="customerName" name="customerName" required><br><br>
        
        <label for="item">Item:</label><br>
        <input type="text" id="item" name="item" required><br><br>
        
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" required><br><br>
        
        <label for="price">Price:</label><br>
        <input type="number" id="price" name="price" required><br><br>
        
        <input type="submit" value="Preview Bill">
    </form>
</body>
</html>
