<div>
   <h1>Registration Page</h1>
   <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Ic:</label>
        <input type="text" name="ic" required>
        <br>
        <label>Course:</label>
        <input type="text" name="course" required>
        <br>
        <label>Contact number:</label>
        <input type="text" name="contact_number" required>
        <br>
        <button type="submit">Register</button>
   </form>
</div>
