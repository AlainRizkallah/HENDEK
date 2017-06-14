function dessin(titre,donnees){
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart(titre));

  function drawChart(titre) {

    var data = google.visualization.arrayToDataTable(

  donnees

    );

    var options = {
      title: titre,
      hAxis: {title: "date",  titleTextStyle: {color: '#333'}},
      vAxis: {minValue: 0}
    };

    var chart = new google.visualization.AreaChart(document.getElementById('resultat'));
    chart.draw(data, options);
  }
}
