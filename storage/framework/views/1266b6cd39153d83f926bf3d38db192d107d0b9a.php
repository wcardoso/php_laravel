<div class="slider">
	<ul class="slides">
	<?php foreach($slides as $slide): ?>	
		<li onclick="window.location='<?php echo e($slide->link); ?>'">
			<img src="<?php echo e(asset($slide->imagem)); ?>" alt="Imagem">
			<div class="caption <?php echo e($direcaoImagem[rand(0,2)]); ?>">
				<h3><?php echo e($slide->titulo); ?></h3>
				<h5><?php echo e($slide->descricao); ?></h5>
				<?php if($slide->link != null): ?>
					<a href="<?php echo e($slide->link); ?>" class="btn btn-large blue">mais...</a>
				<?php endif; ?>
			</div>
		</li>
	<?php endforeach; ?>	
	</ul>
</div>