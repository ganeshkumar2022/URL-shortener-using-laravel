<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Url shortener</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{url('assets/style.css')}}">
</head>
<body>
<div class="container" style="margin-top:100px;">
    <img src="assets/images/url.png" style="height:200px;" class="mx-auto d-block">
    <h2 class="text-center font-weight-bold text-primary">URL Shortner</h2>
    @if(Session::has('message'))
    <h3 class="text-danger">{{Session::get('message')}}</h3>
    @endif
   <form action="{{url('/')}}" method="post" autocomplete="off">
    <div class="input-group mb-3">
        <input type="text" class="form-control form-control-lg" name="link" placeholder="Insert your URL here and press Enter">
        <div class="input-group-append">
          <input class="btn btn-primary" type="submit" value="short url">
        </div>
      </div>
      @csrf
   </form>
   @if(Session::has('errors'))
    <h5 class="text-danger text-center">{{$errors->first('link')}}</h5>
    @endif
    @if(Session::has('link'))
    <h5 class="text-danger text-center"><a href="{{url(Session::get('link'))}}">{{url(Session::get('link'))}}</a> is your short url</h5>
    @endif
</div>
</body>
</html>
