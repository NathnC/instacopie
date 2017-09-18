<!doctype html>
<html lang="{{ app()->getLocale() }}">
<body class="bg-darkpurple">
@include('front.includes.head')


<div class="container pt-25">
    <div class="col-md-4 col-md-offset-4">
        <div class="col-md-12 text-center pt-50 pb-25">
            <a href="/"><img src="images/branding/slade_white.png" width="174" height="58.5s"></a>
        </div>
        <div class="col-md-12 rounded-border padding-10">
            <form method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control square-border" id="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control square-border" id="password" placeholder="Password" required>
                </div>
                <button type="submit" class="btn full-width square-border btn-purple">Login</button>
            </form>
        </div>
        <div class="col-md-12 text-center text-white pt-15"><i class="fa phpdebugbar-fa-lock text-white"></i> &copy; SladeHQ Dashboard</div>
    </div>
</div>



</body>
</html>
