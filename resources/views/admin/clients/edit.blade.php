@extends('app')

@section('content')
<div class="container">
    <h3>Editar {{$client->user->name}}</h3>

    @include('errors._check')

    {!! Form::model($client, ['route'=>['admin.clients.update', $client->id]]) !!}

        @include('admin.clients._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class'=>'btn btn-success']) !!}
        </div>



    {!! Form::close() !!}

</div>
@endsection