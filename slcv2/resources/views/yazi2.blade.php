
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!--
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google!
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>direct chat box - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
    	body{
    margin-top:20px;
    background:#eee;
}
.box {
    position: relative;
    border-radius: 3px;
    background: #ffffff;
    border-top: 3px solid #d2d6de;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
}
.box.box-primary {
    border-top-color: #3c8dbc;
}
.box.box-info {
    border-top-color: #00c0ef;
}
.box.box-danger {
    border-top-color: #dd4b39;
}
.box.box-warning {
    border-top-color: #f39c12;
}
.box.box-success {
    border-top-color: #00a65a;
}
.box.box-default {
    border-top-color: #d2d6de;
}
.box.collapsed-box .box-body, .box.collapsed-box .box-footer {
    display: none;
}
.box .nav-stacked>li {
    border-bottom: 1px solid #f4f4f4;
    margin: 0;
}
.box .nav-stacked>li:last-of-type {
    border-bottom: none;
}
.box.height-control .box-body {
    max-height: 300px;
    overflow: auto;
}
.box .border-right {
    border-right: 1px solid #f4f4f4;
}
.box .border-left {
    border-left: 1px solid #f4f4f4;
}
.box.box-solid {
    border-top: 0;
}
.box.box-solid>.box-header .btn.btn-default {
    background: transparent;
}
.box.box-solid>.box-header .btn:hover, .box.box-solid>.box-header a:hover {
    background: rgba(0, 0, 0, 0.1);
}
.box.box-solid.box-default {
    border: 1px solid #d2d6de;
}
.box.box-solid.box-default>.box-header {
    color: #444;
    background: #d2d6de;
    background-color: #d2d6de;
}
.box.box-solid.box-default>.box-header a, .box.box-solid.box-default>.box-header .btn {
    color: #444;
}
.box.box-solid.box-primary {
    border: 1px solid #3c8dbc;
}
.box.box-solid.box-primary>.box-header {
    color: #fff;
    background: #3c8dbc;
    background-color: #3c8dbc;
}
.box.box-solid.box-primary>.box-header a, .box.box-solid.box-primary>.box-header .btn {
    color: #fff;
}
.box.box-solid.box-info {
    border: 1px solid #00c0ef;
}
.box.box-solid.box-info>.box-header {
    color: #fff;
    background: #00c0ef;
    background-color: #00c0ef;
}
.box.box-solid.box-info>.box-header a, .box.box-solid.box-info>.box-header .btn {
    color: #fff;
}
.box.box-solid.box-danger {
    border: 1px solid #dd4b39;
}
.box.box-solid.box-danger>.box-header {
    color: #fff;
    background: #dd4b39;
    background-color: #dd4b39;
}
.box.box-solid.box-danger>.box-header a, .box.box-solid.box-danger>.box-header .btn {
    color: #fff;
}
.box.box-solid.box-warning {
    border: 1px solid #f39c12;
}
.box.box-solid.box-warning>.box-header {
    color: #fff;
    background: #f39c12;
    background-color: #f39c12;
}
.box.box-solid.box-warning>.box-header a, .box.box-solid.box-warning>.box-header .btn {
    color: #fff;
}
.box.box-solid.box-success {
    border: 1px solid #00a65a;
}
.box.box-solid.box-success>.box-header {
    color: #fff;
    background: #00a65a;
    background-color: #00a65a;
}
.box.box-solid.box-success>.box-header a, .box.box-solid.box-success>.box-header .btn {
    color: #fff;
}
.box.box-solid>.box-header>.box-tools .btn {
    border: 0;
    box-shadow: none;
}
.box.box-solid[class*='bg']>.box-header {
    color: #fff;
}
.box .box-group>.box {
    margin-bottom: 5px;
}
.box .knob-label {
    text-align: center;
    color: #333;
    font-weight: 100;
    font-size: 12px;
    margin-bottom: 0.3em;
}
.box>.overlay, .overlay-wrapper>.overlay, .box>.loading-img, .overlay-wrapper>.loading-img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%}
.box .overlay, .overlay-wrapper .overlay {
    z-index: 50;
    background: rgba(255, 255, 255, 0.7);
    border-radius: 3px;
}
.box .overlay>.fa, .overlay-wrapper .overlay>.fa {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-left: -15px;
    margin-top: -15px;
    color: #000;
    font-size: 30px;
}
.box .overlay.dark, .overlay-wrapper .overlay.dark {
    background: rgba(0, 0, 0, 0.5);
}
.box-header:before, .box-body:before, .box-footer:before, .box-header:after, .box-body:after, .box-footer:after {
    content: " ";
    display: table;
}
.box-header:after, .box-body:after, .box-footer:after {
    clear: both;
}
.box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: relative;
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.collapsed-box .box-header.with-border {
    border-bottom: none;
}
.box-header>.fa, .box-header>.glyphicon, .box-header>.ion, .box-header .box-title {
    display: inline-block;
    font-size: 18px;
    margin: 0;
    line-height: 1;
}
.box-header>.fa, .box-header>.glyphicon, .box-header>.ion {
    margin-right: 5px;
}
.box-header>.box-tools {
    position: absolute;
    right: 10px;
    top: 5px;
}
.box-header>.box-tools [data-toggle="tooltip"] {
    position: relative;
}
.box-header>.box-tools.pull-right .dropdown-menu {
    right: 0;
    left: auto;
}
.btn-box-tool {
    padding: 5px;
    font-size: 12px;
    background: transparent;
    color: #97a0b3;
}
.open .btn-box-tool, .btn-box-tool:hover {
    color: #606c84;
}
.btn-box-tool.btn:active {
    box-shadow: none;
}
.box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;
}
.no-header .box-body {
    border-top-right-radius: 3px;
    border-top-left-radius: 3px;
}
.box-body>.table {
    margin-bottom: 0;
}
.box-body .fc {
    margin-top: 5px;
}
.box-body .full-width-chart {
    margin: -19px;
}
.box-body.no-padding .full-width-chart {
    margin: -9px;
}
.box-body .box-pane {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 3px;
}
.box-body .box-pane-right {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 0;
}
.box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
}
.direct-chat .box-body {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    position: relative;
    overflow-x: hidden;
    padding: 0;
}
.direct-chat.chat-pane-open .direct-chat-contacts {
    -webkit-transform: translate(0,  0);
    -ms-transform: translate(0,  0);
    -o-transform: translate(0,  0);
    transform: translate(0,  0);
}
.direct-chat-messages {
    -webkit-transform: translate(0,  0);
    -ms-transform: translate(0,  0);
    -o-transform: translate(0,  0);
    transform: translate(0,  0);
    padding: 10px;
    height: 250px;
    overflow: auto;
    height:auto;
}
.direct-chat-msg, .direct-chat-text {
    display: block;
}
.direct-chat-msg {
    margin-bottom: 10px;
}
.direct-chat-msg:before, .direct-chat-msg:after {
    content: " ";
    display: table;
}
.direct-chat-msg:after {
    clear: both;
}
.direct-chat-messages, .direct-chat-contacts {
    -webkit-transition: -webkit-transform .5s ease-in-out;
    -moz-transition: -moz-transform .5s ease-in-out;
    -o-transition: -o-transform .5s ease-in-out;
    transition: transform .5s ease-in-out;
}
.direct-chat-text {
    border-radius: 5px;
    position: relative;
    padding: 5px 10px;
    background: #d2d6de;
    border: 1px solid #d2d6de;
    margin: 5px 0 0 50px;
    color: #444;
}
.direct-chat-text:after, .direct-chat-text:before {
    position: absolute;
    right: 100%;
    top: 15px;
    border: solid transparent;
    border-right-color: #d2d6de;
    content: ' ';
    height: 0;
    width: 0;
    pointer-events: none;
}
.direct-chat-text:after {
    border-width: 5px;
    margin-top: -5px;
}
.direct-chat-text:before {
    border-width: 6px;
    margin-top: -6px;
}
.right .direct-chat-text {
    margin-right: 50px;
    margin-left: 0;
}
.right .direct-chat-text:after, .right .direct-chat-text:before {
    right: auto;
    left: 100%;
    border-right-color: transparent;
    border-left-color: #d2d6de;
}
.direct-chat-img {
    border-radius: 50%;
    float: left;
    width: 40px;
    height: 40px;
}
.right .direct-chat-img {
    float: right;
}
.direct-chat-info {
    display: block;
    margin-bottom: 2px;
    font-size: 12px;
}
.direct-chat-name {
    font-weight: 600;
}
.direct-chat-timestamp {
    color: #999;
}
.direct-chat-contacts-open .direct-chat-contacts {
    -webkit-transform: translate(0,  0);
    -ms-transform: translate(0,  0);
    -o-transform: translate(0,  0);
    transform: translate(0,  0);
}
.direct-chat-contacts {
    -webkit-transform: translate(101%,  0);
    -ms-transform: translate(101%,  0);
    -o-transform: translate(101%,  0);
    transform: translate(101%,  0);
    position: absolute;
    top: 0;
    bottom: 0;
    height: 250px;
    width: 100%;
    background: #222d32;
    color: #fff;
    overflow: auto;
}
.contacts-list>li {
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
    padding: 10px;
    margin: 0;
}
.contacts-list>li:before, .contacts-list>li:after {
    content: " ";
    display: table;
}
.contacts-list>li:after {
    clear: both;
}
.contacts-list>li:last-of-type {
    border-bottom: none;
}
.contacts-list-img {
    border-radius: 50%;
    width: 40px;
    float: left;
}
.contacts-list-info {
    margin-left: 45px;
    color: #fff;
}
.contacts-list-name, .contacts-list-status {
    display: block;
}
.contacts-list-name {
    font-weight: 600;
}
.contacts-list-status {
    font-size: 12px;
}
.contacts-list-date {
    color: #aaa;
    font-weight: normal;
}
.contacts-list-msg {
    color: #999;
}
.direct-chat-danger .right>.direct-chat-text {
    background: #dd4b39;
    border-color: #dd4b39;
    color: #fff;
}
.direct-chat-danger .right>.direct-chat-text:after, .direct-chat-danger .right>.direct-chat-text:before {
    border-left-color: #dd4b39;
}
.direct-chat-primary .right>.direct-chat-text {
    background: #3c8dbc;
    border-color: #3c8dbc;
    color: #fff;
}
.direct-chat-primary .right>.direct-chat-text:after, .direct-chat-primary .right>.direct-chat-text:before {
    border-left-color: #3c8dbc;
}
.direct-chat-warning .right>.direct-chat-text {
    background: #f39c12;
    border-color: #f39c12;
    color: #fff;
}
.direct-chat-warning .right>.direct-chat-text:after, .direct-chat-warning .right>.direct-chat-text:before {
    border-left-color: #f39c12;
}
.direct-chat-info .right>.direct-chat-text {
    background: #00c0ef;
    border-color: #00c0ef;
    color: #fff;
}
.direct-chat-info .right>.direct-chat-text:after, .direct-chat-info .right>.direct-chat-text:before {
    border-left-color: #00c0ef;
}
.direct-chat-success .right>.direct-chat-text {
    background: #00a65a;
    border-color: #00a65a;
    color: #fff;
}
.direct-chat-success .right>.direct-chat-text:after, .direct-chat-success .right>.direct-chat-text:before {
    border-left-color: #00a65a;
}
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="col-md-4">
      <!-- DIRECT CHAT PRIMARY -->
      <div class="box box-primary direct-chat direct-chat-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Direct Chat</h3>

          <div class="box-tools pull-right">
            <span data-toggle="tooltip" title="" class="badge bg-light-blue" data-original-title="3 New Messages">3</span>
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
              <i class="fa fa-comments"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <!-- Conversations are loaded here -->
          <div class="direct-chat-messages">
            <!-- Message. Default to the left -->
            <div class="direct-chat-msg">
              <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-left">Alexander Pierce</span>
                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
              </div>
              <!-- /.direct-chat-info -->
              <img class="direct-chat-img" src="http://bootdey.com/img/Content/user_1.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                Is this template really for free? That's unbelievable!
              </div>
              <!-- /.direct-chat-text -->
            </div>

            <?php

              foreach ($yazilar as $yazi)
              {

                $ad=$yazi->adi;
                $tarih=$yazi->tarih;
                $mesaj=$yazi->yazi;

                echo '<div class="direct-chat-msg"><div class="direct-chat-info clearfix">';
                echo '<span class="direct-chat-name pull-left">'.$ad.'</span>';
                echo '<span class="direct-chat-timestamp pull-right">'.$tarih.'</span>';
                echo '</div>';
                echo '<img class="direct-chat-img" src="http://bootdey.com/img/Content/user_1.jpg" alt="Message User Image">';
                echo '<div class="direct-chat-text">';
                echo $mesaj;
                echo '</div></div>';
              }





            ?>



            <!-- Message to the right -->
            <div class="direct-chat-msg right">
              <div class="direct-chat-info clearfix">
                <span class="direct-chat-name pull-right">Sarah Bullock</span>
                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
              </div>
              <!-- /.direct-chat-info -->
              <img class="direct-chat-img" src="http://bootdey.com/img/Content/user_2.jpg" alt="Message User Image"><!-- /.direct-chat-img -->
              <div class="direct-chat-text">
                You better believe it!
              </div>
              <!-- /.direct-chat-text -->
            </div>
            <!-- /.direct-chat-msg -->
          </div>
          <!--/.direct-chat-messages-->

          <!-- Contacts are loaded here -->
          <div class="direct-chat-contacts">
            <ul class="contacts-list">
              <li>
                <a href="#">
                  <img class="contacts-list-img" src="http://bootdey.com/img/Content/user_1.jpg">

                  <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Count Dracula
                          <small class="contacts-list-date pull-right">2/28/2015</small>
                        </span>
                    <span class="contacts-list-msg">How have you been? I was...</span>
                  </div>
                  <!-- /.contacts-list-info -->
                </a>
              </li>
              <!-- End Contact Item -->
            </ul>
            <!-- /.contatcts-list -->
          </div>
          <!-- /.direct-chat-pane -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <form action="#" method="post">
            <div class="input-group">
              <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary btn-flat">Send</button>
                  </span>
            </div>
          </form>
        </div>
        <!-- /.box-footer-->
      </div>
      <!--/.direct-chat -->
    </div>


</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>


</body>
