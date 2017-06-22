<?php
$dataElec = 0;
$dataEau = 0;
if(!$dataElec){
  $dataElec =    [['Date', 'Valeur'],
['0',  0]
];
}
if(!$dataEau){
  $dataEau =    [['Date', 'Valeur'],
['0',  0]
];
}
if(!isset($_SESSION["nomMaison"])){
  $titre = "Choisissez une maison pour accéder a sa consommation";
}else{
  $titre = "Consommation de : ".$_SESSION['nomMaison'];
}
?>
<script  type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script  type="text/javascript" src="js/drawCharts.js"></script>

<div class="center">
  <h2><?php echo($titre);?></h2>

  <div class="conteneur">
    <button class="boutton n2" onclick='dessin("Electricité",<?php echo (json_encode($dataElec))?>)'>Electricité</button>
    <button class="boutton n2" onclick='dessin("Eau",<?php echo (json_encode($dataElec))?>)'>Eau</button>
  </div>

    <div id="resultat"></div>
</div>
