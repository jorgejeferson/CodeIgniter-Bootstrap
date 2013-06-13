<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript"> google.load('visualization', '1', {packages: ['corechart']});</script>
<script type="text/javascript">
  function drawVisualization() {
    // Some raw data (not necessarily accurate)
    var $width = $("#gols-mes").outerWidth();
    var $data = google.visualization.arrayToDataTable([
      ['Mês',       'Marcelo', 'Daniel', 'Dui', 'Jorge', 'Neto'],
      ['Janeiro',   5,          8,       1,     8,       0],
      ['Fevereiro', 5,          8,       1,     8,       0],
      ['Março',     3,          2,       0,     1,       8],
      ['Abril',     1,          7,       1,     0,       7],
      ['Maio',      2,          1,       0,     1,       5],
      ['Junho',     1,          7,       2,     4,       6]
    ]);
  
    // Create and draw the visualization.
    var ac = new google.visualization.ColumnChart(document.getElementById('gols-mes'));
    ac.draw($data, {
      width: $width,
      height: 450,
      hAxis: {title: "Mês"}
    });
  }
  google.setOnLoadCallback(drawVisualization);
</script>
<div id="gols-mes"></div>