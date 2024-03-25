@extends('layouts.frontend')


@section('content')


<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Activity</th>
      <th>Time Dedicated</th>
      <th>Completion_Status</th>
    </tr>
  </thead>
  <tbody>
    @foreach($schedule as $schdata)

        <tr>
            <th> {{$schdata->id}}</th>
            <td>{{$schdata->Activity}}</td>
            <td>{{$schdata->Time_Dedicated}}</td>
            <td>{{$schdata->Completion_Status}}</td>
        </tr>

    @endforeach
 
  </tbody>
</table>

<a href = "/" > Back to home page </a>
@endsection()