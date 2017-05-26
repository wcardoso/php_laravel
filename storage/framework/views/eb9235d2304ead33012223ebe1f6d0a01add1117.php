<?php $__env->startSection('content'); ?>
<div class="container">
	<h2 class="center">Editar Slide</h2>
	<div class="row">
	 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
			        <a href="<?php echo e(route('admin.slides')); ?>" class="breadcrumb">Lista de Slides</a>
			        
			        <a class="breadcrumb">Editar Slide</a>
		      	</div>
		    </div>
	  	</nav>
	</div>
	<div class="row">
		<form action="<?php echo e(route('admin.slides.atualizar',$registro->id)); ?>" method="post" enctype="multipart/form-data">

		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="_method" value="put">
		<?php echo $__env->make('admin.slides._form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

		<button class="btn blue">Atualizar</button>

			
		</form>
			
	</div>
	
</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>