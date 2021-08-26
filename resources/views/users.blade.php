<h3>login form</h3>
<form action="users" method="post">
    @csrf
    <input autocomplete="off" type="username" name="user_id" placeholder="Enter user id" >
    <br><br>
    <input autocomplete="off" type="password" name="user_pwd" placeholder="Enter user password" >
    <br><br>
    <input type="submit" value="login">
</form>
