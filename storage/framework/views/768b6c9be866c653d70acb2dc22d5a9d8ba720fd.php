<div class="row section">
	<h3 align="center">Imóveis</h3>
	<div class="divider"></div>
	<br>
	<?php echo $__env->make('layouts._site._filtros', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</div>
<div class="row section">
<?php foreach($imoveis as $imovel): ?>	
	<div class="col s12 m3">
		<div class="card">
			<div class="card-image">
				<a href="<?php echo e(route('site.imovel',[$imovel->id,str_slug($imovel->titulo,'_')])); ?>"><img src="<?php echo e(asset($imovel->imagem)); ?>" alt="<?php echo e($imovel->titulo); ?>"></a>
			</div>
			<div class="card-content">
				<p><b class="deep-orange-text darken-1"><?php echo e($imovel->status); ?></b></p>
				<p><b><?php echo e($imovel->titulo); ?></b></p>
				<p><?php echo e($imovel->descricao); ?></p>
				<p>R$<?php echo e(number_format($imovel->valor,2,",",".")); ?></p>
			</div>
			<div class="card-action">
				<a href="<?php echo e(route('site.imovel',[$imovel->id,str_slug($imovel->titulo,'_')])); ?>">Ver mais..</a>
			</div>
		</div>
	</div>
<?php endforeach; ?>


</div>
<?php if($paginacao): ?>
	<div align="center" class="row">
		<?php echo e($imoveis->links()); ?>

	</div>
<?php endif; ?>