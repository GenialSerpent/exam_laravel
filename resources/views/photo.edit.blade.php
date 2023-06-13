<h1>Edit photo</h1>
<form action="{{ route('photo', $photo->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="author">author:</label>
        <input type="text" class="form-control" id="author" name="author" required value="{{ $photo->author }}">
    </div>
    <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" name="name" required value="{{ $photo->name }}">
    </div>
    <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" id="description" name="description" required value="{{ $photo->description }}">
    </div>
    <div class="form-group">
        <label for="url">url:</label>
        <input type="url" class="form-control" id="url" name="url" required value="{{ $photo->url }}">
    </div>
    <div class="form-group">
        <label for="hashtags">hashtags:</label>
        <select multiple class="form-control" id="hashtags" name="hashtags[]">
            @foreach ($photo->hashtags as $hashtag)
                <option value="{{ $hashtag }}" {{ $photo->contains($hashtag) ? 'selected' : '' }}>{{ $hashtag }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="date">date:</label>
        <input type="date" class="form-control" id="date" name="date" required value="{{ $photo->date }}">
    </div>
    <button type="submit" class="btn btn-primary">Save</button>
    <a href="{{ route('photo') }}" class="btn btn-secondary">Cancel</a>
</form>

