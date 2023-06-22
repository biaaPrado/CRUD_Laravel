
<?php $__env->startSection('titulo','Adicionar Alunos'); ?>
<?php $__env->startSection('conteudo'); ?>
  <div class="container">
    <h3 class="center">Adicionar Aluno</h3>
    <div class="row">
      <form class="" action="<?php echo e(route('admin2.alunos.salvar')); ?>" 
            method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <?php echo $__env->make('admin2.alunos._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/admin2/alunos/adicionar.blade.php ENDPATH**/ ?>