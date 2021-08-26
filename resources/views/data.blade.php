<h1>User Information in api</h1>
<table border="1" selpadding="10px">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Profile</td>
    </tr>
    @foreach ($collection as $user)
        <tr>
            <td>{{$user['id']}}</td>
            <td>{{$user['first_name']}} {{$user['last_name']}}</td>
            <td>{{$user['email']}}</td>
            <td><img src={{$user['avatar']}} alt=""></td>
        </tr>
    @endforeach
</table>
