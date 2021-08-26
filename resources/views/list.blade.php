<h2>Member List</h2>
<table border='1'>
    <tr>
        <td>#</td>
        <td>Name</td>
        <td>Eamil</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
@foreach ($lists as $list )
    <tr>
        <td>{{$list->id}}</td>
        <td>{{$list->name}}</td>
        <td>{{$list->email}}</td>
        <td>{{$list->address}}</td>
        <td><a href={{url("/edititem/{$list->id}")}}>Edit</a> | <a onclick="return confirm('Are you sure?')" href={{url("/deleteitem/{$list->id}")}}>Delete</a></td>
    </tr>
@endforeach
</table>
