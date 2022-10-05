<div class="card">
    <div class="head">
        <a href="{{route('movie', ['id' => $key])}}">
            <h3 class="title">{{$movie['title']}}</h3>
        </a>
        <p class="sub-title">{{$movie['original_title']}}</p>
    </div>
    <div class="body">
        <div class="info">
            <h5>{{$movie['nationality']}}</h5>
            <h5>{{$movie['date']}}</h5>
        </div>
        <small class="vote">vote - <b>{{round($movie['vote'], 0)}}</b></small>
    </div>
</div>