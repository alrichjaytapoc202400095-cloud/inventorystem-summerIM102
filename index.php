<?php
include 'config.php';

$sql = "
SELECT
p.name,
p.price,
p.stock,
c.name AS category,
s.name AS supplier

FROM products p

JOIN categories c
ON p.category_id = c.id

JOIN suppliers s
ON p.supplier_id = s.id
";

$result = $conn->query($sql);
?>

<!DOCTYPE html>

<html>

<head>

<title>Inventory System</title>

<style>

body{
font-family:Arial;
padding:20px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid #ddd;
padding:10px;
}

th{
background:#4CAF50;
color:white;
}

</style>

</head>

<body>

<h2>Inventory Products</h2>

<table>

<tr>
<th>Product</th>
<th>Price</th>
<th>Stock</th>
<th>Category</th>
<th>Supplier</th>
</tr>

<?php
while($row=$result->fetch_assoc()){
?>

<tr>

<td><?= $row['name'] ?></td>
<td><?= $row['price'] ?></td>
<td><?= $row['stock'] ?></td>
<td><?= $row['category'] ?></td>
<td><?= $row['supplier'] ?></td>

</tr>

<?php } ?>

</table>

</body>

</html>
