<!DOCTYPE html>
<html>
<head>
	<title>Doc</title>
</head>
<body>
	<table>
		<tr>
			@foreach ($tasks as $task)
				<td>{{ $task->name }}</td>
			@endforeach
		</tr>
	</table>
</body>
</html>