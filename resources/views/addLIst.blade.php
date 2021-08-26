<h2>Add List Items</h2>
<form action="/additem" method="post">
    @csrf
    <input type="text" name='name' placeholder="Enter Name"><br><br>
    <input type="text" name='email' placeholder="Enter Email"><br><br>
    <input type="text" name='address' placeholder="Enter Address"><br><br>
    <button type="submit">add</button>
</form>
