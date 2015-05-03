<?php
$this->layout="//layouts/print1";
		$matk = yii::app()->session['ma_tai_khoan'];
	  // Lấy chuyên nghành
        $chuyennganh = new PF_Chuyennganh;
        
        $listcn = PF_Chuyennganh::model()->findAll(array('select'=>'pf_ma_chuyen_nganh,pf_chuyen_nganh'));
        $listc =array();
        foreach($listcn as $l){
             $listc[$l->pf_ma_chuyen_nganh] = $l->pf_chuyen_nganh;
        }
       
        //  Lấy kết quả tốt nghiệp
        
        $ketqua = PF_Ketquatotnghiep::model()->findAll(array('select'=>'pf_ma_ket_qua_tn,pf_ket_qua'));
        $list = array();
        foreach($ketqua as $k){
           $listk[$k->pf_ma_ket_qua_tn] = $k->pf_ket_qua; 
        }
        // Nganhf nghe
        $nganhnghe = DC_Nganhnghe::model()->findAll();
					$listnn= array();
					foreach ($nganhnghe as $lnn ) {
						$listnn[$lnn->ma_nganh_nghe] = $lnn->ten_nganh_nghe;
					}
		// Loai cong viec
		$loaicv = PF_Loaicongviec::model()->findAll();
		$list = array();
		// vòng lặp lấy ra mức độ theo id 
		foreach ($loaicv as $key ) {
			$list[$key->pf_ma_loai_cv] = $key->pf_ten_loai_cv;
		}			
?>
  <?php
       $this->widget('ext.mPrint.mPrint', array(
            'id' => 'mprint1',  // !!!you have to set up this one if you want multiple prints per page
            'title' => 'Profile',        //the title of the document. Defaults to the HTML title
            'tooltip' => 'testing the print',    //tooltip message of the print icon. Defaults to 'print'
            'text' => 'Print', //text which will appear beside the print icon. Defaults to NULL
            'element' => '#print',      //the element to be printed.
            'exceptions' => array(     //the element/s which will be ignored
                '.summary',
                '.search-form'
            ),
            'publishCss' => true,       //publish the CSS for the whole page?

        ));
  ?>
	<div id="print">
		<div>
		<img src="D:\xampp\htdocs\yii\SocialNetWork\upload\avatar-51x51.jpg" alt="">		
	    </div>	
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Kim</h3>
            <p >anyone2080@gmail.com</p>
            <p >Ngày sinh: 20/12/2014</p> <p >Giới tính: nam</p>
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Thông tin chung</h3>
            <p >Chuyên ngành    Tin hoc quan ly</p>
            <p >Slogan    vui   len di</p>
            <p >Sở thích    adasd</p>
            <p >Dân tộc   adasd</p>
            <p >Tôn giáo   adasd</p>
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Mục tiêu nghề nghiệp</h3>
			<?php
			$mtnn = PF_Muctieunghenghiep::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
			foreach ($mtnn as $key ) {
			echo "<p ><b>Làm việc tại</b>-$key->pf_ten_cong_ty- <b>Ngành nghề</b> {$listnn[$key->ma_nganh_nghe]} - </p>
        		  <p ><b>Mục tiêu</b>-$key->pf_muc_tieu- <b>Loại công việc</b>-{$list[$key->pf_ma_loai_cv]}-<b>Nơi làm việc</b>-$key->pf_noi_lam_viec</p>";
			}
			?>
          
		</div>
		
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Tốt Nghiệp</h3>
            	<?php
            		
			        $matn = PF_Totnghiep::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
			          foreach($matn as $l){
			        echo "<p ><b>Tốt nghiệp trường</b>  -{$l->pf_ten_truong_tn}- <b>Kết quả</b> -{$listk[$l->pf_ma_ket_qua_tn]}- <b>Chuyên ngành</b>
			        -{$listc[$l->pf_ma_chuyen_nganh]}</p>
			        <p><b>Từ ngày</b> - {$l->pf_ngay_bat_dau}- <b>đến ngày</b> -{$l->pf_ngay_ket_thuc}  </p> ";              
                   }           
			?>
            	
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Kỹ năng</h3>
			<?php
			$kynang = PF_Kynang::model()->findAll(array('condition'=>'ma_tai_khoan = :matk','params'=>array(':matk'=>$matk)));
		    foreach($kynang as $k){
		        echo " <p ><b>Kỹ năng</b> -$k->pf_ky_nang- <b>Số năm kinh nghiệm </b> -$k->pf_so_nam_kinh_nghiem - 
            		   <b>Mô tả</b>-$k->pf_mo_ta </p>";
		        }
			?>
           
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Giải thưởng</h3>
			<?php
			 $ttgiaithuong = PF_Giaithuong::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
             foreach($ttgiaithuong as $k){
                 echo "<p ><b>Đạt được giải thưởng</b>-$k->pf_ten_giai_thuong- <b>Vào ngày</b>-$k->pf_ngay_nhan_giai-</p>
            	<p ><b>Mô tả</b>-$k->pf_mo_ta</p>";
             }
             
			?>
       
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Hoạt động học tập</h3>
			<?php
			$tthdht = PF_Hoatdonghoctap::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
             foreach($tthdht as $k){
                echo " <p ><b>Tham gia hoạt động</b>-$k->pf_ten_hoat_dong-<b>Từ ngày</b>-$k->pf_ngay_bat_dau-<b>Đến ngày</b>-$k->pf_ngay_ket_thuc-<b>Vai trò</b>- $k->pf_vai_tro-</p>
             <p><b>Mô tả</b>-$k->pf_mo_ta</p>";
             }
			?>
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Hoạt động ngoại khóa</h3>
			<?php
			 $tthdnk = PF_Hoatdongngoaikhoa::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk)); 
             foreach($tthdnk as $k){
                 echo " <p ><b>Tham gia hoạt động</b>-$k->pf_ten_hoat_dong-<b>Từ ngày</b>-$k->pf_ngay_bat_dau-<b>Đến ngày</b>-$k->pf_ngay_ket_thuc-<b>Vai trò</b>- $k->pf_vai_tro-</p>
             <p><b>Mô tả</b>-$k->pf_mo_ta</p>";
             }
			?>
            
		</div>
		<div style="border-bottom: 1px solid grey;font-size: 19.5px;color: #333333">
			<h3 class="text-orange">Kinh nghiệm làm việc</h3>
			<?php
			$knlv = PF_Kinhnghiemlamviec::model()->findAllByAttributes(array('ma_tai_khoan'=>$matk));
			foreach ($knlv as $key ) {
				echo "<p ><b>Làm công việc</b>-$key->pf_ten_cong_viec- <b>tại </b>-$key->pf_ten_cong_ty- <b>Từ ngày</b>-$key->pf_ngay_bat_dau- <b>Đến ngày</b>-$key->pf_ngay_ket_thuc-</p>
            <p ><b>Mô tả</b>-$key->pf_mo_ta</p>";
			}
			?>
            
		</div>
	</div>
