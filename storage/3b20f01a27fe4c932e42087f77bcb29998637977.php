<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./resources/css/style.css">
    <title>Danh sách môn học</title>
</head>

<body>
    <h2>Danh sách môn học</h2>
    <form action="" method="">
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
                <td width="7%"><input type="checkbox" class="checkbox"></td>
                <td width="10%"><?php echo e($subject->id); ?></td>
                <td><?php echo e($subject->ten_mon_hoc); ?></td>
                <td><?php echo e($subject->trang_thai); ?></td>
                <td>
                    <a href="#">Sửa</a>
                    <a href="#">Xóa</a>
                </td>
            </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <div class="btn">
        <input id="btn1" type="button" value="Chọn tất cả">
        <input id="btn2" type="button" value="Bỏ chọn tất cả">
        <input type="submit" name="deletes" value="Xóa tất cả mục đã chọn">
        <a class="insert" href="">Nhập thêm</a>
    </div>
    </form>
</body>
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

</html><?php /**PATH C:\Users\ADMIN\Desktop\oop\resources\views/subject/index.blade.php ENDPATH**/ ?>