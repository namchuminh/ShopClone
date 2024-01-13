<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-12">
    	<div class="row">
    		<div class="col-lg-12">
	    		<div class="page-header">
		            <div class="page-title">
		                <h1>Thông tin đơn hàng</h1>
		            </div>
		        </div>
		        <div class="card alert">
		            <div class="card-body">
		            	<div class="basic-form">
		                    <div class="form-group">
		                        <label>Mã Giao Dịch</label>
		                        <input type="text" class="form-control" value="<?php echo $detail[0]['MaGiaoDich']; ?>" disabled>
		                    </div>
		                    <div class="form-group">
		                        <label>Tên Sản Phẩm</label>
		                        <?php if(count($this->Model_Product->getById($detail[0]['MaSanPham'])) <= 0){ ?>
                            		<input type="text" class="form-control" value="Sản phẩm bị Admin ẩn" disabled>
                            	<?php }else{ ?>
                            		<input type="text" class="form-control" value="<?php echo $this->Model_Product->getById($detail[0]['MaSanPham'])[0]['TenSanPham']; ?>" disabled>
                            	<?php } ?>
		                    </div>
		                    <div class="form-group">
		                        <label>Loại Sản Phẩm</label>
		                        <?php if(count($this->Model_Category->getById($detail[0]['MaChuyenMuc'])) <= 0){ ?>
                            		<input type="text" class="form-control" value="Chuyên mục bị Admin ẩn" disabled>
                            	<?php }else{ ?>
                            		<input type="text" class="form-control" value="<?php echo $this->Model_Category->getById($detail[0]['MaChuyenMuc'])[0]['TenChuyenMuc']; ?>" disabled>
                            	<?php } ?>
		                    </div>
		                    <div class="form-group">
		                        <label>Số Lượng</label>
		                        <input type="text" class="form-control" value="<?php echo $detail[0]['SoLuong']; ?>" disabled>
		                    </div>
		                    <div class="form-group">
		                        <label>Dach Sách Tài Khoản</label>
		                        <textarea class="form-control" id="myTextarea" rows="12" name="danhsach" placeholder="1 dòng 1 tài khoản"><?php echo $detail[0]['DanhSachClone']; ?></textarea>
		                    </div>
		                    <br>
		                    <div>
		                    	<a class="btn btn-default" href="<?php echo base_url('don-mua/'); ?>">Quay Lại</a>
		                    	<button type="submit" onclick="copyToClipboard()" class="btn btn-primary coppy">Sao Chép</button>
		                    </div>
		                </div>
		            </div>
		        </div>
    		</div>
    	</div>
    </div>
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>
<style type="text/css">
	.form-control[disabled], .form-control[readonly], fieldset[disabled] .form-control {
	    background-color: white;
	    opacity: 1;
	}
</style>
<script type="text/javascript">
    function copyToClipboard() {
        const textarea = document.getElementById('myTextarea'); // Lấy thẻ textarea
        textarea.select();
        document.execCommand('copy'); 

        if (window.getSelection) {
            const selection = window.getSelection();
            selection.removeAllRanges(); 
        } else if (document.selection) {
            document.selection.empty(); 
        }

        toastr.options = {
            closeButton: true,
            progressBar: true,
            positionClass: 'toast-top-right', // Vị trí hiển thị
            timeOut: 5000 // Thời gian tự động đóng
        };
        toastr.success('Đã sao chép danh sách Clone vào bộ nhớ tạm!', 'Thành Công');
    }
</script>