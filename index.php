<html>
<head>
  <link href="node_modules/video.js/dist/video-js.css" rel="stylesheet" />
  <link rel="stylesheet" href="node_modules/swiper/swiper-bundle.min.css">

</head>

<body style="
background: url(img/img2.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

">
	<div class="swiper-container">
		<div class="swiper-wrapper">
<?php
    $o=25;
	$br=0;
	for($j = 1;$j<5;$j++){
		$f= "$j";
        $i="./$f";
        $files = scandir($i);
        foreach($files as $file) {
          if($file !== "." && $file !== "..") {
			$br++;
			echo' <div class="swiper-slide"> 
			<div class="swiper-no-swiping"> 
			<h1 style="color:white; text-align:center;margin-bottom:-40px" > '.$file.'</h1>
			<video
				id="my-video"
				class="video-js"
				controls=
				preload="auto"
				width="924"
				height="528"
				data-setup="{}">';
				echo"<source src='$i/$file' type='video/mp4'/></video></div></div>";
			}
			if($br==$o){
			break;} 
		}
	}
?>
    </div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
  <script src="node_modules/swiper/swiper-bundle.min.js"></script>
  <script src="node_modules/video.js/dist/video.js"></script>
  <script>
    var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
</body>
</html>