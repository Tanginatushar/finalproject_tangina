<!-- /resources/views/titles/index.blade.php -->
@extends('layouts/search')

@section('content')
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
                                        Create Article </a>
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
                                <li>
                                    <a data-toggle="tab" href="#tab_1_6">
                                        Search Title </a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div id="tab_2_2" class="tab-pane active ">
                                    <div class="row">

                                        <!--end booking-search-->
                                        <div class="col-md-6">
                                            <div class="row booking-results">
                                                <div class="col-md-10">
                                                    <h2>Author Name</h2>
                                                    @if ( !$titles->count() )
                                                        You have no titles
                                                    @else
                                                        <ul>
                                                            @foreach( $titles as $title )
                                                                <li>
                                                                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('titles.destroy', $title->summery))) !!}
                                                                    <a href="{{ route('titles.show', $title->summery) }}">{{ $title->author }}</a>
                                                                    (
                                                                    {!! link_to_route('titles.edit', 'Edit', array($title->summery), array('class' => 'btn btn-info')) !!},
                                                                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                                                                    )
                                                                    {!! Form::close() !!}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    @endif

                                                    <p>
                                                        {!! link_to_route('titles.create', 'Create Title') !!}
                                                    </p>


                                                </div>

                                            </div>
                                        </div>
                                        <!--end col-md-4-->
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
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                @include('searchResult/partial/tab_1_3')
                                <!--end tab-pane-->
                                @include('searchResult/partial/tab_1_4')
                                <!--end tab-pane-->
                                @include('searchResult/partial/tab_1_5')
                                <!--end tab-pane-->
                                @include('searchResult/partial/tab_1_6')

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