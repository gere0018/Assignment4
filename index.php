<?php
//2. Load the data from the png file provided, and store it in a variable
$imgPng = imagecreatefrompng ("img/stamp.png");
//3. Randomly load one of the three jpg images provided and store it as variable
$imgJpg = imagecreatefromjpeg("img/image". rand(1,3). ".jpg");
// 4. Store the width and height of the jpg and the png as variables
$pngWidth = imagesx($imgPng);
$pngHeight = imagesy($imgPng);
$jpgWidth = imagesx($imgJpg);
$jpgHeight = imagesy($imgJpg);
// 5. Copy the png data onto the jpg image in a few places.
//bool imagecopy ( resource $dst_im , resource $src_im , int $dst_x , int $dst_y , int $src_x , int $src_y , int $src_w , int $src_h )
imagecopy ($imgJpg, $imgPng, 0, 0, 0, 0, $pngWidth, $pngHeight );
imagecopy ($imgJpg, $imgPng, 500, 300, 0, 0, $pngWidth, $pngHeight );
imagecopy ($imgJpg, $imgPng, 500, 0, 0, 0, $pngWidth, $pngHeight );
imagecopy ($imgJpg, $imgPng, 0, 300, 0, 0, $pngWidth, $pngHeight );
imagecopy ($imgJpg, $imgPng, 300, 150, 0, 0, $pngWidth, $pngHeight );


//6. Save modified image data to a new png file with a different name
imagepng($imgJpg,"img/newImage.png");

//header('Content-Type: image/png');
//imagepng($imgJpg);


imagedestroy($imgPng);
imagedestroy($imgJpg);

?>
<!--7. Display the new png file to the user.-->
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Image Manipulation</title>
<link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <header>
        <h2>Image Manipulation with PHP</h2>
        <button id = "changeImgBtn">Change Image</button>
    </header>
    <div id = "imgContainer">
        <img class = "images" alt = "Algonquin College" src = "img/newImage.png"/>

    </div>
    <footer>
        <p><span>&copy;</span> Nehmat Gereige 2015</p>
    </footer>
 <script src="js/script.js"></script>
</body>

</html>
