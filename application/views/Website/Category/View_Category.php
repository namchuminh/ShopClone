<?php require(APPPATH.'views/layouts/Website/header.php'); ?>

<div class="row">
    <div class="col-lg-9">
		<?php if(count($product) >= 1){ ?>
            <?php $hinhanh = $categoryProduct[0]['HinhAnh']; ?>
	    	<div class="row">
	    		<div class="col-lg-12">
		    		<div class="page-header">
			            <div class="page-title" style="display: flex; justify-content: center;">
			                <h1><img style="width: 25px; height: 25px;" class="card-img-top" src="<?php echo $hinhanh; ?>"> <?php echo $categoryProduct[0]['TenChuyenMuc']; ?></h1>
			            </div>
			        </div>
			        <div class="row">
                        <?php foreach ($productCategory as $key => $product): ?>
                            <div class="col-lg-3 col-md-6 mb-4">
                                <div class="card">
                                    <img style="width: 100%; height: 200px;" class="card-img-top" src="<?php echo empty($product['HinhAnh']) ? $hinhanh : $product['HinhAnh']; ?>" alt="<?php echo $product['TenSanPham']; ?>">
                                    <hr>
                                    <div class="card-body">
                                        <h4 class="card-title" style="line-height: 30px;"> 
                                            <a href="<?php echo base_url('san-pham/'.$product['MaSanPham'].'/'); ?>"><?php echo $product['TenSanPham']; ?> </a>
                                        </h4>
                                        <p class="card-text">Mua tối thiểu: <span class="badge badge-danger"><?php echo $product['MuaToiThieu']; ?> tài khoản</span></p>
                                        <p class="card-text">Hiện có: <span class="badge badge-primary"><?php echo $this->Model_Product->getNumberProduct($product['MaSanPham']); ?> tài khoản</span></p>
                                        <p class="card-text">Đã bán: <span class="badge badge-warning"><?php echo $product['DaBan']; ?> tài khoản</span></p>
                                    </div>
                                    <hr>
                                    <div class="card-footer">
                                        <a href="<?php echo base_url('san-pham/'.$product['MaSanPham'].'/'); ?>" class="w-100 btn <?php echo ($this->Model_Product->getNumberProduct($product['MaSanPham']) >= $product['MuaToiThieu']) ? 'btn-primary' : 'btn-success'; ?>">
                                        <?php echo ($this->Model_Product->getNumberProduct($product['MaSanPham']) >= $product['MuaToiThieu']) ? number_format($product['GiaBan']) . ' đ / 1 tài khoản' : 'Hết Hàng'; ?>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </div>

	    		</div>
	    	</div>
	    <?php } ?>
    </div>
    <!-- /# column -->
    <div class="col-lg-3">
       <div class="page-header">
            <div class="page-title" style="display: flex; justify-content: center;">
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
<?php if(isset($history[0]['ThoiGian'])){ ?>
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
                    setTimeout(fetchData, 15000); 
                }
            });
        }

        $(document).ready(function(){
            fetchData();
        });
    </script>
<?php } ?>