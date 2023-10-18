<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>HMB Projects Pvt Ltd - Admin Panel</title>
    <link href="{{ URL::asset('assets/admin') }}/css/validationEngine.jquery.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/plugins/dataTables/datatables.min.css" rel="stylesheet">

    <link href="{{ URL::asset('assets/admin') }}/css/animate.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/select2.min.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/style.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/toastr.min.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/plugins/summernote/summernote-bs4.css" rel="stylesheet">
    <link href="{{ URL::asset('assets/admin') }}/css/plugins/switchery/switchery.css" rel="stylesheet">

    <script src="{{ URL::asset('assets/admin') }}/js/jquery-3.1.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css">

    <style type="text/css">
      .formErrorArrowBottom {
              box-shadow: none;
              -moz-box-shadow: none;
              -webkit-box-shadow: none;
              margin: 0px 0 0 12px;
              top: 12px;
          }
          .formErrorContent11 {
          position: absolute;
          top: 34px !important;
          width: auto !important;
          left: 35px !important;
          z-index: 11 !important;
          text-transform: none !important;
          background-color: #f2dede !important;
          color: #a94442!important;
          padding: 4px 10px !important;
          / font-size: 15px !important; /
          font-weight: 500 !important;
          border-radius: 3px !important;
      
      }
          .formErrorContent {
                 position: absolute;
                  top: 40px !important;
                  width: auto !important;
                  left: 177px !important;
                  z-index: 11 !important;
                  text-transform: none !important;
                  background-color: #f2dede !important;
                  color: #a94442!important;
                  padding: 4px 10px !important;
                  font-size: 15px !important;
                  font-weight: 500 !important;
                  border-radius: 3px !important;
          }
          .formError .formErrorArrowBottom {
              box-shadow: none;
              -moz-box-shadow: none;
              -webkit-box-shadow: none;
              margin: 0px 0 0 12px;
              top: 12px;
          }
          .formErrorArrowBottom:after {
               content: '' !important;
              position: absolute !important;
              bottom: 10px !important;
              left: 15px !important;
              width: 0 !important;
              height: 0 !important;
              border: 10px solid transparent !important;
              border-top-color: #f2dede!important;
              border-bottom: 0 !important;
              margin-bottom: 18px !important;
              transform: rotate(180deg) !important;
      }
        .success_cls {
           border: 1px solid green !important; 
      }
      .error_cls {
          border: 1px solid red !important; 
      }
      .formError .formErrorContent {
          position: relative !important;
          color: red ;
          font-size: inherit;
          border: 0px solid #ddd;
          line-height: inherit;
          margin-top: 17px !important;
          margin-left: -176px !important;
          float: left;
      }
      .formError .formErrorContent:after{
          content: '' !important;
          position: absolute !important;
          bottom: 10px !important;
          left: 15px !important;
          width: 0 !important;
          height: 0 !important;
          border: 10px solid transparent !important;
          border-top-color: #f2dede!important;
          border-bottom: 0 !important;
          margin-bottom: 19px !important;
          transform: rotate(180deg) !important;
      }
      .formError .formErrorContent1 {
          position: relative !important;
          color: red ;
          font-size: inherit;
          border: 0px solid #ddd;
          line-height: inherit;
          margin-top: -29px !important;
          margin-left: -176px !important;
      }
      .formError .formErrorArrowBottom {
          box-shadow: none !important;
          -moz-box-shadow: none !important;
          -webkit-box-shadow: none !important;
          margin: 0px 0 0 12px !important;
          top: 40px !important;
      }
     
      .heading_text:first-letter{
      font-size:150%;
      }
      .already-have{
      margin-top: 110px;
      }
      .formErrorContent111 {
      position: absolute;
      top: 95px !important;
      width: auto !important;
      left: 30px !important;
      z-index: 11 !important;
      text-transform: none !important;
      background-color: #f2dede !important;
      color: #a94442!important;
      padding: 4px 10px !important;
      / font-size: 15px !important; /
      font-weight: 500 !important;
      border-radius: 3px !important;
      }
  
      .form-container {
        background: #fff;
        padding: 30px;
        border-radius: 10px;
        -webkit-box-shadow: 0px 12px 30px 0px rgba(0,0,0,0.13);
        -moz-box-shadow: 0px 12px 30px 0px rgba(0,0,0,0.13);
        box-shadow: 0px 12px 30px 0px rgba(0,0,0,0.13);
      }
  
      .form-container img {
        width: 50%;
        margin: 0 auto;
        display: block;
      }
  
      .form-container form {
        margin-top: 20px;
      }
  
      .form-container form .form-group label {
        font-size: 17px;
      }
  
      .form-container form .form-group input {
        padding: 15px;
        background: #fff;
        border: 1px solid #838383;
        border-radius: 5px;
      }
  
      .form-container form .btn {
        width: 100%;
        padding: 15px;
        color: #fff;
        background: #a30f06;
        font-size: 17px;
        margin-top: 16px !important;
      }
  
  
      @media (max-width: 1199px) {
        .remove_left_border,
        .remove_right_border {
          border : 0px  !important;
        }
        .device_image{
          width : 50% !important;
        }
  
        body {
          height: 100%;
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        }
  
        .form-group.g-recaptcha iframe {
          width: 100% !important;
          height: auto !important;
        }
        .rc-anchor-normal .rc-anchor-content {
            height: auto !important;
            width: 60% !important;
        }
      }
  
      @media (max-width: 420px) {
  
          div.form-group.g-recaptcha{
          margin-left: -30px !important;
        }
      }
  
      
  
      </style>

</head>
<body>
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-sm-12 col-md-5 mx-auto ">
          <div class="form-container">
            <img src="{{ URL::asset('assets/admin/img/logo.png') }}">
            <form id="sign_in" method="POST" action="{{ url('save-forgot-password') }}">
                @csrf
                @if(Session::has('message'))

                    <div class="alert mt-2 {{ Session::get('alert-class', 'alert-info') }} alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                        {{ Session::get('message') }}
                    </div>
                    <!--  <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p> -->
                @endif
              <div class="form-group">
                <label for="username">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Enter Email Address" maxlength="100">
                @if($errors->has('email'))
                  <div class="error">{!! $errors->first('email') !!}</div>
                @endif
              </div>
              
              <button type="submit" class="btn  mt-1">Submit</button>
              <p class="text-right mt-2">
                <a href="{{ url('/') }}">Log In?</a>
                </p>
              
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
    <!-- Mainly scripts -->
      <script src="{{ URL::asset('assets/admin') }}/js/jquery.validationEngine-en.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/jquery.validationEngine.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/popper.min.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/bootstrap.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/switchery/switchery.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/metisMenu/jquery.metisMenu.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/select2.min.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/dataTables/datatables.min.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/dataTables/dataTables.bootstrap4.min.js"></script>

    

      <!-- Custom and plugin javascript -->
      <script src="{{ URL::asset('assets/admin') }}/js/inspinia.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/pace/pace.min.js"></script>

      <!-- jQuery UI -->
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/jquery-ui/jquery-ui.min.js"></script>

      <!-- Jvectormap -->
      <!-- <script src="{{ URL::asset('assets/admin') }}/js/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script> -->
      <!-- <script src="{{ URL::asset('assets/admin') }}/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->

      <!-- EayPIE -->
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/easypiechart/jquery.easypiechart.js"></script>

      <!-- Sparkline -->
      <!-- <script src="{{ URL::asset('assets/admin') }}/js/plugins/sparkline/jquery.sparkline.min.js"></script> -->

      <!-- Sparkline demo data  -->
      <!-- <script src="{{ URL::asset('assets/admin') }}/js/demo/sparkline-demo.js"></script> -->
      <script src="{{ URL::asset('assets/admin') }}/js/toastr.min.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/plugins/summernote/summernote-bs4.js"></script>
      <script src="//cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
      <script src="{{ URL::asset('assets/admin') }}/js/common.js"></script>

    
  </body>

</html>