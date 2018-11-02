<?php

if (!class_exists('S3')) require_once 'S3.php';

// AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJULRU56BHSXGSZKQ');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

S3::setAuth(awsAccessKey, awsSecretKey);

$buckets = S3::listBuckets(true);

$name = $buckets['buckets'][0]['name'];



$image_array = S3::getBucket($name);



// $image_array = [
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c33.0.200.200/p200x200/17951434_10154968962410795_3369260423348767916_n.jpg?_nc_cat=0&oh=68f5e5a39c326204fe9cfe68f0bd9e64&oe=5C25BAEA" => 1,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c0.22.200.200/p200x200/17904193_10154968962185795_4301581169383298176_n.jpg?_nc_cat=0&oh=ba1c27dfd5907103556723b0d5cf4c58&oe=5C335454" => 2,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c0.22.200.200/p200x200/21106512_10155403693825795_4882593703660667602_n.jpg?_nc_cat=0&oh=9e44e181836d18e5323c39f065cb4053&oe=5C2D3967" => 3,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c33.0.200.200/p200x200/18921860_10155130274955795_4935694774543195602_n.jpg?_nc_cat=0&oh=f07e16b568ed599a7636eeedf0891886&oe=5C1C9046" => 4,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c0.22.200.200/p200x200/18010338_10154968961945795_5299590954061307486_n.jpg?_nc_cat=0&oh=e920996bd61ec32608e44b5e159f4beb&oe=5C271A44" => 5,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c0.22.200.200/p200x200/16938485_10154799427570795_9017600859998850357_n.jpg?_nc_cat=0&oh=d382cd2d5db61aae5cdef47f513ea457&oe=5C3333B2" => 6,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c0.22.200.200/p200x200/18527633_10155064443025795_3458318109176845073_n.jpg?_nc_cat=0&oh=db0cccd0b7aca7584ee000900487f472&oe=5C255112" => 7,
//     "https://scontent-atl3-1.xx.fbcdn.net/v/t1.0-0/c0.22.200.200/p200x200/20431183_10155321269700795_1325280715467744491_n.jpg?_nc_cat=0&oh=96f875214fec2e9f7dfaadcf121845ee&oe=5C190947" => 8
// ];






?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>
<body>
<div data-role="page"> 

	<div data-role="header"> 
		<center>
			<img src="IAMFARMS.png" style="width:100%; height: auto;">
		</center>
	</div> 

	<div data-role="content">
		<div class="ui-grid-c ui-responsive">
		    <div class="ui-block-a">
		    	
		    	<?php
				$i = 0;
				foreach (array_keys($image_array) as $value){
					if ($i % 4 == 0){
						echo '<img src="https://s3.amazonaws.com/image007009/' .$value .'" ><br><br>';
						// echo '<img src="' .$value .'" style="width:100%"><br><br>';
					}
					$i++;
				}
				?>	
		    	
			</div>
		    <div class="ui-block-b">
		    	
		    	<?php
				$i = 0;
				foreach (array_keys($image_array) as $value){
					if ($i % 4 == 1){
						echo '<img src="https://s3.amazonaws.com/image007009/' .$value .'" ><br><br>';
						// echo '<img src="' .$value .'" style="width:100%"><br><br>';
					}
					$i++;
				}
				?>	
		    	
			</div>
		    <div class="ui-block-c">
		    	
		    	<?php
				$i = 0;
				foreach (array_keys($image_array) as $value){
					if ($i % 4 == 2){
						echo '<img src="https://s3.amazonaws.com/image007009/' .$value .'" ><br><br>';
						// echo '<img src="' .$value .'" style="width:100%"><br><br>';
					}
					$i++;
				}
				?>	
		    	
			</div>
			<div class="ui-block-d">
			    
			    <?php
				$i = 0;
				foreach (array_keys($image_array) as $value){
					if ($i % 4 == 3){
						echo '<img src="https://s3.amazonaws.com/image007009/' .$value .'" ><br><br>';
						// echo '<img src="' .$value .'" style="width:100%"><br><br>';
					}
					$i++;
				}
				?>	
			    
			</div>
		</div>		
		
	</div>
</div>

</body>
</html> 