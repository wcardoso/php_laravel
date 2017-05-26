<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo e(isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo')); ?></title>
    <meta name="description" content="<?php echo e(isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao')); ?>">

    <!-- Twitter Card data -->
    <meta name="twitter:card" value="summary">

    <!-- Open Graph data -->
    <meta property="og:title" content="<?php echo e(isset($seo['titulo']) ? $seo['titulo'] : config('seo.titulo')); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo e(isset($seo['url']) ? $seo['url'] : config('app.url')); ?>" />
    <meta property="og:image" content="<?php echo e(isset($seo['imagem']) ? $seo['imagem'] : config('seo.imagem')); ?>" />
    <meta property="og:description" content="<?php echo e(isset($seo['descricao']) ? $seo['descricao'] : config('seo.descricao')); ?>" />

    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link href="<?php echo e(asset('lib/icones/css/materialdesignicons.min.css')); ?>" media="all" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('lib/materialize/dist/css/materialize.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('css/style.css')); ?>">

    

    
</head>
<body id="app-layout">
  <header>
    <?php echo $__env->make('layouts._site._nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </header>
  <main>
    <?php if(Session::has('mensagem')): ?>
      <div class="container">
        <div class="row">
          <div class="card <?php echo e(Session::get('mensagem')['class']); ?>">
            <div align="center" class="card-content">
              <?php echo e(Session::get('mensagem')['msg']); ?>

            </div>
          </div>
        </div>
        
      </div>
    <?php endif; ?> 
    <?php echo $__env->yieldContent('content'); ?>
  </main>  


<footer class="page-footer blue" >
  <div class="container">
    <div class="row">
      <div class="col l6 s12">
        <h5 class="white-text">Footer Content</h5>
        <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
        <p>
          <a href="#"><i class="white-text mdi mdi-facebook mdi-24px"></i></a>
          <a href="#"><i class="white-text mdi mdi-twitter mdi-24px"></i></a>
          <a href="#"><i class="white-text mdi mdi-youtube-play mdi-24px"></i></a>
        </p>
      </div>
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links</h5>
        <ul>
          <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.home')); ?>">Home</a></li>
          <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
          <li><a class="grey-text text-lighten-3" href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <div class="container">
    © 2016 Copyright Text
    <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
    </div>
  </div>
</footer>
            

    <script src="<?php echo e(asset('lib/jquery/dist/jquery.js')); ?>"></script>
    <script src="<?php echo e(asset('lib/materialize/dist/js/materialize.js')); ?>"></script>

    <script src="<?php echo e(asset('js/init.js')); ?>"></script>
</body>
</html>
