
<?php

require_once 'vendor/autoload.php';
require_once 'DataParser.php';

use Phpml\Classification\KNearestNeighbors;
use JsonParser as Parser;

$parser = new Parser\DataParser($_GET['datafile']);

$samples = $parser->getSamplesArray();
$labels = $parser->getLabelsArray();

$classifier = new KNearestNeighbors();
$classifier->train($samples, $labels);

echo $classifier->predict([3, 2]);

?>
