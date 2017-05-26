<div class="input-field">
	<input type="text" name="titulo" class="validade" value="<?php echo e(isset($registro->titulo) ? $registro->titulo : ''); ?>">
	<label>Título</label>
</div>
<div class="input-field">
	<input type="text" name="descricao" class="validade" value="<?php echo e(isset($registro->descricao) ? $registro->descricao : ''); ?>">
	<label>Descrição</label>
</div>

<div class="row">
	<div class="file-field input-field col m6 s12">
		<div class="btn">
		<span>Imagem</span>
			<input type="file" name="imagem">
		</div>
		<div class="file-path-wrapper">
			<input type="text" class="file-path validade">
		</div>		
	</div>
	<div class="col m6 s12">
	<?php if(isset($registro->imagem)): ?>
		<img width="120" src="<?php echo e(asset($registro->imagem)); ?>">
	<?php endif; ?>
	</div>
</div>

<div class="input-field">
    <select name="status">
        <option value="aluga" <?php echo e((isset($registro->status) && $registro->status == 'aluga'  ? 'selected' : '')); ?>>Aluga</option>
        <option value="vende" <?php echo e((isset($registro->status) && $registro->status == 'vende'  ? 'selected' : '')); ?>>Vende</option>
    </select>
    <label>Status</label>
</div>

<div class="input-field">
    <select name="tipo_id">
        <?php foreach($tipos as $tipo): ?>
            <option value="<?php echo e($tipo->id); ?>" <?php echo e((isset($registro->tipo_id) && $registro->tipo_id == $tipo->id  ? 'selected' : '')); ?>><?php echo e($tipo->titulo); ?></option>
        <?php endforeach; ?>
    </select>
    <label>Tipo de Imóvel</label>
</div>

<div class="input-field">
    <input type="text" name="endereco" class="validate" value="<?php echo e((isset($registro->endereco) ? $registro->endereco : '')); ?>">
    <label>Endereço</label>
</div>

<div class="input-field">
    <input type="text" name="cep" class="validate" value="<?php echo e((isset($registro->cep) ? $registro->cep : '')); ?>">
    <label>CEP (Ex: 96848-146)</label>
</div>

<div class="input-field">
    <select name="cidade_id">
        <?php foreach($cidades as $cidade): ?>
        <option value="<?php echo e($cidade->id); ?>" <?php echo e((isset($registro->cidade_id) && $registro->cidade_id == $cidade->id  ? 'selected' : '')); ?>><?php echo e($cidade->nome); ?></option>
        <?php endforeach; ?>
    </select>
    <label>Cidade</label>
</div>

<div class="input-field">
    <input type="text" name="valor" class="validate" value="<?php echo e((isset($registro->valor) ? $registro->valor : '')); ?>">
    <label>Valor (Ex: 234.90)</label>
</div>

<div class="input-field">
    <input type="text" name="dormitorios" class="validate" value="<?php echo e((isset($registro->dormitorios) ? $registro->dormitorios : '')); ?>">
    <label>Dormitórios (Ex: 3)</label>
</div>

<div class="input-field">
    <input type="text" name="detalhes" class="validate" value="<?php echo e((isset($registro->detalhes) ? $registro->detalhes : '')); ?>">
    <label>Detalhes (Ex: Sacada: 1 - Banheiro: 2 - Sala de Jantar - Churrasqueira)</label>
</div>

<div class="input-field">
<textarea name="mapa" class="materialize-textarea">
    <?php echo e((isset($registro->mapa) ? $registro->mapa : '')); ?>

</textarea>
    <label>Mapa (Cole o iframe do Google Maps)</label>
</div>

<div class="input-field">
    <select name="publicar">
        <option value="nao" <?php echo e((isset($registro->publicar) && $registro->publicar == 'nao'  ? 'selected' : '')); ?>>Não</option>
        <option value="sim" <?php echo e((isset($registro->publicar) && $registro->publicar == 'sim'  ? 'selected' : '')); ?>>Sim</option>
    </select>
    <label>Publicar?</label>
</div>




