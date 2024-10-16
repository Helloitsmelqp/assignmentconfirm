<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>

    <form action ="{{route('validate.store') }} " method = "POST">
        @csrf
        <div> 
            <label for="">Name</label>
            <input type="text" name= "name" value="{{ old('name') }}"><br><br>
            @error('name')
            <p>{{ $message }}></p>
            @enderror
        </div>
        <di>
            <label for="">Email</label>
            <input type="text" name= "email" ><br><br>
        </di>
        <div>
            <label for="password">password</label>
            <input type="password" name="password" required><br><br>
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">confirm password</label>
            <input type="password" name="password_confirmation" required><br><br>
            @error('password_confirmation')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

            <button type="submit" >save</button>
    </form>

</body>
</html>