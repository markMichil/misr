
    <div id="property-city" class="container property-city pb30 bb1" >
        <div class="row" style="margin-bottom: 30px">
            <div class="col-lg-12">
                <div class="main-title text-center">
                    <h1 style="font-size:30px;font-weight:bolder;color: #c3991b">{{clean($title)}} </h1>
{{--                    <h1>{{clean($desc)}}</h1>--}}
                </div>
            </div>
        </div>

        <div class="row">
            @foreach($rows as $key=>$row)
                <div class="col-sm-6 col-lg-4 col-xl">
                    @include('Location::frontend.blocks.list-locations.loop_side',['class_form'=>"properti_city_home8 text-center"])
                </div>
            @endforeach
        </div>
    </div>

