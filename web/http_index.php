<?php

$images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpeg', 'image6.jpeg', 'image7.jpg'];

?>

<html>
<head><title>PHP Server Push</title></head>
<body>

<h1>PHP Server Push</h1>

<?php foreach ($images as $image): ?>
    <img src="/images/<?php echo $image ?>" width="200px" heigt="100px" />
<?php endforeach; ?>



</body>
</html>