<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ENGELSYSTEM - Online-Tool für Helfer- und Schichtplanung auf großen Events</title>
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
          <li><a class="navbar-link" href="https://engelsystem.de/index_en.php">English</a></li>
          <li class="active"><a class="navbar-link" href="https://engelsystem.de/index.php">Deutsch</a></li>
          <li><a href="#imprint">Impressum</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="jumbotron" style="background: #000;">
    <div class="container">
      <p class="text-center"><img src="img/rc3_logo.png" style="width: 200px; height: 200px" alt="rc3 logo" /></p>
      <p class="text-center" style="color: #fff;">Hilf uns den rC3 zu einer tollen virtuellen Experience für alle zu machen und werde Engel!</p>
      <p class="text-center"><a class="btn btn-success btn-lg" style="background-color: #6800e7; color: #fff; border-color: #b239ff;" href="rc3">rC3 <span class="icon-icon_angel"></span> ENGELSYSTEM</a></p>
    </div>
  </div>
  <div class="container">
    <div class="col-md-12 text-center">
      <h1>Online-Tool für Helfer- und Schichtplanung auf großen Events</h1>
      <p>Organisiere deine Helfer in Teams, teile sie in Schichten ein oder lasse sie selbst bestimmen, wann und wo sie helfen wollen.</p>
      <p>
        <a class="btn btn-primary" href="https://github.com/engelsystem/engelsystem"><span class="icon-icon_angel"></span> <strong>ENGELSYSTEM</strong> Installation (GitHub) </a>
      </p>
      <p class="text-muted">ab PHP 7.4 und MySQL &gt;=5.7 oder MariaDB &gt;=10.2.2</p>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h2>Features</h2>
        <ul>
          <li>Verwaltung von Helfern, Teams, Räumen, Schichten, News und Meetings</li>
          <li>Auf Deutsch und Englisch (Erweiterbar)</li>
          <li>Skaliert problemlos auf tausende Helfer und zehntausende Schichtstunden</li>
          <li>Komplexe Schicht-Ansicht mit Filter</li>
          <li>Importiere Schichten aus mehreren <a href="https://frab.cccv.de/">Frab</a>- oder <a href="https://pretalx.com/">pretalx</a>-Instanzen</li>
          <li>iCal-Export für Schichten</li>
          <li>Anwesenheits-Management</li>
          <li>Belohnungssystem</li>
          <li>Nachrichtensystem</li>
          <li>Frage-/Antwortsystem</li>
          <li>Markdown Team-Beschreibung</li>
          <li>Detailliertes Log über jede Änderung</li>
          <li>OAuth 2 Support (Open ID Connect) mit mehreren Identity-Providern</li>
        </ul>
      </div>
      <div class="col-md-4" style="opacity: 0.3;">
        <h2>Dokumentation</h2>
        <p>Hier findest Du Hilfe für die Benutzung des Engelsystems:</p>
        <p>
          <a class="btn btn-primary" href="">für <span class="icon-icon_angel"></span> Engel <small>(Helfer)</small> <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">für Supporter <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">für Bürokraten <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
        <p>
          <a class="btn btn-default" href="">für Administratoren <span class="glyphicon glyphicon-chevron-right"></span></a>
        </p>
      </div>
      <div class="col-md-4">
        <h2>Kontakt</h2>
        <p>Wenn du einen Softwarefehler entdeckt oder Probleme bei der Installation deines eigenen Engelsystems hast, öffne bitte einen Issue auf Github unter:</p>
        <p>
          <a href="https://github.com/engelsystem/engelsystem/issues"><span class="glyphicon glyphicon-share"></span> https://github.com/engelsystem/engelsystem/issues</a>
        </p>
        <p>Wenn du ein Engelsystem für ein Chaos-Event benötigst, sende eine E-Mail an:</p>
        <p>
          <a href="mailto:contact@engelsystem.de"><span class="glyphicon glyphicon-envelope"></span> contact@engelsystem.de</a>
        </p>
        <h3 id="imprint">Impressum</h3>
        <p>
          Verantwortlich für die Internetseite <i>https://engelsystem.de</i> ist:
				</p>
        <?php echo file_get_contents('../imprint.html'); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8">
        <h2>Referenzen</h2>
        <table class="table">
          <tr>
            <th class="text-right"><span class="icon-icon_angel"></span> Engel</th>
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
            <td class="text-right">2.576</td>
            <td><a href="https://events.ccc.de/congress/2016/wiki/Main_Page">33C3 - 33. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">1.785</td>
            <td><a href="https://events.ccc.de/congress/2015/wiki/Main_Page">32C3 - 32. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">1.130</td>
            <td><a href="https://events.ccc.de/camp/2015/wiki/Main_Page">cccamp15 - Chaos Communication Camp 2015</a></td>
          </tr>
          <tr>
            <td class="text-right">99</td>
            <td><a href="http://eh15.easterhegg.eu/">Easterhegg 2015, Braunschweig</a></td>
          </tr>
          <tr>
            <td class="text-right">1.470</td>
            <td><a href="https://events.ccc.de/congress/2014/">31C3 - 31. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">35</td>
            <td><a href="https://hackover.de/">Hackover 2014, Hannover</a></td>
          </tr>
          <tr>
            <td class="text-right">41</td>
            <td><a href="https://mrmcd.net/">MRMCD14 - MetaRheinMainConstructionDays 2014, Darmstadt</a></td>
          </tr>
          <tr>
            <td class="text-right">111</td>
            <td><a href="http://eh14.easterhegg.eu/">Easterhegg 2014, Stuttgart</a></td>
          </tr>
          <tr>
            <td class="text-right">1.044</td>
            <td><a href="https://events.ccc.de/congress/2013/">30C3 - 30. Chaos Communication Congress, Hamburg</a></td>
          </tr>
          <tr>
            <td class="text-right">43</td>
            <td><a href="http://sigint.ccc.de/">Sigint 2013</a></td>
          </tr>
          <tr>
            <td class="text-right">511</td>
            <td><a href="https://events.ccc.de/congress/2012/">29C3 - 29. Chaos Communication Congress, Hamburg</a></td>
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
