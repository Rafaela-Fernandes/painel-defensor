
		
			<main> 
                <!-- <?= $this->element('alertas');?> -->
				
               <section>
               	   <?= $this->element('../Pages/_novoAtendimento-usuarioLogado')?>
               </section>
               
                <section>
                 	<?= $this->element('../Pages/_conteudo-principal')?>
				</section>
				
				
				<!-- Modal novo atendimento -->
				<?= $this->element('../Pages/_modal-novoAtendimento')?>
				
				<!-- Modais informações do dia-->
				<?= $this->element('../Pages/_modal-audiencias')?>
			    <?= $this->element('../Pages/_modal-agendamentos')?>
			    
			     <!-- Modais informações da tabela extrajudicial resoluçao-->
			     <?= $this->element('../Pages/_modal-maisInformacao-orgao')?>
			     <?= $this->element('../Pages/_modal-maisInformacao-empresa')?>
			    
			</main>
	
	