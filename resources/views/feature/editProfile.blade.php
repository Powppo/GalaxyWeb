@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <div>

        <div class="d-flex flex-column text-center mb-5">
            <h4 class="display-4 font-weight-bold " class="text-black">My Profile</h4>
            <br>
            <h4 class="text-primary">Edit your Profile!</h4>
            <br>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                        <form method="POST" action="{{ url('updateProfile', $edit->id) }}">
                            @csrf
                      <!--Name-->
                        <h6 style="margin-bottom: 5px">Name Edit</h6>
                      <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                        <input  style="border-radius: 7px" class="form-control" id="name" type="name" class="form-control" name="name" value="{{ $edit->name }}" autofocus>
                      </div>
                    
                      <!--Location-->
                      <h6 style="margin-bottom: 5px">Address Edit</h6>
                      <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                        <input style="border-radius: 7px" class="form-control" id="address" type="address" class="form-control" name="address" value="{{ $edit->address }}" autofocus>
                      </div>
                    
                      <!--Contact-->
                      <h6 style="margin-bottom: 5px">Contact Edit</h6>
                      <div class="wrap-input100 validate-input" style="margin-bottom: 15px">
                        <input style="border-radius: 7px" class="form-control" id="phoneNumber" type="contact" class="form-control" name="phoneNumber" value="{{ $edit->contact }}" autofocus>
                      </div>
                    
                      <!--Button-->
                      <div style="margin-bottom: 7px">
                        <button onclick="return confirm('Apply Profile Customization?');" class="btn btn-outline-primary" type="submit" id="edit" style="border-radius: 7px">Apply</button>
                      </div>
                      
                      @if (session('status'))
                      <div class="alert alert-success">
                          {{ session('status') }}
                      </div>
                    @endif
                    </form>
                  </div>
            <br>
    </div>
@endsection
</html>

