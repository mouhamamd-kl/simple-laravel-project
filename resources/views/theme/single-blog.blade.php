@extends('theme.master')
@section('title', 'sing blog')
@section('contect')
    @include('theme.partials.hero', ['title' => 'Single Blog Page'])

    <!--================ Start Blog Post Area =================-->
    <section class="blog-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="main_blog_details">
                        <img class="img-fluid" src="{{ asset('asset') }}/img/blog/blog4.png" alt="">
                        <a href="#">
                            <h4>Cartridge Is Better Than Ever <br /> A Discount Toner</h4>
                        </a>
                        <div class="user_details">
                            <div class="mt-sm-0 float-right mt-3">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Mark wiens</h5>
                                        <p>12 Dec, 2017 11:21 am</p>
                                    </div>
                                    <div class="d-flex">
                                        <img src="{{ asset('asset') }}/img/avatar.png" alt="" width="42" height="42">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                            should have
                            to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of
                            the camp
                            price. However, who has the willpower</p>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                            should have
                            to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of
                            the camp
                            price. However, who has the willpower to actually sit through a self-imposed MCSE training. who
                            has the
                            willpower to actually sit through a self-imposed MCSE training.</p>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                            should have
                            to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of
                            the camp
                            price. However, who has the willpower</p>
                        <p>MCSE boot camps have its supporters and its detractors. Some people do not understand why you
                            should have
                            to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of
                            the camp
                            price. However, who has the willpower</p>
                    </div>

                    <div class="comments-area">
                        <h4>05 Comments</h4>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ asset('asset') }}/img/avatar.png" width="50px">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Emilly Blunt</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ asset('asset') }}/img/avatar.png" width="50px">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Maria Luna</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="comment-list">
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ asset('asset') }}/img/avatar.png" width="50px">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">Ina Hayes</a></h5>
                                        <p class="date">December 4, 2017 at 3:12 pm </p>
                                        <p class="comment">
                                            Never say goodbye till the end comes!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comment-form">
                        <h4>Leave a Reply</h4>
                        <form>
                            <div class="form-group form-inline">
                                <div class="form-group col-lg-6 col-md-6 name">
                                    <input class="form-control" id="name" type="text" placeholder="Enter Name"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
                                </div>
                                <div class="form-group col-lg-6 col-md-6 email">
                                    <input class="form-control" id="email" type="email"
                                        placeholder="Enter email address" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="subject" type="text" placeholder="Subject"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control mb-10" name="message" rows="5" placeholder="Messege" onfocus="this.placeholder = ''"
                                    onblur="this.placeholder = 'Messege'" required=""></textarea>
                            </div>
                            <a class="button submit_btn" href="#">Post Comment</a>
                        </form>
                    </div>
                </div>

                @include('theme.partials.sidebar')
            </div>
    </section>
    <!--================ End Blog Post Area =================-->
@endsection
