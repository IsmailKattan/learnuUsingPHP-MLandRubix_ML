<?php 
require_once '../vendor/autoload.php';

use Phpml\Dataset\CsvDataset;
use Phpml\Regression\SVR;
use Phpml\SupportVectorMachine\Kernel;
use Phpml\Metric\Accuracy;

// Load CSV file
$dataset = new CsvDataset('data.csv', 3, true);

// Split data into training and testing datasets
$randomSplit = new \Phpml\CrossValidation\RandomSplit($dataset, 0.3);

$trainingSamples = $randomSplit->getTrainSamples();
$trainingLabels = $randomSplit->getTrainLabels();
$testingSamples = $randomSplit->getTestSamples();
$testingLabels = $randomSplit->getTestLabels();

// Define and train a Support Vector Machine model
$svr = new SVR(Kernel::LINEAR, $cost = 1000);
$svr->train($trainingSamples, $trainingLabels);

// Predict the test samples using the trained model
$predictedLabels = $svr->predict($testingSamples);

// Calculate the accuracy of the model
$accuracy = Accuracy::score($testingLabels, $predictedLabels);

echo 'Accuracy: ' . $accuracy;

/*
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>multiple linear regression</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
	<form action="" method="POST">
		<div class="input-group" style="margin: 10px;">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Area</span>
		  </div>
		  <input type="text" class="form-control" name="Area">
		</div>
		<div class="input-group" style="margin: 10px;">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">Rooms</span>
		  </div>
		  <input type="text" class="form-control" name="Rooms">
		</div>
		<div class="input-group" style="margin: 10px;">
		  <div class="input-group-prepend">
		    <span class="input-group-text" id="">year of construction</span>
		  </div>
		  <input type="text" class="form-control" name="year">
		</div>
		<button type="submit" class="btn btn-secondary" style="margin:10px;">Submit</button>
	</form>
	<?php
		if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		    $area = $_POST['Area'];
		    $rooms = $_POST['Rooms'];
		    $year = $_POST['year'];
		    // Perform prediction using the trained model and input features
		    if (isset($area)&&isset($rooms)&&isset($year)) {
		    	$predictedPrice = $svr->predict([[$area, $rooms, $year]]);
		    	echo 'Predicted Price: ' . $predictedPrice[0];
		    }
		}
	?>
</body>
</html>
*/
?> 
