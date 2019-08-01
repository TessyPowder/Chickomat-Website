<?php require_once("res/x5engine.php"); ?><!DOCTYPE html><!-- HTML5 -->
<html lang="de-DE" dir="ltr">
	<head>
		<title>Suchen - Chickomat</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="author" content="Jonathan Treffler" />
		<meta name="generator" content="Incomedia WebSite X5 Compact 11.0.8.31 - www.websitex5.com" />
		<meta name="viewport" content="width=960" />
		<link rel="icon" href="favicon.png" type="image/png" />
		<link rel="stylesheet" type="text/css" href="style/reset.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css" media="screen" />
		<link rel="stylesheet" type="text/css" href="style/menu.css" media="screen" />
		<!--[if lte IE 7]><link rel="stylesheet" type="text/css" href="style/ie.css" media="screen" /><![endif]-->
		
		<script type="text/javascript" src="res/jquery.js?31"></script>
		<script type="text/javascript" src="res/x5engine.js?31"></script>
		
	</head>
	<body>
		<div id="imHeaderBg"></div>
		<div id="imFooterBg"></div>
		<div id="imPage">
			<div id="imHeader">
				<h1 class="imHidden">Suchen - Chickomat</h1>
				
				<div onmouseover="$('#imHoverImage_0').css('display','')" style="position: absolute; top: 173px; left: 12px; width: 179px; height: 172px;"><img id="imHoverImage_0" src="images/Jugend-forscht2.png" alt="" onmouseout="$(this).css('display','none');" style="display: none; width: 179px; height: 172px;" /></div>
			</div>
			<a class="imHidden" href="#imGoToCont" title="Überspringen Sie das Hauptmenü">Direkt zum Seiteninhalt</a>
			<a id="imGoToMenu"></a><p class="imHidden">Hauptmenü:</p>
			<div id="imMnMnGraphics"></div>
			<div id="imMnMn" class="auto">
				<ul class="auto">
					<li id="imMnMnNode0">
						<a href="index.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Home</span></span>
							</span>
						</a>
					</li><li id="imMnMnNode7">
						<span class="imMnMnFirstBg">
							<span class="imMnMnLevelImg"></span><span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Projekte</span></span>
						</span>
						<ul class="auto">
							<li id="imMnMnNode6" class="imMnMnFirst">
								<span class="imMnMnBorder">
									<span class="imMnMnLevelImg"></span><span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Chickomat</span></span>
								</span>
								<ul class="auto">
									<li id="imMnMnNode4" class="imMnMnFirst">
										<a href="chickomat-index.html">
											<span class="imMnMnBorder">
												<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Infos</span></span>
											</span>
										</a>
									</li><li id="imMnMnNode3" class="imMnMnMiddle">
										<a href="chickomat-bildergalerie.html">
											<span class="imMnMnBorder">
												<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Bildergalerie</span></span>
											</span>
										</a>
									</li><li id="imMnMnNode5" class="imMnMnLast">
										<a href="downloads.html">
											<span class="imMnMnBorder">
												<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Downloads</span></span>
											</span>
										</a>
									</li>
								</ul>
							</li><li id="imMnMnNode8" class="imMnMnLast">
								<span class="imMnMnBorder">
									<span class="imMnMnLevelImg"></span><span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Projekt 2</span></span>
								</span>
								<ul class="auto">
									<li id="imMnMnNode9" class="imMnMnFirst">
										<a href="projekt-2-index.html">
											<span class="imMnMnBorder">
												<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Infos</span></span>
											</span>
										</a>
									</li><li id="imMnMnNode10" class="imMnMnMiddle">
										<a href="bildergalerie-1.html">
											<span class="imMnMnBorder">
												<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Bildergalerie</span></span>
											</span>
										</a>
									</li><li id="imMnMnNode11" class="imMnMnLast">
										<a href="downloads-1.html">
											<span class="imMnMnBorder">
												<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Downloads</span></span>
											</span>
										</a>
									</li>
								</ul>
							</li>
						</ul>
					</li><li id="imMnMnNode12">
						<a href="about.html">
							<span class="imMnMnFirstBg">
								<span class="imMnMnTxt"><span class="imMnMnImg"></span><span class="imMnMnTextLabel">Über uns</span></span>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div id="imContentGraphics"></div>
			<div id="imContent">
				<a id="imGoToCont"></a>
				<h2 id="imPgTitle">Suchergebnisse</h2><?php
$search = new imSearch();
$keys = isset($_GET['search']) ? $_GET['search'] : "";
$page = isset($_GET['page']) ? $_GET['page'] : 0;
$type = isset($_GET['type']) ? $_GET['type'] : "pages"; ?>
<div class="searchPageContainer">
<?php echo $search->search($keys, $page, $type); ?>
</div>

				<div class="imClear"></div>
			</div>
			<div id="imFooter">
				
			</div>
		</div>
		<span class="imHidden"><a href="#imGoToCont" title="Lesen Sie den Inhalt der Seite noch einmal durch">Zurück zum Seiteninhalt</a> | <a href="#imGoToMenu" title="Die Webseite neu einlesen">Zurück zum Hauptmenü</a></span>
		
		<noscript class="imNoScript"><div class="alert alert-red">Um diese Website nutzen zu können, aktivieren Sie bitte JavaScript.</div></noscript>
	</body>
</html>
