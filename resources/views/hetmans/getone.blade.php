
<div>
    <a href="{{ route('hetmans.index') }}">
        Go back
    </a>
    <h1>Page of hetman:</h1>
    <h3>{{$hetman->first_name}} {{$hetman->last_name}}</h3>
    <p>{{$hetman->years_of_reign}}</p>
    <p>{{$hetman->description}}</p>
    <h4>He was a {{$hetman->point ? " good " : " bad "}} Hetman </h4>

</div>
