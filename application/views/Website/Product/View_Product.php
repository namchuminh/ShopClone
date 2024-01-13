<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-8">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1><?php echo $detail[0]['TenSanPham']; ?></h1>
		            </div>
		        </div>
		        <div class="card alert">
			        <div class="card-body">
		                <div class="basic-form">
	                        <div class="form-group">
	                            <label>Tên Sản Phẩm</label>
	                            <input type="text" class="form-control" placeholder="Tên Sản Phẩm *" name="tensanpham" value="<?php echo $detail[0]['TenSanPham']; ?>" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Tên Quốc Gia</label>
	                            <input type="text" class="form-control" placeholder="Quốc Gia *" name="quocgia" value="<?php echo $this->Model_Product->getNation($detail[0]['MaQuocGia'])[0]['TenQuocGia']; ?>" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Giá Bán</label>
	                            <input type="text" class="form-control" placeholder="Giá Bán *" name="giaban" value="<?php echo number_format($detail[0]['GiaBan']); ?>đ / 1 tài khoản" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Mua Tối Đa 1 Lần</label>
	                            <input type="text" class="form-control" placeholder="Mua Tối Đa *" name="muatoida" value="<?php echo $detail[0]['MuaToiDa']; ?> tài khoản / 1 lần" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Mua Tối Thiểu 1 Lần</label>
	                            <input type="text" class="form-control" placeholder="Mua Tối Thiểu *" name="muatoithieu" value="<?php echo $detail[0]['MuaToiThieu']; ?> tài khoản / 1 lần" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Chuyên Mục</label>
	                            <input type="text" class="form-control" placeholder="Tên Chuyên Mục *" name="tenchuyenmuc" value="<?php echo $this->Model_Category->getById($detail[0]['MaChuyenMuc'])[0]['TenChuyenMuc']; ?>" disabled>
	                        </div>
	                        <div class="form-group">
	                            <label>Mô Tả</label>
	                            <textarea class="form-control" rows="5" name="mota" placeholder="Mô Tả *" disabled><?php echo $detail[0]['MoTa']; ?></textarea>
	                        </div>
		                </div>
	            	</div>
	            </div>
    		</div>
    	</div>

    </div>
    <!-- /# column -->
    <div class="col-lg-4">
       	<div class="row">
    		<div class="col-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Mua Tài Khoản</h1>
		            </div>
		        </div>
		        <div class="card alert">
			        <div class="card-body">
	                    <form method="POST" action="<?php echo base_url('thanh-toan/'.$detail[0]['MaSanPham'].'/'); ?>" enctype="multipart/form-data">
	                    	<div class="form-group">
	                            <label>Số Lượng Còn</label>
	                            <input type="text" class="form-control" placeholder="Số Lượng Còn *" name="soluongcon" value="<?php echo $number; ?> tài khoản" disabled>
	                        </div>
	                    	<div class="form-group">
	                            <label>Số Lượng Mua</label>
	                            <?php if($number < $detail[0]['MuaToiThieu']){ ?>
	                            	<input type="number" class="form-control" placeholder="Số Lượng Mua *" name="soluongmua" min="<?php echo $detail[0]['MuaToiThieu']; ?>" max="<?php echo $detail[0]['MuaToiDa']; ?>" disabled>
	                            <?php }else{ ?>
	                            	<input type="number" class="form-control slmua" placeholder="Số Lượng Mua *" name="soluongmua" min="<?php echo $detail[0]['MuaToiThieu']; ?>" max="<?php echo $detail[0]['MuaToiDa']; ?>">
	                            <?php } ?>
	                        </div>
	                        <div class="form-group">
	                            <label>Tạm Tính</label>
	                            <input type="text" class="form-control tamtinh" placeholder="0 VND" name="tamtinh" disabled>
	                        </div>
	                        <div class="w-100">
	                        	<?php if($number < $detail[0]['MuaToiThieu']){ ?>
	                            	<button class="btn btn-danger w-100" disabled>Hết Hàng</button>
	                            <?php }else{ ?>
	                            	<button class="btn btn-primary w-100">Mua Ngay</button>
	                            <?php } ?>
	                        </div>
	                	</form>
			        </div>
			    </div>
    		</div>
    	</div>

    	<div class="row">
    		<div class="col-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Lưu Ý</h1>
		            </div>
		        </div>
		        <div class="card alert">
			        <div class="card-body" id="luuy">
	                	<?php echo $detail[0]['LuuY']; ?>
			        </div>
			    </div>
    		</div>
    		
    	</div>
    </div>
    <!-- /# column -->
</div>
<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>
<style type="text/css">
	.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
	    background-color: white;
	    opacity: 1;
	}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.0/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#luuy',
        readonly: true, 
        height: 255,
        menubar: false,
        toolbar: false,
        statusbar: false,
        plugins: [],
    });
</script>
<script type="text/javascript">
	$(document).ready(function(){
		var giaban = '<?php echo $detail[0]['GiaBan']; ?>'
		$('.slmua').on('input', function(){
            var inputValue = $(this).val();

            if ($.isNumeric(inputValue)) {
                let tamtinh = parseInt(inputValue) * parseInt(giaban);
                $('.tamtinh').val(tamtinh.toLocaleString() + " VND");
            } else {
            	$('.tamtinh').val("0 VND");
                toastr.options = {
	                closeButton: true,
	                progressBar: true,
	                positionClass: 'toast-top-right', // Vị trí hiển thị
	                timeOut: 500 // Thời gian tự động đóng
	            };
	            toastr.error('Vui lòng nhập số lượng mua là một số!', 'Thất Bại');
            }
        });
	});
</script>