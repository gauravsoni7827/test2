<?php

require './aws/aws-autoloader.php';
// require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$client=new Aws\S3\S3Client([
    'region'  => 'us-east-1',
    'version' => 'latest',
    'credentials' => [
        'key'    => "AKIAQ4XTBL7KY7GDV2VR",
        'secret' => "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",
    ]
    ]);
$result = $client->getObject(array(
    'Bucket' => "mybucketthriwe",
    'Key'    => 'key.json'
));


print_r($result);

// The 'Body' value of the result is an EntityBody object
// echo get_class($result['Body']) . "\n";
// > Guzzle\Http\EntityBody

// The 'Body' value can be cast to a string
echo $result['Body'] . "\n";
echo "wowww1111w<br>";
echo "  QWQEKJHsfgb";
echo "  QWQEK1233432JHsfgb";
echo "  QWQEKJHsfgb";
echo "  342343423";

?>
