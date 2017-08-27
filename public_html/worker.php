
<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
require_once 'vendor/autoload.php';
require_once 'DataParser.php';

use Phpml\Classification\KNearestNeighbors;
use Phpml\Classification\SVC;
use Phpml\Clustering\KMeans;
use Phpml\SupportVectorMachine\Kernel;
use JsonParser as Parser;

$parser = new Parser\DataParser($_GET['datafile']);

$samples = $parser->getSamplesArray();
$config = $parser->getConfig();

switch ($config['method']) {
  case "neighbor" :
    $labels = $parser->getLabelsArray();
    $classifier = new KNearestNeighbors();
    $classifier->train($samples, $labels);
    echo ("<pre>");
    print_r(json_encode($classifier->predict($config['predict'])));
    echo ("</pre>");
    break;
  case "svc" :
    $labels = $parser->getLabelsArray();
    $classifier = new SVC(Kernel::LINEAR, $config['cost']);
    $classifier->train($samples, $labels);
    echo ("<pre>");
    print_r(json_encode($classifier->predict($config['predict'])));
    echo ("</pre>");
    break;
  case "kmeans" :
    $kmeans = new KMeans($config['cluster']);
    echo ("<pre>");
    print_r(json_encode($kmeans->cluster($samples)));
    echo ("</pre>");
    break;
}



?>
