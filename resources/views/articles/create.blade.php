@extends('layouts.app')

@section('content')
    <h1>New article</h1>
    <div class="row justify-content-between">
        <div class="col-4">
            <form action="{{ route('articles.store') }}" method="POST">
                @method('POST')
                <x-form.article :article="$article"/>
            </form>
        </div>
    </div>
@endsection