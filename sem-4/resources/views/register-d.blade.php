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
    <form method="post" action="{{ url('/')}}/register">
        @csrf
        {{-- <pre>
        @php
            print_r($errors->all()); 
        @endphp
        </pre> --}}
        <div class="container">
            <h2 class="text-center">Registration</h2>
            <div class="form-group">
              <label for="">username</label>
              <input type="text" name="name" id="" class="form-control" placeholder="" value="{{old('name')}}">
              <span class="text-danger">
                    @error('name')
                        {{ $message }}
                        
                    @enderror
              </span>
            </div>
            
            <div class="form-group">
              <label for="">email</label>
              <input type="email" name="email" id="" class="form-control" placeholder="" value="{{old('email')}}">
              <span class="text-danger">
                    @error('email')
                        {{ $message }}
                        
                    @enderror
              </span>
            </div>
            
            <div class="form-group">
              <label for="">password</label>
              <input type="password" name="password" id="" class="form-control" placeholder="" >
              <span class="text-danger">
                    @error('password')
                        {{ $message }}  
                    @enderror
              </span>
            </div>
            
            <div class="form-group">
              <label for="">confirm password</label>
              <input type="password" name="password_confirmation" id="" class="form-control" placeholder="" >
              <span class="text-danger">
                    @error('password_confirmation')
                        {{ $message }}  
                    @enderror
              </span>
            </div>
            <button class="btn btn-primary" type="submit">submit</button>
            </div>
    </form>  
</body> 
</html> 