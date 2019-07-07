@extends('layouts.practice')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <ul>
    @each('components.item', $data, 'item')
    </ul>
    
@endsection

@section('footer')
copyright 2019 sato.
@endsection
