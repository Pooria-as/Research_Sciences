<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    body {
        background-color: #001f3f;
    }

    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    html {
        background: #95a5a6;
        background-image: url(http://subtlepatterns2015.subtlepatterns.netdna-cdn.com/patterns/dark_embroidery.png);
        font-family: "Helvetica Neue", Arial, Sans-Serif;
    }

    html .login-wrap {
        position: relative;
        margin:  auto;
        background: #ecf0f1;
        width: 350px;
        border-radius: 5px;
        box-shadow: 3px 3px 10px #333;
        padding: 20px;
    }

    html .login-wrap h4 {
        text-align: center;
        font-weight: 500;
        font-size: 1.2em;
        padding: 10px;
        margin-top: 10px;
        color: #34495e;
    }

    html .login-wrap .form {
        padding-top: 20px;
    }

    html .login-wrap .form input[type="text"],
    html .login-wrap .form input[type="password"],
    html .login-wrap .form button {
        width: 80%;
        margin-left: 10%;
        margin-bottom: 25px;
        height: 40px;
        border-radius: 5px;
        outline: 0;
        -moz-outline-style: none;
    }

    html .login-wrap .form input[type="text"],
    html .login-wrap .form input[type="password"] {
        border: 1px solid #bbb;
        padding: 0 0 0 10px;
        font-size: 12px;
        text-align: right;
        padding: 3px;
    }

    html .login-wrap .form input[type="text"]:focus,
    html .login-wrap .form input[type="password"]:focus {
        border: 1px solid #3498db;
    }

    html .login-wrap .form a {
        text-align: center;
        font-size: 10px;
        color: #3498db;
    }

    html .login-wrap .form a p {
        padding-bottom: 10px;
    }

    html .login-wrap .form button {
        background: #3498db;
        border: none;
        color: white;
        font-size: 18px;
        font-weight: 200;
        cursor: pointer;
        transition: box-shadow 0.4s ease;
    }

    html .login-wrap .form button:hover {
        box-shadow: 1px 1px 5px #555;
    }

    html .login-wrap .form button:active {
        box-shadow: 1px 1px 7px #222;
    }



    .p {
        text-align: center;
        font-size: 20px;
        color: #3498db
    }

</style>

<body>
    <p class="p">
        سامانه دانشگاه آزاد اسلامی واحد علوم تحقیقات
    </p>

    <div class="login-wrap">
        <div class="d-flex  justify-content-center">
            <img src="{{ asset("Dashboard/img/graduation.png") }}"  width="80" height="80" alt="">
            <h4>ورود به سامانه</h4>
            <img src="{{ asset("Dashboard/img/univercity.png") }}"  width="80" height="80" alt="">
        </div>

            <div class="form">
               <form action="{{ route("login") }}" method="POST">
                <div class="form-group">
                    <p style="text-align: center">
                        نام کاربری
                    </p>
                    <input type="text" id="email" placeholder="نام کاربری/ایمیل" class="form-control @error('email')
                        is-invalid
                    @enderror" name="email">
                    @error("email")
                        <p class="text text-danger"  style="text-align: center;">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                @csrf
                <div class="form-group">
                    <p style="text-align: center">
                        رمز عبور
                    </p>

                    <input type="password" placeholder="رمز عبور" class="form-control  @error('password')
                    is-invalid
                @enderror" name="password">
                @error("password")
                <p class="text text-danger" style="text-align: center;">
                    {{ $message }}
                </p>
            @enderror
                </div>

                <div class="form-group">
                    <button type="submit">ورود</button>
                </div>
                <p style="text-align: center;font-size:10px;">
                    .کلیه حقوق استفاده از سیستم متعلق به <span style="color: #3498db;"> دانشگاه آزاد اسلامی</span> است
                </p>
               </form>
            </div>
        </div>


</body>

</html>
