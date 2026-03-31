@extends('admin.layouts.admin')
@section('title') {{ __('Employee Role')}} @endsection

@section('style')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('assets/backend/css/comman.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/backend/css/datepicker.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">{{ __('Role')}}</h1>
<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
    <li class="breadcrumb-item text-muted">
        <a href="{{url('/dashboard')}}" class="text-muted text-hover-primary">{{ __('Dashboard')}}</a>
    </li>
    <li class="breadcrumb-item">
        <span class="bullet bg-gray-200 w-5px h-2px"></span>
    </li>
    <li class="breadcrumb-item text-dark">{{ __('Role')}}</li>
</ul>
@endsection

@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="col-sm-12">
                <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} </p>
            </div>
        @endif
    @endforeach

    @if ($errors->any())
        <div class="col-sm-12">
            @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <div class="card">
        <ul class="nav nav-tabs p-4">
            <li class="nav-item"><a class="nav-link active" href="#tab_1_1" data-bs-toggle="tab">{{ __('Role')}}</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_1_2" data-bs-toggle="tab">{{ __('Permission')}}</a></li>
            <li class="nav-item"><a class="nav-link" href="#tab_1_3" data-bs-toggle="tab">{{ __('Mapping Role & Permission')}}</a></li>
        </ul>
        <div class="card-body">
            <div class="tab-content">
                <!-- Role -->
                <div class="tab-pane active" id="tab_1_1">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-table-filter="search" class="form-control w-250px ps-15" placeholder="Search department" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#addRole" class="btn btn-primary" id="createRole">
                                {{ __('Add Role')}}
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                            <thead>
                                <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="text-center min-w-125px">{{ __('Id')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Role')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Experience Details -->
                <div class="tab-pane" id="tab_1_2">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-table-filter="search" class="form-control w-250px ps-15" placeholder="Search department" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#addPermission" class="btn btn-primary"  id="createPermission">
                                {{ __('Add Permission')}}
                            </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                            <thead>
                                <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="text-center min-w-125px">{{ __('Id')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Permission')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Bank -->
                <div class="tab-pane" id="tab_1_3">
                    <div class="card-header border-0">
                        <div class="card-title">
                            <div class="d-flex align-items-center position-relative my-1">
                                <span class="svg-icon svg-icon-1 position-absolute ms-6">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
                                        <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" data-kt-table-filter="search" class="form-control w-250px ps-15" placeholder="Search department" />
                            </div>
                        </div>
                        <div class="card-toolbar">
                                <button type="button" class="btn btn-primary mx-3" data-bs-toggle="modal" data-bs-target="#addRolePermissionMapping" class="btn btn-primary"  id="createRolePermissionMapping">
                                    {{ __('Add Role Permission')}}
                                </button>
                        </div>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table">
                            <thead>
                                <tr class="text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                    <th class="text-center min-w-125px">{{ __('Id')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Role')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Permission')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Mapping')}}</th>
                                    <th class="text-center min-w-125px">{{ __('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody class="fw-semibold text-gray-600">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Create & Update Role start -->
        <div class="modal fade modal-md" id="addRole" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addRoleTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-md">
                <div class="modal-content">
                    <input type="hidden" name="id" value="">
                    <div class="modal-header">
                        <h2 class="fw-bold">{{ __('Create Role')}}</h2>
                        <div data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="roleForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-4 " id="roleNameDiv">
                                            <div class="form-group">
                                                <label class="required fs-6 fw-semibold mb-2">{{ __('Role')}}</label>
                                                <input type="text" name="name" id="roleName" class="form-control" maxlength="100" placeholder="Enter role name" oninput="stringValidation(event)" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer modal-footer">
                                        <button type="button" class="btn btn-primary roleBtn" id="roleBtnId" onclick="saveRole(event)">{{ __('Create Role')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade modal-md" id="editRole" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addRoleTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="fw-bold">{{ __('Update Role')}}</h2>
                        <div data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="roleForm" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="roleId">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-12 mb-4 " id="updateRoleNameDiv">
                                            <div class="form-group">
                                                <label class="required fs-6 fw-semibold mb-2">{{ __('Role')}}</label>
                                                <input type="text" name="name" id="updateRoleName" class="form-control" maxlength="100" >
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer modal-footer">
                                        <button type="button" class="btn btn-primary roleBtn" id="updateRoleBtnId" onclick="editRoleBtn(event)" >{{ __('Update Role')}}</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Create & Update Role end -->



    <!-- Create & Update Permission start -->
        <div class="modal fade modal-md" id="addPermission" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addPermissionTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <input type="hidden" name="id" value="">
                    <div class="modal-header">
                        <h2 class="fw-bold">{{ __('Create Permission')}}</h2>
                        <div data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="permissionForm" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-4 " id="routeNameDiv">
                                                    <div class="form-group">
                                                        <label class="required fs-6 fw-semibold mb-2">{{ __('module Name')}}</label>
                                                        <select name="module_id" class="form-select" id="moduleName" data-control="select2" data-placeholder="Select module name">
                                                            <option>HR</option>
                                                            <option>Manager</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-4 " id="permissionNameDiv">
                                                    <div class="form-group">
                                                        <label class="required fs-6 fw-semibold mb-2">{{ __('Permission')}}</label>
                                                        <input type="text" name="permission" id="permissionName" class="form-control" maxlength="100" placeholder="Enter permission name" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer modal-footer">
                                            <button type="submit" class="btn btn-primary permissionBtn" id="savePermissionBtn" onclick="savePermission(event)">{{ __('Create Permission')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade modal-md" id="editPermission" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="editPermissionTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <input type="hidden" name="id" value="">
                    <div class="modal-header">
                        <h2 class="fw-bold">{{ __('Update Permission')}}</h2>
                        <div data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="updatePermissionForm" enctype="multipart/form-data">
                            <input type="hidden" name="id" id="hiddenPremissionId">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-4 " id="updateModuleNameDiv">
                                                    <div class="form-group">
                                                        <label class="required fs-6 fw-semibold mb-2">{{ __('Route Name')}}</label>
                                                        <select name="module_id" class="form-select" id="updateModuleName" data-control="select2" data-placeholder="Select module name">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 mb-4 " id="updatePermissionNameDiv">
                                                    <div class="form-group">
                                                        <label class="required fs-6 fw-semibold mb-2">{{ __('Permission')}}</label>
                                                        <input type="text" name="permission" id="updatePermissionName" class="form-control" maxlength="100" placeholder="Enter role name" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-footer modal-footer">
                                            <button type="submit" class="btn btn-primary permissionBtn" id="updatePermissionBtn" onclick="updatePermission(event)">{{ __('Update Permission')}}</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Create & Update Permission end -->


    <!-- Create Mapping Role & Permission start -->
        <div class="modal fade modal-lg" id="addRolePermissionMapping" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="addRolePermissionMappingTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-md">
                <div class="modal-content">
                    <input type="hidden" name="id" value="">
                    <div class="modal-header">
                        <h2 class="fw-bold">{{ __('Create Role Permission Mapping')}}</h2>
                        <div data-bs-dismiss="modal" class="btn btn-icon btn-sm btn-active-icon-primary">
                            <span class="svg-icon svg-icon-1">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form id="rolePermissionMappingForm" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 mb-4" id="ngoCenterDiv">
                                                    <div class="form-group">
                                                        <label class="required fs-6 fw-semibold mb-2">{{ __('Role')}}</label>
                                                        <select name="rrole_id" class="form-select" id="roleId" data-control="select2" data-placeholder="Select role">
                                                            <option>HR</option>
                                                            <option>Manager</option>
                                                            <option>Team Leader</option>
                                                            <option>CTO</option>
                                                            <option>CEO</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 mb-4 mt-3" id="ngoCenterDiv">
                                                    <label class="required fs-6 fw-semibold mb-2">{{ __('Permission')}}</label>
                                                    <div class="form-group">
                                                        <?php $permissions = ['add', 'create', 'delete', 'edit']; ?>
                                                        @if($permissions)
                                                            @foreach($permissions as $permission)
                                                                <div class="col-md-12 mx-3 mb-3 p-3">
                                                                    <div class="col-md-12 ">
                                                                            <div class="form-check form-check-custom form-check-solid mb-3">
                                                                                <div class="col-md-6 ">
                                                                                    <input class="form-check-input permission-checkbox" type="checkbox" value="" id="" name="permission_id[]"/>
                                                                                    <label class="form-check-label" for="">
                                                                                        {{ $permission }} 
                                                                                    </label>
                                                                                </div>
                                                                                <div class="col-md-6 ">
                                                                                    <input class="form-check-input permission-checkbox" type="checkbox" value="" id="" name="route_url[]"/>
                                                                                    <label class="form-check-label" for="">
                                                                                        {{ $permission }} 
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                                </div>
                                                                <hr>
                                                            @endforeach
                                                        @else
                                                            <span class="badge badge-light-danger">{{ __('No Permissions Available')}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <button type="submit" class="btn btn-primary" id="createRolePermissionMappingBtn" onclick="saveRolePermissionMapping(event)">{{ __('Assign Role Permission')}} </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <!-- Create Mapping Role & Permission end -->
@endsection

@section('scripts')
    <script src="{{ asset('assets/backend/js/custom/comman.js') }}"></script>
    <script src="{{ asset('assets/backend/js/custom/roles/role.js') }}"></script>
@endsection



