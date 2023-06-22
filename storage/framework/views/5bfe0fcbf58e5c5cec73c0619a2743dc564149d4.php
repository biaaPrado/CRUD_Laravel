
<?php $__env->startSection('titulo','Alunos'); ?>
<?php $__env->startSection('conteudo'); ?>
  <div class="container">
    <h3 class="center">Editando Alunos</h3>
    <div class="row">
      <form class="" action="<?php echo e(route('admin2.alunos.atualizar', $linha->id)); ?>" 
        method="post" enctype="multipart/form-data">
        <?php echo e(csrf_field()); ?>

        <input type="hidden" name="_method" value="put">
        <?php echo $__env->make('admin2.alunos._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <button class="btn deep-orange">Atualizar</button>
      </form>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/admin2/alunos/editar.blade.php ENDPATH**/ ?>