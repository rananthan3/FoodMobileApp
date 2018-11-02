<!DOCTYPE html>
<html>
<head>
<title>Online Grocery</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="shortcut icon" href="favicon.ico" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<?php
/**
* $Id$
*
* S3 form upload example
*/

if (!class_exists('S3')) require_once 'S3.php';

// AWS access info
if (!defined('awsAccessKey')) define('awsAccessKey', 'AKIAJULRU56BHSXGSZKQ');
if (!defined('awsSecretKey')) define('awsSecretKey', '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');

// Check for CURL
if (!extension_loaded('curl') && !@dl(PHP_SHLIB_SUFFIX == 'so' ? 'curl.so' : 'php_curl.dll'))
	exit("\nERROR: CURL extension not loaded\n\n");

// Pointless without your keys!
if (awsAccessKey == 'change-this' || awsSecretKey == 'change-this')
	exit("\nERROR: AWS access information required\n\nPlease edit the following lines in this file:\n\n".
	"define('awsAccessKey', 'change-me');\ndefine('awsSecretKey', 'change-me');\n\n");


S3::setAuth(awsAccessKey, awsSecretKey);

$bucket = 'image007009';
$path = ''; // Can be empty ''

$lifetime = 3600; // Period for which the parameters are valid
$maxFileSize = (1024 * 1024 * 50); // 50 MB

$metaHeaders = array('uid' => 123);
$requestHeaders = array(
    'Content-Type' => 'application/octet-stream',
    'Content-Disposition' => 'attachment; filename=${filename}'
);

$params = S3::getHttpUploadPostParams(
    $bucket,
    $path,
    S3::ACL_PUBLIC_READ,
    $lifetime,
    $maxFileSize,
    201, // Or a URL to redirect to on success
    $metaHeaders,
    $requestHeaders,
    false // False since we're not using flash
);

$uploadURL = 'https://' . $bucket . '.s3.amazonaws.com/';

?>


<body>
    <div data-role="page" data-theme="a" style="padding:50px;"> 
        <form method="post" action="<?php echo $uploadURL; ?>" enctype="multipart/form-data">
            <?php
            foreach ($params as $p => $v)
                echo "<input type=\"hidden\" name=\"{$p}\" value=\"{$v}\" />\n";
            ?>
            <input type="file" name="file" />&#160;<input type="submit" value="Upload" />
        </form>
    </div>    
</body>
</html>
