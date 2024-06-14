<div class="container partners p-4">
    <div class="row ">
        <div class="col-lg-12">
            <div class="section-header">
                <h1 style="color:#17468a; font-weight:bold">{{__('Nos Partenaires')}}</h1>
                <h2>
                    {{__('Nous sommes fiers de travailler avec ces partenaires')}}
                </h2>
            </div>
        </div>
        
    </div>
    <div class="row partner-list d-flex p-sm-3 m-lg-3 pl-lg-2 align-items-center">
       @foreach ($partners as $partner)
            <div class="col-lg-4 col-md-6">
            <div class="partner-item" data-alt="{{$partner->name}}">
                <img src="{{asset('storage/' . $partner->image)}}" alt="World Food Program">
            </div>
        </div>
       @endforeach
       
    </div>
</div>