 </div><!-- FIM DO WRAPPER -->
 <footer>
	<!--   Core JS Files   -->
	<script src="<?=base_url() ?>assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="<?=base_url() ?>assets/js/core/popper.min.js"></script>
	<script src="<?=base_url() ?>assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="<?=base_url() ?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="<?=base_url() ?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="<?=base_url() ?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Moment JS -->
	<script src="<?=base_url() ?>assets/js/plugin/moment/moment.min.js"></script>

	<!-- Chart JS -->
	<script src="<?=base_url() ?>assets/js/plugin/chart.js/chart.min.js"></script>

	<!-- jQuery Sparkline -->
	<script src="<?=base_url() ?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

	<!-- Chart Circle -->
	<script src="<?=base_url() ?>assets/js/plugin/chart-circle/circles.min.js"></script>

	<!-- Datatables -->
	<script src="<?=base_url() ?>assets/js/plugin/datatables/datatables.min.js"></script>

	<!-- Bootstrap Notify -->
	<script src="<?=base_url() ?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

	<!-- Bootstrap Toggle -->
	<script src="<?=base_url() ?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

	<!-- jQuery Vector Maps -->
	<script src="<?=base_url() ?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
	<script src="<?=base_url() ?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

	<!-- Google Maps Plugin -->
	<script src="<?=base_url() ?>assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Sweet Alert -->
	<script src="<?=base_url() ?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Azzara JS -->
	<script src="<?=base_url() ?>assets/js/ready.min.js"></script>

	<script src="<?=base_url() ?>assets/js/scripts.js"></script>

	<!-- DATA TABLE -->
	<script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
		          "language": {
		                "lengthMenu": "Mostrando _MENU_ registros por página",
		                "zeroRecords": "Nada encontrado",
		                "info": "Mostrando página _PAGE_ de _PAGES_",
		                "infoEmpty": "Nenhum registro disponível",
		                "infoFiltered": "(filtrado de _MAX_ registros no total)",
		                "search":         "Buscar:",
		               	"paginate": {
		                   "sFirst":    "Primeiro",
		                   "sPrevious": "Anterior",
		                   "sNext":     "Próximo",
		                   "sLast":     "Último"
                		}
		                
		            }
		        });

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>

	<!-- GRÁFICO FMB GERAL -->
	<script>
		var cData = JSON.parse(`<?php echo $info_grafico; ?>`);
		doughnutChart = document.getElementById('doughnutChart').getContext('2d');
		var myDoughnutChart = new Chart(doughnutChart, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: cData.valor,
					backgroundColor: ['#7B68EE','#411947','#9370DB', '#9400D3', '#BA55D3', '#8B008B', '#FF00FF', '#EE82EE', '#DA70D6']
				}],

				labels: cData.rotulo
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO FMB LOJA -->
	<?php 
		#FMB LOJA
        if ($this->input->get('loja') == 'CENTRO')
        {
            $loja = 'LOJA CENTRO';
        }

        elseif ($this->input->get('loja') == 'SHOPPING')
        {
            $loja = 'LOJA SHOPPING';
        }

        elseif ($this->input->get('loja') == 'JANUARIA')
        {
            $loja = 'LOJA JANUÁRIA';
        }

        elseif ($this->input->get('loja') == 'S_FRANCISCO')
        {
            $loja = 'LOJA SÃO FRANCISCO';
        }

        elseif ($this->input->get('loja') == 'C_JESUS')
        {
            $loja = 'LOJA CORAÇÃO DE JESUS';
        }

        elseif ($this->input->get('loja') == 'PORTEIRINHA')
        {
            $loja = 'LOJA PORTEIRINHA';
        }

        elseif ($this->input->get('loja') == 'JANAUBA')
        {
            $loja = 'LOJA JANAÚBA';
        }

        elseif ($this->input->get('loja') == 'JAIBA')
        {
            $loja = 'LOJA JAÍBA';
        }

        elseif ($this->input->get('loja') == 'B_MINAS')
        {
            $loja = 'LOJA BRASÍLIA DE MINAS';
        }

        elseif ($this->input->get('loja') == 'MANGA')
        {
            $loja = 'LOJA MANGA';
        }

        else 
        {
            $loja = NULL;
        }

        $info_loja = $this->Geral_gte_model->lista_fmb($loja);
        $total_loja = $this->Geral_gte_model->quantidade_g2($loja);

        foreach ($info_loja as $linha_loja)
        {
            $dados_loja['rotulo'][] = "R$ ".number_format($linha_loja->valor_vendas_servicos,2,',','.');
            $dados_loja['valor'][] = $linha_loja->CONTAGEM;
        }

        @$dados_loja = json_encode($dados_loja);
	?>
	<script>
		var cData = JSON.parse(`<?php echo $dados_loja; ?>`);
		doughnutChart_loja = document.getElementById('doughnutChart_loja').getContext('2d');
		var myDoughnutChart_loja = new Chart(doughnutChart_loja, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: cData.valor,
					backgroundColor: ['#411947','#7B68EE','#BA55D3', '#9400D3', '#9370DB', '#8B008B', '#FF00FF', '#EE82EE', '#DA70D6']
				}],

				labels: cData.rotulo
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO EMAIL GERAL -->
	<?php 
	    $this->db->select('COUNT(email_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->where('email_vendas_servicos!=', '');
	    $emails_cadastrados_query = $this->db->get();
	    $emails_cadastrados = $emails_cadastrados_query->row();

	    $this->db->select('COUNT(email_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->where('email_vendas_servicos', '');
	    $emails_n_cadastrados_query = $this->db->get();
	    $emails_n_cadastrados = $emails_n_cadastrados_query->row();

	    $relacao_emails['cadastrados'][] = $emails_cadastrados->CONTAGEM;
	    $relacao_emails['ncadastrados'][] = $emails_n_cadastrados->CONTAGEM;
	    $relacao_emails = json_encode($relacao_emails);

	?>
	<script>
		var cData_email = JSON.parse(`<?php echo $relacao_emails; ?>`);
		doughnutChart_email = document.getElementById('doughnutChart_email').getContext('2d');
		var myDoughnutChart_email = new Chart(doughnutChart_email, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_email.cadastrados, cData_email.ncadastrados], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Cadastrados', 'Não Cadastrados']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO PÓS PAGO GERAL -->
	<?php 
	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'mensal');
	    $this->db->where('grupo_vendas_servicos', 'G1');
	    $pos_mensal_query = $this->db->get();
	    $pos_mensal = $pos_mensal_query->row();

	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'anual');
	    $this->db->where('grupo_vendas_servicos', 'G1');
	    $pos_anual_query = $this->db->get();
	    $pos_anual = $pos_anual_query->row();;

	    $relacao_pos_pago['mensal'][] = $pos_mensal->CONTAGEM;
	    $relacao_pos_pago['anual'][] = $pos_anual->CONTAGEM;
	    $relacao_pos_pago = json_encode($relacao_pos_pago);

	?>
	<script>
		var cData_pos = JSON.parse(`<?php echo $relacao_pos_pago; ?>`);
		doughnutChart_pos_pago = document.getElementById('doughnutChart_pos_pago').getContext('2d');
		var myDoughnutChart_pos_pago = new Chart(doughnutChart_pos_pago, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_pos.anual, cData_pos.mensal], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Anual', 'Mensal']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO CONTROLE GERAL -->
	<?php 
	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'mensal');
	    $this->db->where('grupo_vendas_servicos', 'G2');
	    $controle_mensal_query = $this->db->get();
	    $controle_mensal = $controle_mensal_query->row();

	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'anual');
	    $this->db->where('grupo_vendas_servicos', 'G2');
	    $controle_anual_query = $this->db->get();
	    $controle_anual = $controle_anual_query->row();;

	    $relacao_controle['mensal'][] = $controle_mensal->CONTAGEM;
	    $relacao_controle['anual'][] = $controle_anual->CONTAGEM;
	    $relacao_controle = json_encode($relacao_controle);

	?>
	<script>
		var cData_controle = JSON.parse(`<?php echo $relacao_controle; ?>`);
		doughnutChart_controle = document.getElementById('doughnutChart_controle').getContext('2d');
		var myDoughnutChart_controle = new Chart(doughnutChart_controle, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_controle.anual, cData_controle.mensal], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Anual', 'Mensal']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO EMAIL LOJA -->
	<?php 
	    $this->db->select('COUNT(email_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->where('email_vendas_servicos!=', '');
	    $this->db->where('filial_vendas_servicos', $loja);
	    $emails_cadastrados_loja_query = $this->db->get();
	    $emails_cadastrados_loja = $emails_cadastrados_loja_query->row();

	    $this->db->select('COUNT(email_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->where('email_vendas_servicos', '');
	    $this->db->where('filial_vendas_servicos', $loja);
	    $emails_n_cadastrados_loja_query = $this->db->get();
	    $emails_n_cadastrados_loja = $emails_n_cadastrados_loja_query->row();

	    $relacao_emails_loja['cadastrados'][] = $emails_cadastrados_loja->CONTAGEM;
	    $relacao_emails_loja['ncadastrados'][] = $emails_n_cadastrados_loja->CONTAGEM;
	    $relacao_emails_loja = json_encode($relacao_emails_loja);

	?>
	<script>
		var cData_email_loja = JSON.parse(`<?php echo $relacao_emails_loja; ?>`);
		doughnutChart_email_loja = document.getElementById('doughnutChart_email_loja').getContext('2d');
		var myDoughnutChart_email_loja = new Chart(doughnutChart_email_loja, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_email_loja.cadastrados, cData_email_loja.ncadastrados], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Cadastrados', 'Não Cadastrados']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO PÓS PAGO LOJA -->
	<?php 
	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'mensal');
	    $this->db->where('grupo_vendas_servicos', 'G1');
	    $this->db->where('filial_vendas_servicos', $loja);
	    $pos_mensal_loja_query = $this->db->get();
	    $pos_mensal_loja = $pos_mensal_loja_query->row();

	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'anual');
	    $this->db->where('grupo_vendas_servicos', 'G1');
	    $this->db->where('filial_vendas_servicos', $loja);
	    $pos_anual_loja_query = $this->db->get();
	    $pos_anual_loja = $pos_anual_loja_query->row();;

	    $relacao_pos_pago_loja['mensal'][] = $pos_mensal_loja->CONTAGEM;
	    $relacao_pos_pago_loja['anual'][] = $pos_anual_loja->CONTAGEM;
	    $relacao_pos_pago_loja = json_encode($relacao_pos_pago_loja);

	?>
	<script>
		var cData_pos_loja = JSON.parse(`<?php echo $relacao_pos_pago_loja; ?>`);
		doughnutChart_pos_pago_loja = document.getElementById('doughnutChart_pos_pago_loja').getContext('2d');
		var myDoughnutChart_pos_pago_loja = new Chart(doughnutChart_pos_pago_loja, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_pos_loja.anual, cData_pos_loja.mensal], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Anual', 'Mensal']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO CONTROLE LOJA -->
	<?php 
	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'mensal');
	    $this->db->where('grupo_vendas_servicos', 'G2');
	    $this->db->where('filial_vendas_servicos', $loja);
	    $controle_mensal_loja_query = $this->db->get();
	    $controle_mensal_loja = $controle_mensal_loja_query->row();

	    $this->db->select('COUNT(plano_vendas_servicos) AS CONTAGEM');
	    $this->db->from('vendas_servicos');
	    $this->db->like('plano_vendas_servicos', 'anual');
	    $this->db->where('grupo_vendas_servicos', 'G2');
	    $this->db->where('filial_vendas_servicos', $loja);
	    $controle_anual_loja_query = $this->db->get();
	    $controle_anual_loja = $controle_anual_loja_query->row();;

	    $relacao_controle_loja['mensal'][] = $controle_mensal_loja->CONTAGEM;
	    $relacao_controle_loja['anual'][] = $controle_anual_loja->CONTAGEM;
	    $relacao_controle_loja = json_encode($relacao_controle_loja);

	?>
	<script>
		var cData_controle_loja = JSON.parse(`<?php echo $relacao_controle_loja; ?>`);
		doughnutChart_controle_loja = document.getElementById('doughnutChart_controle_loja').getContext('2d');
		var myDoughnutChart_controle_loja = new Chart(doughnutChart_controle_loja, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_controle_loja.anual, cData_controle_loja.mensal], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Anual', 'Mensal']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

	<!-- GRÁFICO APARELHO UP GERAL -->
	
	<script>
		var cData_controle_loja = JSON.parse(`<?php echo $relacao_controle_loja; ?>`);
		doughnutChart_controle_loja = document.getElementById('doughnutChart_controle_loja').getContext('2d');
		var myDoughnutChart_controle_loja = new Chart(doughnutChart_controle_loja, {
			type: 'doughnut',
			data: {
				datasets: [{
					data: [cData_controle_loja.anual, cData_controle_loja.mensal], 
					backgroundColor: ['#411947','#BA55D3']
				}],

				labels: ['Anual', 'Mensal']
			},
			options: {
				responsive: true, 
				maintainAspectRatio: false,
				legend : {
					position: 'bottom'
				},
				pieceLabel: {
					render: 'percentage',
					fontColor: 'white',
					fontSize: 14,
				}
			}
		});
	</script>

 </footer>