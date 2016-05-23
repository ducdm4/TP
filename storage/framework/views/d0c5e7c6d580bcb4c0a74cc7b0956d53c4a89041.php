<?php $__env->startSection('title', 'Quản lý admin'); ?>
<?php $__env->startSection('backContent'); ?>
    <div class="col-sm-offset-2 col-md-10 container">
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
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.back', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>