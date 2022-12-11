<?php


require 'vendor/autoload.php';
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

 
$bucket = "mybucketthriwe";
$file = "keyFile.json";
$client = new Aws\S3\S3Client([
    'region'  => 'us-east-1',
    'version' => 'latest',
    // 'credentials' => [
    //     'key'    => "AKIAQ4XTBL7KY7GDV2VR",
    //     'secret' => "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",
    // ]
]);
$result = $client->getObject(array(
    'Bucket' => $bucket,
    'Key'    => $file,
    'ContentType' => 'application/json',
));

$json = $result['Body'];

$object = json_decode($json, true);
echo "<pre>";
print_r($object);
echo "wowww1111w<br>";
echo "  QWQEKJHsfgb";
echo "  QWQEK1233432JHsfgb";
echo "  QWQEKJHsfgb";
echo "  342343423";

?>
