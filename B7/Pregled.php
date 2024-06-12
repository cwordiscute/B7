<html>
<head>
<link rel="stylesheet" href="CSS/stil.css">
<meta  http-equiv="Content-Type" content="text/html;charset=UTF-8">
</head>
<body>
<title>Biblioteka</title>

<div class="menu">
<ul>
<li><a href="Pocetna.php" >Početna</a></li>
<li><a href="Pregled.php" >Pregled</a></li>
<li><a href="O_autoru.html" >O autoru</a></li>
<li><a href="Uputstvo.html" >Uputstvo</a></li>
</ul>
</div>


<?php 

$doc = new DOMDocument;
$doc->load('biblioteka.xml');

$stylesheet = new DOMDocument;
$stylesheet->load('biblioteka.xsl');

$proc = new XSLTProcessor();
$proc->importStylesheet($stylesheet);
echo $proc->transformToXML($doc);



?>

</body>
</html>