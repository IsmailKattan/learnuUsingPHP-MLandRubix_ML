<?php


?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Esmail Kattan</title>
        <style>
      
          p {
            margin: 10px;
          }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Machine Learning nedir</h3>
            <p>bilgisayarlara açıkça programlanmadan öğrenme yeteneği veren çalışma alanı.</p>
            <h3>Machine Learning tipleri :</h3>
            <ul>
                <li>
                    <h4>Supervise Learning(Gözetimli öğrenme)</h4>
                    <p>makine öğrenimi alanında kullanılan bir yöntemdir. Bu yöntemde, makineye verilen veri setindeki her bir örnek için doğru çıktılarla birlikte eğitim verilir</p><p>bunun altında 2 tip vardır:</p>
                    <ul>
                        <li>
                            <h5>Regression(gerilme)</h5>
                            <ul><li>bu tipte makina sayı tahmin eder </li><li> çok sayıda output mümkündür</li><li>örnek:ev fiyatı tahmini</li></ul>
                        </li>
                        <li>
                            <h5>classification(sınıflandırma)</h5>
                            <ul><li>bu tipte makine kategori tahmin eder</li><li>az sayıda output</li><li>örnek:kanser tip taşhisi</li></ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <h4>Unsupervised Learning</h4>
                    <p>herhangi bir önceden tanımlanmış hedef veya çıktı kullanılmadan bir veri kümesindeki kalıpları ve özellikleri keşfetmek için kullanılan bir tür makine öğrenimi yöntemidir.</p>
                    <p>bunun altında 3 tip vardır:</p>
                    <ul>
                        <li>
                            <h5>Clustering</h5>
                            <ul><li>benzer veri noktalarını bir arada gruplandırır</li></ul>
                        <li>
                            <h5>Anomaly Detection</h5>
                            <ul><li>olağan dışı veri noktaları bulma</li></ul>
                        </li>
                        <li>
                            <h5>Dimensionality Reduction</h5>
                            <ul><li>daha az sayı kullanarak verileri sıkıştırmax</li></ul>
                        </li>
                    </ul>
                </li>
            </ul>
            <h3>Supervised Learning (Gözetimli Öğrenme)</h3>
            <ul>
                <h4>Linear regression model(Doğrusal regresyon modeli)</h4>
                <div style="display: flex; align-items: center;">
                    <img src="https://www.scribbr.co.uk/wp-content/uploads//2020/02/simple-linear-regression-in-r-graph-example.png" class="img-thumbnail rounded float-left" >   
                    <p> 
                    iki veya daha fazla değişken arasındaki ilişkiyi açıklayan matematiksel bir modeldir.
                    Bu model, bağımsız değişkenlerin bir veya daha fazla bağımlı değişken üzerindeki etkisini 
                    incelemek için kullanılır.
                    Doğrusal regresyon modeli, temel olarak bağımlı değişkenin birinci dereceden polinom ile ilişkisini tanımlar</p>
                </div>
                <h5>Tanımlar</h5>
                <ul>
                    <p><b>Trainigset</b>: modeli eğitmek için kullanılan veriler</p>
                    <p><b>Feature</b>: girilen veriler = X = input</p>
                    <p><b>Target</b>: çıkan veriler = Y = output </p>
                    <br><p><b>Note</b>: modeli eğitikten sonra modele x verilip ve y döndürür</p>
                </ul>
                click <a href="./linearRegressionModel/index.php">here</a> to try this model
            </ul>
        </div>
    </body>
</html>