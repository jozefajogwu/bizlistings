@extends('layouts.app')


@section('content')

<h1>contact</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                    @foreach ($errors->all() as $error)
                       <li>{{ $error }}</li>
                   @endforeach
              </ul>
            </div>
        @endif
<form method="post" action="{{ route('contact-form-submit')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
                   
                  </div>
                 
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" class="form-control"name="subject" id="subject" placeholder="Enter Subject">
                   
                  </div>
                  <div class="form-group">
                    <label for="message">Message</label>
                    <input type="text" class="form-control"name="message" id="name" placeholder="Enter your Message">
                   
                  </div>
                 
               
                <button type="submit" class="btn btn-primary">Submit</button>
                {{ csrf_field() }}
              </form>
            </form>

@endsection