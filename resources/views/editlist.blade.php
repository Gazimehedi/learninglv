<h2>Edit List Item</h2>
<form action="" method="post">
    @csrf
    @method('put')
    {{-- <input type="hidden" name='id' value="{{$item->id}}"> --}}
    <input type="text" name='name' value="{{$item->name}}"><br><br>
    <input type="text" name='email' value="{{$item->email}}" ><br><br>
    <input type="text" name='address' value="{{$item->address}}"><br><br>
    <button type="submit">Update</button>
</form>
