<h1>Welcome to template testing for laravel</h1>

{{ 5+2 }}

<br>
<br>

{{  " hello world " }}

<br><br>

{{  "<h1> hello world </h1>" }}

<br><br>

{!! "<h1> hello world </h1>" !!}

<br><br>

{!! "<script> console.log('hello world') </script>" !!}

<br><br>

@php
    $name = "Sumanjeet"
@endphp

{{ $name }}

@php
   $names = ["suman", "jeet", "singh"];
@endphp

<br>
<br><br>

<ul>
@foreach ($names as $name)
@if ($loop->first)
{{"first item"}}
            <li>{{ $name }}</li>

@elseif ($loop->last)
    {{"last item"}}
    <li>{{ $name }}</li>

@else
    <li>{{ $name }}</li>
    
@endif
    <li>{{ $name }}</li>
@endforeach
</ul>