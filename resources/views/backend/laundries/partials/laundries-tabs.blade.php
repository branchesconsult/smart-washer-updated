<!-- Nav tabs -->
<ul id="myTab" class="nav nav-tabs setting-tab-list" role="tablist">
    <li role="presentation" class="active">
        <a href="#tab1" aria-controls="home" role="tab"
           data-toggle="tab">Basic info</a>
    </li>
    @if(!empty($laundry))
        <li role="presentation">
            <a href="#tab2" aria-controls="1" role="tab" onclick="getLaundryAddresses()"
               data-toggle="tab">Addresses</a>
        </li>
        <li role="presentation">
            <a href="#tab3"
               onclick="getLaundryRelation('{!! \Config::get('constants.laundry_users_relation.owner') !!}')"
               aria-controls="2" role="tab"
               data-toggle="tab">Owners</a>
        </li>
        <li role="presentation">
            <a href="#tab4"
               onclick="getLaundryRelation('{!! \Config::get('constants.laundry_users_relation.driver') !!}')"
               aria-controls="3" role="tab"
               data-toggle="tab">Drivers</a>
        </li>
    @endif
</ul>