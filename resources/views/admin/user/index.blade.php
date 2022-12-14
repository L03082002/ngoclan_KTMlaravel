@extends('admin.layout.master')
{{-- @section('content') --}}
<div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="container-fluid px-4">
            <h1 class="mt-4">Tables</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                        Userlist
                </div>
                <div class="card-header">
                    <button type="submit">Add</button>
                </div>
                <div class="card-body">
                                <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Fullname</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Level</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                    @foreach($user as $user)
                                    <tr>
                                        <form action="{{ route('user.destroy',$user->id)}}" method="post" >
                                        @csrf
                                        @method('delete') 
                                        <td><a href="users/{{$user->id}}">{{$user->id}}</a></td>
                                        <td>{{ $user->full_name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <!-- <td>{{$user->password}}</a></td> -->
                                        <td>****************</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>{{ $user->address }}</td>
                                        <td>{{ $user->level }}</td>
                                        <td style="width:120px">
                                        <button type="button" class="btn btn-success" onclick="window.location='{{ route('user.edit',$user->id) }}'"><i class="fas fa-pen"></i></button>
                                        <button type="submit" name="delete" ><i class="fas fa-trash"></i></button>
                                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                                        <script>
                                        $("document").ready(function(){
                                        $(".btn-danger").click(function(){
                                            return confirm("B???n c?? th???c s??? mu???n x??a?");
                                        });
                                        });

                                        </script>
                                        </td>
                                        </form>
                                    </tr>
                                    @endforeach
                                
                                </tbody>
                                </table>
                                    <!-- script ajax (javascript) c?? th??? ?????t ??? trong c???p th??? head ho???c body -->
                                        
      </div>
     </div>
    </div>
    </main> 
     </div>
 </div>
{{-- @endsection --}}
