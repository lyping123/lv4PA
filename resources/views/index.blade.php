<form action="{{ route('members.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <p>{{ $errors->first('name') }}</p>
    <input type="email" name="email" placeholder="Email">
    <p>{{ $errors->first('email') }}</p>
    <select name="gender">
        <option value="male">Male</option>
        <option value="female">Female</option>
        <option value="other">Other</option>
    </select>
    <p>{{ $errors->first('gender') }}</p>
    <button type="submit">Submit</button>
</form>