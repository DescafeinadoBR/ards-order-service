@extends('adminlte::page')

@section('title', 'Listagem de serviços - notSO')

@section('content_header')
<h1>Listagem de Clientes</h1>
@stop

@section('content')

<div class="container">
    <table id="tabela-dados" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>E-mail</th>
                <th>CPF/CNPJ</th>
                <th>Gênero</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <td>{{ $item['id'] }}</td>
                <td>{{ $item['title'] }}</td>
                <td>{{ $item['product'] }}</td>
                <td>{{ $item['client'] }}</td>
                <td>{{ $item['status'] }}</td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/app.css">
@stop

@section('js')
<script>
    $(document).ready(function() {
        $('#tabela-dados').DataTable();
    });
</script>
@stop