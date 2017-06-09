@extends('layouts.app')

@section('content')

<!-- SECTION BANNER SECTION -->

      <section id="banner">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="banner_caption">
                <h1> Wedding DJs and Event Emcees </h1>
              </div>
            </div>
          </div>
        </div>  
      </section>

    <!-- END BANNER SECTION -->



    <!-- START BILLING SECTION -->

      <section id="billing">
        <div class="container">
          <form>
            <div class="row">
              <div class="col-md-12">
                <div class="billing_title">
                  <h3> Billing Details </h3>
                </div>
              </div>
            </div>

            <div class="space20"></div>

            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <div class="row">
                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="First name">
                    </div>
                  </div>

                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Last name">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address">
                    </div>
                  </div>

                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Phone number">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 space20">
                    <div class="form-group">
                      <select type="tel" class="form-control" id="exampleInputEmail1">
                        <option> Choose Your Country </option>
                        <option> Australia </option>
                        <option> Canada </option>
                        <option> India </option>
                        <option> USA </option>
                        <option> London </option>
                        <option> Dubai </option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="City">
                    </div>
                  </div>

                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Zip Code">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 space20">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Address">
                    </div>
                  </div>
                </div>

                <div class="space30"></div>

                <div class="row">
                  <div class="col-md-12">
                    <div class="billing_title">
                      <h3> Payment Details </h3>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 space20">
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Card Number">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <select type="tel" class="form-control" id="exampleInputEmail1">
                        <option> Expiration Month </option>
                        <option> 1 </option>
                        <option> 2 </option>
                        <option> 3 </option>
                        <option> 4 </option>
                        <option> 5 </option>
                        <option> 6 </option>
                        <option> 7 </option>
                        <option> 8 </option>
                        <option> 9 </option>
                        <option> 10 </option>
                        <option> 11 </option>
                        <option> 12 </option>
                      </select>
                    </div>
                  </div>

                  <div class="col-md-6 space20">
                    <div class="form-group">
                      <select type="tel" class="form-control" id="exampleInputEmail1">
                        <option> Expiration Year </option>
                        <option> 2011 </option>
                        <option> 2012 </option>
                        <option> 2013 </option>
                        <option> 2014 </option>
                        <option> 2015 </option>
                        <option> 2016 </option>
                        <option> 2017 </option>
                        <option> 2018 </option>
                        <option> 2019 </option>
                        <option> 2020 </option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row security_code">
                  <div class="col-md-4 space20">
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Security Code">
                      <i class="fa fa-question-circle" aria-hidden="true"></i>
                    </div>
                  </div>

                  <div class="col-md-6 col-md-offset-2 space20">
                    <p> By clicking the button, you agree to the Terms & Conditions </p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 space20">
                    <a href="#" class="btn btn-default finish_order"> Pay and Finish order </a>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </section>

    <!-- END BILLING SECTION -->




@endsection