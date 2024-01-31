@extends('website.master')


@section('title')
    Blog Detail Page
@endsection


@section('body')

    <div class="page-cover pt-5 position-relative about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4">
                    <div class="cover-content">
                        <div class="author-detail mb-2">
                            <a href="#" class="tag white bg-theme py-1 px-3 me-2">#Technology</a>
                            <a href="#" class="tag white bg-navy py-1 px-3"><i class="fa fa-eye"></i> 2500</a>
                        </div>
                        <h1>How a developer and designer duo at Deutsche Bank keep remote</h1>
                        <div class="author-detail d-flex align-items-center">
                            <span class="me-3"><a href="#"><i class="fa fa-clock"></i> Posted On : 12 May 2021</a></span>
                            <span class="me-3"><a href="#"><i class="fa fa-user"></i> Jack Richard</a></span>
                            <span><a href="#"><i class="fa fa-comments"></i> 50</a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="box-shadow p-3"><img src="{{asset('/')}}website/images/trending/trending3.jpg" alt="Image" class="w-100"></div>
                </div>
            </div>
        </div>
    </div>


    <section class="blog blog-left pt-5 pb-5">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 mb-4">
                    <div class="blog-single">
                        <div class="blog-wrapper">
                            <div class="blog-content first-child-cap">
                                <p class="mb-3">The property, complete with a 30-seat screening room, a 100-seat amphitheater and a swimming pond with sandy beach and outdoor shower, was asking about $40 million. Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. Lorem ipsum dolor sit amet, cons sit amet, consectetur adi ectetur adipis Vi.<br><br>
                                    <img src="{{asset('/')}}website/images/bg/bg3.jpg" alt="image" class="mb-3">
                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                            </div>

                            <div class="blog-quote mb-4">
                                <p class="white">“To take a trivial example, which ever undertakes laborious physical work exercise, except obtain some advantage blinded” </p>
                                <span class="white">By Michael Delwell</span>
                                <i class="fas fa-quote-left"></i>
                            </div>
                            <div class="blog-imagelist mb-4">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{asset('/')}}website/images/trending/trending4.jpg" alt="image">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <img src="{{asset('/')}}website/images/trending/trending2.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="bigyapan mb-4">
                                <a href="#"><img src="{{asset('/')}}website/images/bigyapan.jpg" alt></a>
                            </div>
                            <p class="mb-4">as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>

                            <div class="blog-share d-flex justify-content-between align-items-center mb-4 bg-lgrey border">
                                <div class="blog-share-tag">
                                    <ul class="inline">
                                        <li><strong>Posted In:</strong></li>
                                        <li><a href="#">Fashion,</a></li>
                                        <li><a href="#">Beauty,</a></li>
                                        <li><a href="#">Vacation,</a></li>
                                        <li><a href="#">Travel,</a></li>
                                        <li><a href="#">News</a></li>
                                    </ul>
                                </div>
                                <div class="header-social">
                                    <ul>
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="blog-author mb-4 bg-grey border">
                            <div class="blog-author-item">
                                <div class="row d-flex justify-content-between align-items-center">
                                    <div class="col-md-3 col-sm-3 col-xs-12">
                                        <div class="blog-thumb text-center position-relative">
                                            <img src="{{asset('/')}}website/images/reviewer/1.jpg" alt>
                                        </div>
                                    </div>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                        <h3 class="title pink"><a href="#">About Author <span>Graphic Designer</span></a></h3>
                                        <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sceler neque in euismod. Nam vitae urnasodales neque in faucibus.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="blog-next mb-4 d-flex align-items-center">
                            <a href="#" class="float-left">
                                <div class="prev ps-4">
                                    <i class="fa fa-arrow-left white"></i>
                                    <p class="m-0 white">Previous Post</p>
                                    <p class="m-0 white">The bedding was hardly able</p>
                                </div>
                            </a>
                            <a href="#" class="float-right bg-grey">
                                <div class="next pr-4 text-right">
                                    <i class="fa fa-arrow-right"></i>
                                    <p class="m-0">Previous Post</p>
                                    <p class="m-0">The bedding was hardly able</p>
                                </div>
                            </a>
                        </div>

                        <div class="single-comments single-box mb-4">
                            <h4 class="mb-4">Showing 16 verified guest comments</h4>
                            <div class="comment-box">
                                <div class="comment-image mt-2">
                                    <img src="{{asset('/')}}website/images/reviewer/1.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h4 class="mb-1 Soldman Kell">Soldman Kell</h4>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">"The worst hotel ever"</span>
                                    </div>
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title float-left">
                                            <a href="#" class="nir-btn mr-2">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="comment-image mt-2">
                                    <img src="{{asset('/')}}website/images/reviewer/2.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h4 class="mb-1">Burson Lesson</h4>
                                    <p class="comment-date">April 25, 2019 at 10:46 am</p>
                                    <div class="comment-rate">
                                        <div class="rating mar-right-15">
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                            <span class="fa fa-star checked"></span>
                                        </div>
                                        <span class="comment-title">"Was too noisy and not suitable for business meetings"</span>
                                    </div>
                                    <p class="comment">Take in the iconic skyline and visit the neighbourhood hangouts that you've only ever seen on TV. Take in the iconic skyline and visit the neighbourhood.</p>
                                    <div class="comment-like">
                                        <div class="like-title float-left">
                                            <a href="#" class="nir-btn">Reply</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="single-add-review">
                            <h4 class>Write a Review</h4>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <input type="text" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group mb-2">
                                            <input type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mb-1">
                                        <div class="form-group">
                                            <textarea>Comment</textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-btn">
                                            <a href="#" class="nir-btn">Submit Review</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 mb-4">
                    <div class="sidebar-sticky">
                        <div class="detail-sidebar">
                            <div class="mag-image mb-2 position-relative">
                                <img src="{{asset('/')}}website/images/trending/trending10.jpg" alt="Image">
                                <div class="video-button text-center">
                                    <div class="call-button text-center">
                                        <button type="button" class="play-btn js-video-button" data-video-id="152879427" data-channel="vimeo">
                                            <i class="fa fa-play bg-blue"></i>
                                        </button>
                                    </div>
                                    <div class="video-figure"></div>
                                </div>
                            </div>
                            <div class="detail-sidebar-item border-b pb-2 mb-2">
                                <h5><a href="detail1.html">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
                            </div>
                            <div class="detail-sidebar-item border-b pb-2 mb-2">
                                <h5><a href="detail1.html">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
                            </div>
                            <div class="detail-sidebar-item border-b pb-2 mb-2">
                                <h5><a href="detail1.html">Some native species quickly disappeared from Biotest Lake</a><span><a href="#">John Doe</a></span></h5>
                            </div>
                            <div id="sidebar1">
                                <div class="sidebar-icons">
                                    <a href="#" class="me-1"><i class="fa fa-heart" aria-hidden="true"><span> 1.2K</span></i></a>
                                    <a href="#" class="me-1"><i class="fa fa-bookmark" aria-hidden="true"></i></a>
                                    <a href="#" class="me-1"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="insta-main pt-0 pb-4 overflow-hidden">
        <div class="container-fluid">
            <div class="insta-inner">
                <div class="follow-button">
                    <p class="m-0"><a href="#" title><i class="fab fa-instagram"></i> Follow on Instagram</a></p>
                </div>
                <div class="row attract-slider">
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-3.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-4.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-5.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-1.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-7.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-8.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-2.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-6.jpg" alt="insta"></a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="insta-image">
                            <a href="#"><img src="{{asset('/')}}website/images/insta/ins-9.jpg" alt="insta"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
