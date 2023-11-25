<?php require(APPPATH.'views/'.'layouts/header.php'); ?>
<div class="row">
    <div class="col-lg-8 p-r-0 title-margin-right">
        <div class="page-header">
            <div class="page-title">
                <h1>Quản Lý Sản Phẩm</h1>
            </div>
        </div>
    </div>
    <!-- /# column -->
    <div class="col-lg-4 p-l-0 title-margin-left">
        <div class="page-header">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="<?php echo base_url('admin/'); ?>">Trang Chủ</a></li>
                    <li><a href="<?php echo base_url('admin/san-pham/'); ?>">Sản Phẩm</a></li>
                    <li class="active">Sửa Sản Phẩm</li>
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
                <h4>Nhập Thông Tin Sản Phẩm <?php echo $detail[0]['GiaBan']; ?></h4>
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
                            <label>Tên Sản Phẩm</label>
                            <input type="text" class="form-control" placeholder="Tên Sản Phẩm *" name="tensanpham" value="<?php echo $detail[0]['TenSanPham']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Quốc Gia</label>
                            <select class="form-control" name="maquocgia">
                                <?php foreach ($country as $key => $value): ?>
                                    <?php if($detail[0]['MaQuocGia'] == $value['MaQuocGia']){ ?>
                                        <option value="<?php echo $value['MaQuocGia']; ?>" selected><?php echo $value['TenQuocGia'].' - '.$value['KyHieu']; ?></option>
                                    <?php }else{ ?>
                                        <option value="<?php echo $value['MaQuocGia']; ?>"><?php echo $value['TenQuocGia'].' - '.$value['KyHieu']; ?></option>
                                    <?php } ?>
                                    
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Giá Bán</label>
                            <input type="number" class="form-control" placeholder="Giá Bán *" name="giaban" value="<?php echo $detail[0]['GiaBan']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mua Tối Đa 1 Lần</label>
                            <input type="number" class="form-control" placeholder="Mua Tối Đa *" name="muatoida" value="<?php echo $detail[0]['MuaToiDa']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Mua Tối Thiểu 1 Lần</label>
                            <input type="number" class="form-control" placeholder="Mua Tối Thiểu *" name="muatoithieu" value="<?php echo $detail[0]['MuaToiThieu']; ?>">
                        </div>
                        <div class="form-group">
                            <label>Chuyên Mục</label>
                            <select class="form-control" name="machuyenmuc">
                                <?php foreach ($category as $key => $value): ?>
                                    <?php if($detail[0]['MaChuyenMuc'] = $value['MaChuyenMuc']){ ?>
                                        <option value="<?php echo $value['MaChuyenMuc']; ?>" selected><?php echo $value['TenChuyenMuc']; ?></option>
                                    <?php }else{ ?>
                                        <option value="<?php echo $value['MaChuyenMuc']; ?>"><?php echo $value['TenChuyenMuc']; ?></option>
                                    <?php } ?>
                                <?php endforeach ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mô Tả</label>
                            <textarea class="form-control" rows="5" name="mota" placeholder="Mô Tả *"><?php echo $detail[0]['MoTa']; ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Lưu Ý</label>
                            <textarea class="form-control editor" rows="5" name="luuy">
                                <?php echo $detail[0]['LuuY']; ?>
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label>Trạng Thái</label>
                            <select class="form-control" name="trangthai">
                                <?php if($detail[0]['TrangThai'] == 0){ ?>
                                    <option value="1">Hiển Thị</option>
                                    <option value="0" selected>Không Hiển Thị</option>
                                <?php }else{ ?>
                                    <option value="1" selected>Hiển Thị</option>
                                    <option value="0">Không Hiển Thị</option>
                                <?php } ?>
                            </select>
                        </div>
                        <br>
                        <div>
                        	<a class="btn btn-default" href="<?php echo base_url('admin/san-pham/'); ?>">Quay Lại</a>
                        	<button type="submit" class="btn btn-primary">Sửa Sản Phẩm</button>
                        </div>
                    </form>
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

