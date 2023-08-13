<!DOCTYPE html>
<html>
<head>
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Clientes</h1>
        <a href="{{ route('clients.create') }}" class="btn btn-primary mb-3">Criar Novo Cliente</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $client)
                    <tr>
                        <td>{{ $client->user->name }}</td>
                        <td>{{ $client->user->email }}</td>
                        <td>{{ $client->address->city }}</td>
                        <td>{{ $client->address->state }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
