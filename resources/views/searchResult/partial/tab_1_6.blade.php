
    <div id="tab_1_6" class="tab-pane ">
        <div class="row">
            <div class="col-md-8">
                <div class="booking-search">
                    <form action="javascript:;" role="form" method="post">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label class="control-label">Article Id</label>
                                <div class="input-icon">

                                    <input class="form-control" type="text" name="title_id" placeholder="Article ID">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="control-label">Title</label>
                                <div class="input-icon">
                                    <input class="form-control" type="text" name="summery" placeholder="">

                                </div>
                            </div>

                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <label class="control-label">Author Name</label>
                                <div class="input-icon">
                                    <i class="fa fa-user"></i>
                                    <input class="form-control" size="16" name="author" type="text" placeholder=""/>
                                </div>
                            </div>

                        </div>
                        <button class="btn blue btn-block margin-top-20" type="submit">SEARCH <i class="m-icon-swapright m-icon-white"></i></button>
                    </form>
                </div>
            </div>
            <!--end booking-search-->
            <div class="col-md-4">
                <div class="booking-app">
                    <a href="javascript:;">
                        <i class="fa fa-mobile-phone pull-left"></i>
    											<span>
    											Get our mobile app! </span>
                    </a>
                </div>
                <div class="booking-offer">
                    <img src="../../assets/admin/pages/media/search/1.jpg" class="img-responsive" alt="">
                    <div class="booking-offer-in">
    												<span>
    												London, UK </span>
                        <em>Sign Up Today and Get 30% Discount!</em>
                    </div>
                </div>
            </div>
            <!--end col-md-4-->
        </div>

        <div class="row booking-results">
            <div class="col-md-6">
                <div class="booking-result">

                    <div class="booking-info">
                        <h2>
                            "{{ $title->summery }}"
                        </h2>
                        <ul class="stars list-inline">
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star"></i>
                            </li>
                            <li>
                                <i class="fa fa-star-empty"></i>
                            </li>
                        </ul>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum. <a href="javascript:;">
                                read more... </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>


    <div class="margin-top-20">
        <ul class="pagination pagination-circle">
            <li>
                <a href="javascript:;">
                    Prev </a>
            </li>
            <li>
                <a href="javascript:;">
                    1 </a>
            </li>
            <li>
                <a href="javascript:;">
                    2 </a>
            </li>
            <li class="active">
                <a href="javascript:;">
                    3 </a>
            </li>
            <li>
                <a href="javascript:;">
                    4 </a>
            </li>
            <li>
                <a href="javascript:;">
                    5 </a>
            </li>
            <li>
                <a href="javascript:;">
                    Next </a>
            </li>
        </ul>
    </div>

    </div>

