@extends('include_template4.layout')

@push('script')
    <script src="/script.js"></script>
@endpush

@push('script')
<script src="/script2.js"></script>
@endpush

@php
    $name = "Sumanjeet";
    $fruits = [
        '0' => 'Apple',
        '1' => 'Orange',
        '2' => 'Banana'
    ];
@endphp

<script>
    let name = @json($name);
    let fruits = @json($fruits);
    console.log(name);
    console.log(fruits);

</script>