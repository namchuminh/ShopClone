<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-9">
		<?php if(count($product) >= 1){ ?>
	    	<div class="row">
	    		<div class="col-lg-12">
		    		<div class="page-header">
			            <div class="page-title">
			                <h1><?php echo $categoryProduct[0]['TenChuyenMuc']; ?></h1>
			            </div>
			        </div>
			        <div class="card alert">
			            <div class="card-body">
			                <div class="table-responsive">
			                    <table class="table table-bordered">
			                        <thead>
			                            <tr>
			                                <th>#</th>
			                                <th>Tên Sản Phẩm</th>
			                                <th>Quốc Gia</th>
			                                <th>Mua Tối Thiểu</th>
			                                <th>Hiện Có</th>
			                                <th>Đã Bán</th>
			                                <th>Đơn Giá</th>
			                                <th>Thao Tác</th>
			                            </tr>
			                        </thead>
			                        <tbody>
			                        	<?php foreach ($productCategory as $key => $value): ?>
			                        		<tr>
				                                <th scope="row"><?php echo $key + 1; ?></th>
				                                <td><?php echo $value['TenSanPham']; ?></td>
				                                <td>
				                                	<?php 
				                                		if(count($this->Model_Product->getNation($value['MaQuocGia'])) >= 1){
				                                			echo $this->Model_Product->getNation($value['MaQuocGia'])[0]['TenQuocGia'];
				                                		}else{
				                                			echo "Không xác định!";
				                                		}
				                                	?>
				                                		
				                                </td>
				                                <td>
				                                	<span class="badge badge-danger">
				                                		<?php echo $value['MuaToiThieu']; ?> tài khoản / 1 lần
				                                	</span>
				                                </td>
				                                <td>
				                                	<span class="badge badge-primary">
				                                		<?php echo $this->Model_Product->getNumberProduct($value['MaSanPham']); ?> tài khoản
				                                	</span>
				                            	</td>
				                                <td>
				                                	<span class="badge badge-warning">
				                                		<?php echo $value['DaBan']; ?> tài khoản
				                                	</span>
				                                </td>
				                                <td class="color-primary"><?php echo number_format($value['GiaBan']); ?>đ / 1 tài khoản</td>
				                                <td>
				                                	<?php if($this->Model_Product->getNumberProduct($value['MaSanPham']) >= $value['MuaToiThieu']){ ?>
				                                		<a href="<?php echo base_url('san-pham/'.$value['MaSanPham'].'/') ?>" class="btn btn-primary">Mua Ngay</a>
				                                	<?php }else{ ?>
				                                		<a href="<?php echo base_url('san-pham/'.$value['MaSanPham'].'/') ?>" class="btn btn-success">Hết Hàng</a>
				                                	<?php } ?>
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
	    <?php } ?>
    </div>
    <!-- /# column -->
    <div class="col-lg-3">
       <div class="page-header">
            <div class="page-title">
                <h1>Giao Dịch Gần Đây</h1>
            </div>
        </div>
        <div class="card alert">
            <div class="card-body">
                <ul class="timeline">
                    <?php foreach ($history as $key => $value): ?>
                        <li>
                            <div class="timeline-badge"><i class="ti-timer"></i></div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h5 class="timeline-title"><?php echo $value['TaiKhoan']." - ".$value['HanhDong'];  ?></h5>
                                </div>
                                <div class="timeline-body">
                                    <p>
                                        <?php 
                                            $yourDateTime = new DateTime($value['ThoiGian']);

                                            $currentDateTime = new DateTime();
                                            $interval = $currentDateTime->diff($yourDateTime);

                                            if ($interval->y > 0) {
                                                echo $interval->y . " năm trước";
                                            } elseif ($interval->m > 0) {
                                                echo $interval->m . " tháng trước";
                                            } elseif ($interval->d > 0) {
                                                echo $interval->d . " ngày trước";
                                            } elseif ($interval->h > 0) {
                                                echo $interval->h . " giờ trước";
                                            } elseif ($interval->i > 0) {
                                                echo $interval->i . " phút trước";
                                            } else {
                                                echo "Vừa xong";
                                            }
                                        ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# column -->
</div>

<?php require(APPPATH.'views/layouts/Website/footer.php'); ?>
<input type="hidden" class="thoigian" value="<?php echo $history[0]['ThoiGian']; ?>">
<script type="text/javascript">
    function fetchData() {
        $.ajax({
            url: '<?php echo base_url('don-mua-realtime/'); ?>',  // Đường dẫn tới phương thức xử lý AJAX trong controller
            type: 'GET',
            dataType: 'json',
            success: function(data) {
                var thoigian = $('.thoigian').val();
                if(!data || (thoigian == data.ThoiGian)){

                }else{
                    $(".timeline li:last").remove();
                    $(".timeline").prepend('<li> <div class="timeline-badge"><i class="ti-timer"></i></div> <div class="timeline-panel"> <div class="timeline-heading"> <h5 class="timeline-title">'+ data.TaiKhoan + ' - ' + data.HanhDong +'</h5> </div> <div class="timeline-body"> <p>Vừa xong</p> </div> </div> </li>');
                    $('.thoigian').val(data.ThoiGian);
                }
                
            },
            complete: function() {
                setTimeout(fetchData, 7000); 
            }
        });
    }

    $(document).ready(function(){
        fetchData();
    });
</script>