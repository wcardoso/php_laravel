<?php $__env->startSection('content'); ?>

<div class="container">
    <?php echo $__env->make('layouts._site._lista_imoveis', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>