<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Xin chào, <?php echo $_SESSION['fullname']; ?>!</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li class="active">Thống Kê</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>
<div class="row">
    <div class="col-lg-3">
        <div class="card p-0">
            <div class="stat-widget-three">
                <div class="stat-icon bg-primary">
                    <i class="ti-user"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-digit"><?php echo $sumUser; ?></div>
                    <div class="stat-text">Khách hàng</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card p-0">
            <div class="stat-widget-three">
                <div class="stat-icon bg-success">
                    <i class="ti-write"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-digit"><?php echo $sumProduct; ?></div>
                    <div class="stat-text">Sản Phẩm</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-3">
        <div class="card p-0">
            <div class="stat-widget-three">
                <div class="stat-icon bg-info">
                    <i class="ti-stats-up"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-digit"><?php echo $sumOrderClone; ?></div>
                    <div class="stat-text">Clone Đã Bán</div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-lg-3">
        <div class="card p-0">
            <div class="stat-widget-three">
                <div class="stat-icon bg-danger">
                    <i class="ti-server"></i>
                </div>
                <div class="stat-content">
                    <div class="stat-digit"><?php echo $sumClone; ?></div>
                    <div class="stat-text">Clone Hiện Còn</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="page-header">
	        <div class="page-title">
	            <h1>Thống Kê</h1>
	        </div>
	    </div>
	</div>
	
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Doanh Thu Tháng</div>
                    <div class="stat-digit"><?php echo number_format($doanhThuThang); ?> VND</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-server color-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Bán Trong Tháng</div>
                    <div class="stat-digit"><?php echo $banTrongThang; ?> nick</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user color-pink border-pink"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Đăng Ký Tháng</div>
                    <div class="stat-digit"><?php echo $dangKyThang; ?> khách</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Doanh Thu Tuần</div>
                    <div class="stat-digit"><?php echo number_format($doanhThuTuan); ?> VND</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-server color-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Bán Trong Tuần</div>
                    <div class="stat-digit"><?php echo $banTrongTuan; ?> nick</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user color-pink border-pink"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Đăng Ký Tuần</div>
                    <div class="stat-digit"><?php echo $dangKyTuan; ?> khách</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money color-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Doanh Thu Ngày</div>
                    <div class="stat-digit"><?php echo number_format($doanhThuNgay); ?> VND</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-server color-primary border-primary"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Bán Trong Ngày</div>
                    <div class="stat-digit"><?php echo $banTrongNgay; ?> nick</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4">
        <div class="card">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-user color-pink border-pink"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Đăng Ký Ngày</div>
                    <div class="stat-digit"><?php echo $dangKyNgay; ?> khách</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="page-header">
            <div class="page-title">
                <h1>Dòng Tiền Người Dùng</h1>
            </div>
        </div>
        <div class="card alert">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên Đăng Nhập</th>
                                <th>Số Tiền Trước</th>
                                <th>Số Tiền Thay Đổi</th>
                                <th>Số Tiền Hiện Tại</th>
                                <th>Thời Gian</th>
                                <th>Nội Dung</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php foreach ($dongTien as $key => $value): ?>
	                        	<tr>
	                        		<td><?php echo $key + 1; ?></td>
	                        		<td>
	                        			<a class="color-primary" href="<?php echo base_url('/admin/nguoi-dung/sua/'.$value['MaNguoiDung'].'/') ?>"><?php echo $value['TaiKhoan']; ?></a>
	                        		</td>
	                        		<td>
	                        			<span class="badge badge-warning">
	                        				<?php echo number_format($value['SoTienTruoc']); ?> VND
			                            </span>
	                        		</td>
	                        		<td>
	                        			<span class="badge badge-primary">
	                        				<?php echo number_format($value['SoTienThayDoi']); ?> VND
	                        			</span>
	                        		</td>
	                        		<td>
	                        			<span class="badge badge-danger">
	                        				<?php echo number_format($value['SoTienHienTai']); ?> VND
	                        			</span>
	                        		</td>
	                        		<td>
	                        			<span class="badge badge-dark">
	                        				<?php echo $value['ThoiGian']; ?>
	                        			</span>
	                        		</td>
	                        		<td>
	                        			<?php echo $value['NoiDung']; ?>
	                        		</td>
	                        	</tr>
	                        <?php endforeach ?>
                   		</tbody>
                    </table>
                    <?php if(count($dongTien) <= 0){ ?>
                    	<br>
                    	<p class="text-center">Chưa có lịch sử dòng tiền của khách hàng!</p>
                    <?php } ?>
               	</div>
            </div>
        </div>
    </div>
</div>

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>

