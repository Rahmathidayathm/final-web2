@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <div
            {{ __('Show User') }}
            <a class="btn btn-primary float-end" href="{{ route('users.index') }}"> Back</a>
        </div>

        <div>

            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama</strong> <br>
                        {{ $user->name }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Email</strong> <br>
                        {{ $user->email }}
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Roles </strong> <br>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge me-1 bg-success">{{ $v }}</label>
                            @endforeach
                        @endif
                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Biodata</strong> <br>
                        {{ $user->biodata }}
                    </div>

                </div>

            </div>
        </div>

        {{--        <div class="card-footer">--}}
        {{--            {{ $users->links() }}--}}
        {{--        </div>--}}
    </div>
@endsection
