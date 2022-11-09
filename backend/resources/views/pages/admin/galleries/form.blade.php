<div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" placeholder="Title" value="{{ old('title') ?? (isset($travelPackage) ? $travelPackage->title : null) }}">
</div>
<div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location" placeholder="Location" value="{{ old('location') ?? (isset($travelPackage) ? $travelPackage->location : null) }}">
</div>
<div class="form-group">
    <label for="about">About</label>
    <textarea name="about" id="about" rows="10" class="d-block w-100 form-control">{{ old('about') ?? (isset($travelPackage) ? $travelPackage->about : null) }}</textarea>
</div>
<div class="form-group">
    <label for="featured_event">Featured Event</label>
    <input type="text" class="form-control" name="featured_event" placeholder="Featured Event" value="{{ old('featured_event') ?? (isset($travelPackage) ? $travelPackage->featured_event : null) }}">
</div>
<div class="form-group">
    <label for="languange">Languange</label>
    <input type="text" class="form-control" name="languange" placeholder="Languange" value="{{ old('languange') ?? (isset($travelPackage) ? $travelPackage->languange : null) }}">
</div>
<div class="form-group">
    <label for="food">Food</label>
    <input type="text" class="form-control" name="food" placeholder="Food" value="{{ old('food') ?? (isset($travelPackage) ? $travelPackage->food : null) }}">
</div>
<div class="form-group">
    <label for="food">Departure</label>
    <input type="date" class="form-control" name="departure" placeholder="Departure" value="{{ old('departure') ?? (isset($travelPackage) ? $travelPackage->departure : null) }}">
</div>
<div class="form-group">
    <label for="duration">Duration</label>
    <input duration="text" class="form-control" name="duration" placeholder="Duration" value="{{ old('duration') ?? (isset($travelPackage) ? $travelPackage->duration : null) }}">
</div>
<div class="form-group">
    <label for="type">Type</label>
    <input type="text" class="form-control" name="type" placeholder="Type" value="{{ old('type') ?? (isset($travelPackage) ? $travelPackage->type : null) }}">
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" name="price" placeholder="Price" value="{{ old('price') ?? (isset($travelPackage) ? $travelPackage->price : null) }}">
</div>