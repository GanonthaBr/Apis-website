<div class="container p-4">
    <div class="row ">
        <div class="col-lg-12">
            <div class="section-header">
                <h1 style="color:#17468a; font-weight:bold">{{__('Liste des Success Story')}}</h1>

            </div>
        </div>

    </div>
    <div class="row p-4">
        @if ($success_stories->count())
        @foreach($success_stories as $success_story)
        <div class="col-lg-1"></div>
        <div class="col-lg-10 m-4" style="width: 300px">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe width="200" height="100" src="{{ $success_story->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <div class="col-lg-1"></div>
        @endforeach
        @else
        <div class="alert alert-warning col-md-8 offset-md-2 mt-3">{{__("Aucun témoignage n'est enregistré pour le moment !")}}</div>
        @endif
    </div>
</div>