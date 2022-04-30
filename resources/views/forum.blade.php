@extends('layout.layout')

@section('content')

 <table>
 @foreach($records as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
          
        </tr>
@endforeach  
       
    </table>
@endsection