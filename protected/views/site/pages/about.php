<?php
/* @var $this SiteController */
session_start();
$this->breadcrumbs=array('About');

if(isset($_SESSION['email'])){
     $this->menu= array(
     array('label'=>'Thông Tin Người Dùng', 'url'=>array('taikhoan/create')),
     array('label'=>'Học Tập', 'url'=>array('contact')),
     array('label'=>'Kỹ năng', 'url'=>array('#')),
     array('label'=>'Nghề Nghiệp', 'url'=>array('#')),
     array('label'=>'Hoạt Động', 'url'=>array('#')),
     );
?>

<h1>About</h1>
<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.
</p>
   
<?php
}
else{
    $this->redirect(array('login'));
}
?>