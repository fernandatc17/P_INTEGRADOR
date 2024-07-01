<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #EB1616;
            --secondary: #191C24;
            --light: #6C7293;
            --dark: #000000;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: var(--dark);
            margin: 0;
            overflow: hidden;
        }

        .register-container {
            max-width: 400px;
            width: 100%;
            padding: 2rem;
            background-color: var(--secondary);
            border-radius: 8px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .register-header {
            text-align: center;
            margin-bottom: 1.5rem;
            color: var(--primary);
        }

        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            font-weight: bold;
            text-transform: uppercase;
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: darken(var(--primary), 10%);
            border-color: darken(var(--primary), 10%);
            transform: scale(1.05);
        }

        .form-label, .form-check-label, h3, .btn-link {
            color: #ffffff;
            font-weight: 500;
        }

        h3 {
            font-weight: 500;
            margin-bottom: 1rem;
        }

        .invalid-feedback {
            color: #e3342f;
        }

        .btn-link {
            color: var(--primary);
            transition: color 0.3s;
        }

        .btn-link:hover {
            color: #ff3333;
        }
    </style>
</head>

<body>
    <div class="container-fluid register-container">
        <div class="register-card">
            <center>
                <div class="logo">
                    <h3><i class="fa fa-user-edit me-2"></i>TechNet Solution</h3>
                </div>
            </center>

            <center><h3>Register</h3></center>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-3">
                    <label for="username" class="form-label">Nombre</label>
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Dirección Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirmar Contraseña</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>

                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">{{ __('Register') }}</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
