@extends('layouts.resume')


@section('content')
<section class="grid gird-cols-2 space-x-10">
    <div>
        <img class="w-32 rounded-full border" scr="{{'/storage/'. $user->avatar}}" alt="{{$user->name}}" />
    </div>

</section>

@endsection