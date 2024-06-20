<h1>User Details</h1>
{{-- @dd($data) --}}
@foreach ($data as $id => $user)
{{-- @dd($user->name) --}}
<h3>Name : {{ $user->name}}</h3> 
<h3>Mobile : {{ $user->mobile_no}}</h3>
<h3>Address : {{ $user->address}}</h3>
@endforeach