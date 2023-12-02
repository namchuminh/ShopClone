<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Đơn Hàng</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/don-hang/'); ?>">Đơn Hàng</a></li>
                    <li class="active">Xem Đơn Hàng</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-header">
                <h4>Thông Tin Đơn Hàng</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="basic-form">
                    <div class="form-group">
                        <label>Mã Giao Dịch</label>
                        <input type="text" class="form-control" value="<?php echo $detail[0]['MaGiaoDich']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tên Đăng Nhập</label>
                        <input type="text" class="form-control" value="<?php echo $detail[0]['TaiKhoan']; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label>Tên Sản Phẩm</label>
                        <input type="text" class="form-control" value="<?php echo $detail[0]['TenSanPham']; ?>" disabled>
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
                    	<a class="btn btn-default" href="<?php echo base_url('admin/don-hang/'); ?>">Quay Lại</a>
                    	<button type="submit" onclick="copyToClipboard()" class="btn btn-primary coppy">Sao Chép</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>

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
