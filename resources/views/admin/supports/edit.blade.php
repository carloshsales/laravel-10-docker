<h1>Support: {{ $support->id }}</h1>

@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{ $error }}
    @endforeach
@endif

<form action="{{ route('supports.update', $support->id) }}" method="post">
    @csrf()
    @method('put')
    <input type="text" placeholder="Subject" name="subject" value="{{ $support->subject }}">
    <textarea name="body" id="" cols="30" rows="5" placeholder="Description">{{ $support->body }}</textarea>
    <button>Send</button>
</form>
