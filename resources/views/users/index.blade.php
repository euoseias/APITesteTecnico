<!DOCTYPE html>
<html>
<head>
    <title>Lista de Usuários</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Usuários</h1>
        @foreach ($userData as $response)
            <div class="user-card">
                <h2>{{ $response['fact'] }}</h2>
            </div>
        @endforeach
    </div>
</body>
</html>
