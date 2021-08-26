<h1>Hello {{$name}}</h1>
@if (session('msg'))
<h1>{{session('msg')}}</h1>
@endif
<h2>Name : {{session('user')}}</h2>
<h2>Password : {{session('pwd')}}</h2>
<h2>Id : {{$id}}</h2>
<a href="{{url('/logout')}}">Logout</a>
