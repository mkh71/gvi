  @if (\Session::has('success'))
  <div class="alert alert-success" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="text-black">&times;</span></button>
    <h4 class="alert-heading"></h4>
    <p>{!! \Session::get('success') !!}</p>
  </div>
@endif

@if (\Session::has('warning'))
  <div class="alert alert-warning" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="text-black">&times;</span></button>
    <h4 class="alert-heading"></h4>
    <p>{!! \Session::get('warning') !!}</p>
  </div>
@endif

@if (\Session::has('danger'))
  <div class="alert alert-danger" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="text-black">&times;</span></button>
    <h4 class="alert-heading"></h4>
    <p>{!! \Session::get('danger') !!}</p>
  </div>
@endif