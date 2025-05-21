@extends('admin.admin_master')


@section('admin')

    <div class="py-12">
        <div class="container">
            <div class="row">
                <h2>Home About</h2>
                {{-- {{route('add.about')}} add buton route  --}}
            <a href="{{ route('real_estate.create') }}"  class="btn btn-success" role="button" aria-disabled="true">Add Building</a>
                <div class="col-md-12">
                    <div class="card table-responsive">
                        @if(Session::has('message'))
                            <div class="alert alert-success">
                                {{Session::get('message')}}
                            </div>
                            @endif


                            <div class="card-header">Building Lists</div>

                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" >Thumbnail</th>
                                <th scope="col" >Name</th>
                                <th scope="col" >Address</th>
                                <th scope="col" >Actions</th>
                              </tr>
                            </thead>
                            <tbody>
                                @php ($i = 1)
                                @foreach ($buildings as $building)
                                <tr>
                                    <td><img src="{{asset('uploads/buildings/'.$building->thumbnail)}}" style="height:50px; width:70px;" ></td>
                                    <td>{{ $building->name }}</td>
                                    <td>{{ $building->address }}</td>
                                    <td>
                                        <a href="{{route('real_estate.edit',[$building->id])}}" class="btn btn-info">Edit</a>
                                        {{-- building delete route {{route('building.delete',[$building->id])}} --}}
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
