<a href={{url('/add')}}>add new</a>
<h1>Members List</h1>
@if (session('success'))
    <div class="alert alert-success" >
        <h2 style='color:green'>{{session('success')}}</h2>
    </div>
@endif
@if (session('delete'))
    <div class="alert alert-success" >
        <h2 style='color:red'>{{session('delete')}}</h2>
    </div>
@endif
<table border='1'>
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Action</td>
    </tr>
    @foreach ($data as $member)
        <tr>
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['address']}}</td>
            <td><a href={{url("/deletemember/{$member['id']}")}}>Delete</a> <a href={{url("/managemember/{$member['id']}")}}>Edit</a></td>
        </tr>
    @endforeach
</table>
<div>
    {{$data->links()}}
</div>

<style>
    .w-5{
        display:none;
    }
</style>
