<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Concord - View Opinion</title>
      <meta lang="en">
      <!--Favicon-->
      <link rel="apple-touch-icon" sizes="180x180" href="/static/img/favicon/apple-touch-icon.png">
      <link rel="icon" type="image/png" sizes="32x32" href="/static/img/favicon/favicon-32x32.png">
      <link rel="icon" type="image/png" sizes="16x16" href="/static/img/favicon/favicon-16x16.png">
      <link rel="manifest" href="/static/img/favicon/site.webmanifest">
      <link rel="mask-icon" href="/static/img/favicon/safari-pinned-tab.svg" color="#5bbad5">
      <link rel="shortcut icon" href="/static/img/favicon/favicon.ico">
      <meta name="msapplication-TileColor" content="#da532c">
      <meta name="msapplication-config" content="/static/img/favicon/browserconfig.xml">
      <meta name="theme-color" content="#ffffff">
      <link rel="stylesheet" href="/static/css/bootstrap/bootstrap.min.css">
      <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
      <link rel="stylesheet" href="/static/css/loader.css" />
      <style>
      @font-face {
      font-family: AppleMyungjo;
      src: url('/static/fonts/AppleMyungjo.ttf');
      }

      @font-face {
      font-family: "HelveticaNeue";
      src: url('/static/fonts/HELN.TTF');
      }

      @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
      @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&display=swap');

      * {
        font-family: "HelveticaNeue";
        text-align: left;
        font-weight: 400;
      }

      .bold {
        font-weight: 700;
      }

      .main-container {
        padding: 10px;
        margin: 20px;
        background-color: #fff;
      }

      .nav-img {
        height: 1em;
        width: 1em;
      }

      .nav-img-2 {
          height: 0.8em;
          width: auto;
        }

      .concord-link {
        font-size: 1em;
        font-weight: 500;
      }

      @media screen and (min-width: 600px) {
        .main-container{
          margin-left : 100px;
          margin-right: 100px;
        }

        .main-container-2{
          padding-left : 100px;
          padding-right: 100px;
        }
        
        .nav-img {
          height: 1.2em;
          width: 1.2em;
        }

        
        .nav-img-2 {
          height: 1em;
          width: auto;
        }

        .concord-link {
          font-size: 1.2em;
        }

      }

      @media screen and (min-width: 900px) {
        .main-container{
          margin-left : 250px;
          margin-right: 250px;
        }

        .main-container-2{
          padding-left : 250px;
          padding-right: 250px;
        }

        .nav-img {
          height: 1.4em;
          width: 1.4em;
        }

        
      .nav-img-2 {
          height: 1em;
          width: auto;
        }

        .concord-link {
          font-size: 1.4em;
        }

      }

      @media screen and (min-width: 1200px) {
        .main-container{
          margin-left : 300px;
          margin-right: 300px;
        }

        .main-container-2{
          padding-left : 300px;
          padding-right: 300px;
        }

        .nav-img {
          height: 1.6em;
          width: 1.6em;
        }

        
      .nav-img-2 {
          height: 1.4em;
          width: auto;
        }

        .concord-link {
          font-size: 1.6em;
        }

      }

      @media screen and (min-width: 1600px) {
        .main-container{
          margin-left : 550px;
          margin-right: 550px;
        }

        .main-container-2{
          padding-left : 550px;
          padding-right: 550px;
        }
      }

      @media screen and (min-width: 1900px) {
        .main-container{
          margin-left : 700px;
          margin-right: 700px;
        }

        .main-container-2{
          padding-left : 700px;
          padding-right: 700px;
        }

        .nav-img {
          height: 1.4em;
          width: 1.4em;
        }

        
        .nav-img-2 {
          height: 2em;
          width: auto;
        }

        .concord-link {
          font-size: 1.8em;
        }

      }

      #post-loader {
        display: none;
      }

      .footer-about-us {
        color: #FFF;
        font-family: "HelveticaNeue";
        font-size: 16px;
        font-weight: 500;
        line-height: 19px;
        text-align: center;
      }

      .footer-tagline {
        opacity: 0.54;
        color: #FFF;
        font-family: "HelveticaNeue";
        font-size: 12px;
        letter-spacing: 1px;
        line-height: 14px;
      }

      @media screen and (min-width: 900px) {
        .footer-tagline {
          opacity: 0.54;
          color: #FFF;
          font-family: "HelveticaNeue";
          font-size: 16px;
          letter-spacing: 1.33px;
          line-height: 19px;
        }
      }

      .footer-concord {
        color: #FFF;
        font-family: AppleMyungjo;
        font-size: 28px;
        line-height: 33px;
      }

      .footer-line {
        box-sizing: border-box;
        height: 1px;
        width: 100%;
        border: 1px solid #CECECE;
      }

      .footer-info-title {
        color: #FFF;
        font-family: "HelveticaNeue";
        font-size: 24px;
        font-weight: 700;
        letter-spacing: 2px;
        line-height: 29px;
      } 

      .footer-info-desc {
        opacity: 0.64;
        color: #FFF;
        font-family: "HelveticaNeue";
        font-size: 16px;
        font-weight: 300;
        letter-spacing: 1.33px;
        line-height: 19px;
      }

      .shadow_box_title {
        border-radius: 2px;
        background-color: #FFF;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
      }

      #main_title {
        color: #292929;
        font-family: "HelveticaNeue";
        font-size: 24px;
        font-weight: 550;
        line-height: 32px;
      }

      #main_question {
        color: #292929;
        font-family: "HelveticaNeue";
        font-size: 21px;
        line-height: 32px;
      }

      .voted_blue {
        font-size: 16px;
        letter-spacing: 0.2px;
        line-height: 19px;
        border-radius: 5px;
        background-color: #39F;
        color: #fff;
      }

      .voted_red {
        font-size: 16px;
        letter-spacing: 0.2px;
        line-height: 19px;
        border-radius: 5px;
        background-color: #FF5F58;
        color: #fff;
      }

      #comment_title {
        font-size: 36px;
        font-weight: 700;
        line-height: 43px;
      }

      .blue-text {
        background-color: #DCE8FF;
        border: 1px solid #D1DFFF;
      } 

      .red-text {
        background-color: #FFD5D8;
      }

      #main_text {
        color: #292929;
        font-size: 21px;
        line-height: 32px;
      }

      .vote_with_comment_name {
        opacity: 0.34;
        color: #000;
        font-size: 16px;
        letter-spacing: 0.4px;
        line-height: 19px;
      }

      .social-interaction-blue {
        background-color: #C8DCFF;
        border-bottom-left-radius: 40px; 
        color: #39F;
      }

      .social-interaction-red {
        background-color: #FFC5C5;
        border-bottom-right-radius: 40px;
        color: #FF5F58;
      }

      .red-bubble {
        border-radius: 40px 40px 40px 0px;
        border: 1px solid #FF5F58;
      }

      .blue-bubble {
        border-radius: 40px 40px 0px 40px;
        border: 1px solid #D1DFFF;
      }

      .source-text {
        opacity: 0.54;
        color: #292929;
        font-size: 16px;
        line-height: 19px; 
      }

      .opinion-written-by {
        opacity: 0.34;
        color: #000;
        font-size: 16px;
        letter-spacing: 1.83px;
        line-height: 19px;
      }

      .path-second {
        box-sizing: border-box;
        height: 1px;
        width: 100%;
        border: 1px solid #ECECEC;
      }

      #userName_2 {
        color: #000;
        font-size: 21px;
        line-height: 24px;
      }

      .modal-dark {
        color: #292929;
        font-size: 14px;
        font-weight: 500;
        line-height: 17px;
        text-align: center;
      }

      .modal-light {
        opacity: 0.84;
        color: #000;
        font-size: 12px;
        line-height: 14px;
        text-align: center;
      }

      .cancel {
        opacity: 0.54;
        color: #292929;
        font-size: 12px;
        line-height: 14px;
      }
      
      .blue-empty-bubble {
        border: 1px red dashed;
        border-radius: 40px 40px 40px 0;
      }

      .red-empty-bubble {
        border: 1px blue dashed;
        border-radius: 40px 40px 0px 40px;
      }

      .ios-modal-heading {
        color: #292929;
        font-size: 24px;
        font-weight: 700;
        line-height: 29px;
        text-align: center;
      }

      .ios-modal-text {
        opacity: 0.84;
        color: #000;
        font-size: 16px;
        line-height: 21px;
        text-align: center
      }

      .notify-me {
        border-radius: 30px;
        background-color: #2AC940;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
        color: #FFF;
        font-size: 16px;
        font-weight: 700;
        line-height: 19px;
        text-align: center;
        cursor: pointer;
      }

      .form-submit-button {
        background: #2AC940;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
        }



        .form-submit-button:hover {
        background: #2AC940;
        box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);
        }

      </style>
      <link rel="stylesheet" href="/static/view_opinion/main.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
      
  </head>
    <body>
    <nav class="navbar navbar-light justify-content-between px-5" style="background-color: #fff;">
          <a class="mr-auto d-inline-flex align-items-center" href="index.html"><img class="nav-img" src="/static/img/concord_logo.png"><img class="nav-img-2 ml-2" src="/static/img/Concord-black.png"></a>
          <ul class="navbar-nav ml-auto navbar-icons d-flex flex-row">
              <li class="nav-item mr-1">
                  <a class="nav-link" href="https://play.google.com/store/apps/details?id=io.sopo" target="_blank"><img class="nav-img-2" src="/static/view_opinion/android.png" style="box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);"></a>
              </li>
          </ul>
    </nav>
        <div class="main-container d-flex flex-column align-items-center justify-content-center" id="loader" style="min-height: 70vh;">
          <div class="lds-default" id="loader"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
          <h2 id="finalResultStatus" style="color: #000">Fetching Opinion...</h2>
        </div>
        <div class="main-container" id="post-loader">
          <div class="container"> 
            <div class="row justify-content-center">
              <div class="col-12">
                  <div id="go-to-news" class="row shadow_box_title p-2 pt-3">
                    <h3 class="col-12" id="main_title" style="text-align: left;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. </h3>
                    <p class="source-text col-12" id="source"></p>
                  </div>
                  <div class="row py-2">
                    <p id="main_question" style="text-align: left;">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis accusamus sapiente cupiditate eos deleniti dicta, natus fugiat vel provident harum neque? Aliquam in praesentium repudiandae at exercitationem rem odit consequatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, facere dolor. Eligendi harum earum et sed soluta, provident corporis facilis voluptatem! Perferendis voluptatum eius in unde sint. Blanditiis, placeat numquam.</p>
                  </div>
                  <div class="row">
                    <div id="voted_info" class="my-2 voted_blue p-2 ml-auto">
                      <span id="vote_status" style="text-align: left">Hello</span>
                    </div>
                  </div>
              </div>
            </div>
            <div class="row justify-content-center blue-bubble" style="background-color: #fff;">
              <div class="col pt-3">
                  <div class="row px-4">
                    <p>
                      <span id="vote_status_text" style="text-align: left;" class="vote_with_comment_name">Voted for "Something which I dont have info for"</span><br>
                      <span id="comment_title" style="text-align: left; font-size: 1.8em; line-height: 1.2;"></span>
                    </p>
                  </div>
                  <div class="row px-4">
                    <div class="d-flex align-items-center justify-content-start">
                      <div class="mr-2" id="user_img"></div>
                      <div class="container">
                      <div class="">
                          <div class="row" id="userName" style="text-align: left; font-size: 0.8em"></div>
                          <div class="row" id="date" style="text-align: left; font-size: 0.8em"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  <div id="main_text_holder" class="row mt-3 blue-text p-4">
                    <p id="main_text" style="text-align: left; font-size: 1em">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero placeat sint praesentium aliquid accusamus eos voluptatem commodi sequi, dolore maiores voluptate enim quas? Quidem, magni. Fuga eligendi aut tempora illo?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore voluptates magnam reprehenderit soluta deserunt corporis nobis distinctio totam adipisci placeat, rem ratione amet aut fuga natus? Modi, itaque vitae! Cumque! Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum accusamus provident nihil ea non earum. Delectus, iste? Accusantium, quis omnis corrupti animi quas perspiciatis, facilis consectetur amet, excepturi nihil eius.</p>
                  </div>
                  <div id="social-interaction" class="row d-flex align-items-center justify-content-around p-2 social-interaction-blue" style="" >
                    <div onclick="$('#exampleModalCenter').modal('show')"><i class="fa fa-reply mr-2" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>Reply</div>
                    <div onclick="$('#exampleModalCenter').modal('show')"><i class="fa fa-star mr-2" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>Recommend</div>
                    <div onclick="$('#exampleModalCenter').modal('show')"><i class="fa fa-share-alt mr-2" aria-hidden="true" data-toggle="modal" data-target="#exampleModalCenter"></i>Share</div>
                  </div>
                </div>
            </div>

            <div class="row mt-3 mb-5 blue-empty-bubble mr-auto" style="width: 90%; height: 80px;" onclick="$('#exampleModalCenter').modal('show')" data-toggle="modal" data-target="#exampleModalCenter">
              <div class="d-flex align-items-center justify-content-start my-2 ml-3">
                <div class="mr-2" id="user_img_3"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 30px; color: #aaa"></i>
                  </div>
                <div class="container">
                  <div class="row" id="userName_3">Type your reply here</div>
                </div>
            </div>
          </div>

            <div class="row mt-4 mb-2">
              <div class="d-flex opinion-written-by">
                OPINION WRITTEN BY
              </div>
              <div class="path-second"></div>
                <div class="d-flex align-items-center justify-content-start my-2">
                  <div class="mr-2" id="user_img_2"></div>
                  <div class="container">
                    <div class="row" id="userName_2"></div>
                  </div>
              </div>
              <div class="path-second"></div>
            </div>
            
            

            <div style="display: none;">

            
              <div class="row pt-2">
                <div class="col">
                <p id="main_question_2">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis accusamus sapiente cupiditate eos deleniti dicta, natus fugiat vel provident harum neque? Aliquam in praesentium repudiandae at exercitationem rem odit consequatur. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Excepturi, facere dolor. Eligendi harum earum et sed soluta, provident corporis facilis voluptatem! Perferendis voluptatum eius in unde sint. Blanditiis, placeat numquam.</p>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col text-center">
                  <b>What Do You Think?</b>
                </div>
              </div>
              <div class="row justify-content-center m-2">
                <div style="border-radius: 5px; background-color: #D5EAFF;" class="col-sm-6 col-lg-6">
                  <div class="d-inline-flex align-items-center justify-content-start">
                    <div class="mr-2" id="user_img">
                      <div class="p-2"><img src="/static/img/concord_logo.png" style="height: 1.6em"></div>
                    </div>
                    <div class="p-2">
                      <div class="row" style="text-align: left; font-size: 0.8em; color: #555E66">GET TO KNOW</div>
                      <div class="row" style="text-align: left; font-size: 0.8em"><b>The other side of this opinion</b></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center p-2">
                <div class="col text-center">
                  <small>Download from Google Play Store</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid py-3 px-5" style="background-color: #292929; color: white;">
          <div class="d-none d-md-block">
            <div class="row d-flex flex-row justify-content-center py-4">
              <div class="col-12">
                <div class="row">
                  <div class="col-4">
                    <div class="footer-info-title mb-3">
                      Read 5 top stories only
                    </div>
                    <div class="footer-info-desc mb-5">
                      We'll only provide 5 top stories of the day, handpicked by us.
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="footer-info-title mb-3">
                      Vote and participate
                    </div>
                    <div class="footer-info-desc mb-5">
                      Every story can be voted upon as it will have a poll attached to it.
                    </div>
                  </div>
                  <div class="col-4">
                    <div class="footer-info-title mb-3">
                      Engage in discussion
                    </div>
                    <div class="footer-info-desc mb-5">
                      See the other side of your opinion by engaging with other people who voted differently.
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-12"><div class="footer-line"></div></div>
            </div>
          </div>
          
          <div class="row">
            <div class="col-6">
              <div class="d-flex flex-row justify-content-start align-items-center footer-concord">
                Concord
              </div>
            </div>
            <div class="col-6 d-flex align-items-center">
              <div class="d-flex flex-row justify-content-end align-items-center" style="width: 100%">
                <div class="pl-1 footer-about-us" onclick="window.open('./index.html')">About us</div> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-7">
              <p class="pt-1 footer-tagline"> 
                A new way to talk about news with people you disagree with
              </p>
            </div>
          </div>
        </div>

        <!-- MODAL -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body container">
                <div class="row justify-content-center align-items-center">
                  <p class="modal-dark col-12">To continue, you need to create an account on Concord.</p><br>
                  <a href="https://play.google.com/store/apps/details?id=io.sopo" target="_blank"><img src="/static/view_opinion/android.png" style="height: 33px; width: 111px; box-shadow: 0 2px 4px 0 rgba(0,0,0,0.5);" /></a>
                  <br><p class="mt-2 col-12 modal-light">Get 5 top stories of the day and opinions from both the sides</p>
                </div>
                <div class="row mt-3 px-3">
                  <div class="cancel mr-auto" data-dismiss="modal" aria-label="Close">Cancel</div>
                <div class="cancel ml-auto" onclick="$('#exampleModalCenter').modal('hide'); $('#iosModal').modal('show')">I'm an iOS user</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="iosModal" tabindex="-1" role="dialog" aria-labelledby="iosModel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body container">
                <div class="row justify-content-center align-items-center">
                  <p class="ios-modal-heading col-12">Get notified when the iOS app will be available</p><br>
                  <div class="col-12 row">
                      <form class="form-inline form-bac col-12" method='POST'>                     
                        <div class="col-12 row justify-content-center">
                          <input type="email" class="mt-1 form-control p-2 col-lg-7 col-sm-8" style="border-radius: 10px; border: 0px solid transparent; background-color: #EEE;" id="inputEmail" placeholder="Email ID" name="entry.1212323583" required>
                          <div id="contact_form" class="mt-1 form-submit-button notify-me d-flex justify-content-center align-items-center p-2 col-lg-4 col-sm-8 ml-1">Notify Me</div>
                        </div>
                        <input type="text" name="entry.1144014432" class="d-none" value="opinion" />
                      </form>
                  </div>
                  
                  <br><p class="mt-2 col-12 modal-light">Provide your email address so that you can get notified once the app is available. No spamming.</p>
                </div>
                <div class="row mt-3 px-3">
                  <div class="cancel mr-auto" data-dismiss="modal" aria-label="Close">Cancel</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="iosModel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-body container">
                <div class="row justify-content-center align-items-center">
                  <p class="ios-modal-heading col-12">We'll contact you soon.</p><br>
                  <div class="col-12 row justify-content-center">
                      <img src="/static/view_opinion/Bitmap Copy 2.png" />
                  </div>
                  
                  <br><p class="mt-2 col-12 modal-light">Your record has been saved.</p>
                </div>
                <div class="row mt-3 px-3">
                  <div class="cancel mr-auto" data-dismiss="modal" aria-label="Close">Cancel</div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <script src="/static/js/bootstrap/jquery.min.js"></script>
        <script src="/static/js/bootstrap/bootstrap.min.js"></script>
        <script>
        var sourceEntry = "opinion"
        var paramList = {}
        var mainInfo = {}

        var mainTitle = document.getElementById('main_title')
        var mainQuestion = document.getElementById('main_question')
        var voteStatus = document.getElementById('vote_status')
        var commentTitle = document.getElementById('comment_title')
        var mainText = document.getElementById('main_text')
        var mainQuestion2 = document.getElementById('main_question_2')
        var voteOptionText = document.getElementById('vote_status_text')
        var userImg = document.getElementById('user_img')
        var userName = document.getElementById('userName')
        var date = document.getElementById('date')
        var userImg2 = document.getElementById('user_img_2')
        var userName2 = document.getElementById('userName_2')
        var date2 = document.getElementById('date_2')
        var loader = document.getElementById("loader")
        var postData = document.getElementById("post-loader")
        var source = document.getElementById("source")
        var isRed = true

        function findGetParameter(parameterName) {
            var result = {},
            tmp = [];
            location.search
                .substr(1)
                .split("&")
                .forEach(function (item) {
                  tmp = item.split("=");
                  result[tmp[0]] = decodeURIComponent(tmp[1]);
                });
            return result;
        }
        
        function getTargetComment() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                resp = JSON.parse(xhttp.responseText);
                findTargetOpinion(resp, paramList['comment_id'])
                getQuestion()
              }
          };
          xhttp.open("GET", `https://concordapp.in/rest-api/polls/opinion/${paramList['poll_hash']}`, true);
          xhttp.send();
        }

        function getQuestion() {
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                // Typical action to be performed when the document is ready:
                resp = JSON.parse(xhttp.responseText);
                question = resp['question']
                mainInfo['question'] = question
                mainInfo['mainTitle'] = resp['url_meta']['title']
                mainInfo['poll_options'] = [resp['poll_options'][0]["option_text"],resp['poll_options'][1]["option_text"]] 
                mainInfo['url'] = resp['url_meta']['url']
                mainInfo['source'] = resp['url_meta']['source']
                so_opinions = resp['so_opinions']
                po_opinions = resp['po_opinions']
                console.log(so_opinions)
                for (let i = 0; i < so_opinions.length; i++) {
                    if (so_opinions[i]['uid'] == mainInfo['uid']) {
                        isRed = true
                        break
                    }
                }
                
                for (let i = 0; i < po_opinions.length; i++) {
                    if (po_opinions[i]['uid'] == mainInfo['uid']) {
                        isRed = false
                        break
                    }
                }
                displayFinalInfo()
              }
          };
          xhttp.open("GET", `https://concordapp.in/rest-api/polls/${paramList['poll_hash']}`, true);
          xhttp.send();
        }

        function findTargetOpinion(resp, comment_id) {
          toReturn = null 
          for (let i = 0; i < resp.length; i++) {
            if (resp[i].comment_id == comment_id) {
              curr = resp[i]
              mainInfo['name'] = curr['display_name']
              mainInfo['image'] = curr['image_url']
              mainInfo['text'] = curr['text']
              mainInfo['vote'] = curr['poll_vote']
              mainInfo['date'] = curr['date_shared']
              mainInfo['title'] = curr['title'] 
              mainInfo['uid'] = curr['uid']
            } 
            for (let j = 0; j < resp[i].comments.length; j++) {
              if (resp[i].comments[j].comment_id == comment_id) {
              curr = resp[i].comments[j]
              mainInfo['name'] = curr['display_name']
              mainInfo['image'] = curr['image_url']
              mainInfo['text'] = curr['text']
              mainInfo['vote'] = curr['poll_vote']
              mainInfo['date'] = curr['date_shared']
              mainInfo['title'] = curr['title']
              mainInfo['uid'] = curr['uid']
              break 
              } 
            }
          }
        }
        
        var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
        
        function displayFinalInfo() {
          mainQuestion.innerHTML = mainInfo['question']
          mainTitle.innerHTML = mainInfo['mainTitle']
//          if (mainInfo['vote'] == 1) {
            voteStatus.innerHTML = mainInfo['name'] + " voted " + "Blue"
//          }
          if (mainInfo['title'] != null) commentTitle.innerHTML = mainInfo['title']
          mainText.innerHTML = mainInfo['text']
          mainQuestion2.innerHTML = mainInfo['question']
          userImg.innerHTML = `<img src=${mainInfo['image']} style="width: 30px; height: 30px; border-radius: 15px;" />`
          userName.innerHTML = mainInfo['name']
          voteOptionText.innerHTML = `Voted for "<i>${mainInfo['poll_options'][mainInfo['vote']-1]}</i> "` 
          let d = new Date(mainInfo['date'])
          date.innerHTML = d.getDate() + " " + months[d.getMonth()]
          userImg2.innerHTML = userImg.innerHTML
          userName2.innerHTML = userName.innerHTML
          source.innerHTML = mainInfo['source']
          document.getElementById('go-to-news').addEventListener('click', () => {
            //window.location.href = mainInfo['url']
            window.open(mainInfo['url']);
          })
          if (isRed) {
            $('#voted_info').removeClass('voted_blue ml-auto').addClass('voted_red mr-auto')
            voteStatus.innerHTML = mainInfo['name'] + " voted " + "Red"
            $('#main_text_holder').removeClass('blue-text').addClass('red-text')
            $('.blue-bubble').removeClass('blue-bubble').addClass('red-bubble')
            $('#social-interaction').removeClass('social-interaction-blue').addClass('social-interaction-red')
            $('.blue-empty-bubble').removeClass('blue-empty-bubble mr-auto').addClass('red-empty-bubble ml-auto')
          }
          postData.style.display = 'block'
          loader.style.display = 'none'
          loader.remove()
        }

        paramList = findGetParameter("Vasu")
        getTargetComment()
        
      </script>
    <script>
      var formData
      let formSubmitLink = "https://docs.google.com/forms/d/e/1FAIpQLSdLiaWAytMKyIMXdenv8o2BkSiu0RGqklV3cf04P7zfOsdvsA/formResponse"
      //let formSubmitLink = "https://www.elformo.com/forms/01d6132f-13c3-420a-b6c8-5947c2fcf75f"
      let contact_form = document.querySelector("form")
      //let form_success = document.getElementById("form-success-msg")
      let formDIV = document.querySelector("div#contact_form")
      formDIV.addEventListener('click', (event) => {
          event.preventDefault()
          formData = new FormData(contact_form) 
          var xhttp = new XMLHttpRequest();
          xhttp.onreadystatechange = function() {
              //contact_form.classList.add('d-none')
              //form_success.classList.remove('d-none')
              $('#iosModal').modal('hide')
              $('#successModal').modal('show')
              if (this.readyState == 4 && this.status == 200) {
              //contact_form.classList.add('d-none')
              //form_success.classList.remove('d-none')
              }
          };
          xhttp.open("POST", formSubmitLink, true);
          xhttp.send(formData);
      })
    </script>  
  </body>
</html>
