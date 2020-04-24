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
    @if(Auth::check())
    <p>USER: {{ $user->name . '(' . $user->email . ')' }} </p>
    @else
    <p>*ログインしていません。(<a href="/login">ログイン</a>|
        <a href="/register">登録</a>)</p>
    @endif
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