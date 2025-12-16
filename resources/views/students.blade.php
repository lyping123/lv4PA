<div>
    <a href="{{ route('students.register') }}">register</a>
    <h1>Student List</h1>
    <table>
        <thead>
            <th>Name</th>
            <th>Ic</th>
            <th>Course</th>
            <th>Contact number</th>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->ic }}</td>
                    <td>{{ $student->course }}</td>
                    <td>{{ $student->contact_number }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
