@include('include.header')
<section class="py-5">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-4 mx-auto py-3">
                <div class="card">
                    <img src="{{asset($product['image'])}}" width="300px" height="300px" alt="" class="card-img-top"/>
                    <div class="card-body">
                        <h3>Product Name: {{$product['name']}}</h3>
                        <h4>Product Price:{{$product['price']}} </h4>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
    </div>
</section>
@include('include.footer')