<?php require(APPPATH.'views/'.'layouts/header.php'); ?>

<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Người Dùng</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/nguoi-dung/'); ?>">Người Dùng</a></li>
                    <li class="active">Sửa Người Dùng</li>
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
                <h4>Nhập Thông Tin Người Dùng</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Họ Tên</label>
                            <input type="text" class="form-control" placeholder="Họ Tên *" name="hoten" value="<?php echo $detail[0]['HoTen']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Tên Đăng Nhập</label>
                            <input type="text" class="form-control" placeholder="Tên Đăng Nhập *" name="taikhoan" value="<?php echo $detail[0]['TaiKhoan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" class="form-control" placeholder="Số Điện Thoại *" name="sodienthoai" value="<?php echo $detail[0]['SoDienThoai']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" placeholder="Email *" name="email" value="<?php echo $detail[0]['Email']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Trạng Thái</label>
                            <select class="form-control" name="trangthai">
                                <?php if($detail[0]['TrangThai'] == 0){ ?>
                                    <option value="1">Sử Dụng</option>
                                    <option value="0" selected>Bị Chặn</option>
                                <?php }else{ ?>
                                    <option value="1" selected>Sử Dụng</option>
                                    <option value="0">Bị Chặn</option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Số Dư Khả Dụng:</label>
                            <input type="text" class="form-control" value="<?php echo number_format($detail[0]['SoDuKhaDung']); ?>đ" disabled>
                        </div>
                        <div class="form-group">
                            <label>Đã Sử Dụng:</label>
                            <input type="text" class="form-control" value="<?php echo number_format($detail[0]['DaSuDung']); ?>đ" disabled>
                        </div>
                        <div class="form-group">
                            <label>Tổng Nạp:</label>
                            <input type="text" class="form-control" value="<?php echo number_format($detail[0]['TongNap']); ?>đ" disabled>
                        </div>
                        <div class="form-group">
                            <label>Ngày Tham Gia</label>
                            <input type="text" class="form-control" value="<?php echo $detail[0]['NgayThamGia']; ?>" disabled>
                        </div>
                        
                        <br>
                        <div>
                        	<a class="btn btn-default" href="<?php echo base_url('admin/nguoi-dung/'); ?>">Quay Lại</a>
                        	<button type="submit" class="btn btn-primary">Sửa Người Dùng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

<div class="row">

    <div class="col-lg-6">
        <div class="card alert">
            <div class="card-header">
                <h4>Cộng Tiền</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="<?php echo base_url('admin/nguoi-dung/'.$detail[0]['MaNguoiDung'].'/cong-tien'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Số Dư Khả Dụng</label>
                            <input type="text" class="form-control" placeholder="Số Dư Khả Dụng *" value="<?php echo number_format($detail[0]['SoDuKhaDung']); ?>đ" disabled>
                        </div>
                        <div class="form-group">
                            <label>Số Tiền Cộng</label>
                            <input type="number" class="form-control" placeholder="Số Tiền Cộng *" name="sotiencong">
                        </div>
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập Ghi Chú Cộng Tiền" name="ghichu"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Cộng Tiền</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card alert">
            <div class="card-header">
                <h4>Trừ Tiền</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="basic-form">
                    <form method="POST" action="<?php echo base_url('admin/nguoi-dung/'.$detail[0]['MaNguoiDung'].'/tru-tien'); ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Số Dư Khả Dụng</label>
                            <input type="text" class="form-control" placeholder="Số Dư Khả Dụng *" value="<?php echo number_format($detail[0]['SoDuKhaDung']); ?>đ" disabled>
                        </div>
                        <div class="form-group">
                            <label>Số Tiền Trừ</label>
                            <input type="number" class="form-control" placeholder="Số Tiền Trừ *" name="sotientru">
                        </div>
                        <div class="form-group">
                            <label>Ghi Chú</label>
                            <textarea class="form-control" rows="3" placeholder="Nhập Ghi Chú Trừ Tiền" name="ghichu"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Trừ Tiền</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="row">

    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-header">
                <h4>Dòng Tiền Của Người Dùng</h4>
                <div class="card-header-right-icon">
                    <ul>
                        <li class="card-close" data-dismiss="alert"><i class="ti-close"></i></li>
                    </ul>
                </div>
            </div>
            <br>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Số Dư Trước</th>
                                <th>Số Dư Thay Đổi</th>
                                <th>Số Dư Hiện Tại</th>
                                <th>Thời Gian</th>
                                <th>Nội Dung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($cashflow as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1; ?></th>
                                    <td>
                                        <?php echo number_format($value['SoTienTruoc']); ?>đ
                                    </td>
                                    <td>
                                        <?php echo number_format($value['SoTienThayDoi']); ?>đ
                                    </td>
                                    <td>
                                        <?php echo number_format($value['SoTienHienTai']); ?>đ
                                    </td>
                                    <td>
                                        <span class="badge badge-dark"><?php echo $value['ThoiGian']; ?></span>
                                    </td>
                                    <td>
                                        <?php echo $value['NoiDung']; ?>
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
