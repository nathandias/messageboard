@extends('master')

@section('title', 'Homepage')

@section('content')

    <form action="/create" method="post">
        <input type="text" name="title" placeholder="Title"/>
        <input type="text" name="content" placeholder="Content"/>
        <button type="submit">Submit</button>

    {{ csrf_field()  }}
    </form>

    <br/>


    Recent messages:

    <ul>
        @foreach($messages as $message)
        <li>
        {{ $message->title }}
        <br/>
        {{ $message->content }}
        <br/>
        {{ $message->created_at->diffForHumans() }}
        <a href="/message/{{ $message->id }}">View</a>
        </li>
        @endforeach
    </ul>

@endsection