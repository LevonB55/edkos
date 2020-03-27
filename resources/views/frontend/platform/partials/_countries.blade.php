<select name="{{ $country }}">
    <option value="">Country</option>
    @foreach($countries as $country)
        <option value="{{ $country->id }}" {{ $selectedCountry == $country->id ? 'selected' : '' }}>
            {{ $country->name }}
        </option>
    @endforeach
</select>