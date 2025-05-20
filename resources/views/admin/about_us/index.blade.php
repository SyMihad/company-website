@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Home About</h2>
                {{-- {{route('add.about')}} add buton route  --}}
            <a href="{{ route('about_us.create') }}"  class="btn btn-success" role="button" aria-disabled="true">Add Member</a>
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif


                            <div class="card-header">Member Details in About US Page</div>

                        <table class="table">
                            <thead>
                              <tr>
                                  <th scope="col" >Priority</th>
                                <th scope="col" >Photo</th>
                                <th scope="col" >Name</th>
                                <th scope="col" >Designation</th>
                                <th scope="col" >Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($members as $member)
                                <td>{{ $member->priority }}</td>
                                <td><img src="{{asset('image/team/'.$member->photo)}}" style="height:50px; width:70px;" ></td>
                                <td>{{ $member->name }}</td>
                                <td>{{ $member->designation }}</td>

                                    <td>
                                        <a href="{{route('about_us.edit',[$member->id])}}" class="btn btn-info">Edit</a>
                                        {{-- member delete route {{route('member.delete',[$member->id])}} --}}
                                        <a href="" onclick="return confirm('Are you sure to delete?')" class="btn btn-danger">Delete</a>
                                    </td>
                                  </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>




                </div>
            </div>



        </div>


    </div>

    @endsection
