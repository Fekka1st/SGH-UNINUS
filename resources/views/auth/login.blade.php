
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SGH | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            /* background-image: url("{{asset('asset/img/bgc.png')}}"); */
            background-image: url('https://cdn.britannica.com/69/123269-050-4F69A7A7/Greenhouse-Braunschweig-Germany.jpg');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: rgba(255, 255, 255, 0.9);
            /* Tembus pandang */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            /* Bayangan */
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .login-container img {
            width: 100px;
            /* Lebar logo */
            margin-bottom: 20px;
            /* Jarak antara logo dan heading */
        }

        .login-container h2 {
            font-size: 24px;
        }

        .form-control {
            border-radius: 25px;
            /* Sudut bulat di kiri dan kanan */
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
            font-size: 16px;
        }

        .form-control:focus {
            border-color: #66afe9;
            box-shadow: 0 0 5px rgba(102, 175, 233, 0.5);
        }

        .form-check {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .form-check-label,
        .form-check a {
            font-size: 14px;
        }

        .btn {
            border-radius: 25px;
            background-color: #4c744a;
            color: white;
            width: 100%;
            transition: background-color 0.3s;
            font-size: 18px;
        }

        .btn:hover {
            background-color: #a6b12a;
        }

        .footer-link {
            margin-top: 15px;
            font-size: 14px;
        }

        .footer-link a {
            font-size: 14px;
        }

    </style>
</head>

<body>
    <div class="login-container">
        <img src="{{asset('asset/img/log.png')}}" alt="Logo" />
        <h2 ><b>Login</b></h2>
        <x-input-error :messages="$errors->get('email')" class="mt-2" />
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required
                    autofocus placeholder="Email" autocomplete="username" />
            </div>
            <div class="mb-3">
                <input type="password" class="form-control" id="password" placeholder="password" name="password"
                    required />

            </div>
            <div class="form-check mb-3">
                <input type="checkbox" class="form-check-input" name="remember" id="remember_me" />
                <label class="form-check-label" for="rememberMe">Remember Me</label>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
</script>

</html>
