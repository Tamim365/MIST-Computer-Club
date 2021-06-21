@extends('dashboard.master', ['active_class' => 'user'])
@section('header')
    <title>Dashboard | User</title>
@endsection

@php
    $members = DB::select('SELECT * FROM members');
    // dd($members);
@endphp

@section('content')
    <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <div class="container-fluid">

                    <div class="row">
                        <div class="col-xl-12">
                            <div class="breadcrumb-holder">
                                <h1 class="main-title float-left">Members</h1>
                                <ol class="breadcrumb float-right">
                                    <li class="breadcrumb-item">Home</li>
                                    <li class="breadcrumb-item active">Members</li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->


                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="card mb-3">
                                <div class="card-header">
                                    <span class="pull-right">
                                        <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_add_user">
                                            <i class="fas fa-user-plus" aria-hidden="true"></i> Add new member</button>
                                    </span>
                                    <div class="modal fade custom-modal" tabindex="-1" role="dialog" aria-labelledby="modal_add_user" aria-hidden="true" id="modal_add_user">
                                        <div class="modal-dialog">
                                            <div class="modal-content">

                                                <form action="{{route('auth.save.member')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    @if(Session::get('success'))
                                                        <div class="alert alert-success">
                                                        {{ Session::get('success') }}
                                                        </div>
                                                    @endif
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">Add new member</h5>
                                                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                                                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                                                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                                                        <span class="text-danger">@error('confirmed_password'){{ $message }} @enderror</span>
                                                        <span class="text-danger">@error('Student_ID'){{ $message }} @enderror</span>
                                                        <button type="button" class="close" data-dismiss="modal">
                                                            <span aria-hidden="true">&times;</span>
                                                            <span class="sr-only">Close</span>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Full name (required)</label>
                                                                    <input class="form-control" name="name" type="text"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="form-group">
                                                                    <label>Valid Email (required)</label>
                                                                    <input class="form-control" name="email" type="email"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Password (required)</label>
                                                                    <input class="form-control" name="password" type="password"/>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Confirm Password (required)</label>
                                                                    <input class="form-control" name="confirm_password" type="password"/>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="form-group">
                                                                    <label>Student Id (required)</label>
                                                                    <input class="form-control" name="Student_ID" type="text"/>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image (optional):</label>
                                                            <br />
                                                            <script>
                                                                UPLOADCARE_PUBLIC_KEY = "a51f2657278fde93b5e2";
                                                                UPLOADCARE_EFFECTS = 'crop';
                                                                UPLOADCARE_IMAGES_ONLY = true;
                                                                UPLOADCARE_PREVIEW_STEP = true;
                                                                UPLOADCARE_CLEARABLE = true;
                                                            </script>
                                                            <script src="https://ucarecdn.com/libs/widget/3.x/uploadcare.full.min.js" charset="utf-8"></script>
                                                            <script src="https://ucarecdn.com/libs/widget-tab-effects/1.x/uploadcare.tab-effects.js"></script>
    
                                                            <input type="hidden" name="picture" role="uploadcare-uploader" data-crop="1:1" data-images-only>
                                                        </div>

                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="submit" class="btn btn-primary">Add Member</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <h3>
                                        <i class="far fa-user"></i> All Members</h3>
                                </div>
                                <!-- end card-header -->

                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="min-width:300px">Member details</th>
                                                    <th style="width:120px">Club ID</th>
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

                                                    <td>{{ $member->club_id }}</td>


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
                                                        
                                                        <form action = "{{url('/delete/member/'.$member->club_id)}}" method="post"> @csrf <button type="submit" class="btn btn-danger btn-sm btn-block mt-2"><i class="fas fa-trash"></i> Delete</button></form>
                                                    </td>
                                                </tr>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>


                                </div>
                                <!-- end card-body -->

                            </div>
                            <!-- end card -->

                        </div>
                        <!-- end col -->

                    </div>
                    <!-- end row -->

                </div>
                <!-- END container-fluid -->

            </div>
            <!-- END content -->

        </div>
@endsection
