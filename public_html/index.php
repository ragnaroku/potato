<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GUI for KNearestNeighbors</title>
  <script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/themes/prism.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.css">
  <link rel="stylesheet" href="/css/main.css">
</head>
<body>
  <div id="wrap">
    <div class="section">
      <img class="ml" src="./img/ml.png">
      <h3 class="mtitle">
        Machine Learning library for PHP
      </h3>
      <p class="descr">Graphical User Interface</p>
      <div class='icon-scroll'></div>
    </div>
    <div class="section">
      <div class="slide">
        <h3 class="how">How to use KNearestNeighbors?</h3>
        <div class="codew">
          <p>Save your data in json file like this and upload to a server</p>
          <pre class="language-json"><code class="language-json">
            {
            	"samples": [
            		[1, 3],
            		[1, 4],
            		[2, 4],
            		[3, 1],
            		[4, 1],
            		[4, 2]
            	],
            	"labels": ["a", "a", "a", "b", "b", "b"],
                "config": {
                  "method": "neighbor",
                  "predict": [3, 2]
                }
            }
          </code></pre>
        </div>
      </div>
      <div class="slide">
        <form enctype="multipart/form-data" method="post" name="phpml1">
          <input type="file" name="nfile" accept=".json">
        </form>
        <div id="result-kne"></div>
      </div>
    </div>
    <div class="section">
      <div class="slide">
        <h3 class="how">How to use SVC?</h3>
        <div class="codew">
          <p>Save your data in json file like this and upload to a server</p>
          <pre class="language-json"><code class="language-json">
            {
            	"samples": [
            		[1, 3],
            		[1, 4],
            		[2, 4],
            		[3, 1]
            	],
            	"labels": ["a", "a", "a", "b"],
                "config": {
                  "method": "svc",
                  "linear": true,
                  "cost": 1000,
                  "predict": [3, 2]
                }
            }
          </code></pre>
        </div>
      </div>
      <div class="slide">
        <form enctype="multipart/form-data" method="post" name="phpml2">
          <input type="file" name="sfile" accept=".json">
        </form>
        <div id="result-svc"></div>
      </div>
    </div>
    <div class="section">
      <div class="slide">
        <h3 class="how">How to use k-means?</h3>
        <div class="codew">
          <p>Save your data in json file like this and upload to a server</p>
          <pre class="language-json"><code class="language-json">
            {
            	"samples": [
            		[1, 3],
            		[1, 4],
            		[2, 4],
            		[3, 1],
            		[4, 1],
            		[4, 2]
            	],
                "config": {
                    "method": "kmeans",
                    "cluster": 2
                  }
            }
          </code></pre>
        </div>
      </div>
      <div class="slide">
        <form enctype="multipart/form-data" method="post" name="phpml3">
          <input type="file" name="kfile" accept=".json">
        </form>
        <div id="result-k-me"></div>
      </div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js" data-manual></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js"></script>
<script src="/js/core.js">

</script>
</body>
</html>
