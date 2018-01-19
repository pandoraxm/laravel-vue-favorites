@extends('layouts.app')

@section('title', '我的收藏夹')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h3>My Favorites</h3>
            </div>
            @forelse ($myFavorites as $myFavorite)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/article/{{ $myFavorite->id }}">
                            {{ $myFavorite->title }}
                        </a>
                    </div>

                    <div class="panel-body" style="max-height:300px;overflow:hidden;">
                        <img src="/uploads/{!! ($myFavorite->cover)[0] !!}" style="max-width:100%;overflow:hidden;" alt="">
                    </div>
                    @if (Auth::check())
                        <div class="panel-footer">
                            <favorite
                                :post={{ $myFavorite->id }}
                                :favorited={{ $myFavorite->favorited() ? 'true' : 'false' }}
                            ></favorite>
                        </div>
                    @endif
                </div>
            @empty
                <p>You have no favorite posts.</p>
            @endforelse
         </div>
    </div>
</div>
@endsection