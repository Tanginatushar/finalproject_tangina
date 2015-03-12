@extends('layouts/search')
<!-- BEGIN HEAD -->

<!-- END HEAD -->
<!-- BEGIN BODY -->
@section('content')
<!-- DOC: Apply "page-header-menu-fixed" class to set the mega menu fixed  -->
<!-- DOC: Apply "page-header-top-fixed" class to set the top menu fixed  -->
<!-- BEGIN PAGE CONTAINER -->
<div class="page-container">
    <!-- BEGIN PAGE HEAD -->
@include('searchResult/partial/theme')
    <!-- END PAGE HEAD -->
    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container">
            <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <div class="modal fade" id="portlet-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                            <h4 class="modal-title">Modal title</h4>
                        </div>
                        <div class="modal-body">
                            Widget settings form goes here
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn blue">Save changes</button>
                            <button type="button" class="btn default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE BREADCRUMB -->
@include('searchResult/partial/page_breadcrum')
            <!-- END PAGE BREADCRUMB -->
            <!-- BEGIN PAGE CONTENT INNER -->
            <div class="row">
                <div class="col-md-12">
                    <div class="tabbable tabbable-custom tabbable-noborder">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#tab_2_2">
                                    Search By Topic </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_1_3">
                                    Url Search </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_1_4">
                                    Author Search </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#tab_1_5">
                                    User Search </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab_2_2" class="tab-pane active">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="booking-search">
                                            <form action="javascript:;" role="form">
                                                <div class="row form-group">
                                                    <div class="col-md-12">
                                                        <label class="control-label">Subject</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-map-marker"></i>
                                                            <input class="form-control" type="text" placeholder="Canada, Malaysia, Russia ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-6">
                                                        <label class="control-label">Check-in:</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-calendar"></i>
                                                            <input class="form-control date-picker" size="16" type="text" value="12-02-2012" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-label">Check-out:</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-calendar"></i>
                                                            <input class="form-control date-picker" size="16" type="text" value="12-02-2012" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-date-viewmode="years"/>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-md-6">
                                                        <label class="control-label">Author</label>
                                                        <div class="input-icon">
                                                            <i class="fa fa-user"></i>
                                                            <input class="form-control" size="16" type="text" placeholder=""/>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label class="control-list">Options:</label>
                                                        <div class="checkbox-list">
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="optionsRadios2" value="option1"/>
                                                                Option1 </label>
                                                            <label class="checkbox-inline">
                                                                <input type="checkbox" name="optionsRadios2" value="option2" checked/>
                                                                Option2 </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn blue btn-block margin-top-20">SEARCH <i class="m-icon-swapright m-icon-white"></i></button>
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
                                            <div class="booking-img">
                                                <img src="../../assets/admin/pages/media/gallery/image4.jpg" alt="">
                                                <ul class="list-unstyled price-location">
                                                    <li>
                                                        <i class="fa fa-money"></i> From $126
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Tioman, Malaysia
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="booking-info">
                                                <h2>
                                                    <a href="javascript:;">
                                                        Here Any Title </a>
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
                                    <div class="col-md-6">
                                        <div class="booking-result">
                                            <div class="booking-img">
                                                <img src="../../assets/admin/pages/media/gallery/image1.jpg" alt="">
                                                <ul class="list-unstyled price-location">
                                                    <li>
                                                        <i class="fa fa-money"></i> From $126
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Tioman, Malaysia
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="booking-info">
                                                <h2>
                                                    <a href="javascript:;">
                                                        Here Any Title </a>
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
                                <div class="row booking-results">
                                    <div class="col-md-6">
                                        <div class="booking-result">
                                            <div class="booking-img">
                                                <img src="../../assets/admin/pages/media/gallery/image2.jpg" alt="">
                                                <ul class="list-unstyled price-location">
                                                    <li>
                                                        <i class="fa fa-money"></i> From $126
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Tioman, Malaysia
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="booking-info">
                                                <h2>
                                                    <a href="javascript:;">
                                                        Here Any Title </a>
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
                                    <div class="col-md-6">
                                        <div class="booking-result">
                                            <div class="booking-img">
                                                <img src="../../assets/admin/pages/media/gallery/image3.jpg" alt="">
                                                <ul class="list-unstyled price-location">
                                                    <li>
                                                        <i class="fa fa-money"></i> From $126
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Tioman, Malaysia
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="booking-info">
                                                <h2>
                                                    <a href="javascript:;">
                                                        Here Any Title </a>
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
                                <div class="row booking-results">
                                    <div class="col-md-6">
                                        <div class="booking-result">
                                            <div class="booking-img">
                                                <img src="../../assets/admin/pages/media/gallery/image5.jpg" alt="">
                                                <ul class="list-unstyled price-location">
                                                    <li>
                                                        <i class="fa fa-money"></i> From $126
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Tioman, Malaysia
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="booking-info">
                                                <h2>
                                                    <a href="javascript:;">
                                                        Here Any Title </a>
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
                                    <div class="col-md-6">
                                        <div class="booking-result">
                                            <div class="booking-img">
                                                <img src="../../assets/admin/pages/media/gallery/image1.jpg" alt="">
                                                <ul class="list-unstyled price-location">
                                                    <li>
                                                        <i class="fa fa-money"></i> From $126
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-map-marker"></i> Tioman, Malaysia
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="booking-info">
                                                <h2>
                                                    <a href="javascript:;">
                                                        Here Any Title </a>
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
                            <!--end tab-pane-->
                            @include('searchResult/partial/tab_1_3')
                            <!--end tab-pane-->
                            @include('searchResult/partial/tab_1_4')
                            <!--end tab-pane-->
                            @include('searchResult/partial/tab_1_5')
                            <!--end tab-pane-->
                        </div>
                    </div>
                </div>
                <!--end tabbable-->
            </div>
            <!-- END PAGE CONTENT INNER -->
        </div>
    </div>
    <!-- END PAGE CONTENT -->
</div>
@endsection

