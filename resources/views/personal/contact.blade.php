@extends('personal.index')

@section('title', 'Contact Page')

@section('con')


<section class="page-section" id="contact" style="margin-top: 100px;">

            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Let's Get In Touch!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Ready to start your next project with us? Send us a messages and we will get back to you as soon as possible!</p>
                    </div>
                </div>
                <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Basic Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>



        {{-- <form  action="{{ route('form2') }}"  method="POST"> --}}
        <form  action="{{ route('form3') }}"  method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Name" class="form-control @error('name')is-invalid @enderror" value="{{ old('name') }}" />
                        {{-- @error('name')is-invalid @enderror تعمل علامة التعجب في الحقل الذي لم يحقق الشرط --}}
                        @error('name')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control @error('name')is-invalid @enderror" value="{{ old('email') }}" />
                        @error('email')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Phone</label>
                        <input type="text" name="phone" placeholder="Phone" class="form-control  @error('name')is-invalid @enderror" value="{{ old('phone') }}"/>
                        @error('phone')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label>Age</label>
                        <input type="number" name="age" placeholder="Age" class="form-control @error('name')is-invalid @enderror" value="{{ old('age') }}" />
                        @error('age')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                {{-- <div class="mb-3">
                    <label for="formFile" class="form-label">Default file input example</label>
                    <input class="form-control" type="file" id="formFile">
                  </div> --}}

                <div class="col-md-12">
                    <div class="mb-3">
                        <label>Message</label>
                        <textarea name="message" placeholder="Message" rows = 5 class="form-control @error('message')is-invalid @enderror" value="{{ old('message') }}" ></textarea>
                        @error('message')
                        <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                </div>


                <div class="col-12">
                    <br>
                    <button class="btn btn-success w-25">Send</button>
                </div>
            </div>
        </form>
    </div>
  </body>
</html>
