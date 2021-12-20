@include('include.header')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="{{route('count')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Enter Your String</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="given_string">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea name="" id="" readonly class="form-control">{{isset($word)?$word:''}} {{"\n"}} {{isset($char)?$char:''}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" name="submitBtn" class="btn btn-outline-success btn-block" value="Submit">
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@include('include.footer')