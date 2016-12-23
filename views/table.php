<h2> Lista de usuários</h2>
<table ng-if="users">
	<thead>
		<tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Ação</th>
		</tr>
	</thead>
	<tbody>

		<tr ng-repeat="item in users">
			<td>{{item.id}}</td>
			<td>{{item.name}}</td>
			<td><a class="btn-edit" href="edit/{{item.id}}">Edit</a> <button class="btn-delete" ng-click="delete(item.id)">Delete</button></td>

		</tr>
	</tbody>
</table>
