<div class="main-panel">
  <div class="content">
	<div class="page-inner">
	  <div class="page-header">
			<h4 class="page-title">Premiação Coordenação</h4>
	  </div><!-- FIM DO PAGE HEADER -->
	  <div class="row">
		  	<div class="col">
		  		<div class="card">
			 		<div class="card-header">
						<div class="card-title">
							<i class="fas fa-clipboard-check col text-right" style="font-size: 25px;"></i>
							<strong>Parâmetros para Serviços</strong>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th>Atingimento</th>
											<th>Premiação</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>90%</td>
											<td>1%</td>
										</tr>
										<tr>
											<td>100%</td>
											<td>2%</td>
										</tr>
										<tr>
											<td>110%</td>
											<td>3%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
	  			</div>
		  	</div>
		  	<div class="col">
		  		<div class="card">
			 		<div class="card-header">
						<div class="card-title">
							<i class="fas fa-mobile-alt col text-right" style="font-size: 25px;"></i>
							<strong>Parâmetros para Produtos</strong>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th>Atingimento</th>
											<th>Premiação</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>90%</td>
											<td>0,25%</td>
										</tr>
										<tr>
											<td>100%</td>
											<td>0,4%</td>
										</tr>
										<tr>
											<td>110%</td>
											<td>0,6%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
	  			</div>
		  	</div>
	  </div> <!-- FIM ROW PARÂMETROS -->
	  <?php foreach ($coordenadores as $key => $value): ?>
	  	<div class="card">
	  		<div class="card-header">
	  			<div class="card-title">
	  				<i class="fas fa-user"></i> <?= $value->coordenador_loja; ?>
	  			</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="table-responsive">
			  		<table class="table table-hover text-center">
			  			<thead>
			  				<tr>
			  					<th colspan="5"><i class="fas fa-clipboard-check" style="font-size: 25px;"></i> Serviços</th>
			  					<th colspan="5" class="table-bordered direita"><i class="fas fa-mobile-alt" style="font-size: 25px;"></i> Produtos</th>
			  				</tr>
			  				<tr>
			  					<th>Meta</th>
			  					<th>Realizado</th>
			  					<th>Atingimento</th>
			  					<th>Premiação</th>
			  					<th class="table-bordered esquerda">Total</th>
			  					<th>Meta</th>
			  					<th>Realizado</th>
			  					<th>Atingimento</th>
			  					<th>Premiação</th>
			  					<th>Total</th>
			  				</tr>
			  			</thead>
			  			<tbody>
			  				<tr>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$meta = $ci->Coordenador_model->busca_meta($value->coordenador_loja, 1);
			  							echo "R$".number_format($meta->servico_meta,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$real = $ci->Coordenador_model->busca_realizado($value->coordenador_loja, 1);
			  							echo "R$".number_format($real->remuneracao_vendas_servicos,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Coordenador_model->atingimento($value->coordenador_loja, 1);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Coordenador_model->verifica_premiacao($value->coordenador_loja, 1);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td class="table-bordered esquerda">
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Coordenador_model->calcula_premiacao($value->coordenador_loja, 1);
			  							echo "R$ ".number_format($atingido,2,',','.');
			  						?>
			  					</td>



			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$meta = $ci->Coordenador_model->busca_meta($value->coordenador_loja, 2);
			  							echo "R$".number_format($meta->produto_meta,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$real = $ci->Coordenador_model->busca_realizado($value->coordenador_loja, 2);
			  							echo "R$".number_format($real->valor_vendas_produtos,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Coordenador_model->atingimento($value->coordenador_loja, 2);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Coordenador_model->verifica_premiacao($value->coordenador_loja, 2);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Coordenador_model->calcula_premiacao($value->coordenador_loja, 2);
			  							echo "R$ ".number_format($atingido,2,',','.');
			  						?>
			  					</td>
			  				</tr>
			  			</tbody>
			  		</table>
	  			</div>
	  		</div><!-- FIM DO CARD-BODY -->
	  		<div class="card-header text-right">
	  			<div class="card-title">
	  				Total:
	  				<?php 
	  					$ci =& get_instance();
	  					$total = $this->Coordenador_model->resultado_final($value->coordenador_loja);
	  					echo "R$ ".number_format($total,2,',','.');
	  				?>
	  			</div>
	  		</div>
	  	</div>
	  <?php endforeach; ?>
	  
	       
	</div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->