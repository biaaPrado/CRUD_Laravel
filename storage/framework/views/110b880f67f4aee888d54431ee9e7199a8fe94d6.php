<div class="input-field">
  <input type="text" name="titulo" value="<?php echo e(isset($linha->titulo) ? $linha->titulo : ''); ?>">
  <label>Título</label>
</div>

<div class="input-field">
  <input type="text" name="descricao" value="<?php echo e(isset($linha->descricao) ? $linha->descricao : ''); ?>">
  <label>Descrição</label>
</div>

<div class="input-field">
  <input type="text" name="valor" value="<?php echo e(isset($linha->valor) ? $linha->valor : ''); ?>">
  <label>Valor</label>
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
<?php endif; ?>

<div class="input-field">
  <p>
    <label>
      <input type="checkbox" name="publicado" value="checked" <?php echo e(isset($linha->publicado) && $linha->publicado == 'sim' ? 'checked' : ''); ?> >
      <span>Publicar?</span>
    </label>
  </p>
  <br><br>
</div><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/admin/cursos/_form.blade.php ENDPATH**/ ?>