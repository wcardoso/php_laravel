<nav>
  <div class="nav-wrapper blue">
      <div class="container">
        <a href="<?php echo e(route('site.home')); ?>" class="brand-logo">SiteDinâmico</a>
        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
          <li><a href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
          <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
          
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="<?php echo e(route('site.home')); ?>">Home</a></li>
          <li><a href="<?php echo e(route('site.sobre')); ?>">Sobre</a></li>
          <li><a href="<?php echo e(route('site.contato')); ?>">Contato</a></li>
        </ul>
        </div>
  </div>
</nav>