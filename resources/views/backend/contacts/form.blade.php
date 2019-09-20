<?php
$url = url()->current();
$url = explode('/',$url);
$url = end($url);
?>
<div class="box-body">
    <div class="form-group">
        {{ Form::label('first_name', 'First Name',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->user->first_name !!}
            @else
            {{ Form::text('first_name', null, ['class' => 'form-control box-size', 'placeholder' => "First Name", 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('last_name', 'Last Name',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->user->last_name !!}
            @else
            {{ Form::text('last_name', null, ['class' => 'form-control box-size', 'placeholder' => "Last Name", 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('email', 'User email',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->user->email !!}
            @else
            {{ Form::text('email', null, ['class' => 'form-control box-size', 'placeholder' => "User Email", 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('phone', 'User Phone',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->user->phone !!}
            @else
            {{ Form::text('phone', null, ['class' => 'form-control box-size', 'placeholder' => "User Phone", 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->address !!}
            @else
            {{ Form::text('address', null, ['class' => 'form-control box-size', 'placeholder' => "Address", 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('city', 'City',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->city !!}
            @else
            {{ Form::text('city', null, ['class' => 'form-control box-size', 'placeholder' => "City", 'required' => 'required']) }}
            @endif
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('country_id', 'Country', ['class' => 'col-lg-2
        control-label']) }}
        <div class="col-lg-10">
            @if($url == 'edit')
            <select class="form-control" name="country_id">
                <option value="">Select Country</option>
                @foreach($countries as $c)
                    <option {!! $contact->country_id == $c->id ? 'selected' : '' !!} value="{!! $c->id !!}">{!! $c->name !!}</option>
                @endforeach
            </select>
            @else
            <select class="form-control" name="country_id">
                <option value="">Select Country</option>
                @foreach($countries as $c)
                    <option value="{!! $c->id !!}">{!! $c->name !!}</option>
                @endforeach
            </select>
            @endif
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('descroption', 'Description',
        ['class' => 'col-lg-2 control-label required']) }}
        <div style="word-wrap: break-word" class="col-lg-10">
            @if($url == 'edit')
            {!! $contact->description !!}
            @else
            {{ Form::textarea('description', null, ['class' => 'form-control box-size', 'placeholder' => "Description", 'required' => 'required']) }}
            @endif

        </div><!--col-lg-10-->
    </div>
    @if($url == 'edit')
    @if(!empty(json_decode($contact->complain_images)))
        <div class="form-group">
            {{ Form::label('name', 'Images',
            ['class' => 'col-lg-2 control-label required']) }}
            <div class="col-lg-10">
                @foreach(json_decode($contact->complain_images) as $key => $val)
                    <img src="{!! asset($val) !!}" class="thumbnail img-thumbnail">
                @endforeach
            </div><!--col-lg-10-->
        </div>
    @endif
    @endif
</div><!--box-body-->


@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $(document).ready(function () {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
