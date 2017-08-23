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
  <style>
    * {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
    }
    img.ml {
      margin-top: -100px;
      width: 156px;
    }
    h3.mtitle {
      margin-top: 40px;
      color: #fff;
      font-weight: bolder;
    }
    p.descr {
      margin-top: 20px;
      color: #ecf0f1;
      font-weight: lighter;
    }
    #fp-nav ul li a span, .fp-slidesNav ul li a span {
      background: #fff;
    }
    #wrap {
      text-align: center;
    }
    #result {
      display: none;
      font-weight: bolder;
    }
    input[type=file] {
      font-size: 16px;
    }
    .codew p {
      text-align: center;
      font-weight: lighter;
      color: #fff;
      margin-top: 30px;
      margin-bottom: 30px;
    }
    .codew {
      text-align: left;
      display: block;
      width: 700px;
      margin: 0 auto;
    }
    .icon-scroll,
    .icon-scroll:before {
      position: absolute;
      left: 50%;
    }
    .icon-scroll {
      width: 40px;
      height: 70px;
      margin-left: -20px;
      bottom: 10%;
      margin-top: -35px;
      box-shadow: inset 0 0 0 1px #fff;
      border-radius: 25px;
    }
    .icon-scroll:before {
      content: '';
      width: 8px;
      height: 8px;
      background: #fff;
      margin-left: -4px;
      top: 8px;
      border-radius: 4px;
      -webkit-animation-duration: 1.5s;
              animation-duration: 1.5s;
      -webkit-animation-iteration-count: infinite;
              animation-iteration-count: infinite;
      -webkit-animation-name: scroll;
              animation-name: scroll;
    }
    @-webkit-keyframes scroll {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0;
        -webkit-transform: translateY(46px);
                transform: translateY(46px);
      }
    }
    @keyframes scroll {
      0% {
        opacity: 1;
      }
      100% {
        opacity: 0;
        -webkit-transform: translateY(46px);
                transform: translateY(46px);
      }
    }
    h3.how {
      font-weight: bolder;
      color: #fff;
      margin-top: -100px;
    }
  </style>
</head>
<body>
  <div id="wrap">
    <div class="section">
      <img class="ml" src="./img/ml.png">
      <h3 class="mtitle">
        Machine Learning library for PHP
      </h3>
      <p class="descr">GUI for KNearestNeighbors only</p>
      <div class='icon-scroll'></div>
    </div>
    <div class="section">
      <h3 class="how">How to use it?</h3>
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
          	"labels": ["a", "a", "a", "b", "b", "b"]
          }
        </code></pre>
      </div>
    </div>
    <div class="section">
      <form enctype="multipart/form-data" method="post" name="phpml">
        <input type="file" name="ufile" accept=".json">
      </form>
      <div id="result"></div>
    </div>
  </div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.6.0/prism.min.js" data-manual></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.4/jquery.fullpage.min.js"></script>
<script>

$(document).ready(function() {

$('#wrap').fullpage({
  sectionsColor : ['#3498db', '#2980b9', '#29B6F6'],
  anchors: ['1', '2', '3'],
	navigation: true,
	navigationPosition: 'right',
	navigationTooltips: ['Introduction', 'How to use it?', 'Upload file']
});

$("input[name='ufile']").change(function(e) {
      e.preventDefault();
      var formData = new FormData();
      var file = this.files[0];
      formData.append('ufile', file);
      $.ajax({
          url: 'loader.php',
          type: "POST",
          data: formData,
          async: false,
          success: function (msg) {
              $.ajax({
                url: 'worker.php',
                type: "GET",
                data: "datafile=" + file.name,
                success: function (m) {
                  $('form').fadeOut();
                  $('#result').text(m).fadeIn();
                }
              })
          },
          error: function(msg) {
              alert('Error while file uploading!');
          },
          cache: false,
          contentType: false,
          processData: false
      });
  });
});
</script>
</body>
</html>