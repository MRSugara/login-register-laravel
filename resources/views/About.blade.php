@extends('layout.main')

@section('container')
    @foreach ($posts as $post)
        <article>
            <h2>
                <a href="/posts/{{ $post['slug'] }}">{{ $post['judul'] }}</a>
            </h2>
            <h4 class="mt-1">{{ $post['dokumentasi'] }}</h4>
            <h6 class="mt-3 mb-5">{{ $post['body'] }}</h6>
        </article>
    @endforeach
    <div class="kartu" style="display: flex">
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Kelvin Wisma Atlit</h5>
                <h6 class="card-subtitle mb-2 text-muted">Cartu</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Kelvin Wisma Atlit</h5>
                <h6 class="card-subtitle mb-2 text-muted">Cartu</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Kelvin Wisma Atlit</h5>
                <h6 class="card-subtitle mb-2 text-muted">Cartu</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
        </div>
@endsection
