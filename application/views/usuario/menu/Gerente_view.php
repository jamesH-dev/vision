<div class="main-panel">
  <div class="content"> 
	<div class="page-inner">
	  <div class="page-header">
			<h4 class="page-title">PREMIAÇÃO <?=$loja?></h4>
	  </div><!-- FIM DO PAGE HEADER -->
	  <div class="row">
		  	<div class="col">
		  		<div class="card">
			 		<div class="card-header">
						<div class="card-title">
							<i class="fas fa-mobile-alt col text-right" style="font-size: 25px;"></i>
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
											<td>80%</td>
											<td>2%</td>
										</tr>
										<tr>
											<td>90%</td>
											<td>5%</td>
										</tr>
										<tr>
											<td>100%</td>
											<td>10%</td>
										</tr>
										<tr>
											<td>110%</td>
											<td>12%</td>
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
							<i class="fas fa-clipboard-check col text-right" style="font-size: 25px;"></i>
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
											<td>80%</td>
											<td>0,5%</td>
										</tr>
										<tr>
											<td>90%</td>
											<td>1%</td>
										</tr>
										<tr>
											<td>110%</td>
											<td>2%</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
	  			</div>
		  	</div>
	  </div> <!-- FIM ROW PARÂMETROS -->
	  	<div class="card">
	  		<div class="card-header">
	  			<div class="card-title">
	  				<i class="fas fa-clipboard-check" style="font-size: 25px;"></i> Premiação - Serviços
	  			</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="table-responsive">
			  		<table class="table table-responsive table-hover text-center ">
			  			<thead>
			  				<tr>
			  					<th></th>
			  					<th colspan="4" class="table-bordered"><i class="far fa-chart-bar" style="font-size: 25px;"></i> Resultado</th>
			  					<th colspan="3" class="table-bordered"><i class="fas fa-recycle" style="font-size: 25px;"></i> Descontos</th>
			  					<th colspan="3"><i class="fas fa-coins" style="font-size: 25px;"></i> Cálculo Final</th>
			  				</tr>
			  				<tr>
			  					<th>Consultor</th>
			  					<th class="table-bordered direita">Meta</th>
			  					<th>Realizado</th>
			  					<th>Atingimento</th>
			  					<th>Premiação</th>
			  					<th class="table-bordered direita">Estornos</th>
			  					<th>AST*</th>
			  					<th class="table-bordered esquerda">UNR**</th>
			  					<th>Líquido</th>
			  					<th>APCA</th>
			  					<th>R$</th>
			  					
			  				</tr>
			  			</thead>
			  			<tbody>
	  					<?php foreach ($vendedores as $key => $value): ?>
			  				<tr>
			  					<td class="table-bordered esquerda">
			  						<?= $value->vendedor_vendas_servicos?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$meta = $ci->Gerente_model->busca_meta($value->vendedor_vendas_servicos, 1);
			  							echo "R$".number_format($meta->servico_meta,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$real = $ci->Gerente_model->busca_realizado($value->vendedor_vendas_servicos, 1);
			  							echo "R$".number_format($real->remuneracao_vendas_servicos,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Gerente_model->atingimento($value->vendedor_vendas_servicos, 1);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td class="table-bordered esquerda">
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Gerente_model->verifica_premiacao($value->vendedor_vendas_servicos, 1);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td>
			  						<?php
			  							$ci =& get_instance();
			  							$estorno = $ci->Gerente_model->busca_estorno($value->vendedor_vendas_servicos);
			  							echo "R$ ".number_format($estorno->assinatura_estornos,2,',','.');
			  						?>
			  					</td>
			  					<td>R$ 100,00</td>
			  					<td class="table-bordered esquerda">R$ 100,00</td>
			  					<td>R$ 1000,00</td>
			  					<td>R$ 100,00</td>
			  					<td>R$ 1000,00</td>
			  					<!--<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Gerente_model->calcula_premiacao($value->vendedor_vendas_servicos, 1);
			  							echo "R$ ".number_format($atingido,2,',','.');
			  						?>
			  					</td>-->
			  				</tr>
	  					<?php endforeach; ?>
			  			</tbody>
			  			<caption class="text-right">
			  				*Altas sem tráfego <br> **Upgrades não remuneráveis
			  			</caption>
			  		</table>
	  			</div>
	  		</div><!-- FIM DO CARD-BODY -->
	  	</div>
	  	<div class="card">
	  		<div class="card-header">
	  			<div class="card-title">
	  				<i class="fas fa-mobile-alt" style="font-size: 25px;"></i> Premiação - Produtos
	  			</div>
	  		</div>
	  		<div class="card-body">
	  			<div class="table-responsive">
			  		<table class="table table-hover text-center ">
			  			<thead>
			  				<tr>
			  					<th>Consultor</th>
			  					<th class="table-bordered direita">Meta</th>
			  					<th>Realizado</th>
			  					<th>Atingimento</th>
			  					<th>Premiação</th>
			  					<th>Total</th>
			  					<th>Serviço + Produto</th>
			  					
			  				</tr>
			  			</thead>
			  			<tbody>
	  					<?php foreach ($vendedores as $key => $value): ?>
			  				<tr>
			  					<td class="table-bordered esquerda">
			  						<?= $value->vendedor_vendas_servicos?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$meta = $ci->Gerente_model->busca_meta($value->vendedor_vendas_servicos, 2);
			  							echo "R$".number_format($meta->produto_meta,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$real = $ci->Gerente_model->busca_realizado($value->vendedor_vendas_servicos, 2);
			  							echo "R$".number_format($real->valor_vendas_produtos,2,',','.');
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Gerente_model->atingimento($value->vendedor_vendas_servicos, 2);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td class="table-bordered esquerda">
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Gerente_model->verifica_premiacao($value->vendedor_vendas_servicos, 2);
			  							echo number_format($atingido,2,',','.')."%";
			  						?>
			  					</td>
			  					<td>
			  						<?php 
			  							$ci =& get_instance();
			  							$atingido = $ci->Gerente_model->calcula_premiacao($value->vendedor_vendas_servicos, 2);
			  							echo "R$ ".number_format($atingido,2,',','.');
			  						?>
			  					</td>
			  					<td class="table-active">
			  						<?php 
			  							$ci =& get_instance();
			  							$total = $ci->Gerente_model->calcula_premiacao($value->vendedor_vendas_servicos, 2) + $ci->Gerente_model->calcula_premiacao($value->vendedor_vendas_servicos, 1);
			  							echo "R$ ".number_format($total,2,',','.');
			  						?>
			  					</td>
			  				</tr>
	  					<?php endforeach; ?>
			  			</tbody>
			  		</table>
	  			</div>
	  		</div><!-- FIM DO CARD-BODY -->
	  		<div class="card-header text-right">
	  			<div class="card-title">
	  				Total:
	  				<?php 
	  					$ci =& get_instance();
	  					$total = $this->Gerente_model->resultado_final($value->vendedor_vendas_servicos);
	  					echo "R$ ".number_format($total,2,',','.');
	  				?>
	  			</div>
	  		</div>
	  	</div>
	  
	       
	</div><!-- FIM DO PAGE INNER -->
  </div>

</div><!-- FIM DO MAIN PANEL -->