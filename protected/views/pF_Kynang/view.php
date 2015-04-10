<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */

//$this->menu=array(
//	array('label'=>'List PF_Kynang', 'url'=>array('index')),
//	array('label'=>'Create PF_Kynang', 'url'=>array('create')),
//	array('label'=>'Update PF_Kynang', 'url'=>array('update', 'id'=>$model->pf_ma_ky_nang)),
//	array('label'=>'Delete PF_Kynang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_ky_nang),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage PF_Kynang', 'url'=>array('admin')),
//);
$this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Thông Tin Bổ Sung', 'url'=>array('pf_ttbsnguoidung/create')),
     array('label'=>'Tốt Nghiệp', 'url'=>array('pf_totnghiep/create')),
     array('label'=>'Ngoại Ngữ', 'url'=>array('#')),
     array('label'=>'Kỹ Năng', 'url'=>array('pf_kynang/create')),
     array('label'=>'Hoạt Động Học Tập', 'url'=>array('#')),
     array('label'=>'Hoạt Động Ngoại Khóa', 'url'=>array('#')),
     array('label'=>'Kinh Nghiệm Làm Việc', 'url'=>array('#')),
     array('label'=>'Mục Tiêu Nghề Nghiệp', 'url'=>array('#')),
     );
?>


<div class="kynang">
    <div class="re_up1">
    <p style="text-align: right;"><a href='index.php?r=pf_kynang/update&id=<?php echo($model->pf_ma_ky_nang)?>'>Sửa</a>
     
    </p>
    </div>

    <?php $this->widget('zii.widgets.CDetailView', array(
    	'data'=>$model,
    	'attributes'=>array(
    		'pf_ky_nang',
    		'pf_so_nam_kinh_nghiem',
    		'pf_mo_ta',
    	),
    )); ?>
</div>