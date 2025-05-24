@props(['active' => "456"])

<a {{ $attributes }} >{{$slot}} {{$active}}</a>
