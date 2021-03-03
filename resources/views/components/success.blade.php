@if (session()->has('success'))
    <div>
        <p>{{ session()->get('success') }}</p>
    </div>
@endif