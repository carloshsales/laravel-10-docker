<h1>New support:</h1>

<x-alert />

<form action="{{ route('supports.store') }}" method="post">
    {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
    @include('admin.supports.partials.form')
</form>
