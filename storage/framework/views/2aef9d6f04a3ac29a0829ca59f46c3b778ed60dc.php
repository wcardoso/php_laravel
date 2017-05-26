<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Cidades</h2>

		<div class="row">
		 	<nav>
			    <div class="nav-wrapper green">
			      	<div class="col s12">
				        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
				        <a class="breadcrumb">Lista de Cidades</a>
			      	</div>
			    </div>
		  	</nav>
		</div>

	
		<div class="row">
			<table>
				<thead>
					<tr>
						<th>Id</th>
						<th>Nome</th>						
						<th>Estado</th>						
						<th>Sigla do Estado</th>				
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($registros as $registro): ?>
					<tr>
						<td><?php echo e($registro->id); ?></td>
						<td><?php echo e($registro->nome); ?></td>
						<td><?php echo e($registro->estado); ?></td>
						<td><?php echo e($registro->sigla_estado); ?></td>
						<td>
							<a class="btn orange" href="<?php echo e(route('admin.cidades.editar',$registro->id)); ?>">Editar</a>
							<a class="btn red" href="javascript: if(confirm('Deletar esse registro?')){ window.location.href = '<?php echo e(route('admin.cidades.deletar',$registro->id)); ?>' }">Deletar</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			
		</div>
		<div class="row">
			<a class="btn blue" href="<?php echo e(route('admin.cidades.adicionar')); ?>">Adicionar</a>
		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>