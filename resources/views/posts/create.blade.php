@extends('layouts.app')
@section('css')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset('theme/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/assets/global/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('theme/assets/global/plugins/bootstrap-summernote/summernote.css') }}" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('content')
 <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <i class="icon-equalizer font-red-sunglo"></i>
                <span class="caption-subject font-red-sunglo bold uppercase">Post</span>
            </div>
        </div>
        <div>
            @include('metronic-templates::common.errors')
        </div>
        <div class="portlet-body form">
            <div class="row">
                {!! Form::open(['route' => 'quantri.posts.store']) !!}

                    @include('posts.fields')

                 {!! Form::close() !!}
            </div>
        </div>
  </div>
@endsection

@section('page_plugin_js')
<!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset('theme/assets/global/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js') }}" type="text/javascript"></script>
        <script src="{{ asset('theme/assets/global/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js') }}" type="text/javascript"></script>
        <script src="{{ asset('theme/assets/global/plugins/bootstrap-markdown/lib/markdown.js') }}" type="text/javascript"></script>
        <script src="{{ asset('theme/assets/global/plugins/bootstrap-markdown/js/bootstrap-markdown.js') }}" type="text/javascript"></script>
        <script src="{{ asset('theme/assets/global/plugins/bootstrap-summernote/summernote.min.js') }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
@endsection
@section('page_js')
    <script src="{{ asset('theme/assets/pages/scripts/components-editors.min.js') }}" type="text/javascript"></script>
@endsection
