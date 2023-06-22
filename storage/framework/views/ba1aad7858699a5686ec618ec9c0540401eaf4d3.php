
<?php $__env->startSection('titulo','Home'); ?>
<?php $__env->startSection('conteudo'); ?>
<div class='container'>
    <h5 class="center">Seja bem vindo ao Projeto Universidade, confira abaixo as informações</h5>
    <h3 class='center'>Cards de Cursos</h3>  
    <div class="row">
        <?php $__currentLoopData = $linhas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $linha): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col s6 m6">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo e(asset($linha->imagem)); ?>" alt="<?php echo e($linha->titulo); ?>" width="150" height="250">
                    <a href="<?php echo e(route('admin.cursos.editar', $linha->id)); ?>" class="btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">edit</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title black-text black-darken-5"><b><?php echo e($linha->titulo); ?></b></span>
                    <p><?php echo e($linha->descricao); ?></p>
                    <p><?php echo e($linha->valor); ?></p>
                </div>   
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <h3 class='center'>Cards de Alunos</h3>
    <div class="row">
        <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col s6 m6">
            <div class="card">
                <div class="card-image">
                    <img src="<?php echo e(asset($row->imagem)); ?>" alt="<?php echo e($row->nome); ?>"  width="150" height="250">
                    <a href="<?php echo e(route('admin2.alunos.editar', $row->id)); ?>" class="btn-floating halfway-fab waves-effect waves-light red pulse"><i class="material-icons">edit</i></a>
                </div>
                <div class="card-content">
                    <span class="card-title black-text"><b><?php echo e($row->nome); ?></b></span>
                    <p><?php echo e($row->email); ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/home.blade.php ENDPATH**/ ?>