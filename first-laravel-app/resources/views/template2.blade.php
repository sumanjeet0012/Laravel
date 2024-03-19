@php
    $names = [
        '0' => 'Sumanjeet',
        '1' => 'Kaur',
        '2' => 'Singh'
    ];
@endphp

@include('include_template2.header',['name' => 'Sumanjeet'])
<h1>Welcome to template2 testing for laravel</h1>
@include('include_template2.footer',['names' => $names])

@includeIf(count($names) > 0, 'include_template2.footer', ['names' => $names]);

@includeWhen(count($names) > 0, 'include_template2.footer', ['names' => $names]);

@includeUnless(!count($names) > 0, 'include_template2.footer', ['names' => $names]);

