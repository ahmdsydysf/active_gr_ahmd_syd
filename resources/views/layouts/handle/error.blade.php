@if ($errors->any())
<div class="row">
    @foreach ($errors->all() as $error )

      <div class="alert alert-danger text-center" style="width: 40%;margin:auto" role="alert">{{$error}}</div>
    @endforeach
</div>
@endif
