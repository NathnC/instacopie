<!doctype html>
<html lang="{{ app()->getLocale() }}">
<body class="bg-blue">
@include('front.includes.head')


<div class="container pt-150">
    <div class="col-md-4 col-md-offset-4 bg-white">
        <div class="col-md-12 text-center pt-50 pb-25">
            <h1 class="nice-font text-blue text-center fz-70">instacopie</h1>
        </div>
        <div class="col-md-12 rounded-border padding-10">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="text-white" for="email">Email address</label>
                    <input type="email" name="email" class="form-control square-border" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label class="text-white" for="password">Password</label>
                    <input type="password" name="password" class="form-control square-border" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn full-width square-border btn-blue">Login</button>
            </form>
        </div>
        <div class="col-md-12 text-center text-white pt-15"><i class="fa phpdebugbar-fa-lock text-white"></i> &copy; Instacopie</div>
    </div>
</div>



</body>
</html>
