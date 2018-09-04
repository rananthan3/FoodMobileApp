<?php

if (!class_exists('S3')) require_once 'S3.php';

// AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJPR3ESEJM2C5ZZSQ');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

S3::setAuth(awsAccessKey, awsSecretKey);

$buckets = S3::listBuckets(true);

print_r($buckets);
echo('<br>');
print_r($buckets['buckets']);
echo('<br>');
echo($buckets['buckets'][0]['name']);
echo('<br>');

$name = $buckets['buckets'][0]['name'];

print_r(S3::getBucket($name));
echo('<br>');

$image_array = S3::getBucket($name);
print_r(array_keys($image_array));





?>

<!DOCTYPE html>
<html>
<body>

<h2>HTML Image</h2>
<?php
foreach (array_keys($image_array) as $value){
echo '<img src="https://s3.amazonaws.com/image007009/' .$value .'" ><br><br>';
}
?>
</body>
</html>