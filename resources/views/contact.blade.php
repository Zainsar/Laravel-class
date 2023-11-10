<h1>contact Page</h1>
<a href="/home">home</a>
<a href="/about">about</a>
<a href="/logout">logout</a>

{{-- php syntax --}}
@php
    $name= 'zain';
    $name1= 'Sarfraz';
@endphp
{{-- for html print use --}}
{!! "<h1> $name1 </h1>" !!}
{{-- for php print use --}}
{{$name}}