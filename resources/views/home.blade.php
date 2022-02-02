@extends('layout.base')
@section('pageTitle')
    Home
@endsection

@section('pageContents')
    <main>
        <section class="main">
            <div class="hero">
                {{-- <img src="{{asset('img/jumbotron.jpg')}}"> --}}
            </div>
            <div class="main-container">
                <div class="current">
                    <span>current series</span>
                </div>
                {{-- <MainCards v-for="(comic, index) in comics" :key="index" :comic="comic"/>   --}}
                @foreach ($comics as $comic)
                    <div class="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                        <span>{{$comic['title']}}</span>
                    </div>
                @endforeach
            </div>
        </section>
    </main>
@endsection