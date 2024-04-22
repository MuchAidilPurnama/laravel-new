@extends('admin.app')
@section('contents')
<head>
    <!-- Other meta tags and CSS links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
 <!-- Your content here -->
 <br>
 <br>
 <div class="container">
 <h1>Edit User</h1>
 <form action="{{ route('users.update', $user->id) }}" method="POST">
     @csrf
     @method('PUT')
     <div class="form-group">
         <label for="name">Name</label>
         <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
     </div>
     <div class="form-group">
         <label for="email">User</label>
         <textarea class="form-control" id="email" name="email" >{{ $user->email }}</textarea>
     </div>
     <div class="form-group">
         <label for="level">Role</label>
         <select class="form-control" id="level" name="level" required>
             <option value="admin" @if($user->level == 'admin') selected @endif>Admin</option>
             <option value="user" @if($user->level == 'user') selected @endif>User</option>
         </select>
     </div>
     <div class="form-group">
         <label for="password">Password</label>
         <input type="password" class="form-control" id="password" name="password" value="{{ $user->password }}">
     </div>
     <button type="submit" class="btn btn-primary">Update User</button>
 </form>
</div>
</body>
@endsection