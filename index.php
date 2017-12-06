<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>OpenPixel</title>
  <meta name="description" content="Batu.one OpenPixel">
  <meta name="viewport" content="width=device-width, initial-scale=0.75, maximum-scale=0.75, user-scalable=no">
  <script src="https://js.batu.one/jquery-1.11.2.min.js"></script>
  <script src="https://use.fontawesome.com/844a541925.js"></script>
  <script src="js.js"></script>
  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
  <img src="openpixel.png" id="logo" alt="OpenPixel" />
  <div id="canvascontainer">

    <div id="pixelcanvas">

      <?php
      for ($i = 0; $i < 4; $i++) {
        echo "<div class=\"row\">";
        for ($ii = (0 + ($i * 8)); $ii < (8 + ($i * 8)); $ii++) {
          echo "<div class=\"pixel\" id=" . $ii . " onclick=\"drawPixel(" . $ii . ")\" style=\"background:#000000;\"></div>";
        }
        echo "</div>";
      }
      ?>

    </div>

  </div>

  <div id="toolscontainer">

    <div id="pane">

      <div id="colorpalette">

        <div class="cprow">
          <div class="cpcolor" onclick="setColor('#ffffff')" style="background:#ffffff;"></div>
          <div class="cpcolor" onclick="setColor('#804000')" style="background:#804000;"></div>
          <div class="cpcolor" onclick="setColor('#FE0000')" style="background:#FE0000;"></div>
          <div class="cpcolor" onclick="setColor('#FE6A00')" style="background:#FE6A00;"></div>
          <div class="cpcolor" onclick="setColor('#FFD800')" style="background:#FFD800;"></div>
          <div class="cpcolor" onclick="setColor('#00FF01')" style="background:#00FF01;"></div>
        </div>

        <div class="cprow">
          <div class="cpcolor" onclick="setColor('#a8a8a8')" style="background:#A8A8A8;"></div>
          <div class="cpcolor" onclick="setColor('#401F00')" style="background:#401F00;"></div>
          <div class="cpcolor" onclick="setColor('#800001')" style="background:#800001;"></div>
          <div class="cpcolor" onclick="setColor('#803400')" style="background:#803400;"></div>
          <div class="cpcolor" onclick="setColor('#806B00')" style="background:#806B00;"></div>
          <div class="cpcolor" onclick="setColor('#017F01')" style="background:#017F01;"></div>
        </div>

        <div class="cprow">
          <div class="cpcolor" onclick="setColor('#545454')" style="background:#545454;"></div>
          <div class="cpcolor" onclick="setColor('#01FFFF')" style="background:#01FFFF;"></div>
          <div class="cpcolor" onclick="setColor('#0094FE')" style="background:#0094FE;"></div>
          <div class="cpcolor" onclick="setColor('#0026FF')" style="background:#0026FF;"></div>
          <div class="cpcolor" onclick="setColor('#B100FE')" style="background:#B100FE;"></div>
          <div class="cpcolor" onclick="setColor('#FF006E')" style="background:#FF006E;"></div>
        </div>

        <div class="cprow">
          <div class="cpcolor" onclick="setColor('#000000')" style="background:#000000;"></div>
          <div class="cpcolor" onclick="setColor('#017F7E')" style="background:#017F7E;"></div>
          <div class="cpcolor" onclick="setColor('#00497E')" style="background:#00497E;"></div>
          <div class="cpcolor" onclick="setColor('#001280')" style="background:#001280;"></div>
          <div class="cpcolor" onclick="setColor('#590080')" style="background:#590080;"></div>
          <div class="cpcolor" onclick="setColor('#7F0037')" style="background:#7F0037;"></div>
        </div>

      </div>

      <div id="paletteoptions">

        <div id="currentcolor">
        </div>

        <div id="morecolors">
        </div>

        <div id="eyedropper" onclick="eyeDropper();">
          <i class="fa fa-eyedropper" aria-hidden="true"></i>
        </div>
      </div>

    </div>

  </div>

<button id="go" onclick="saveImage();">I'm done, let's go!</button>

</body>
</html>
