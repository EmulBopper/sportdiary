<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Добро пожаловать!</div>

                <div class="panel-body">
                    <div class="col-sm-offset-3 col-sm-6">
                        <div></div>
                        <button type="submit" class="btn btn-default">
                            <i class=""></i><a href="<?php echo e(url('/login')); ?>">Войти</a>
                        </button>
                    </div>

                    <div class="col-sm-offset-3 col-sm-6">
                        <div></div>
                        <button type="submit" class="btn btn-default">
                            <i class=""></i><a href="<?php echo e(url('/register')); ?>">Регистрация</a>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>