<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>welcome Aliens</title>
  <!-- <script src="https://cdn.jsdelivr.net/npm/p5@1.4.1/lib/p5.js"></script>
  <script src="https://unpkg.com/ml5@0.10.5/dist/ml5.min.js" type="text/javascript"></script> -->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <link rel="stylesheet" href="./style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
  <script src="./sketch.js"></script>
</head>
<body>
 
<div class="container">
  <div class="bg"></div>
  <div class="bg bg2"></div>
  <div class="bg bg3"></div>
  <div class="nav">
      <!-- ================ header================= --> 
      
  <div class="header">
  <!--Waves Container-->
  <div>
  <svg class="waves"viewBox="0 24 58 25" preserveAspectRatio="none" shape-rendering="auto">
  <defs>
  <path id="gentle-wave" d="M-160 44c33 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
  </defs>
  <g class="parallax">
  <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255, 255, 255,0.8)" />
  <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255, 255, 255,0.6)" /> 
  <use xlink:href="#gentle-wave" x="48" y="6" fill="rgba(255, 255, 255,0.4)" />
  <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255, 255, 255,0.2)" />
  <!-- <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255, 255, 255,0.3)" />
  <use xlink:href="#gentle-wave" x="48" y="10" fill="rgba(255, 255, 255,0.1)" /> -->
  </g>
  </svg>
  </div>
  <!--Waves end-->
    <!--Content before waves-->
    <div class="inner-header flex">
      <!--Just the logo.. Don't mind this-->
      <h1>Alienestic Thoughts</h1>
      </div>
  </div>
  <button class="btn" style="margin: 20px; font-size: 16px;" onclick="location.href='./index.html'">Home</button>
      <!-- =================element====================== -->
    <div class="element-container">
          <div class="accordion">


              <div class="accordion-item">
                <div class="accordion-item-header">
                  Contact us by email!
                </div>
                <div class="accordion-item-body">
                  
                  <div class="form-div">
                  <form method="POST" action="contactUs.php" enctype="multipart/form-data">
                      <input class="InputText" type="text" name="username" placeholder="Name..." required><br>
                      <input class="InputText"type="email" name="email" placeholder="Email..." required><br>
                      <textarea class="InputText" placeholder="Message..." name="body" id="mailText" cols="30" rows="10" required></textarea><br>
                      <input class="InputText"type="file" name="attachment" required><br>
                      <input class="InputText"type="submit" name="submit" value="Send Email">
                  </form>
                  <br><br>
                  <?php echo $msg;?>
                </div>

                  
                </div>
              </div>
                 
          </div>

    </div>
    <div class="footer">
      <p>Shoaib Zaheer © 2022</p>
    </div>
  </div>    
</div>
<script src="./main.js"></script>
</body>
</html>
