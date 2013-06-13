	<div class="span12">
		<h2>Baba da Diretoria</h2>
		<p>Desde 2008 sendo o melhor baba das terças feiras.</p>
	</div>
	<div class="row-fluid">
		<div class="span6">
			<h3>Dados do último baba</h3>
			<table class="table table-striped table-bordered">
				<thead>
					<th>Jogador</th>
					<th>G</th>
					<th>GC</th>
					<th>CA</th>
					<th>CV</th>
				</thead>
				<tbody>
					<tr>
						<td>Marcelo</td>
						<td>1</td>
						<td>0</td>
						<td>1</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Monteiro</td>
						<td>0</td>
						<td>0</td>
						<td>1</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Dui</td>
						<td>1</td>
						<td>0</td>
						<td>1</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Daniel</td>
						<td>6</td>
						<td>0</td>
						<td>1</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Jorge</td>
						<td>3</td>
						<td>0</td>
						<td>0</td>
						<td>0</td>
					</tr>
					<tr>
						<td>Neto</td>
						<td>2</td>
						<td>0</td>
						<td>1</td>
						<td>0</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="span6"><?=$this->load->view('templates/gols-por-partida');?></div>
		<div class="span12">
			<div class="hero-unit">
				<h3>Gols Acumulado</h3>
				<?=$this->load->view('templates/gols-acumulado');?>
			</div>
		</div>
		<div class="span12">
			<h3>Gols por mês</h3>
			<?=$this->load->view('templates/gols-por-mes');?>
		</div>
	</div>