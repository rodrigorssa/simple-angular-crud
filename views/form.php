<form name="insert" method='post'>
	<div>
		<label for="name">Nome:</label>
		<input type="text" name="name" id="name" ng-model="data.name" value="" tabindex="1" />
	</div>
	<div>
		<label for="endereco">Endereço:</label>
		<input type="text" name="endereco" id="endereco" ng-model="data.endereco"  value="" tabindex="1" />
	</div>
	<div>
		<label for="email">E-mail:</label>
		<input type="text" name="email" id="email" ng-model="data.email" value=""  tabindex="1" />
	</div>
	<div>
		<label for="senha">Senha:</label>
		<input type="password" name="senha" id="senha" ng-model="data.senha" value="" tabindex="1" />
	</div>

	<div ng-if='data.input'>
<input type='hidden' name='id' ng-model="data.id" />
	</div>

	<div>
		<input type="submit" ng-click="send(data)" value="Enviar" />
	</div>
</form>

<span class="aviso {{class}}"> {{msg}}</span>