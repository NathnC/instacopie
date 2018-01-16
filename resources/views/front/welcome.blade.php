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
                    <div class="post-container container-fluid mb-25 blue-border">
                        <div class="col-md-12 comment-top">
                            <div class="col-md-2 pl-0 ">
                                <i class="fa fa-4x fa-hand-o-right text-primary pt-5 pb-5 pl-15"></i>
                            </div>
                            <div class="col-md-9 pl-0">
                                <div class="profile-desc">
                                    <a class="profile-link">
                                        Hey {{ Auth()->user()->name }}!
                                    </a>
                                </div>
                                <div class="profile-extra">
                                    <p>Welcome back.<br>
                                        We've added a few new things to your feed, take a look!</p>
                                </div>
                            </div>
                            <div class="col-md-1 text-right">
                                <i class="fa fa-times"></i>
                            </div>
                        </div>
                        <div class="blur"></div>
                    </div>

                    @include('front.posts.posts')


                </div>
            @endif

            @include('front.layouts.footer')

        </div>
    </div>
</div>




@include('front.includes.scripts')

<script>
    var myLazyLoad = new LazyLoad();
</script>

<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>
</html>
