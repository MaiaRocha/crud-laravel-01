<!DOCTYPE html>
<html>

<head>
    <title>Criar Cliente</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container py-4">
        <h2>Criar Novo Cliente</h2>
        <form method="POST" action="{{ route('clients.store') }}">
            @csrf

            <!-- Nome -->
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" class="form-control" type="text" name="name" value=""
                    required autofocus />
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" class="form-control" type="email" name="email" value=""
                    required />
            </div>

            <!-- Endereço -->
            <div class="form-group">
                <div class="form-group">
                    <label for="address">Endereço</label>
                    <select id="address" class="form-control" name="address" required>
                        <option value="">Selecione um endereço</option>
                        @foreach ($clients as $client)
                            <option value="">{{ $client->address->city }},
                                {{ $client->address->state }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Salvar Cliente</button>
        </form>
    </div>
</body>

</html>
