@extends('layouts.app');

@section('content')
    <h1>Adicionar arquivo</h1>
    @if (count($errors) > 0)
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method= "POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <span> Data de expiração: <input type="date" name="expiration_date"></span></br>
        <span>Organização:
        <select>
        @foreach($organizations as $organization) 
            <option value="{{ $organization->id }}"> {{ $organization->name }} </option>
        @endforeach
        </select> </br>
        </span>
        <span> Número do documento: <input type="text" name="document_number"></span>
        <span> Tipo do documento: 
        <select>
        @foreach($document_types as $doc_type) 
            <option value="{{ $doc_type->id }}"> {{ $doc_type->name }} </option>
        @endforeach
        </select>
        </span>
        <span> Anotação: <input type="text" name="comment"></span>
        <input type="file" id="document" name="document">
        <input type="submit">
    </form>
@endsection