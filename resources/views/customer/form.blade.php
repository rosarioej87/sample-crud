@csrf

    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" placeholder="name" autocomplete="off" value="{{ old('name') ?? $customer->name}}">
    @error('name')
        <p style="color: red">{{ $message }}</p>
    @enderror
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="email" autocomplete="off" value="{{ old('email') ?? $customer->email}}">
        @error('email')
            <p style="color: red">{{ $message }}</p>
        @enderror
    </div>
