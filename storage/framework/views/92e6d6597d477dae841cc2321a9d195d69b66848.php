<?php $__env->startSection('content'); ?>
<div class="container">
	<h2 class="center">Adicionar Imagem</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
			        <a href="<?php echo e(route('admin.imoveis')); ?>" class="breadcrumb">Lista de Imóveis</a>
			        <a href="<?php echo e(route('admin.galerias',$imovel->id)); ?>" class="breadcrumb">Galeria de imagens</a>
			        <a class="breadcrumb">Adicionar Imagem</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="<?php echo e(route('admin.galerias.salvar',$imovel->id)); ?>" method="post" enctype="multipart/form-data">

		<?php echo e(csrf_field()); ?>

		<?php echo $__env->make('admin.galerias._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<button class="btn blue">Adicionar</button>

			
		</form>
			
	</div>
	
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>