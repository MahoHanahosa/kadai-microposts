@if (Auth::user()->saving_as_bookmark($micropost->id))
    {{-- お気に入り登録解除ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.unfavorite', $micropost->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-secondary btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {{-- お気に入り登録ボタンのフォーム --}}
    {!! Form::open(['route' => ['favorites.favorite', $micropost->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@endif