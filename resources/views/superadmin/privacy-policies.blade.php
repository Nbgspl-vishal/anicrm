
@extends('superadmin.layout.superadmin')

@section('title')
Privacy Policies
@stop

@section('content')
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
        <div class="row">
            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <!-- table listing row -->
                        <div class="listing-container">
                            <div class="row">
                                <div class="listing-header">
                                    <h5 class="web-head">Privacy Policy</h5>
                                             
                                </div>
                                <div class="listing-filters">
                                    <div class="card">
                                        <div class="card-content">
                                            <form action="{{url('getpolicy')}}" method="post">
                                                @csrf
                                                <label for="" class="lbFonts">Content</label>
                                                <textarea name="text" id="editor1"></textarea>
                                                <br>
                                                <div class="form-submit">
                                                    <button class="btn">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- table listing row -->
                    </div>
                </div>
                <div class="content-overlay"></div>
            </div>
        </div>
    </div>
<!-- END: Page Main-->

    <!-- BEGIN: Footer-->
@stop
@section('footer')
   <script src="https://cdn.ckeditor.com/4.14.1/full/ckeditor.js"></script>
   <script>
      CKEDITOR.replace('editor1', {
      height: 400,
      baseFloatZIndex: 10005
    });

</script>
@stop