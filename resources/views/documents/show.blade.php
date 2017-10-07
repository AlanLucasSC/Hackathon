@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-4">
      <table id="myTable">
        <tr class="header">
          <th style="width:60%;">Tipo do documento</th>
          <th style="width:40%;">Empresa</th>
        </tr>
        @foreach ($documents as $document)
          <tr>
            <td>{{ $document->url }}</td>
            <td>{{ $document->organization->name }}</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection
