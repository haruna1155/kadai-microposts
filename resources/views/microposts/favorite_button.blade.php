@if (Auth::id() !=$micropost->id)
    @if(Auth::user()->is_favorites($micropost->id))
        {{--unfavoritesのボタン--}}
        {!! Form::open(["route"=>["microposts.destroy",$micropost->id],"method"=>"delete"]) !!}
            {!! Form::submit("Unfavorite",["class"=>"btn btn-secondary btn-sm"]) !!}
        {!! Form::close() !!}    
    @else
        {{--favoritesのボタン--}}
        {!! Form::open(["route"=>["microposts.store",$micropost->id]]) !!}
            {!! Form::submit("Favorite",["class"=>"btn btn-success btn-sm"]) !!}
        {!! Form::close() !!}
    @endif
@endif    