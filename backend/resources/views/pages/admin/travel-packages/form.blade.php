<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') }}">
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old('location') }}">
</div>
<div class="form-group">
    <label for="about">About</label>
    <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">
        {{ old('about') }}
    </textarea>
</div>
<div class="form-group">
    <label for="featured_event">Featured Event</label>
    <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') }}">
</div>
<div class="form-group">
    <label for="languange">Languange</label>
    <input type="text" class="form-control" name="languange" placeholder="Languange" value="{{ old('languange') }}">
</div>
<div class="form-group">
    <label for="food">Food</label>
    <input type="text" class="form-control" name="food" placeholder="Food" value="{{ old('food') }}">
</div>
<div class="form-group">
    <label for="food">Departure</label>
    <input type="date" class="form-control" name="departure" placeholder="Departure" value="{{ old('departure') }}">
</div>
<div class="form-group">
    <label for="duration">Duration</label>
    <input duration="text" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration') }}">
</div>
<div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" name="type" placeholder="Type" value="{{ old('type') }}">
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') }}">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary btn-block">Simpan</button>
</div>