<div class="input-field">
  <input type="text" name="nome" value="<?php echo e(isset($linha->nome) ? $linha->nome : ''); ?>">
  <label>Nome</label>
</div>

<div class="input-field">
  <input type="text" name="ra" value="<?php echo e(isset($linha->ra) ? $linha->ra : ''); ?>">
  <label>RA</label>
</div>

<div class="input-field">
  <input type="text" name="data_nasc" value="<?php echo e(isset($linha->data_nasc) ? $linha->data_nasc : ''); ?>">
  <label>Data Nascimento</label>
</div>

<div class="input-field">
  <input type="text" name="celular" value="<?php echo e(isset($linha->celular) ? $linha->celular : ''); ?>">
  <label>Celular</label>
</div>

<div class="input-field">
  <input type="text" name="email" value="<?php echo e(isset($linha->email) ? $linha->email : ''); ?>">
  <label>Email</label>
</div>


<div class="file-field  input-field">
  <div class="btn blue">
    <span>Imagem</span>
    <input type="file" name="imagem">
  </div>
  <div class="file-path-wrapper">
    <input class="file-path validate" type="text">

  </div>
</div>

<?php if(isset($linha->imagem)): ?>
<div class="input-field">
  <img width="25" height="30" src="<?php echo e(asset($linha->imagem)); ?>" />
</div>
<?php endif; ?><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/admin2/alunos/_form.blade.php ENDPATH**/ ?>