<nav class="navbar navbar-expand-lg navbar-dark bg-primary bg-info" style="background-color:#6f42c1">
    <a class="navbar-brand" href="index.php">
        {{-- Jatin Nabhoya --}}
        @if(session()->has('name'))
            {{session()->get('name')}}
        @else
            {{'Guest'}}
        @endif
    </a>
    <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}/demo">demo</a>
            </li>
             
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/register-d">register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}/customer" >customer</a>
                </li>
        </ul>
    </div>
</nav>