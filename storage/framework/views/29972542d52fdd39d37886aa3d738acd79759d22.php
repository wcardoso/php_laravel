<?php $__env->startSection('content'); ?>
	<div class="container">
		<h2 class="center">Lista de Permissões para <?php echo e($papel->nome); ?></h2>

		<div class="row">
		 	<nav>
		    <div class="nav-wrapper green">
		      	<div class="col s12">
			        <a href="<?php echo e(route('admin.principal')); ?>" class="breadcrumb">Início</a>
			        <a href="<?php echo e(route('admin.papel')); ?>" class="breadcrumb">Lista de Papéis</a>
			        <a class="breadcrumb">Lista de Permissões</a>
		      	</div>
		    </div>
	  	</nav>
		</div>

		<div class="row">
			<form action="<?php echo e(route('admin.papel.permissao.salvar',$papel->id)); ?>" method="post">
			<?php echo e(csrf_field()); ?>

			<div class="input-field">
				<select name="permissao_id">
					<?php foreach($permissao as $valor): ?>
					<option value="<?php echo e($valor->id); ?>"><?php echo e($valor->nome); ?></option>
					<?php endforeach; ?>
				</select>
			</div>
				<button class="btn blue">Adicionar</button>
			</form>
			
			
		</div>
	
		<div class="row">
			<table>
				<thead>
					<tr>
						
						<th>Permissão</th>
						<th>Descrição</th>
						<th>Ação</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach($papel->permissoes as $value): ?>
					<tr>
						<td><?php echo e($value->nome); ?></td>
						<td><?php echo e($value->descricao); ?></td>
						
						<td>
							
							<a class="btn red" href="javascript: if(confirm('Remover essa permissão?')){ window.location.href = '<?php echo e(route('admin.papel.permissao.remover',[$papel->id,$value->id])); ?>' }">Remover</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</tbody>
			</table>
			
		</div>
		
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>