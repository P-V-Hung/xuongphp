

<?php $__env->startSection('title'); ?>
    <title>Danh sách môn học</title>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('main-content'); ?>
    <h2>Danh sách môn học</h2>
    <form action="deletes" method="POST">
        <table class="table">
            <tr>
                <th></th>
                <th>ID</th>
                <th>Tên môn học</th>
                <th>Trạng thái</th>
                <th>Thao tác</th>
            </tr>
                <?php $__currentLoopData = $listSubject; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subject): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td width="7%"><input type="checkbox" name="<?php echo e($subject->id); ?>" class="checkbox"></td>
                <td width="10%"><?php echo e($subject->id); ?></td>
                <td><?php echo e($subject->ten_mon_hocc); ?></td>
                <td><?php echo e($subject->trang_thai); ?></td>
                <td>
                    <a href="update?id=<?php echo e($subject->id); ?>">Sửa</a>
                    <a href="delete?id=<?php echo e($subject->id); ?>">Xóa</a>
                </td>
            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <div class="btn">
        <input id="btn1" type="button" value="Chọn tất cả">
        <input id="btn2" type="button" value="Bỏ chọn tất cả">
        <input type="submit" name="deletes" value="Xóa tất cả mục đã chọn">
        <a class="insert" href="insert">Nhập thêm</a>
    </div>
    </form>
    <p class="msg"><?php echo e($_COOKIE['msg']??''); ?></p>
    <script>

        let checkbox = document.querySelectorAll(".checkbox");

        document.querySelector("#btn1").onclick = function(){
            for(let i = 0;i<checkbox.length;i++){
                checkbox[i].checked = true;
            }
        }
        document.querySelector("#btn2").onclick = function(){
            for(let i = 0;i<checkbox.length;i++){
                checkbox[i].checked = false;
            }
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\xampp\htdocs\oop\resources\views/subject/index.blade.php ENDPATH**/ ?>