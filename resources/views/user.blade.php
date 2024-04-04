@extends('adminlte::page') 
 
@section('title', 'Dashboard') 
 
@section('content_header') 
    <h1>User</h1> 
@stop 
 
@section('content') 
 
    <div class="card-body"> 
        <form> 
          <div class="row"> 
            <div class="col-sm-6"> 
              <!-- text input --> 
              <div class="form-group"> 
                <label>User id</label><input type="text" class="form-control" placeholder="user id"> 
                <div> 
                <div class="form-group"> 
                <label>Level id</label><input type="text" class="form-control" placeholder="level id"> 
                <div> 
                <div class="form-group"> 
                <label>Username</label><input type="text" class="form-control" placeholder="username"> 
                <div> 
                <div class="form-group"> 
                <label>Nama</label><input type="text" class="form-control" placeholder="nama"> 
                <div> 
                <div class="form-group"> 
                <label>Password</label><input type="text" class="form-control" placeholder="password"> 
                <div> 
              </div> 
              <button type = "submit" class ="btn btn-info">Submit </button> 
            </div> 
@stop 
 
@section('css') 
    {{-- Add here extra stylesheets --}} 
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}} 
@stop 
 
@section('js') 
    <script> console.log("Hi, I'm using the Laravel-AdminLTE package!"); </script> 
@stop 