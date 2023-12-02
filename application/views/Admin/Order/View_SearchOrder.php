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
                    <li class="active">Đơn Hàng</li>
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
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
                <br>
                <br>
                <form action="<?php echo base_url('admin/don-hang/tim-kiem/'); ?>" method="POST">
                    <div class="form-group row">
                        <div class="col-md-8">
                            <input type="text" class="form-control input-focus" placeholder="Mã Giao Dịch *" name="magiaodich">
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary" style="width: 100%; height: 100%;">Tìm Kiếm</button>
                        </div>
                    </div>
                </form> 
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Mã Giao Dịch</th>
                                <th>Khách Hàng</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Số Lượng</th>
                                <th>Thanh Toán</th>
                                <th>Loại Sản Phẩm</th>
                                <th>Thời Gian</th>
                                <th style="text-align: left;">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php foreach ($list as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1; ?></th>
                                    <td>
                                        <strong>
                                            <?php echo $value['MaGiaoDich']; ?>
                                        </strong>
                                    </td>
                                    <td>
                                        <a style="color: blueviolet;" href="<?php echo base_url('admin/nguoi-dung/sua/'.$value['MaNguoiDung'].'/'); ?>"><?php echo $value['TaiKhoan']; ?></a>
                                    </td>
                                    <td>
                                        <?php echo $value['TenSanPham']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['SoLuong']; ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($value['ThanhToan']); ?>đ
                                    </td>
                                    <td>
                                        <span class="badge badge-dark">
                                            <?php echo $value['TenChuyenMuc']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-dark">
                                            <?php echo $value['ThoiGian']; ?>
                                        </span>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary w-100" href="<?php echo base_url('admin/don-hang/xem/'.$value['MaGiaoDich'].'/'); ?>">Xem Ngay</a>
                                        <a href="<?php echo base_url('admin/don-hang/tai-ve/'.$value['MaGiaoDich'].'/'); ?>" class="btn btn-danger w-100" href="">Tải Về</a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>

