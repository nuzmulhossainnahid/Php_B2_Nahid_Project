@include('include.header')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                    <form action="{{route('result')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Starting Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="starting_number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Ending Number</label>
                            <div class="col-md-9">
                                <input type="number" class="form-control" name="ending_number">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Your Choice</label>
                            <div class="col-md-9">
                                <label for=""><input type="radio" name="choice" value="odd">Odd</label>
                                <label for=""><input type="radio" name="choice" value="even">Even</label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Result</label>
                            <div class="col-md-9">
                                <textarea name="" id="" readonly class="form-control">{{isset($result)?$result:''}}</textarea>
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