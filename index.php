<?php


?>
<!DOCTYPE html>
<html lang="tr-TR">
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Ismail Kattan</title>
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
                            <ul><li>bu tipte makina sayı tahmin eder </li><li> çok sayıda output mümkündür</li><li>örnek:ev alanı-ev fiyatı tahmini</li></ul>
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
                <h4>Linear Regression Model(Doğrusal Regresyon Modeli)</h4>
                <div style="display: flex; align-items: center;">
                    <img src="https://i.stack.imgur.com/onf2z.gif" class="img-thumbnail rounded float-left img-fluid " >   
                    <p> 
                    iki değişken arasındaki ilişkiyi açıklayan matematiksel bir modeldir.
                    Bu model, bağımsız değişkenin bir bağımlı değişken üzerindeki etkisini 
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
                <h5>Matematik</h5>
                <ul>
                    <p style="font-size: 20PX;"><i style="font-size: 25px;">f</i><small style="font-size: 15px;">w,b</small>(x)=wx+b</p>
                    <li><b>w</b>: eğim</li>
                    <li><b>b</b>y ile kesişim noktası</li>
                </ul>
                <p>verilere en yakın doğruyu bulmak için <b>Cost function</b> kullanılır</p>
                <p>Cost function, loss function de olarak bilinir</p>
                <h5>Matematik</h5>
                <ul>
                    <p>Cost function J(w,b)'nin basit hali => J(w):</p>
                    <p style="font-size: 20PX;"><i style="font-size: 25px;">J</i>(w)=(1/2m)&#931;<sup>m</sup><sub>i=1</sub> (f<sub>w</sub>(<i>x<sup>(i)</sup></i>) - <i>y<sup>(i)</sup></i>)<sup>2</sup></p>
                    <p>burdaki (i) kuvvet değil i.eğim değeri temsil eder</p>
                    <li><b>f<sub>w</sub>(<i>x<sup>(i)</sup></i>)</b>: i.eğime göre f</i><small style="font-size: 15px;">w</small>(x)</li>
                    <li><b><i>y<sup>(i)</sup></i></b>: gerçek veri (training verileri)</li>
                </ul>
                <p>en uygun eğim w için J(w) fonksiyonun en küçük değeri:</p>
                <div style="display: flex; align-items: center;">
                    <img src="https://bharathikannann.github.io/blogs/assets/images/linear-regression-math/alpha0.003-min.gif" class="img-thumbnail rounded float-left img-fluid " >                 
                    
                </div>
                <ul>
                    <p>Cost function J(w,b)*3D*</p>
                    <p style="font-size: 20PX;"><i style="font-size: 25px;">J</i>(w,b)=(1/2m)&#931;<sup>m</sup><sub>i=1</sub> (f<sub>w,b</sub>(<i>x<sup>(i)</sup></i>) - <i>y<sup>(i)</sup></i>)<sup>2</sup></p>
                    <p>burdaki (i) kuvvet değil i.eğim değeri temsil eder</p>
                    <li><b>f<sub>w,b</sub>(<i>x<sup>(i)</sup></i>)</b>: i.eğime göre f</i><small style="font-size: 15px;">w,b</small>(x)</li>
                    <li><b><i>y<sup>(i)</sup></i></b>: gerçek veri (training verileri)</li>
                </ul>
                <p>en uygun doğru denklemi w ve b için J(w,b) fonksiyonun en küçük değeri:</p>
                <div style="display: flex; align-items: center;">
                    <img src="https://alykhantejani.github.io/images/gradient_descent_line_graph.gif" class="img-thumbnail rounded float-left img-fluid " >                 
                </div>
                <br>
                <ul>
                    <h4>Gradient Descent</h4>
                    <p>Her hangi bir fonksiyonun en küçük değerini bulmak için kullanılan bir algoritmadır </p>
                    <h5><b>Code :</b></h5>
                    <div>
                        <img src="https://media.geeksforgeeks.org/wp-content/uploads/20200611183120/1406-7.png" alt="">
                    </div>
                    <li>a: öğrenme oranı(learning rate) bu değer sabit bir sayı olabilir veya adımdan adıma daha küçük bir değer alabilir</li>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <img src="https://egallic.fr/Enseignement/ML/ECB/book/figs/example_two_dim/descent_3D_Mishra.gif" class="img-fluid " alt="">
                        </div>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <img src="https://miro.medium.com/v2/resize:fit:1400/1*47skUygd3tWf3yB9A10QHg.gif" class="img-fluid " alt="">
                        </div>
                    </div>
                </ul>
                <br>
                <h4>Multiple Linear Regression Model(Çoklu Doğrusal Regresyon Modeli)</h4>
                <p>Bu modelde artık dataset'teki giriş verileri(features) bir sayı değil bir vektördür </p>
                <p><b>Trainigset</b>: modeli eğitmek için kullanılan veriler</p>
                    <p><b>Features</b>: girilen veri vektörü = X = input</p>
                    <p><b>Target</b>: çıkan veriler = Y = output </p>
                    <br><p><b>Note</b>: modeli eğitikten sonra modele x verilip ve y döndürür</p>
                    <p style="font-size: 20PX;"><i style="font-size: 25px;">f</i><small style="font-size: 15px;">w <sup>-></sup>,b</small>(x <sup>-></sup>)=w<sup>-></sup>x<sup>-></sup>+b</p>
                    <li><b>w</b>: eğim</li>
                    <li><b>b</b>y ile kesişim noktası</li>
            </ul>
        </div>
    </body>
</html>