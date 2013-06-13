<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">google.load('visualization', '1');</script>
<script type="text/javascript">
	function drawVisualization() {
		var wrapper = new google.visualization.ChartWrapper({
			chartType: 'ColumnChart',
			dataTable: [['', 'Marcelo', 'Dui', 'Daniel', 'Jorge', 'Neto'],
			['11/06', 1, 1, 6, 3, 2]],
			options: {'title': 'Gols por partida'},
			containerId: 'gols-partida'
		});
		wrapper.draw();
	}
	google.setOnLoadCallback(drawVisualization);
</script>
<div id="gols-partida" style="width: 570px; height: 400px;"></div>