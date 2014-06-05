<?php
  if($_POST['password']=="lfaworkteam"):
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LFA :: MicroRato :: JSON to XML</title>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">

  </head>

  <body role="document">

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">[LFA] JSON to XML</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Json to XML</a></li>
            <li><a href="api.php" style="color: #B00000"><strong>API</strong></a></li>
            <li><a href="http://mymodelrobot.appspot.com/" target="_blank">URDF viewer</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Membros <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="http://www.rafaelferreira.pt/">Rafael Ferreira</a></li>
                <li><a href="#">Bernardo Ferreira</a></li>
                <li><a href="https://www.facebook.com/rlopescunha">Rodrigo Cunha</a></li>
                <li><a href="https://www.facebook.com/profile.php?id=100000144346090">Rafael Almeida</a></li>
                <li><a href="https://www.facebook.com/quintanilha.joao.9">João Quintanilha</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container theme-showcase" role="main">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Using our API</h1>
                <p><span class="glyphicon glyphicon-time"></span> June 2014</p>
                <p class="lead">Se pretender usar a nossa api para fazer parsing dos ficheiros .json para o micro rato para .xml pode usar a nossa api!</p>
                <p>Endpoint:</p>
                <pre>URL:http://lfa.rafaelferreira.pt/api/<br/>Method: POST<br/>Parameters: param and challange with json files.</pre>
                <p>Success response:</p>
                <pre>{
    <strong>"response_type"</strong>:<strong>"ok"</strong>,
    <strong>"val"</strong> : {
        <strong>"grid_output"</strong> : "&#60;Lab Name=\"TOS challenge\" Width=\"28\" Height=\"14\">\n\t&#60;Beacon X=\"14\" Y=\"7\" Height=\"2\"\/>\n\t&#60;Target X=\"14\" Y=\"7\" Radius=\"1\"\/>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"6\" Y=\"0\"\/>\n\t\t&#60;Corner X=\"3\" Y=\"3\"\/>\n\t\t&#60;Corner X=\"3\" Y=\"0\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"5.5\" Y=\"11\"\/>\n\t\t&#60;Corner X=\"5.5\" Y=\"7\"\/>\n\t\t&#60;Corner X=\"0\" Y=\"7\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"20\" Y=\"8\"\/>\n\t\t&#60;Corner X=\"18\" Y=\"5.5\"\/>\n\t\t&#60;Corner X=\"18\" Y=\"0\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"11\" Y=\"5\"\/>\n\t\t&#60;Corner X=\"9\" Y=\"7.5\"\/>\n\t\t&#60;Corner X=\"9\" Y=\"14\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"15\" Y=\"10\"\/>\n\t\t&#60;Corner X=\"17.5\" Y=\"10\"\/>\n\t\t&#60;Corner X=\"21\" Y=\"14\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"23\" Y=\"9.5\"\/>\n\t\t&#60;Corner X=\"26\" Y=\"7.5\"\/>\n\t\t&#60;Corner X=\"24\" Y=\"6\"\/>\n\t\t&#60;Corner X=\"24\" Y=\"3\"\/>\n\t\t&#60;Corner X=\"28\" Y=\"3\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"6.58579\" Y=\"1\"\/>\n\t\t&#60;Corner X=\"9.41421\" Y=\"1\"\/>\n\t&#60;\/Wall>\n\t&#60;Wall Height=\"1\">\n\t\t&#60;Corner X=\"8.58579\" Y=\"3\"\/>\n\t\t&#60;Corner X=\"11.4142\" Y=\"3\"\/>\n\t&#60;\/Wall>\n&#60;\/Lab>",
        <strong>"lab_output"</strong>:"&#60;Grid>\n\t&#60;Position X=\"2\" Y=\"12.5\" Dir=\"-15\"\/>\n\t&#60;Position X=\"1.75\" Y=\"1.5\" Dir=\"15\"\/>\n\t&#60;Position X=\"26.25\" Y=\"12.5\" Dir=\"-165\"\/>\n&#60;\/Grid>",
        <strong>"param_output"</strong>:"&#60;Parameters SimTime=\"2400\" CycleTime=\"50\" MotorsNoise=\"1.5\" BeaconNoise=\"2\" BeaconAperture=\"3.14\" CollisionRobotPenalty=\"1\" CollisionWallPenalty=\"1\" KeyTime=\"1800\" \n\/>",
        <strong>"urdf_output"</strong>:"&#60;robot name=\"TOS challenge\">\n\t ... &#60;\/robot>"
    }
}</pre>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="jquery/jq.js"></script>
  </body>
</html>
<?php else: ?>
  <form method="post" action="">
    <input type="password" name="password">
    <input type="submit">
  </form>
<?php endif; ?>