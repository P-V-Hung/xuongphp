

<?php $__env->startSection('title'); ?>
    <title>Thêm môn học</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <h2>Thêm môn học</h2>
    <form action="save-add" method="POST" class="form">
        <div class="form-control">
            <label class="form-label" for="">Tên môn học</label>
            <input class="form-input" type="text" name="ten_mon_hocc" id="">
        </div>
        <div class="form-control">
            <label class="form-label" for="">Trạng thái</label>
            <select class="form-input" name="trang_thai" id="">
                <option value="0">Đang học</option>
                <option value="1">Không học</option>
            </select>
        </div>
        <div class="form-control btn">
            <input type="reset" value="Nhập lại">
            <input type="submit" value="Thêm môn học" name="btn_insert">
            <a class="insert" href="list">Danh sách</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\oop\resources\views/subject/add.blade.php ENDPATH**/ ?>