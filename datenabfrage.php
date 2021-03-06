<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="keywords" content="Bootstrap, Landing page, Template, Registration, Landing">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="author" content="Grayrids">
  <title>IchBinDa! - Digitale und kostenlose Kontaktdatenerfassung</title>
  <link rel="shortcut icon" href="https://www.jw78.de/ichbinda/favicon.ico" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/line-icons.css">
  <link rel="stylesheet" href="css/owl.carousel.css">
  <link rel="stylesheet" href="css/owl.theme.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/nivo-lightbox.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/responsive.css">

</head>

<body>
  <!--Spacing-->
  <div><p style="margin-top: 2.2em;padding: 0 7em 2em 0;border-width: 0px; border-style:none;">&nbsp;</p></div>
  <!--Ende Spacing-->

  <!-- Contact Section Start -->
  <section id="contact">
    <div class="contact-form" style="width: 100%">
      <div class="container" style="width: 100%">
        <div class="row justify-content-center" style="width: 100%">
          <div class="offset-top" style="width: 100%">
            <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="contact-block wow fadeInUp" data-wow-delay="0.2s">
                <div class="section-header">
                  <h2 class="section-title">Nachrichten dekodieren</h2>
                </div>
                <form method="post" enctype="multipart/form-data">
                  <!--
                  Angabe einer maximalen Dateigröße in Bytes (hier: 2 MB).
                  Wird von PHP ausgewertet, um einen schnellen Abbruch bei zu großen
                  Dateien zu ermöglichen. Der Angabe kann aber nicht vertraut werden,
                  da sie leicht vom Nutzer manipuliert werden kann. Muss vor dem
                  eigentlichen Formularfeld notiert werden.
                -->
                <input type="hidden" name="MAX_FILE_SIZE" value="20000">
                <label>Wählen Sie eine oder mehrere E-Mail-Dateien (*.eml) zum entschlüsseln aus.
                  <input id="uploadFile" multiple name="datei" type="file" accept=".eml">
                </label>
              </form>
                <form id="contactForm" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea class="form-control" id="message" placeholder="Nachricht" rows="7" name="message" pattern=".*\S.*" data-error="Bitte geben Sie eine Nachricht ein." required></textarea>
                        <div class="help-block with-errors"></div>
                      </div>
                      <div class="submit-button">
                        <button class="btn btn-common btn-effect" id="button1">Entschlüsseln</button>
                        <div id="msgSubmit" class="h3 hidden"></div>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                </form>
                <div>
                  <p><br></p>
                  <div>
                    <div class="submit-button">
                      <button type="submit" onclick="window.open('decodedMessages/<?php echo $_GET['token'] ?>.csv?<?php echo rand() ?>' )" class="btn btn-common btn-effect" id="button2">Alle entschlüsselten Daten<br>als CSV herunterladen</button>
                      <div id="msgSubmit" class="h3 hidden"></div>
                      <div class="clearfix"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Contact Section End -->

      <!-- Footer Section Start -->
      <footer>
        <!-- Footer Area Start -->
        <section class="footer-Content">
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                <a href="#home">
                  <img src="img/logo_small.png" alt="">
                  <div class="textwidget">
                    <p>Digitale, sichere und kostenlose Kontaktdatenerfassung.</p>
                  </div>
                </a>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                <div class="widget">
                  <h3 class="block-title">Informationen</h3>
                  <ul class="menu">
                    <li><a href="impressum.html">Impressum</a></li>
                    <li><a href="#">Datenschutz</a></li>

                  </ul>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                <div class="widget">

                </div>
              </div>

            </div>
          </div>
          <!-- Copyright Start  -->
          <div class="copyright">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <div class="site-info float-left">
                    <p>&copy; 2020 - Designed by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <!-- Copyright End -->
        </section>
        <!-- Footer area End -->

      </footer>
      <!-- Footer Section End -->

      <!-- Go To Top Link -->
      <a href="#" class="back-to-top">
        <i class="lni-chevron-up"></i>
      </a>

      <!-- Preloader -->
      <div id="preloader">
        <div class="loader" id="loader-1"></div>
      </div>
      <!-- End Preloader -->

      <!-- jQuery first, then Tether, then Bootstrap JS. -->
      <script src="js/jquery-min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/owl.carousel.js"></script>
      <script src="js/jquery.mixitup.js"></script>
      <script src="js/jquery.nav.js"></script>
      <script src="js/scrolling-nav.js"></script>
      <script src="js/jquery.easing.min.js"></script>
      <script src="js/wow.js"></script>
      <script src="js/jquery.counterup.min.js"></script>
      <script src="js/nivo-lightbox.js"></script>
      <script src="js/jquery.magnific-popup.min.js"></script>
      <script src="js/waypoints.min.js"></script>
      <script src="js/main.js"></script>
      <script>
      function sendDecodeRequest()
      {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function()
        {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("message").value = this.responseText;
          }
        };
        xhttp.open("POST", 'decode.php?token=<?php echo $_GET['token'] ?>', true);
        // xhttp.open("GET", "decode.php?token=<?php echo $_GET['token'] ?>", true);
        xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        xhttp.send("message=" + encodeURIComponent(document.getElementById("message").value));
      }

    $(document).ready(function(){
      $("#button1").click(function(e){
        e.preventDefault();
        sendDecodeRequest();
      });
      var elem = document.getElementById("uploadFile");
      elem.addEventListener("change", fileUpload);
      function fileUpload()
      {
        var fileList = document.getElementById("uploadFile").files;
        document.getElementById("message").value = "";
        for (var i = 0; i < fileList.length; ++i)
        {
          var file = fileList[i];
          if (file.size > 20000)
          {
            alert("Diese Datei ist zu groß und wird nicht entschlüsselt: " + file.name)
          }
          else
          {
            var data = new FormData();
            data.append('file', file);

            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function()
            {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("message").value += "\n" + this.responseText;
              }
            };
            xhttp.open("POST", 'decodeEMLFile.php?token=<?php echo $_GET['token'] ?>', true);
            // xhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhttp.send(data);
          }
        }
      }
      // $("#uploadFile").adde
      // $('body').on('change', '#uploadFile', function() {
      //   alert("hello");
      //   var data = new FormData(); // das ist unser Daten-Objekt ...
      //   data.append('file', this.files[0]); // ... an die wir unsere Datei anhängen
      //   $.ajax({
      //     url: 'myscript.php', // Wohin soll die Datei geschickt werden?
      //     data: data,          // Das ist unser Datenobjekt.
      //     type: 'POST',         // HTTP-Methode, hier: POST
      //     processData: false,
      //     contentType: false,
      //     // und wenn alles erfolgreich verlaufen ist, schreibe eine Meldung
      //     // in das Response-Div
      //     success: function() { //$("#responses").append("Datei erfolgreich hochgeladen");
      //   }
      // });
//    }
    });
  </script>

</body>
</html>
