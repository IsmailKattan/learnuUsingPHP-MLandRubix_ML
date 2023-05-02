<?php

require_once "../vendor/autoload.php";

use Phpml\Classification\KNearestNeighbors;
use Phpml\Dataset\CsvDataset;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Metric\Accuracy;

// Loading the data 
$data = new CsvDataset('iris.csv', 4, true);
// processing data
$dataset = new StratifiedRandomSplit($data, 0.2, 156);

$classification = new KNearestNeighbors();
$classification->train($dataset->getTrainSamples(), $dataset->getTrainLabels());

$predicted = $classification->predict($dataset->getTestSamples());

$accuracy = Accuracy::score($dataset->getTestLabels(), $predicted);
echo 'accuracy is: ' . $accuracy . "\n";

function getVar($varName){
    while(true){
        $v = readline("lütfen" .  $varName . "değerini giriniz\n");
        if(is_numeric($v))
        {
            break;
        }
        else{
            echo "$varName değerini ancak sayı olarak girbilirsiniz\n";
        }
    }
    return $v;
}


while (true) {
    $karar=readline("Devam etmek için enter çıkış için nokta\t");
    if ($karar == ".") {
        break;
    }
    if ($karar=="") {
        $sepal_length = getVar("sepal uzunluğu");
        $sepal_width = getVar("sepal genişliği");
        $petal_length = getVar("taç yaprağı uzunluğu");
        $petal_width = getVar("taç yaprağı genişliği");

        echo "girdiğiniz veriler :\n";
        echo "sepal uzunluğu : $sepal_length \nsepal genişliği : $sepal_width \ntaç yaprağı uzunluğ : $petal_length \ntaç yaprağı genişliği : $petal_width\n";
        /**code begins hear */
        $newSample = [$sepal_length, $sepal_width, $petal_length, $petal_width];
        $predicted = $classification->predict([$newSample]);
        echo "Beklenen çiçek türü" . $predicted[0] . "\n";
        
        /**code ends hear */

    }
    else {
        echo "NULL !!!\n";
    }

} 
?>