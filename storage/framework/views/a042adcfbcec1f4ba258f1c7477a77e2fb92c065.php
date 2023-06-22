
<?php $__env->startSection('titulo','Cursos'); ?>
<?php $__env->startSection('conteudo'); ?>
<div class='container'>
    <h3 class='center'>Lista de Cursos</h3>
    <div class='row'>
        <table>
            <thead>
                <tr> <!-- CABECALHO -->
                    <td>Id</td><td>Titulo</td><td>Descrição</td>
                    <td>Publicado</td><td>Valor</td>
                    <td>Imagem</td>
                    <td>Ação</td>
                </tr>
            </thead>
            
            <tbody>
                <?php $__currentLoopData = $rows; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> <!-- LOOP PRA LER A TABELA -->
                    <tr>
                        <td><?php echo e($row->id); ?></td><td><?php echo e($row->titulo); ?></td><td><?php echo e($row->descricao); ?></td>
                        <td><?php echo e($row->publicado); ?></td><td><?php echo e($row->valor); ?></td>
                        <td><img src="<?php echo e(asset($row->imagem)); ?>" alt="<?php echo e($row->titulo); ?>" width="120" height="100"></td>
                        <td> <!-- COLUNA COM ALTERAR E EXCLUIR -->
                        <a class='btn deep-orange' href="<?php echo e(route('admin.cursos.editar',$row->id)); ?>">Alterar</a>
                        <a class='btn rede' href="<?php echo e(route('admin.cursos.excluir',$row->id)); ?>">Excluir</a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <div class='row'> <!-- BOTAO ADICIONAR -->
        <a class='btn blue' href="<?php echo e(route('admin.cursos.adicionar')); ?>">Adicionar</a>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/admin/cursos/index.blade.php ENDPATH**/ ?>