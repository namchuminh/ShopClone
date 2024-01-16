<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Nạp Thẻ Tự Động (thecaosieure.vn)</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/nap-the/'); ?>">Thẻ Cào Siêu Rẻ</a></li>
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
                <h4>Cấu Hình Thông Tin Kết Nối <a href="https://thecaosieure.vn/merchant/list" target="_blank">thecaosieure.vn</a></h4>
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
                            <label>Partner ID: </label>
                            <?php if(isset($detail[0]['Id']) && !empty($detail[0]['Id'])){ ?>
                                <input type="text" class="form-control" placeholder="Partner ID *" name="id" value="<?php echo $detail[0]['Id']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Partner ID *" name="id">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Partner Key: </label>
                            <?php if(isset($detail[0]['IdKey']) && !empty($detail[0]['IdKey'])){ ?>
                                <input type="text" class="form-control" placeholder="Partner Key *" name="key" value="<?php echo $detail[0]['IdKey']; ?>">
                            <?php }else{ ?>
                                <input type="text" class="form-control" placeholder="Partner Key *" name="key">
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Lưu Ý</label>
                            <?php if(isset($detail[0]['LuuY']) && !empty($detail[0]['LuuY'])){ ?>
                                <textarea class="form-control editor" rows="5" name="luuy" placeholder="Lưu Ý Khi Thanh Toán Nạp Thẻ *"><?php echo $detail[0]['LuuY']; ?></textarea>
                            <?php }else{ ?> 
                                <textarea class="form-control editor" rows="5" name="luuy" placeholder="Lưu Ý Khi Thanh Toán Nạp Thẻ *"></textarea>
                            <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Bật / Tắt - Nạp Thẻ</label>
                            <select class="form-control" name="trangthai">
                                <?php if(isset($detail[0]['TrangThai'])){ ?>
                                    <?php if($detail[0]['TrangThai'] == 1){ ?>
                                        <option value="1" selected>Bật</option>
                                        <option value="0">Tắt</option>
                                    <?php }else{ ?>
                                        <option value="1">Bật</option>
                                        <option value="0" selected>Tắt</option>
                                    <?php } ?>
                                <?php }else{ ?> 
                                    <option value="1">Bật</option>
                                    <option value="0">Tắt</option>
                                <?php } ?>
                            </select>
                        </div>
                        <br>
                        <div>
                        	<button type="submit" class="btn btn-primary">Cập Nhật Kết Nối</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="card alert">
            <div class="card-header">
                <h4>Danh Sách Lịch Sử Nạp Thẻ</h4>
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
                                <th>Người Dùng</th>
                                <th>Mã Thẻ</th>
                                <th>Seri Thẻ</th>
                                <th>Loại Thẻ</th>
                                <th>Mệnh Giá</th>
                                <th>Thời Gian</th>
                                <th>Trạng Thái</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($card as $key => $value): ?>
                                <tr>
                                    <th scope="row"><?php echo $key + 1; ?></th>
                                    <td>
                                        <a style="color: blueviolet;" href="<?php echo base_url('admin/nguoi-dung/sua/'.$value['MaNguoiDung'].'/') ?>"><?php echo $value['TaiKhoan']; ?></a>
                                    </td>
                                    <td>
                                        <?php echo $value['MaThe']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['SeriThe']; ?>
                                    </td>
                                    <td>
                                        <?php echo $value['LoaiThe']; ?>
                                    </td>
                                    <td>
                                        <?php echo number_format($value['MenhGia']); ?> VND
                                    </td>
                                    <td>
                                        <?php echo $value['ThoiGian']; ?>
                                    </td>
                                    <td>
                                        <?php if($value['TrangThai'] == 0){ ?>
                                            Đang xử lý
                                        <?php }else if($value['TrangThai'] == 1){ ?>
                                            Thành công
                                        <?php }else{ ?>
                                            Thất bại
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

<?php require(APPPATH.'views/'.'layouts/footer.php'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.0/tinymce.min.js" referrerpolicy="origin"></script>
<script>
  tinymce.init({
    selector: 'textarea.editor',  // chọn các textarea muốn biến thành trình soạn thảo
    plugins: 'advlist autolink lists link image charmap print preview anchor',
    toolbar: 'undo redo | formatselect | bold italic strikethrough forecolor backcolor | link image | alignleft aligncenter alignright alignjustify | outdent indent | bullist numlist | removeformat | code',    
    menubar: false,
    height: 200
  });
</script>

