<form action="{{route('buku.store')}}" method="post">
    @csrf
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
</div>
    @endif
    <div>
        <label>title</label>
    <input type="text" name="title" value="{{ old('title') }}">
    @error ('title')
        <div> {{$message}}</div>
    @enderror
</div>
<div>
        <lable> author </label>
        <input type ="text" name="author" value="{{ old('author') }}">
</div>
<div>
    <label>categoryuy</label>
    <input type="text" name="cata_id">
</div>

    <button type="submit">save</button>
</form> 