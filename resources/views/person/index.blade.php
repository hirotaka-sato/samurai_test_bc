@extends('layouts.practice')

@section('title', 'Person.index')

@section('menubar')
    @parent
    簡易掲示板
@endsection

@section('content')
    <table>
    <tr><th>ユーザー</th><th>タイトル</th><th width="500">メッセージ</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->getData()}}</td>
            <td>
            @if($item->boards != null)
                <table width="100%">
                @foreach($item->boards as $obj)
                    <tr><td>{{$obj->getData()}}</td></tr>
                @endforeach
                </table>
            @endif
            </td>
            <td>
            @if($item->boards != null)
                <table>
                @foreach($item->boards as $obj)
                    <tr><td width="500">{{$obj->getMessage()}}</td></tr>
                @endforeach
                </table>
            @endif
            </td>
        </tr>
    @endforeach
    </table>
@endsection

@section('footer')
copyright 2019 sato.
@endsection
