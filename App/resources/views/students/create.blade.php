@extends('students.layout')
@section('content')

    <div class="card" style="margin:20px;">
        <div class="card-header">Create New Students</div>
        <div class="card-body">

            <form action="{{ url('student') }}" method="post">
                @csrf
                {!! csrf_field() !!}
                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control @error('name') border-red-700 @enderror" placeholder="Name" ></br>
                @error('name')
                <p class="text-red-500">{{$message}}</p>
                @enderror
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control @error('address') border-red-700 @enderror" placeholder="Address"></br>
                @error('address')
                <p class="text-red-500">{{$message}}</p>
                @enderror
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control @error('mobile') border-red-700 @enderror" placeholder="Mobile"></br>
                @error('mobile')
                <p class="text-red-500">{{$message}}</p>
                @enderror
                <input type="submit" value="Save" class="btn btn-success"></br>

                <div>
                    <a href="{{url('/student')}}" class="btn btn-success">Back</a>
                </div>


            </form>

        </div>
    </div>

@stop
