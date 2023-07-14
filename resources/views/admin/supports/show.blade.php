<h1>Support details: id {{$support->id}}</h1>

<ul>
    <li>Subject: {{$support->subject}}</li>
    <li>Description: {{$support->body}}</li>
    <li>Status: {{$support->status}}</li>
</ul>

<form action="{{ route('supports.destroy', $support->id) }}" method="post">
    @csrf()
    @method('delete')
    <button>Delete</button>
</form> 