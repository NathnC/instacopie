
            @if(count($comments))
                <div class="infinite-scroll">
                    @foreach($comments as $comment => $key)
                        <div class="post-container container-fluid">
                            <div class="col-md-12 comment-top">
                                <div class="col-md-1 pl-0 pr-0">
                                    <span class="pr-5">
                                        <?php
                                            $imgurl = 'https://www.gravatar.com/avatar/' . md5($key->user->name) . 'jpg?s=200&d=identicon';
                                            echo "<img class='img-circle profile-img' src='{$imgurl}'>";
                                        ?>
                                    </span>
                                </div>
                                <div class="col-md-10 pl-0">
                                    <div class="profile-desc">
                                        <a class="profile-link">
                                            {{ $key->user->name }}
                                        </a>
                                        @if($key->user->verified)
                                            <span class="pl-5">
                                                <i data-toggle="tooltip" data-placement="right" title="Verified Account" class="fa fa-check-circle text-primary"></i>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="profile-extra">
                                        {{ $date }}.
                                    </div>
                                </div>


                            </div>
                            <?php
                                $url = 'http://lorempixel.com/1920/1080/city?rmmz' . '=' . rand(0, 999);
                                echo "<div class='square' style='background-image: url({$url})'>";
                            ?>
                                <div class="blur"></div>
                                <div class="col-md-12 action-buttons">
                                    <span>
                                        <i class="fa fa-2x fa-heart-o"></i>
                                    </span>
                                    <span>
                                        <i class="fa fa-2x fa-globe"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-12 comment-bottom pl-8">
                                <div class="col-md-6 pl-0">
                                    <b>{{ $key->title }}</b><hr>
                                    {{ $key->comment }}
                                </div>
                                <div class="col-md-6  text-right">
                                    <small>{{ $key->created_at }}</small>
                                </div>
                            </div>
                        </div>

                        @if($comment == 9)
                            @include('front.ads.adunit')
                        @endif

                    @endforeach



                    <div class="text-center">
                        {{ $comments->links() }}
                    </div>
                </div>
            @endif