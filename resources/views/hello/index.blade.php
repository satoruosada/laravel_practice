@extends('layouts.helloapp')
<style>
    .pagenation{font-size:10px;}
    .pagenation Li {display: inline-block}
</style>

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <table>
    <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
    @foreach($items as $item)
        <tr>
            <td>{{ $item->name}}</td>
            <td>{{ $item->mail}}</td>
            <td>{{ $item->age}}</td>
        </tr>
    @endforeach
    </table>
    {{ $items->Links() }}
@endsection

@section('footer')
copyright 2017 tuyano,
@endsection