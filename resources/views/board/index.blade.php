@extends('layouts.helloapp')

@section('title', 'Board.index')

@section('menubar')
    @parent
    ボードページ
@endsection

@section('content')
    <table>
    <tr><th>ID</th><th>Name</th><th>Message</th></tr>
    @foreach($items as $item)
        <tr>
        <td>{{$item->person['id']}}</td>
        <td>{{$item->person['name']}}</td>
        <td>{{$item->message}}</td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2017 tuyano,
@endsection