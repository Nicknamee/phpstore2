<?php
include("../partials/connect.php");
if(isset($_POST['name']))
{
    $name = $_POST['name'];
}

if(isset($_POST['product']))
{
    $product = $_POST['product'];
}

if(isset($_POST['price']))
{
    $price = $_POST['price'];
}

if(isset($_POST['category']))
{
    $category= $_POST['category'];
}
if(isset($_POST['description']))
{
    $description = $_POST['description'];
}

/*foto */
$target ="uploads/";
$file_path = $target.basename($_FILES['file']['name']);
$file_name = $_FILES['file']['name'];
$file_tmp = $_FILES['file']['tmp_name'];
$file_store ="uploads/".$file_name;

move_uploaded_file($file_tmp, $file_store);

$sql = "INSERT INTO products (name,price,picture,description,category_id) VALUES('$name','$price','$file_path','$description','$category')";

$connect->query($sql);
header('location: productsshow.php');
?>
