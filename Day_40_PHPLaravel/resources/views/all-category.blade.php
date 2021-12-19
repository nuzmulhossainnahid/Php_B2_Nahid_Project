@include('include.header')
<section class="py-5 bg-info">
    <div class="container">
        <div class="row">
            @foreach($categorys as $category)
            <div class="col-md-3">
                <div class="">
                    <a href="{{route('cata-one.show',$category['id'])}}" class="btn btn-link">
                       <div class="card card-body">
                           <h4>{{$category['name']}}</h4>
                       </div>.
                    </a>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>
@include('include.footer')