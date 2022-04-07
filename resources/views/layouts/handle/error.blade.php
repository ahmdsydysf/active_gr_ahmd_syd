@if ($errors->any())
    @foreach ($errors->all() as $error )
    <span type="button" class="btn btn-danger swalDefaultError">
        {{$error}}
      </span>
    @endforeach
@endif
