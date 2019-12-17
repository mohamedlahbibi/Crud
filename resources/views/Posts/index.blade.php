@extends('layout.app')
@section('content')
    <h2 style="padding:8px;margin:10px;">Latest Post</h2>

        @if(count($posts)>0)
                @foreach ($posts as $p)
                <div class="card" style="width: 18rem;margin:8px">
                    <div class="card-body">
                      <h5 class="card-title" style="align-content: center">{{$p->title}}</h5>
                      <h6 class="card-subtitle mb-2 text-muted"> created :{{$p->created_at}}</h6>
                      <h6 class="card-subtitle mb-2 text-muted"> last update :{{$p->updated_at}}</h6>

                      <p class="card-text"> </p>
                      <a href="/posts/{{$p->id}}" class="btn btn-primary">More info</a>
                    </div>
                  </div>
                    {{-- <div class="card" style="padding:8px;margin:10px;">
                    <h3><a href="/posts/{{$p->id}}">{{$p->title}}</a></h3>
                    <small>written on {{$p->created_at}}</small>
                    </div> --}}


                @endforeach
                {{$posts->links()}}

    @else
        <p>No posts Founded </p>
    @endif
@endsection