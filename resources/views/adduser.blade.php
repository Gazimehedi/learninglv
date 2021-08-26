@if (session('success'))
    <h1>{{session('success')}}</h1>
@endif
<h1>Add Users</h1>
<form action="adduser" method="post">
    @csrf
    <input type="username" name='username' placeholder="username"> <br><br>
    <input type="password" name='password' placeholder="password"> <br><br>
    <button type='submit'>Add</button>
</form>
