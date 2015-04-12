<?php
/* @var $this PF_KynangController */
/* @var $model PF_Kynang */

//$this->menu=array(
//  array('label'=>'List PF_Kynang', 'url'=>array('index')),
//  array('label'=>'Create PF_Kynang', 'url'=>array('create')),
//  array('label'=>'Update PF_Kynang', 'url'=>array('update', 'id'=>$model->pf_ma_ky_nang)),
//  array('label'=>'Delete PF_Kynang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->pf_ma_ky_nang),'confirm'=>'Are you sure you want to delete this item?')),
//  array('label'=>'Manage PF_Kynang', 'url'=>array('admin')),
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


<div class="kynang<?php echo $model->pf_ma_ky_nang?>">
         <?php      
          $deleteajax= CHtml::ajaxLink('Xóa',
                "index.php?r=pf_kynang/delete&id=$model->pf_ma_ky_nang",
                array(
                                'type'=>'post',
                                'data' => null,
                                'success' => 'function(){
                                    alert("Xóa thành công");
                                    $(".kynang'.$model->pf_ma_ky_nang.'").
                                    slideUp("slow",function(){$(".kynang'.$model->pf_ma_ky_nang.'").remove();});
                                }'
                ),
                array( 'confirm'=>'Ban muon xoa chu',));
        ?>

       
    <?php $this->widget('zii.widgets.CDetailView', array(
        'data'=>$model,
        'attributes'=>array(
            array('label'=>$model->getAttributeLabel('pf_ky_nang'),
                'type'=>'raw',
                'value'=>$model->pf_ky_nang."<div class='re_up' style='float: right; display:display'>
                <a href='index.php?r=pf_danhgiahoso/create'>Đánh giá</a>
                <a href='index.php?r=pf_kynang/update&id={$model->pf_ma_ky_nang}'>Sửa</a> 
            {$deleteajax} </div>"
                ),
            'pf_so_nam_kinh_nghiem',
            'pf_mo_ta',
        ),
    )); ?>
    <p></p>
</div>
