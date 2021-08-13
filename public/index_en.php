<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ENGELSYSTEM - online tool for coordinating helpers and work shifts on large events</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="vendor/icomoon/style.css">
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong></a>
      </div>
      <div class="collapse navbar-collapse" id="navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li class="active"><a class="navbar-link" href="https://engelsystem.de/index_en.php">English</a></li>
          <li><a class="navbar-link" href="https://engelsystem.de/index.php">Deutsch</a></li>
					<li><a href="#imprint">Imprint</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron" style="background: #000;">
    <div class="container">
      <p class="text-center"><img src="img/rc3_logo.png" style="width: 200px; height: 200px" alt="rc3 logo" /></p>
      <p class="text-center" style="color: #fff;">Please help us to make the rC3 a great virtual experience and become an angel!!</p>
      <p class="text-center"><a class="btn btn-success btn-lg" style="background-color: #6800e7; color: #fff; border-color: #b239ff;" href="rc3">rC3 <span class="icon-icon_angel"></span> ENGELSYSTEM</a></p>
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 text-center">
      <h1>Online tool for coordinating helpers and shifts on large events</h1>
      <p>Coordinate your helpers in teams, assign them to work shifts or let them decide for themselves when and where they want to help with what.</p>
      <p>
        <a class="btn btn-primary" href="https://github.com/engelsystem/engelsystem"><span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong> installation (GitHub) </a>
      </p>
      <p class="text-muted">PHP &gt;=7.4 and MySQL &gt;=5.7 or MariaDB &gt;=10.2.2</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h2>Features</h2>
        <ul>
          <li>Manage helpers, teams, rooms, shifts, news and meetings</li>
          <li>Available in German and English (translatable)</li>
          <li>Supports any event size: from a few dozen helpers to thousands</li>
          <li>Comprehensive shift overview with filters</li>
          <li>Import shifts from multiple instances of <a href="https://frab.cccv.de/">Frab</a> or <a href="https://pretalx.com/">pretalx</a></li>
          <li>Export shifts to iCal</li>
          <li>Presence management</li>
          <li>Reward system</li>
          <li>Messaging system</li>
          <li>Question and answer system</li>
          <li>Team descriptions in Markdown</li>
          <li>Detailed log about all changes</li>
          <li>OAuth 2 Support (Open ID Connect) with multiple identity providers</li>
        </ul>
      </div>
      <div class="col-md-4" style="opacity: 0.3;">
        <h2>Documentation</h2>
        <p>Please learn about using the angel system</p>
        <p>
          <a class="btn btn-primary" href="">for <span class="icon-icon_angel"></span> angels <small>(helpers)</small> <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">for supporters <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">for bureaucrat <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">for administrators <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>Contact</h2>
        <p>If you find a software bug, or have a problem with installing your own angelsystem, please open an issue on Github:</p>
        <p>
          <a href="https://github.com/engelsystem/engelsystem/issues"><span class="glyphicon glyphicon-share"></span> https://github.com/engelsystem/engelsystem/issues</a>
        </p>
        <p>If you need an angelsystem for a Chaos event, please e-mail:</p>
        <p>
          <a href="mailto:contact@engelsystem.de"><span class="glyphicon glyphicon-envelope"></span> contact@engelsystem.de</a>
        </p>
        <h3 id="imprint">Imprint</h3>
        <p>
          Responsible for the website <i>https://engelsystem.de</i>:
        </p>
        <?php echo file_get_contents('../imprint.html'); ?>
			</div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h2>References</h2>
        <table class="table">
          <tr>
            <th class="text-right"><span class="icon-icon_angel"></span> Angels</th>
            <th>Event</th>
          </tr>
            <tr>
                <td class="text-right">710</td>
                <td><a href="https://links.rc3.world/">rC3 - remote Chaos Experience, Online</a></td>
            </tr>
            <tr>
                <td class="text-right">4.683</td>
                <td><a href="https://events.ccc.de/congress/2019/wiki/index.php/Main_Page">36C3 - 36. Chaos Communication Congress, Leipzig</a></td>
            </tr>
          <tr>
            <td class="text-right">4.204</td>
            <td><a href="https://events.ccc.de/congress/2018/wiki/Main_Page">35C3 - 35. Chaos Communication Congress, Leipzig</a></td>
          </tr>
					<tr>
            <td class="text-right">2.387</td>
            <td><a href="https://events.ccc.de/congress/2017/wiki/Main_Page">34C3 - 34. Chaos Communication Congress, Leipzig</a></td>
          </tr>
          <tr>
            <td class="text-right">~100</td>
            <td><a href="https://mozillafestival.org/">Volunteer Program, MozFest 2017, London</a></td>
          </tr>
          <tr>
            <td class="text-right">102</td>
            <td><a href="https://www.froscon.de/">FrOSCon 2017, Sankt Augustin</a></td>
          </tr>
          <tr>
            <td class="text-right">193</td>
            <td><a href="https://eh17.easterhegg.eu">Easterhegg 2017, Mühlheim am Main</a></td>
          </tr>
          <tr>
            <td class="text-right">2576</td>
            <td><a href="https://events.ccc.de/congress/2016/wiki/Main_Page">33C3 - 33. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">1785</td>
            <td><a href="https://events.ccc.de/congress/2015/wiki/Main_Page">32C3 - 32. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">1470</td>
            <td><a href="https://events.ccc.de/congress/2014/">31C3 - 31. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">1130</td>
            <td><a href="https://events.ccc.de/camp/2015/wiki/Main_Page">cccamp15 - Chaos Communication Camp 2015</a></td>
          </tr>
          <tr>
            <td class="text-right">1044</td>
            <td><a href="https://events.ccc.de/congress/2013/">30C3 - 30. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">511</td>
            <td><a href="https://events.ccc.de/congress/2012/">29C3 - 29. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">111</td>
            <td><a href="http://eh14.easterhegg.eu/">Easterhegg 2014, Stuttgart</a></td>
          </tr>
          <tr>
            <td class="text-right">99</td>
            <td><a href="http://eh15.easterhegg.eu/">Easterhegg 2015, Braunschweig</a></td>
          </tr>
          <tr>
            <td class="text-right">43</td>
            <td><a href="http://sigint.ccc.de/">Sigint 2013</a></td>
          </tr>
          <tr>
            <td class="text-right">41</td>
            <td><a href="https://mrmcd.net/">MRMCD14 - MetaRheinMainConstructionDays 2014, Darmstadt</a></td>
          </tr>
          <tr>
            <td class="text-right">35</td>
            <td><a href="https://hackover.de/">Hackover 2014, Hannover</a></td>
          </tr>
          <tr>
            <td class="text-right">-</td>
            <td>21C3 - 28C3, Berlin</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="vendor/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="vendor/bootstrap-3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
