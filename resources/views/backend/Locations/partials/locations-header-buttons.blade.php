<!--Action Button-->
@if(Active::checkUriPattern('admin/locations'))
    <export-component></export-component>
@endif
<!--Action Button-->
<div class="btn-group">
  <button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">Action
    <span class="caret"></span>
    <span class="sr-only">Toggle Dropdown</span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{route('admin.locations.index')}}"><i class="fa fa-list-ul"></i> {{trans('menus.backend.locations.all')}}</a></li>
    @permission('create-location')
    <li><a href="{{route('admin.locations.create')}}"><i class="fa fa-plus"></i> {{trans('menus.backend.locations.create')}}</a></li>
    @endauth
  </ul>
</div>

<div class="clearfix"></div>