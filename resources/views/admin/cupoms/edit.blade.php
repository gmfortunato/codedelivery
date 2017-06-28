@extends('app')

@section('content')
<div class="container">
    <h3>Editar {{$cupom->code}}</h3>

    @include('errors._check')

    {!! Form::model($cupom, ['route'=>['admin.cupoms.update', $cupom->id]]) !!}

        @include('admin.cupoms._form')

        <div class="form-group">
            {!! Form::submit('Atualizar', ['class'=>'btn btn-success']) !!}
        </div>



    {!! Form::close() !!}

</div>
@endsection