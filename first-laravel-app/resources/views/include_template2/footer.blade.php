<h1>footer for template2</h1>

@forelse ($names as $key => $value)
<p>{{ $key }} - {{ $value }}</p>
@empty
  <p>No Value Found.</p>
@endforelse