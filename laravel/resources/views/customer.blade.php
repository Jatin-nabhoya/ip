<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .required label::after{
            content: "*";
            color: red;
        }
    </style>
  </head>
  <body class="bg-dark">
      @include('nav');
    <form method="post" action="{{ $url }}">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all()); 
        @endphp
        </pre> --}}
        <div class="container mt-4 card p-3 bg-white">
            <h2 class="text-center text-primary"> {{$title}} </h2>
            <div class="row">
                <div class="form-group col-md-6 required">
                  <label for="">username</label>
                  <input type="text" name="name" id="" class="form-control" placeholder="" value="{{$customer->name}}">
                  <span class="text-danger">
                        @error('name')
                            {{ $message }}

                        @enderror
                  </span>
                </div>

                <div class="form-group col-md-6 required">
                  <label for="">email</label>
                  <input type="email" name="email" id="" class="form-control" placeholder="" value="{{$customer->email}}" >
                  <span class="text-danger">
                        @error('email')
                            {{ $message }}

                        @enderror
                  </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                  <label for="">password</label>
                  <input type="password" name="password" id="" class="form-control" placeholder="" {{$read}} >
                  <span class="text-danger">
                        @error('password')
                            {{ $message }}  
                        @enderror
                  </span>
                </div>

                <div class="form-group col-md-6 required">
                  <label for="">confirm password</label>
                  <input type="password" name="password_confirmation" id="" class="form-control" placeholder=""  {{$read}}>
                  <span class="text-danger">
                        @error('password_confirmation')
                            {{ $message }}  
                        @enderror
                  </span>
                </div>
            </div>
            <div class="row">

                <div class="form-group col-md-6 required">
                  <label for="">Country :</label>
                  <input type="text" name="country" id="" class="form-control" placeholder="" value="{{$customer->country}}">
                  <span class="text-danger">
                        @error('country')
                            {{ $message }}
                            
                        @enderror
                  </span>
                </div>
            
                <div class="form-group col-md-6 required">
                  <label for="">State :</label>
                  <input type="text" name="state" id="" class="form-control" placeholder="" value="{{$customer->state}}">
                  <span class="text-danger">
                        @error('state')
                            {{ $message }}
                            
                        @enderror
                  </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12 required">
                  <label for="">address :</label>
                  <textarea class="form-control" id="" name="address" rows="3" >{{$customer->address}}</textarea>
                  <span class="text-danger">
                        @error('address')
                            {{ $message }}
                            
                        @enderror
                  </span>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-6 required">
                  <label for="">Gender :</label><br>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="M" {{ $customer->gender == 'M' ? 'checked':'' }}>
                    <label class="form-check-label" for="inlineRadio1">Male</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="F" {{ $customer->gender == 'F' ? 'checked':'' }}>
                    <label class="form-check-label" for="inlineRadio2">Female</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="inlineRadio3" value="O" {{ $customer->gender == 'O' ? 'checked':'' }}>
                    <label class="form-check-label" for="inlineRadio3">other</label>
                  </div>
                  <span class="text-danger">
                        @error('name')
                            {{ $message }}
                            
                        @enderror
                  </span>
                </div>
                <div class="form-group col-md-6 required">
                    <label for="date" class="required">Date of Birth</label>
                    <input type="date" class="form-control error_form" name="date" id="" placeholder="" value="{{ $customer->dob}}">
                    <span class="text-danger">
                        @error('date')
                            {{ $message }}
                            
                        @enderror
                  </span>
                </div>
            </div>
            <div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">submit</button>
        </div>
    </form>  
</body> 
</html> 
