<?php $__env->startSection('title', 'Quản lý admin'); ?>
<?php $__env->startSection('backContent'); ?>
    <div class="col-sm-offset-2 col-md-10 container">
        <div class="row mt20 mb20">
        <form action="" method="get" class="form-inline col-sm-offset-3 col-md-9">
            <div class="form-group col-md-5">
                <input type="text" class="form-control width100" placeholder="Tìm kiếm admin">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>
            <a href="<?php echo e(url('/Admin/Add')); ?>" class="btn btn-success">Thêm mới</a>
        </form>
        </div>
        <div class="row"></div>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Tên đăng nhập</th>
                <th></th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($admins as $admin): ?>
                <tr>
                    <th scope="row"><?php echo $admin->id; ?></th>
                    <td><?php echo $admin->username; ?></td>
                    <td><a href="<?php echo e(url('/Admin/Edit')); ?>/<?php echo e($admin->id); ?>">Sửa</a></td>
                    <td><a href="<?php echo e(url('/Admin/Delete')); ?>/<?php echo e($admin->id); ?>">Xóa</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>