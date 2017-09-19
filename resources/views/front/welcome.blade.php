<!doctype html>
<html lang="en">
@include('front.includes.head')
<body>



@include('front.layouts.mast')

<div class="container">


    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(count($comments))
                <div class="infinite-scroll">
                    @include('front.posts.posts')
                </div>
            @endif

            @include('front.layouts.footer')

        </div>
    </div>
</div>




@include('front.includes.scripts')

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>
