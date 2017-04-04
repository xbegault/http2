<?php

function pushImage($uri) {
    header("Link: <{$uri}>; rel=preload; as=image", false);
return true;
//    return <<<HTML
//<img src="{$uri}">
//HTML;
}

$images = ['image1.jpg', 'image2.jpg', 'image3.jpg', 'image4.jpg', 'image5.jpeg', 'image6.jpeg', 'image7.jpg'];
foreach ($images as $image) {
    $image1 = pushImage('/images/'.$image);
}

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