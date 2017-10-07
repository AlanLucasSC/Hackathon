@extends('layouts.app')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <table id="myTable">
        <tr class="header">
          <th style="width:70%;">Tipo do documento</th>
          <th style="width:30%;">Empresa</th>
        </tr>
        @foreach ($documents as $document)
          <tr>
          //AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAaaaaa
            <td>{{ $document->url }}</td>
            <td>{{ $document->organization->name }}</td>
          </tr>
        @endforeach
      </table>
    </div>
  </div>
@endsection