@extends('layouts.organization-main')

@section('page-title',  "Organization Settings View Edit | My AnAngel")

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
                                    <a href="#" class="chng-password">Change password</a>
                                </p>

                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Address</h4>
                                <p>74B AJC Bose Road, Kolkata 700 016</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel nopadbottom-noborderbottom">
                                <h4>Responsible point of contact and contact details</h4>
                                <p>Priyabrata Sarkar</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel nopadtop-nobordertop padtop">

                                <p>3B, Gopal Banerjee St<br />
                                    Kolkata 7000025</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Website URL</h4>
                                <p>www.mydomain.com</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Edit National CSR accreditation number/legal entity name</h4>
                                <p>AAB#2021396BC</p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Roles and responsibilities</h4>
                                <ul class="nopadbottom nomarginbottom">
                                    <li> Manage collaborators</li>
                                    <li> Manage campaign managers</li>
                                    <li> Manage campaign validators</li>
                                    <li> Manage campaigns</li>
                                    <li> Access organisation advanced statisitics</li>
                                    <li> View campaign wallet</li>
                                    <li> Access organisation advanced statisitics</li>
                                </ul>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Management of collaborators</h4>
                                <p class="pb-3"><span class="mr-4">yespbs@gmail.com</span> <span><a href="#"
                                            class="orangelink">+ Add collaborator</a></span></p>
                                <ul class="nopadbottom nomarginbottom nopadtop">
                                    <li> Manage collaborators</li>
                                    <li> Manage campaign managers</li>
                                    <li> Manage campaign validators</li>
                                    <li> Manage campaigns</li>
                                    <li> Access organisation advanced statisitics</li>
                                </ul>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Communication preferences (messaging and email preferences) </h4>
                                <ul class="nopadbottom nomarginbottom nopadtop">
                                    <li> Allow non-friends to message me</li>
                                    <li> Email when deed has an update (completed or announcement)</li>
                                    <li> New message</li>
                                </ul>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">
                                <h4>Advanced security</h4>

                                <p><label>Email recovery address</label><br />
                                    <a href="mailto:emailrecovery@mydomain.com"
                                        class="editlink">emailrecovery@mydomain.com</a>
                                </p>
                                <p><label>Secret question</label><br />
                                    Sed ut perspiciatis unde omnis iste natus error sit?
                                </p>
                                <p><label>Two factor authentication</label><br />
                                    On
                                </p>
                                <a href="javascript:void(0);" class="mr-3 color-red edit"
                                    data-toggle="tooltip" data-placement="top" title=""
                                    data-original-title="Edit"><i
                                        class="mdi mdi-pencil font-size-18"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 ">
                            <div class="text-panel">

                                <a href="javascript:void(0);" class="color-red " data-toggle="tooltip"
                                    data-placement="top" title="" data-original-title="Delete"><img
                                        src="../assets/images/orange-dlt-icon.svg"
                                        class="mr-3 float-left">Delete account</a>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div
                            class="col-lg-12 pt-5 roundedorange-white-buttonholder-save-cancel text-center">
                            <button type="button"
                                class="btn btn-primary btn-rounded waves-effect waves-light commonrounded-save-btn disabled">Save</button>
                            <button type="button"
                                class="btn btn-primary btn-rounded waves-effect waves-light commonrounded-cancel-btn disabled">Cancel</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--Row End-->
    </div> <!-- container-fluid -->
</div>
@endsection

@section('page-scripts')

@endsection