<script type='text/javascript' src='https://www.google.com/jsapi'></script>
<script type='text/javascript'>
  google.load('visualization', '1', {packages:['table']});
  google.setOnLoadCallback(drawTable);
  function drawTable() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Jogador');
    data.addColumn('number', 'GP');
    data.addColumn('number', 'GC');
    data.addColumn('number', 'CA');
    data.addColumn('number', 'CAZ');
    data.addColumn('number', 'CV');
    data.addRows([
      ['Daniel',  100, 3, 6, 1, 1],
      ['Neto',  99, 5, 3, 0, 1],
      ['Dui',  19, 6, 3, 2, 2],
      ['Jorge',  20, 7, 2, 1, 0],
      ['Monteiro',  29, 1, 3, 5, 1]
    ]);

    var table = new google.visualization.Table(document.getElementById('gol-acumulado'));
    table.draw(data, {showRowNumber: true});
  }
</script>
<div id='gol-acumulado'></div>