@extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif
            <main class="form-registration w-200 m-auto">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Lets Login</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control email @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email" value="{{ old('email') }}" autofocus required>
                        <label for="email" >Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" name="password" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-end mt-3">
                    Not registered? <a href="/register">Register</a>
                </small>
            </main>
        </div>
    </div>
@endsection


{{-- @extends('layout.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">

            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            @if(session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
            @endif

            <main class="form-signin w-100 m-auto">
                <form action="/login" method="post">
                    @csrf
                    <h1 class="h3 mb-3 fw-normal text-center">Please login</h1>

                    <div class="form-floating ">
                        <input type="email" name ="email" class="form-control @error ('email')is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" placeholder="Password" required>
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
                </form>
                <small class="d-block text-end mt-3">
                    Not registered? <a href="/register">Register</a>
                </small>
            </main>
        </div>
    </div>
@endsection --}}
{{-- <h1>Silahkan Login</h1>
    <form action="proses_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <label for="Tahun">Ulangi password:</label>
        <input type="password" id="Tahun" name="Tahun" required><br><br>
        <label for="birthday">Birthday:</label>
        <input type="date" id="birthday" name="birthday"> <br> <br>
        <label for="Pilih">Tahun ajaran:</label>
        <select name="pilihan">
            <option value="pilihan1">ITSK Soepraoen</option>
            <option value="pilihan2">2020/2021</option>
            <option value="pilihan3">2021/2022</option>
            <option value="pilihan4">2022/2023</option>
        </select> <br> <br>
        <input type="radio" id="pria" name="jenis_kelamin" value="pria">
        <label for="pria">Pria</label><br>
        <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
        <label for="wanita">Wanita</label><br>
        <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
        <label for="wanita">ITSK Soepraoen</label><br> <br>
        <textarea id="w3review" name="w3review" rows="4" cols="50">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi ratione obcaecati deleniti qui quia, quasi repellat alias quos accusantium velit, magnam pariatur est? Consequuntur facere vero ad nam aliquam nulla!
        </textarea> <br> <br>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
        <label for="vehicle1"> ITSK Soepraoen</label><br>
        <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
        <label for="vehicle2"> I have a car</label><br>
        <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
        <label for="vehicle3"> I have a boat</label><br> <br>
        <input type="submit" value="Login"> 
    </form>--}}
