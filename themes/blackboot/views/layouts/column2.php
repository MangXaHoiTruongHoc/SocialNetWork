<?php $this->beginContent('//layouts/index'); ?>
    <div class="row">
        <div class="col-md-3">
        		<div class='widget'>
        			 <h4 class="innerAll bg-inverse margin-none">Tổng Quan</h4>

		         <?php
					$this->beginWidget('zii.widgets.CPortlet', array(
						
					));
					$this->widget('zii.widgets.CMenu', array(
						'items'=>$this->menu,
						'htmlOptions'=>array('class'=>'list-group list-group-1 margin-none borders-none animated fadeInUp','style'=>'list-style:none'),
					));
					$this->endWidget();
				?>
				</div>
			
		</div><!-- sidebar col-md-3 -->

		<div class="col-md-9">
				<div class='widget'>
					<div class='"widget-body padding-none animated fadeInUp'>
						<?php echo $content; ?>
					</div>
				</div>
		</div>

	</div>
	
<?php $this->endContent(); ?>

