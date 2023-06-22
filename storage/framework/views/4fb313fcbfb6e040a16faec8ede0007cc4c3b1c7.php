
<?php $__env->startSection('titulo','Login'); ?>
<?php $__env->startSection('conteudo'); ?>
    <div class="container">
        <div class="card">
            <h3 class="center">Entrar</h3>
            <div style="margin:10; margin-top:0;" class="row">
                <form class="" action="<?php echo e(route('site.login.entrar')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

                    <div class="input-field">
                        <input type="text" name="email"><label>E-mail</label>
                    </div>
                    
                    <div class="input-field">
                        <input type="password" name="senha"><label>Senha</label>
                    </div>
                    
                    <button class="btn deep-orange">Entrar</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/login/index.blade.php ENDPATH**/ ?>