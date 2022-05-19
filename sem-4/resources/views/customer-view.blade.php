<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      @include('nav');
      <div class="container">
            <a href="{{route('customer.register')}}">
                <button class="btn btn-primary d-inline p-2 text-white m-1 float-right">Add</button>
            </a>
            
            <table class="table">
                <thead>
                    <tr>
                        <th>customer id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>gender</th>
                        <th>Date of Birth</th>
                        <th>country</th>
                        <th>state</th>
                        <th>address</th>
                        <th>Status</th>
                        <th class="col-sm-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->customer_id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->email}}</td>
                        <td>
                        @if($customer->gender == 'M')
                            Male
                        @elseif($customer->gender == 'F')
                            Female
                        @else
                            other
                        @endif
                        </td>
                        {{-- <td>{{get_formatted_date($customer->dob,'d-M-Y')}}</td> --}}
                        <td>{{$customer->dob}}</td>
                        <td>{{$customer->country}}</td>
                        <td>{{$customer->state}}</td>
                        <td>{{$customer->address}}</td>
                        <td>
                            @if($customer->is_active == 1)
                                 <span class="badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('customer.edit',['id' => $customer->customer_id])}}"><button type="button" class="btn btn-success btn-sm">Edit</button></a>
                        
                             {{-- <a href="{{url("/customer/delete")}}/{{$customer->customer_id}}" class=""><button type="button" class="btn btn-danger btn-sm">Delete</button></a> --}}
                             <a href="{{route('customer.delete',['id' => $customer->customer_id])}}" class=""><button type="button" class="btn btn-danger btn-sm">Delete</button></a>
                        </td>
                    </tr>
                        @endforeach
                </tbody>
            </table>
            <div class="row sm-1">
                {{-- <div class="col-sm-1"> --}}
                    {{$customers->links()}}
                {{-- </div> --}}
            </div>    
        </div>
  </body>
</html>