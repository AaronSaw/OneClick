<h3>User List</h3>
<table>
    <thead>
    <tr>
        <th><strong>Name</strong></th>
        <th><strong>Role</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Adress</strong></th>
        <th><strong>Created At</strong></th>
    </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>
                @if ($user->role == 1)
                    User
                @else
                    Admin
                @endif
            </td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->address }}</td>
            <td>{{ $user->created_at->format('d M Y') }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
{{--{{ $users->links('vendor.pagination.custom-pagi') }}--}}
