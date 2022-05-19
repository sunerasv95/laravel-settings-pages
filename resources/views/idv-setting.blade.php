@extends('layouts.individual-main')

@section('page-title',  "Individual Settings View Edit | My AnAngel")

@section('page-stylesheets')

@endsection

@section('page-content')
<div class="container-fluid">

    <!-- start page title -->
    <div class="row d-none">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="page-title-left">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item active">Campaign</li>
                        <li class="breadcrumb-item active">Start a campaign</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-flex align-items-center justify-content-between">
                <div class="page-title-left custom-page-title">
                    <h2 class="shadowintolight-two-font color-blue font-size-48 pt-2 pb-2">SETTINGS</h2>
                    <p>View & update your account settings.</p>
                </div>

            </div>
        </div>

    </div>
    <!-- end page title -->

    <div class="settings-section">
        <!--Row Start-->
        <div class="row">
            <div class="col-md-12 ">
                <div class="card card-body p-4 pb-5">
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Password</h4>
                                <p>************** <br>
                                    <a href="#" class="chng-password">Change password</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Address</h4>
                                <p>74B AJC Bose Road, Kolkata 700 016</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Privacy settings</h4>
                                <p>My activities are - Public</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Communication preferences (messaging and email) </h4>
                                <ul class="nopadbottom nomarginbottom">
                                    <li> Allow non-friends to message me</li>
                                    <li> Email when deed has an update (completed or announcement)</li>
                                    <li> New message</li>

                                </ul>
                                <a href="javascript:void(0);" class="mr-3 color-red edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Advanced security</h4>
                                <p><label>Email recovery address</label><br/>
                                    <a href="mailto:emailrecovery@mydomain.com" class="editlink">emailrecovery@mydomain.com</a>
                                </p>
                                <p><label>Secret question</label><br/> Sed ut perspiciatis unde omnis iste natus error sit?
                                </p>
                                <p><label>Two factor authentication</label><br/> On
                                </p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">

                                <a href="javascript:void(0);" class="color-red " data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete"><img src="../assets/images/orange-dlt-icon.svg" class="mr-3 float-left">Delete account</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12 pt-5 roundedorange-white-buttonholder-save-cancel text-center">
                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light commonrounded-save-btn disabled">Save</button>
                            <button type="button" class="btn btn-primary btn-rounded waves-effect waves-light commonrounded-cancel-btn disabled">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Row End-->
    </div>
    <!-- container-fluid -->
</div>
<!-- End Page-content -->
@endsection

@section('page-scripts')

@endsection