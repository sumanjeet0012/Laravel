<h1>This is a layout page </h1>

@yield('content')

<h1>End of layout</h1>

@yield('default', 'default value')

@hasSection ('check')
    <h1>Section is present</h1>
@else
    <h1>Section is not present</h1>
@endif

@yield('footer')

@section('section')
    <h1>this is a section and it is statically typed</h1>
    @show