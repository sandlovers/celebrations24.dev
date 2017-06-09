@extends('layouts.app')

@section('content')

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



    <!-- START CONTACT SECTION -->

      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-8">
              <div class="contact_info">
                <h4> Use our contact form and we will get right back to you!! </h4>

                <div class="contact_detail">
                  <form>
                    <div class="form-group">
                      <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Your name">
                    </div>
                    
                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your email">
                    </div>

                    <div class="form-group">
                      <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Your phone">
                    </div>

                    <div class="form-group">
                      <textarea type="text" rows="4" class="form-control" id="exampleInputPassword1" placeholder="Your email"></textarea>
                    </div>

                    <div class="verify_Code">
                      <h5> <i class="fa fa-question-circle"> </i> Verification: <img src="img/code.png"> </h5> 
                      <input type="text" class="form-control" id="exampleInputPassword1"> 
                    </div>

                    <button type="submit" class="btn btn-default"> SEND EMAIL </button>
                  </form>

                  
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="give_call">
                <h4> Please give us a call at  </h4>

                <h3> 727-289-1684 </h3>
              </div>

              <div class="space30"></div>

              <div class="email_box">
                <h6> Enter your email address below to subscribe to our FREE newsletter! </h6>

                <form>
                  <div class="form-group">
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your email">
                  </div>

                  <a href="#" class="btn btn-default"> subscribe </a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>

@endsection