<h1>New support:</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.store') }}" method="post">
    {{-- <input type="hidden" value="{{csrf_token()}}" name="_token"> --}}
    @csrf()
    <input type="text" placeholder="Subject" name="subject" value="{{ old('subject') }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Description">{{ old('body') }}</textarea>
    <button>Send</button>
</form>
