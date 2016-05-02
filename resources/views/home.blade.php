@extends('app')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-10">
                <form action="" method="POST" class="form-inline">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <p>Work name</p>
                    <p>
                        <input type="text" class="form-control" name="workName"/>
                        <span><input type="submit" class="btn btn-success" value="Save"/></span>
                    </p>
                </form>
                <table class="table">
                    <tr>
                        <th>List</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
