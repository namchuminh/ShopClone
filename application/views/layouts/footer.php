                    
                </div>
            </div>
        </div>
    </div>

    <div id="search">
        <button type="button" class="close">×</button>
        <form>
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-primary">Search</button>
        </form>
    </div>
    <!-- jquery vendor -->
    <script src="<?php echo base_url('public/admin/'); ?>js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="<?php echo base_url('public/admin/'); ?>js/lib/menubar/sidebar.js"></script>
    <script src="<?php echo base_url('public/admin/'); ?>js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->
    <script src="<?php echo base_url('public/admin/'); ?>js/lib/bootstrap.min.js"></script>
    <!-- bootstrap -->
    <script src="<?php echo base_url('public/admin/'); ?>js/scripts.js"></script>
    <!-- scripit init-->

</body>

</html>

<?php if(isset($error) && !empty($error)){ ?>
    <script>
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right', // Vị trí hiển thị
                timeOut: 5000 // Thời gian tự động đóng
            };
            toastr.error('<?php echo $error; ?>', 'Thất Bại');
        });
    </script>
<?php } ?>

<?php if(isset($success) && !empty($success)){ ?>
    <script>
        $(document).ready(function(){
            toastr.options = {
                closeButton: true,
                progressBar: true,
                positionClass: 'toast-top-right', // Vị trí hiển thị
                timeOut: 5000 // Thời gian tự động đóng
            };
            toastr.success('<?php echo $success; ?>', 'Thành Công');
        });
    </script>
<?php } ?>