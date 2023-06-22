<html>
    <head>
      <title><?php echo $__env->yieldContent('titulo'); ?></title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
        <nav>
            <div class="nav-wrapper deep-orange">
                <a href="<?php echo e(route('site.home')); ?>" class="brand-logo">Projeto Universidade</a>
                <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="/">Home</a></li>
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(route('site.login')); ?>">Login</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo e(route('admin2.alunos')); ?>">Alunos</a></li>
                            <li><a href="<?php echo e(route('admin.cursos')); ?>">Cursos</a></li>
                            <li><a href="<?php echo e(route('desenvolvedores')); ?>">Devs</a></li>
                            <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                            <li><a href="<?php echo e(route('site.login.sair')); ?>">Sair</a></li>
                        <?php endif; ?>
                    </ul>
            </div>
        </nav>

        <ul class="sidenav" id="mobile">
            <li><a href="/">Home</a></li>
            <?php if(Auth::guest()): ?>
                <li><a href="<?php echo e(route('site.login')); ?>">Login</a></li>
            <?php else: ?>
                <li><a href="<?php echo e(route('admin2.alunos')); ?>">Alunos</a></li>
                <li><a href="<?php echo e(route('admin.cursos')); ?>">Cursos</a></li>
                <li><a href="<?php echo e(route('desenvolvedores')); ?>">Devs</a></li>
                <li><a href="#"><?php echo e(Auth::user()->name); ?></a></li>
                <li><a href="<?php echo e(route('site.login.sair')); ?>">Sair</a></li>
            <?php endif; ?>
        </ul><?php /**PATH C:\TRABALHO\73B\eid\Crud_eid\resources\views/layout/_cabecalho.blade.php ENDPATH**/ ?>