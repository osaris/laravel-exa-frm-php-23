@extends('layouts.app')

@section('content')
    <h1>Edit article #{{ $article->id }}</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <form action="{{ route('articles.update', $article) }}" method="POST">
                @method('PUT')
                <x-form.article :article="$article"/>
            </form>
        </div>
    </div>
@endsection