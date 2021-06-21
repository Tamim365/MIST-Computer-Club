@extends('dashboard.master', ['active_class' => 'committee'])

@section('header')
    <title>Dashboard | committee</title>
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection


@section('content')
<div class="content-page">

    <!-- Start content -->
    <div class="content">

        <div class="container-fluid">

            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-holder">
                        <h1 class="main-title float-left">committee</h1>
                        <ol class="breadcrumb float-right">
                            <li class="breadcrumb-item">Home</li>
                            <li class="breadcrumb-item active">committee</li>
                        </ol>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <!-- end row -->


            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    <div class="card mb-3">
                        <form action="{{url('dashboard/committee')}}" method="get">
                        @csrf
                            <div class="card-body">
                                <label for="example1">
                                    Select Committee:
                                </label>
                                <div class="mb-1"></div>
                                <select class="form-control select2" id="example1" name="committee">
                                    <option value="" selected disabled>Select Committee</option>
                                    <option value="Executive" @if (Request()->filled('committee') &&  Request()->committee == 'Executive')
                                        selected
                                    @endif>Executive Committee</option>
                                    <option value="Mentor" @if (Request()->filled('committee') &&  Request()->committee == 'Mentor')
                                        selected
                                    @endif >Mentor Committee</option>
                                    <option value="Event" @if (Request()->filled('committee') &&  Request()->committee == 'Event')
                                        selected
                                    @endif>Event Management & Organizing Committee</option>
                                    <option value="RnD" @if (Request()->filled('committee') &&  Request()->committee == 'RnD')
                                        selected
                                    @endif>RnD</option>
                                    <option value="Promotion" @if (Request()->filled('committee') &&  Request()->committee == 'Promotion')
                                        selected
                                    @endif>Promotion and Design</option>
                                </select>
                            </div>
                            <button type="submit" class="w3-button w3-green w3-round" style="width: 50%; margin: 15px 30px;">Load</button>
                        </form>
                    </div>
                    <!-- end card-->
                    @php
                        $committee = null;
                        if(Request()->filled('committee')) $committee = Request()->committee;
                    @endphp
                    @if ($committee)
                    @php
                        $members = DB::table('members')->where('committe_name', '=', $committee)->get();
                        // dd($members);
                    @endphp

                    <div class="card-header">
                        <span class="pull-right">
                            <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user">
                                <i class="fas fa-user-plus" aria-hidden="true"></i> Add committee member </button>
                            </span>
                            <span class="text-danger">@error('club_id'){{ $message }} @enderror</span>
                            <span class="text-danger">@error('panel_role'){{ $message }} @enderror</span>
                            @if(Session::get('success'))
                                <div class="alert alert-success">
                                {{ Session::get('success') }}
                                </div>
                            @endif
                        <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <form action="{{route('panel.update')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-header">
                                            <h5 class="modal-title">Add Committee Member</h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                                <span class="sr-only">Close</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Committee Name</label>
                                                        <input class="form-control" name="committee_name" type="text" value="{{$committee}}" readonly/>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Club Id</label>
                                                        <input class="form-control" name="club_id" type="text"/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label>Select Panel Role</label>
                                                        <select name="panel_role" class="form-control" required>
                                                            <option value="" disabled selected>- select -</option>
                                                            @php
                                                            $all_panels = [
                                                                "President" => "President", 
                                                                "Vice_President" => "Vice-President",
                                                                "Executive_Director" => "Executive Director",
                                                                "Executive_Member" => "Executive Member",
                                                            ];
                                                            @endphp
                                                            @foreach (array_keys($all_panels) as $panel_name)
                                                                <option value="{{$panel_name}}">
                                                                {{$all_panels[$panel_name]}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Add To Panel</button>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>

                        <h3>
                            <i class="far fa-user"></i> All Members</h3>
                    </div>
                    <div class="card-body">

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="min-width:300px">Member details</th>
                                        <th style="width:120px">Panel Role</th>
                                        <th style="min-width:110px;">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $member)
                                    <tr>
                                        <td>
                                            <div class="user_avatar_list d-none d-none d-lg-block"><img alt="image" src="{{ $member->picture }}" /></div>
                                            <h4>{{ $member->name }}</h4>
                                            <p>{{ $member->email }}</p>

                                        </td>

                                        <td>{{ $member->panel_role }}</td>


                                        <td>
                                            <a href="#" class="btn btn-primary btn-sm btn-block" data-toggle="modal" data-target="#modal_edit_user_{{$member->club_id}}"><i class="far fa-edit"></i> Edit</a>
                                            
                                            {{-- <span class="pull-right">
                                                <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_edit_user_{{$member->club_id}}">
                                                    <i class="fas fa-user-plus" aria-hidden="true"></i> Edit member</button>
                                            </span> --}}
                                            <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_edit_user_{{$member->club_id}}" aria-hidden="true" id="modal_edit_user_{{$member->club_id}}">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
        
                                                        <form action="{{route('member.profile.update')}}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Update member</h5>
                                                                <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                                                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                                                <span class="text-danger">@error('student_id'){{ $message }} @enderror</span>
                                                                <button type="button" class="close" data-dismiss="modal">
                                                                    <span aria-hidden="true">&times;</span>
                                                                    <span class="sr-only">Close</span>
                                                                </button>
                                                            </div>
                                                            @if(Session::get('success'))
                                                                <div class="alert alert-success">
                                                                {{ Session::get('success') }}
                                                                </div>
                                                            @endif
                                                            
                                                            <div class="modal-body">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label>Full name</label>
                                                                            <input class="form-control" name="name" type="text" value="{{$member->name}}"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
        
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Valid Email</label>
                                                                            <input class="form-control" name="email" type="email" value="{{$member->email}}"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Club ID</label>
                                                                            <input class="form-control" name="club_id" type="text" value="{{$member->club_id}}" readonly/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Student Id</label>
                                                                            <input class="form-control" name="student_id" type="text" value="{{$member->student_id}}"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <label>Department</label>
                                                                            <select name="department" class="form-control" required>
                                                                                <option value="" disabled selected>- select -</option>
                                                                                @php
                                                                                $all_depts = [
                                                                                    "CSE" => "Computer Science and Engineering", 
                                                                                    "EECE" => "Electrical, Electronic and Communication Engineering",
                                                                                    "ME" => "Mechanical Engineering",
                                                                                    "CE" => "Civil Engineering",
                                                                                    "AE" => "Aeronautical Engineering",
                                                                                    "NAME" => "Naval Architecture and Marine Engineering",
                                                                                    "IPE" => "Industrial and Production Engineering",
                                                                                    "NSE" => "Nuclear Science & Engineering",
                                                                                    "EWCE" => "Civil, Environmental, Water Resources & Coastal Engineering",
                                                                                    "ARCHITECTURE" => "Architecture",
                                                                                    "PME" => "Petroleum & Mining Engineering"
                                                                                ];
                                                                                @endphp
                                                                                @foreach (array_keys($all_depts) as $dept_name)
                                                                                    <option value="{{$dept_name}}" @if ($member->department == $dept_name) selected @endif>
                                                                                    {{$all_depts[$dept_name]}}
                                                                                    </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label>Image (optional):</label>
                                                                    <br />
                                                                    <input type="hidden" name="picture" role="uploadcare-uploader" data-crop="1:1" data-images-only>
                                                                </div>
        
                                                            </div>
        
                                                            <div class="modal-footer">
                                                                <button type="submit" class="btn btn-primary">Update Member</button>
                                                            </div>
        
                                                        </form>
        
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <form action = "{{url('/delete/member/'.$member->club_id)}}" method="post"> @csrf <button type="submit" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Remove</button></form>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
        <!-- END container-fluid -->
        
    </div>
    <!-- END content -->

</div>
@endsection

@section('js')
    <!-- BEGIN Java Script for this page -->
    <script src="assets/plugins/select2/js/select2.min.js"></script>
    <script>
        $(document).on('ready',function() {
            $('.select2').select2();
        });
    </script>
    <!-- END Java Script for this page -->
@endsection
