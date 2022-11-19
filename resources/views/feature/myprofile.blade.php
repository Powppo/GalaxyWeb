@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
    <div>
    @foreach ($user as $item)
    <div class="d-flex flex-column text-center mb-5">
        <h4 class="display-4 font-weight-bold " class="text-black">My Profile</h4>
        <br>
        <h4 class="text-primary">Edit your Profile!</h4>
        <br>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
        <div class="card mb-4">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Name</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{$item['name']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Address</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{$item['address']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Contact</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{$item['contact']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Email Address</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{$item['email']}}</p>
              </div>
            </div>
            <hr>
            <div class="row">
              <div class="col-sm-3">
                <p class="mb-0 text-primary font-weight-bold">Role</p>
              </div>
              <div class="col-sm-9">
                <p class="mb-0">{{$item['role']}}</p>
              </div>
            </div>
        </div>
        <br>
    <div class="row mb-0" >
        <div class="col-md-8 offset-md-2">
            <div class="row justify-content-center" >
                <button class="btn btn-outline-primary"  type="submit" id="edit" style="border-radius: 7px">Edit</button>
            </div>
        </div>
    </div>
    <br>
    @endforeach
</div>
@endsection
</html>