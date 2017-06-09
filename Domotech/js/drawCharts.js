function dessin(titre,data){
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart(titre));

  function drawChart(titre) {

    var data = google.visualization.arrayToDataTable([data

    ]);

    var options = {
      title: titre,
      hAxis: {title: "date",  titleTextStyle: {color: '#333'}},
      vAxis: {minValue: 0}
    };

    var chart = new google.visualization.AreaChart(document.getElementById('resultat'));
    chart.draw(data, options);
  }
}
/*
["Year", "Sales", "Expenses"],
 ["2013",  1000,      400],
 ["2014",  1170,      460],
 ["2015",  660,       1120],
 ["2016",  1030,      540]
*/
