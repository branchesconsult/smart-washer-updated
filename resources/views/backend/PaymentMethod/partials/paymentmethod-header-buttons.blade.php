<!--Action Button-->
@if(Active::checkUriPattern('admin/paymentmethod'))
    <export-component></export-component>
@endif
<!--Action Button-->
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Action
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{route('admin.locations.index')}}"><i class="fa fa-list-ul"></i> All Payment Methods</a></li>
    @permission('create-location')
    <li><a href="{{route('admin.paymentmethod.create')}}"><i class="fa fa-plus"></i> Create Payment Methods</a></li>
    @endauth
  </ul>
</div>

<div class="clearfix"></div>