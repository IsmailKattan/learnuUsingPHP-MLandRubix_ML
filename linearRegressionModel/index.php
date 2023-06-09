<?php


/* geliştirilen her model için bu adımlar takip edilmeli
loading the data (veri yükleme)
preprocessing the data (veri işlenme)
training (eğitme)
evaluating machine learning model (makine öğrenimi modeli değerlendirme)
make predictions with trained model (eğitimli model ile tahminler yapmak)
*/

echo "<b> console ile tavsiye edilir</b><br>\n";
require_once '../vendor/autoload.php';
use Phpml\Dataset\CsvDataset;
use Phpml\CrossValidation\StratifiedRandomSplit;
use Phpml\Regression\LeastSquares;
use Phpml\Metric\Regression;

/**
 *
 *Loading data (veri yükleme)
 *  
*/

//                 (path ,feature col,is there a head?)
$data = new CsvDataset("insurance.csv",1,true);
//echo "veriler: önce x sonra y<br> \n";
//print_r($data);

//*****************************************************//
/**
 * 
 * preprocessing the data (veri işlenme)
 * 
*/
$split = new StratifiedRandomSplit($data, 0.2);

$dataset = $split->getTrainSamples();
$labels = $split->getTrainLabels();
$testDataset = $split->getTestSamples();
$testLabels = $split->getTestLabels();
/*
echo "<br>getTrainSamples:<br>\n";
print_r($dataset);

echo "<br>getTrainLabels:<br>\n";
print_r($labels);

echo "<br>getTestSamples:<br>\n";
print_r($testDataset);

echo "<br>getTestLabels:<br>\n";
print_r($testLabels);
*/
//*****************************************************//
/**
 * 
 * training(eğitme)
 * 
*/

$regression = new LeastSquares();
$regression->train($testDataset, $testLabels);
$predict = $regression->predict($testDataset);


//*****************************************************//
/**
 * 
 * evaluating machine learning model (makine öğrenimi modeli değerlendirme)
 * 
*/
$score = Regression::r2score($testLabels,$predict);
echo "<br>r2score is : " . $score;

//*****************************************************//
/**
 * 
 * make predictions with trained model (eğitimli model ile tahminler yapmak)
 * 
*/

echo "\nMODEL DENEMESI\n";


while (true) {
    $veri=readline("çıkış için nokta giriniz, lütfen bir sayi giriniz\t");
    if ($veri == ".") {
        break;
    }
    if (isset($veri)&&$veri!="") {
        if (is_numeric($veri)) {
            echo "girdiğiniz x değere karşı gelen y değer = " . $regression->predict([$veri]). "\n";
        }
        else 
        {
            echo "ancak sayi girebilisiniz\n";
        }
    }
    else {
        echo "NULL !!!\n";
    }

}    
    
?>

