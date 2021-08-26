
<h1>Add Member</h1>
<form action="add" method="post">
    @csrf
    <input type="name" name='name' placeholder="Enter Name Here"> <br><br>
    <input type="email" name='email' placeholder="Enter email Here"><br><br>
    <input type="address" name='address' placeholder="Enter address Here"><br><br>
    <button type='submit'>Add</button>
</form>
