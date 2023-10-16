@extends('layouts.main')

@section('title', 'Contantos')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>API Teste tecnico</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">

     <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">NAME</th>
                        <th scope="col">Age</th>
                        <th scope="col">Email</th>
                      </tr>
                    </thead>
             @foreach($apiArray as $api)
                    <tbody>
                      <tr>
                        <td> {{ $apiArray['id'] }}</td>
                        <td> {{ $apiArray['name'] }}</td>
                        <td> {{ $apiArray['age'] }}</td>
                        <td> {{ $apiArray['email'] }}</td>
                        <td>

                        <a href="#" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon> Editar</a>

                        <form action="/" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash-outline"></ion-icon> Deletar</button>
                        </form>

                    </td>
                      </tr>
                      <tr>
                    </tbody>
                    @endforeach
    </table>

</div>

@endsection {{--Extenção do arquivo template--}}
