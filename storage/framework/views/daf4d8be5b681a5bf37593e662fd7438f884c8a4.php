<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row section">
    	<h3 align="center">Contato</h3>
    	<div class="divider"></div>
    </div>
    <div class="row section">
    	<div class="col s12 m7">
    		<?php if(isset($pagina->mapa)): ?>
            <div class="video-container">
                <?php echo $pagina->mapa; ?>

            </div>

            <?php else: ?>
                <img class="responsive-img" src="<?php echo e(asset($pagina->imagem)); ?>">
            <?php endif; ?>
    	</div>
    	<div class="col s12 m5">
            <h4><?php echo e($pagina->titulo); ?></h4>
            <blockquote>
                <?php echo e($pagina->descricao); ?>

            </blockquote>
    		<form class="col s12" action="<?php echo e(route('site.contato.enviar')); ?>" method="post">
                <?php echo e(csrf_field()); ?>

    			<div class="input-field">
    				<input type="text" name="nome" class="validate">
    				<label>Nome</label>
    			</div>
    			<div class="input-field">
    				<input type="text" name="email" class="validate">
    				<label>E-mail</label>
    			</div>
    			<div class="input-field">
    				<textarea name="mensagem" class="materialize-textarea"></textarea>
    				<label>Mensagem</label>
    			</div>
    			<button class="btn blue">Enviar</button>  			
    		</form>
    		
    	</div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.site', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>