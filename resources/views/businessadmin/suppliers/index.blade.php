@extends('businessadmin.layouts.ani')




@section('title')

Suppliers

@stop

@section('css')
    <style type="text/css">
        .pagination {
            margin-left: 40%;
        }
        .no-record {
            font-size: 20px;
            text-align: center;
        }
        .u-message{
            display: none;
        }
        .success{
            color:green;
        }
        .error{
            color: red;
        }
    </style>
@endsection


@section('content')

    <div id="main">

        <div class="row">

            <div class="col s12">

                <div class="container">

                    <div class="section">
                     @include('businessadmin.layouts.errors')
                        <!-- table listing row -->

                        <div class="listing-container">

                            <div class="row">

                                <div class="listing-header">

                                    <h5 class="web-head">Suppliers</h5>

                                    <div class="action-btns">

                                        <a class="waves-effect waves-light btn add-list-btn" href="{{ route('suppliers.create') }}"><span><i class="fa fa-plus"

                                                    aria-hidden="true"></i>Add Supplier</span></a>

                                      <!--   <a class="waves-effect waves-light btn"><span><i class="fa fa-print"

                                                    aria-hidden="true"></i>Print</span></a> -->

                                        <a id="import-modal" href="#modal2" class="waves-effect waves-light btn modal-trigger"><span><i class="fa fa-download"

                                                    aria-hidden="true"></i>Import</span></a>

                                        <a class="waves-effect waves-light btn"><span><i class="fa fa-upload"

                                                    aria-hidden="true"></i>Export</span></a>

                                    </div>

                                </div>

                                <div class="listing-filters">

                                    <div class="card">

                                        <div class="card-content">

                                            <p class="filter-btn">

                                                <span class="hide-filter">Hide filter</span>

                                                <span class="show-filter">Show filter</span>

                                            </p>

                                            <div class="col s12 m6">

                                                <form class="web-form" id="filter-form">

                                                    <div class="formfield">

                                                        <label>

                                                            Search Suppliers

                                                        </label>

                                                        <input type="text" placeholder="Name/Reference/Address/PostCode" name="keyword" id="keyword" />

                                                    </div>

                                                    <p>

                                                        <a class="show-advance" href="#">Show advance</a>

                                                        <a class="hide-advance" href="#">Hide advance</a>

                                                    </p>

                                                    <div class="formfield advance">

                                                        <label>Tag(s)</label>

                                                        <select  class="browser-default" id="tag" name="tag">
                                                            <!-- <optgroup>Select tag</optgroup> -->
                                                            <option value="">Select Tag</option>
                                                            <option value="Test Data">Test Data</option>
                                                             <option value="Test Data">Test Data</option>

                                                             <option value="Test Data">Test Data</option>

                                                             <option value="Test Data">Test Data</option>

                                                             <option value="Test Data">Test Data</option>

                                                        </select>

                                                    </div>

                                                </form>



                                            </div>

                                            <div class="filters-buttons">

                                                <a id="reset-filter" class="waves-effect waves-light btn transparent-background-btn"><span><i

                                                            class="fas fa-redo-alt"></i>Remove

                                                        filter</span></a>

                                                <a id="add-filter" class="waves-effect waves-light btn transparent-background-btn"><span><i

                                                            class="fa fa-search" aria-hidden="true"></i>

                                                        Apply Filter</span></a>



                                            </div>



                                        </div>

                                    </div>



                                </div>



                                <div class="listing-table">

                                    <div class="card">

                                        <div class="listing-table-tab">

                                            <ul>

                                                <li class="list-tabs active-list" value="1" id="lat"><a href="#">Active <!-- <span

                                                            class="list-count">(0)</span>--></a>

                                                </li>

                                                <li class="list-tabs" id="lst" value="2"><a  href="#">Archived <!-- <span class="list-count">(0)</span>--></a>

                                                </li>

                                                <li class="list-tabs" id="lalt" value="3"><a href="#">All <!-- <span class="list-count">(0)</span>--></a>

                                                </li>

                                            </ul>

                                        </div>

                                        <div class="listing-tab-content">

                                            <div id="latt" class="listing-tab-content-section active-table">

                                                <div class="card-head">

                                                    Active

                                                </div>

                                                <div class="card-content" id="active-supplier">

                                                </div>

                                            </div>

                                            <div style="display:none;" id="lstt"

                                                class="listing-tab-content-section suspended-table">

                                                <div class="card-head">

                                                    Suspended

                                                </div>

                                                <div class="card-content" id="suspended-supplier">

                                                </div>

                                            </div>

                                            <div style="display:none;" id="laltt"

                                                class="listing-tab-content-section all-table">

                                                <div class="card-head">

                                                    All

                                                </div>

                                                <div class="card-content" id="all-supplier">
                                                </div>

                                            </div>
                                        
                                        </div>

                                        <div id="show-pages">
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


    <div id="modal2" data-keyboard="false" data-backdrop="static" class="modal showdiaries-modal">
        <div class="modal-header">
            <h2>Import Supplier<span> (only csv files are allowed)</span></h2>
                <a  class="closebtn modal-close"><i class="fa fa-times"></i></a>
        </div>
        <div class="modal-content">
            <div class="row">
                <div class="col s12">
                    <div class="modal-show-body">    
                        <div class="row">
                            <div class="input-field col l6 m6 s12">
                                <p>Choose File</p>
                                <input type="file" name="file" id="import-file" accept=".csv" required="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12">
                                <button class="waves-effect waves-light btn add-list-btn" id="upload-btn" onclick="importFile();"><span>Upload</span></button>
                                <span class="u-meesage success" id="tini-message"></span>
                            </div>
                        </div>
                    </div>
                    <p class="u-meesage success" id="suc-message"></p>
                    <p class="u-meesage error" id="err-message"></p>
                </div>
            </div>
        </div>
    </div>

@stop

@section('footer')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.0/axios.min.js"></script>
<script type="text/javascript">
    var initialurl = "{{ route('suppliers.list') }}"+"?page=1"
    var supplierurl = initialurl
    var keyword = ""
    var tag = ""
    var showTypes = {"1":"active-supplier" , "2":"suspended-supplier" , "3":"all-supplier"}
    var showList = "1"
    function fetchSuppliers(){
        if(showList === undefined || showList == ''){
            return 
        }
        $.ajax({
            url: `${supplierurl}&list_type=${showTypes[showList]}&keyword=${keyword}&tag=${tag}`, 
            success: function(result){
                console.log(result)
                $("#show-pages").html(result.data.pagelinks)
                var appendDiv = showTypes[showList]
                $(`#${appendDiv}`).html('')
                if(result.data.data.data.length){
                    result.data.data.data.forEach(function(supplier){
                        var element = `<a href="${supplier.edit_url}">
                                            <div class="contact-listing-col">
                                                <h3>${supplier.supplier_name}</h3>
                                                <p>${supplier.address}</p>
                                            </div>
                                        </a>`
                        $(`#${appendDiv}`).append(element)
                    })
                }else{
                    $(`#${appendDiv}`).append(`<p class="no-record">No data found</p>`)
                }

            }
        });
    }
    $(document).on('click' , '.page-item a' , function(e){
        e.preventDefault()
        supplierurl = $(this).attr('href')
        fetchSuppliers()
        return
    });
    $(document).ready(function(){
        showList = $(".active-list").attr('value')
        fetchSuppliers();
        $(".list-tabs").click(function(){
            if(showList != $(".active-list").attr('value')){
                showList = $(".active-list").attr('value')
                supplierurl = initialurl
                fetchSuppliers();
            }
           
        })
        $("#add-filter").click(function(){
            if(keyword != $("#keyword").val().trim() || tag != $("#tag").val().trim()){
                keyword = $("#keyword").val().trim()
                tag = $("#tag").val()
                supplierurl = initialurl
                fetchSuppliers()
            }
        })
        $("#reset-filter").click(function(){
            $("#keyword").val('')
            $("#tag").val('')
            if(keyword != '' || tag != ''){
                keyword=''
                tag=''
                supplierurl = initialurl
                fetchSuppliers()
            }
        })
        $("#import-modal").click(function(){
            $("#import-file").val('')
            $("#suc-message").html("")
            $("#err-message").html("")
            $("#tini-message").html("")
            $("#suc-message").hide()
            $("#err-message").hide()
            $("#tini-message").hide()
        })
    });

    function importFile(){
        var upload = $("#import-file")
        $("#suc-message").html("")
        $("#err-message").html("")
        $("#tini-message").html("")
        $("#suc-message").hide()
        $("#err-message").hide()
        $("#tini-message").hide()
        if(!upload.get(0).files.length){
            return false
        }
        $("#upload-btn").prop("disabled",true);
         $("#tini-message").show()
        $("#tini-message").html("Uploding..")
        var data = new FormData()
        data.append('file', upload.get(0).files[0])
        axios.post("{{ route('suppliers.import') }}", data, {
                onUploadProgress: function(progressEvent) {
                  var percentCompleted = Math.round( (progressEvent.loaded * 100) / progressEvent.total)
                  if(percentCompleted  > 99)
                     $("#tini-message").html("Processing..")
                }
        })
        .then(function(response){
            console.log(response.data)
            if(response.data.status){
                upload.val('')
                $("#tini-message").html("Processed")
                $("#suc-message").show()
                $("#suc-message").html(response.data.message)
                $("#err-message").hide();
                $("#upload-btn").prop("disabled",false);

            }else{
                $("#tini-message").html("Aborted")
                $("#suc-message").hide()
                $("#err-message").show()
                $("#err-message").html(response.data.message)
                $("#upload-btn").prop("disabled",false);
            }
        })
        .catch(function (error) {
            $("#tini-message").html("Aborted")
            $("#suc-message").hide()
            $("#err-message").html("Aborted")
            $("#upload-btn").prop("disabled",false)
            console.log(error);
        });
    }
</script>
@endsection