@csrf()
<input type="text" placeholder="Subject" name="subject" value="{{ $support->subject ?? old('subject') }}">
<textarea name="body" id="" cols="30" rows="5" placeholder="Description">{{ $support->body ?? old('body') }}</textarea>
<button>Send</button>
