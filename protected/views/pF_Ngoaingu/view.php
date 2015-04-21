<?php
/* @var $this PF_NgoainguController */
/* @var $model PF_Ngoaingu */

	$mucdo = PF_Mucdongoaingu::model()->findAll();
	$list = array();
	foreach ($mucdo as $key ) {
		$list[$key->pf_ma_muc_do_nn] = $key->pf_muc_do;
	}

$this->menu= array(
     array('label'=>'Thông tin người dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông tin bổ sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại ngữ', 'url'=>array('pf_ngoaingu/create')),
     array('label'=>'Kỹ năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt động học tập', 'url'=>array('pf_hoatdonghoctap/create')),
     array('label'=>'Hoạt động ngoại khóa', 'url'=>array('pf_hoatdongngoaikhoa/create')),
     array('label'=>'Kinh nghiệm làm việc', 'url'=>array('#')),
     array('label'=>'Mục tiêu nghề nghiệp', 'url'=>array('#')),
     );
?>
	<div clas="widget ngoaingu<?php echo $model->pf_ma_ngoai_ngu?> ">
		<table class="table">
			<tbody>
				<tr>
					<th style="width:100px">Ngoại ngữ:</th>
					<td style="width:150px"><?php echo $model->pf_ten_ngoai_ngu?>
					
					</td>
					<th style="width:100px">Mức Độ:</th>
					<td><?php echo $list[$model->pf_ma_muc_do_nn]?>
						<?php
	            		if(!isset(yii::app()->session['matk2'])){
		                //Delete ngoại ngữ      
		                $deleteajax= CHtml::ajaxLink('Xóa',
		                "index.php?r=pf_ngoaingu/delete&id=$model->pf_ma_ngoai_ngu",
		                array(
		                                'type'=>'post',
		                                'data' => null,
		                                'success' => 'function(){
		                                    alert("Xóa thành công");
		                                    $(".ngoaingu'.$model->pf_ma_ngoai_ngu.'").
		                                    slideUp("slow",function(){$(".ngoaingu'.$model->pf_ma_ngoai_ngu.'").remove();});
		                                }'
		                ),
		                array( 'confirm'=>'Ban muon xoa chu',));
		                //Kiem tra nguoi dùng để ẩn hiện action
		                echo "<div class='re_up' style='float: right; display:display'>
		                            
		                            <a href='index.php?r=pf_ngoaingu/update&id={$model->pf_ma_ngoai_ngu}'>Sửa</a> 
		                            {$deleteajax} </div>";
		            	}
			   		    ?>	
					</td>
				</tr>
			</tbody>
		</table>
</div>
