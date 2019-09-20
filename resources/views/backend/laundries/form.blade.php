<div class="box-body">
    <div class="form-group">
        {{ Form::label('name', 'Name', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-10">
            {{ Form::text('name', null,
            [
            'class' => 'form-control box-size',
            'placeholder' => 'Name',
             'required' => 'required']) }}
        </div>
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('name', 'Laundry Logo', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-8">
            <div class="input-group">
                   <span class="input-group-btn">
                     <a id="btn-logo-selection" data-input="logo" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                {{ Form::text('logo', null,[
                    'class' => 'form-control box-size',
                    'placeholder' => 'Logo',
                    'id' => 'logo'
                ])
             }}
            </div>
            <img id="holder" src="{!! !empty($laundry) ? asset($laundry->logo) : null !!}"
                 style="margin-top:15px;max-height:100px;">
        </div>
    </div><!--form-group-->
    <div class="form-group">
        {{ Form::label('name', 'Admin Approved?', ['class' => 'col-lg-2 control-label required']) }}
        <div class="col-lg-5">
            {{ Form::select('is_approved', ['0' => 'No', '1' => 'Yes'], null,
            [
            'class' => 'form-control',
             'required' => 'required'])
             }}
        </div>
    </div>
</div><!--box-body-->
@section("after-scripts")
    {!! Html::script(asset('/vendor/laravel-filemanager/js/lfm.js')) !!}
    {!! Html::script(asset('/js/backend/bootstrap-tabcollapse.js')) !!}
    {!! Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyC263na3AWmXdy9htO50E9kiq2-cgbBsMo&libraries=places,geometry,drawing,v=3.exp') !!}
    {!! Html::script(asset('/js/gmaps.js')) !!}
    {!! Html::script(asset('/js/jquery.geocomplete.min.js')) !!}
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}
    <script type="text/javascript">
        drawDriverArea();
        $(document).ready(function () {
            //Setting up
            @if(!empty($laundry))
                $('select.select2').select2();
            $("#addressable_id").val("{!! $laundry->id !!}");
            $("#addressable_type").val("laundry");
            $("#address_map").geocomplete({
                map: "#location_map",
                markerOptions: {
                    draggable: true
                }
            }).bind('geocode:dragged', function (event, latLng) {
                getAddressByLatLng(latLng);
            }).bind('geocode:result', function (event, latLng) {
                getAddressByLatLng(latLng.geometry.location);
            });
            @endif
            //
            $('#btn-logo-selection').filemanager('image');
            $('#myTab').tabCollapse({
                tabsClass: 'hidden-sm hidden-xs',
                accordionClass: 'visible-sm visible-xs'
            });
        });
        function addAddress() {
            $("a[href='#tab2']").trigger('click');
            $("#addAddressForm").slideToggle();
        }
        function getAddressByLatLng(latlng) {
            $("#location").val(latlng.lat() + ',' + latlng.lng());
            new google.maps.Geocoder().geocode({'latLng': latlng}, function (results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    console.log(results);
                    if (results[0]) {
                        $.each(results[0].address_components, function (index, data) {
                            if (data.types[0] == "country") {
                                $("#country").val(data.long_name)
                            }
                            if (data.types[0] == "administrative_area_level_1") {
                                $("#administrative_area_level_1").val(data.long_name);
                            }
                            if (data.types[0] == "administrative_area_level_2") {
                                $("#district").val(data.long_name);
                            } else {
                                $("#district").val('');
                            }

                            if (data.types[0] == "country") {
                                console.log("Country=" + data.long_name)
                            }
                            if (data.types[0] == "postal_code") {
                                $("#postal_code").val(data.long_name)
                            } else {
                                $("#postal_code").val('')
                            }
                            $("#address").val(results[1].formatted_address);
                        });
                    }
                    if (results[1]) {
                        var country = null, countryCode = null, city = null, cityAlt = null;
                        var c, lc, component;
                        for (var r = 0, rl = results.length; r < rl; r += 1) {
                            var result = results[r];
                            if (!city && result.types[0] === 'locality') {
                                for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                    component = result.address_components[c];
                                    if (component.types[0] === 'locality') {
                                        city = component.long_name;
                                        break;
                                    }
                                }
                            }
                            else if (!city && !cityAlt && result.types[0] === 'administrative_area_level_1') {
                                for (c = 0, lc = result.address_components.length; c < lc; c += 1) {
                                    component = result.address_components[c];
                                    if (component.types[0] === 'administrative_area_level_1') {
                                        cityAlt = component.long_name;
                                        break;
                                    }
                                }
                            } else if (!country && result.types[0] === 'country') {
                                country = result.address_components[0].long_name;
                                countryCode = result.address_components[0].short_name;
                            }

                            if (city && country) {
                                break;
                            }
                        }
                        $("#city").val(city);
                        console.log("City: " + city + ", City2: " + cityAlt + ", Country: " + country + ", Country Code: " + countryCode);
                    }
                }
            });
        }
        function getLaundryRelation(relation) {
            //User table
            $('.laundry-users-table').dataTable({
                processing: true,
                serverSide: true,
                destroy: true,
                ajax: {
                    url: '{{ route("admin.access.user.get") }}',
                    type: 'post',
                    data: function (d) {
                        d.status = 1;
                        d.trashed = false;
                        d.laundry_id = '{!! (empty($laundry)) ? null : $laundry->id !!}';
                        d.relation = relation;
                    }
                },
                columns: [

                    {data: 'first_name', name: '{{config('access.users_table')}}.first_name'},
                    {data: 'last_name', name: '{{config('access.users_table')}}.last_name'},
                    {data: 'email', name: '{{config('access.users_table')}}.email'},
                    {data: 'confirmed', name: '{{config('access.users_table')}}.confirmed'},
                    {data: 'roles', name: '{{config('access.roles_table')}}.name', sortable: false},
                    {data: 'created_at', name: '{{config('access.users_table')}}.created_at'},
                    {data: 'updated_at', name: '{{config('access.users_table')}}.updated_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        {extend: 'copy', className: 'copyButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'csv', className: 'csvButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'excel', className: 'excelButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'pdf', className: 'pdfButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}},
                        {extend: 'print', className: 'printButton', exportOptions: {columns: [0, 1, 2, 3, 4, 5, 6]}}
                    ]
                }
            });
        }
        function drawDriverArea() {
            var drawingManager;
            var all_overlays = [];
            var selectedShape;
            var colors = ['#000000', '#FF1493', '#32CD32', '#FF8C00', '#4B0082'];
            var selectedColor;
            var colorButtons = {};
            var verticesArr = [];

            function clearSelection() {
                if (selectedShape) {
                    selectedShape.setEditable(false);
                    selectedShape = null;
                }
            }

            function setSelection(shape) {
                clearSelection();
                selectedShape = shape;
                shape.setEditable(true);
                selectColor(shape.get('fillColor') || shape.get('strokeColor'));
            }

            function deleteSelectedShape() {
                if (selectedShape) {
                    var allShapes = JSON.parse($("#vertices").val());
                    var deletedShape = JSON.parse(JSON.stringify(selectedShape.getPath().getArray()));
                    var filtered = allShapes.filter(function (item) {
                        return JSON.stringify(item) !== JSON.stringify(deletedShape);
                    });
                    $("#vertices").val(JSON.parse(JSON.stringify(filtered)));
                    selectedShape.setMap(null);
                }
            }

            function deleteAllShape() {
                for (var i = 0; i < all_overlays.length; i++) {
                    all_overlays[i].overlay.setMap(null);
                }
                all_overlays = [];
                $("#vertices").val(all_overlays);
            }

            function selectColor(color) {
                selectedColor = color;
                for (var i = 0; i < colors.length; ++i) {
                    var currColor = colors[i];
                    colorButtons[currColor].style.border = currColor == color ? '2px solid #789' : '2px solid #fff';
                }

                // Retrieves the current options from the drawing manager and replaces the
                // stroke or fill color as appropriate.
                var polylineOptions = drawingManager.get('polylineOptions');
                polylineOptions.strokeColor = color;
                drawingManager.set('polylineOptions', polylineOptions);

                var polygonOptions = drawingManager.get('polygonOptions');
                polygonOptions.fillColor = color;
                drawingManager.set('polygonOptions', polygonOptions);
            }

            function setSelectedShapeColor(color) {
                if (selectedShape) {
                    if (selectedShape.type == google.maps.drawing.OverlayType.POLYLINE) {
                        selectedShape.set('strokeColor', color);
                    } else {
                        selectedShape.set('fillColor', color);
                    }
                }
            }

            function makeColorButton(color) {
                var button = document.createElement('span');
                button.className = 'color-button';
                button.style.backgroundColor = color;
                google.maps.event.addDomListener(button, 'click', function () {
                    selectColor(color);
                    setSelectedShapeColor(color);
                });

                return button;
            }

            function buildColorPalette() {
                var colorPalette = document.getElementById('color-palette');
                for (var i = 0; i < colors.length; ++i) {
                    var currColor = colors[i];
                    var colorButton = makeColorButton(currColor);
                    colorPalette.appendChild(colorButton);
                    colorButtons[currColor] = colorButton;
                }
                selectColor(colors[0]);
            }

            function initialize() {
                var map = new google.maps.Map(document.getElementById('driver-area-map'), {
                    zoom: 10,
                    center: new google.maps.LatLng(21.4858, 39.1925),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    disableDefaultUI: true,
                    zoomControl: true
                });

                var polyOptions = {
                    strokeWeight: 0,
                    fillOpacity: 0.45,
                    editable: true
                };
                // Creates a drawing manager attached to the map that allows the user to draw
                // markers, lines, and shapes.
                drawingManager = new google.maps.drawing.DrawingManager({
                    drawingMode: google.maps.drawing.OverlayType.POLYGON,
                    drawingControl: true,
                    drawingControlOptions: {
                        position: google.maps.ControlPosition.TOP_CENTER,
                        drawingModes: ['polygon', 'polyline']
                    },
                    polylineOptions: {
                        editable: true
                    },
                    polygonOptions: polyOptions,
                    map: map
                });

                google.maps.event.addListener(drawingManager, 'overlaycomplete', function (e) {
                    all_overlays.push(e);

                    if (e.type != google.maps.drawing.OverlayType.MARKER) {
                        // Switch back to non-drawing mode after drawing a shape.
                        //drawingManager.setDrawingMode(null);
                        var newShape = e.overlay;
                        newShape.type = e.type;
                        google.maps.event.addListener(newShape, 'click', function () {
                            setSelection(newShape);
                        });
                        setSelection(newShape);

                        //overlayClickListener(e.overlay);

                        verticesArr.push(e.overlay.getPath().getArray());
                        var newVertiecsArr = JSON.parse(JSON.stringify(verticesArr));
                        console.log(newVertiecsArr, e.type);
                        $('#vertices').val(JSON.stringify(verticesArr));
                    }
                });

                google.maps.event.addListener(drawingManager, 'drawingmode_changed', clearSelection);
                google.maps.event.addListener(map, 'click', clearSelection);
                google.maps.event.addDomListener(document.getElementById('delete-button'), 'click', deleteSelectedShape);
                google.maps.event.addDomListener(document.getElementById('delete-all-button'), 'click', deleteAllShape);
                buildColorPalette();
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        }
    </script>
@endsection
