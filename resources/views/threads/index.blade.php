@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Threads</div>

                    <div class="panel-body">
                        @foreach ($threads as $thread)
                            <article>
                                <a href="/threads/{{ $thread->id }}">
                                    <h3>{{ $thread->title }}</h3>
                                </a>
                                <div class="article--body">
                                   {{ $thread->body }}
                                </div>
                            </article>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection