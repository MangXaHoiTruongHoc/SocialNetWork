<?php
/* @var $this SiteController */
session_start();

if(isset($_SESSION['email'])){

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