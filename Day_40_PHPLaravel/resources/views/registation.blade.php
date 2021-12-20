@include('include.header')
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card card-body">
                   <div class="card-header text-center">
                       <h3>Registation Form</h3>
                   </div>
                    <div class="card-body">
                        <form action="{{route('register-form')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">First Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="first_name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Last Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="last_name" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3">Full Name</label>
                                <div class="col-md-8">
                                    <input type="text" name="" value="{{isset($full_name)?$full_name:''}}" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-form-label col-md-3"></label>
                                <div class="col-md-8">
                                    <input type="submit" name="btn" value="Submit" class="btn btn-outline-success btn-block"/>
                                </div>
                            </div>



                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('include.footer')
