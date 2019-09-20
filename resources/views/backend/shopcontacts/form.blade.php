<div class="box-body">
    <div class="form-group">
        {{ Form::label('phone', 'Contact Number',
        ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('phone', $contact->phone, ['class' => 'form-control box-size', 'placeholder' => "Contact Number", 'required' => 'required']) }}
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('address', 'Address',
        ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('address', $contact->address, ['class' => 'form-control box-size', 'placeholder' => "Address"]) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('city', 'City',
        ['class' => 'col-lg-2 control-label']) }}
        <div class="col-lg-10">
            {{ Form::text('city', $contact->city, ['class' => 'form-control box-size', 'placeholder' => "City"]) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('country_id', 'Country', ['class' => 'col-lg-2
        control-label required']) }}
        <div class="col-lg-10">
            <select class="form-control" name="location_id" required>
                <option value="">Select Country</option>
                @foreach($countries as $c)
                    <option {!! $contact->location_id == $c->id ? 'selected' : '' !!} value="{!! $c->id !!}">{!! $c->name !!}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        {{ Form::label('descroption', 'Description',
        ['class' => 'col-lg-2 control-label']) }}
        <div style="word-wrap: break-word" class="col-lg-10">
            {{ Form::textarea('description', $contact->description, ['class' => 'form-control box-size', 'placeholder' => "Description"]) }}
        </div><!--col-lg-10-->
    </div>
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
