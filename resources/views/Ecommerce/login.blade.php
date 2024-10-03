@section('content')
    @extends('Ecommerce.master')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h2 class="text-center">Login</h2>
                <form action="{{ route('logincheck') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Enter your email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Enter your password" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-50 mb-2" class="me-3"><i
                            class="bi bi-login">login</i></button>
                    <a href="{{ route('register') }} " class="btn btn-primary w-50"><i class="bi bi-login">register</i></a>
                </form>
            </div>
            @if ($errors->any())
                <div class="card-footer text-body secondary">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
