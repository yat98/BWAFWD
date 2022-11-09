<div class="form-group">
    <label for="travel_package_id">Travel Package</label>
    <select name="travel_package_id" id="travel_package_id" class="form-control" required>
        <option>-- Select Travel Package --</option>
        @foreach($travelPackages as $id => $title)
            <option value="{{ $id }}"
                {{ isset($gallery) ? ($gallery->travel_package_id == $id ? 'selected' : '') : '' }}>
                {{ $title }}
            </option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" name="image" placeholder="Image" value="{{ old('image') ?? (isset($gallery) ? $gallery->image : null) }}">
</div>