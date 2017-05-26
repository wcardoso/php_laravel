<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Páginas</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a class="breadcrumb">Lista de Páginas</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Título</th>
						<th>Descrição</th>
						<th>Tipo</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($paginas as $pagina): ?>
					<tr>
						<td><?php echo e($pagina->id); ?></td>
						<td><?php echo e($pagina->titulo); ?></td>
						<td><?php echo e($pagina->descricao); ?></td>
						<td><?php echo e($pagina->tipo); ?></td>
						<td>
							<a class="btn orange" href="<?php echo e(route('admin.paginas.editar',$pagina->id)); ?>">Editar</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			
		</div>
		
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>