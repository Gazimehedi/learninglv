<h3>login form</h3>
<form action="submit" method="post" enctype="multipart/form-data">
    <input autocomplete="off" type="text" name="user" placeholder="Enter your name" >
    <br><br>
    <input autocomplete="off" type="password" name="password" placeholder="Enter user password" >
    <br><br>
    <input autocomplete="off" type="file" name="file" ><br>
     Profile Picture
    <br><br>
    @csrf
    <input type="submit" value="login">
</form>
