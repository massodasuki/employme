
@extends('layouts.app')

@section('content')
      <!--header-->
      <div class="topic">
          <div class="container">
            <div class="col-md-8">
            <h3>Registration</h3>
            <h4>Register and Work</h4>
          </div>
        </div>
      </div>

    <!--documents: http://vegibit.com/create-form-elements-using-laravel-and-bootstrap-->
      

 
    {!! Form::open(['action' => 'EmployeeController@register', 'method' => 'POST',  'class' => 'form-horizontal']) !!}
 
    <fieldset>


                <!-- Name -->
        <div class="form-group">
            {!! Form::label('name', 'Name:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-8">
                {!! Form::text('name', $value = null, ['class' => 'form-control', 'placeholder' => 'First Last']) !!}
            </div>
        </div>
 
         <!-- Passport -->
        <div class="form-group">
            {!! Form::label('passport', 'Passport:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-8">
                {!! Form::text('passport', $value = null, ['class' => 'form-control', 'placeholder' => 'Passport']) !!}
            </div>
        </div>
 
         <!-- Date Of Birth -->
        <div class="form-group">
            {!! Form::label('dob', 'Date of Birth:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-8">
                {!! Form::text('dob', $value = null, ['class' => 'form-control', 'placeholder' => 'Date of Birth']) !!}
            </div>
        </div>
 
         <!-- Gender -->
        <div class="form-group">
            {!! Form::label('gender', 'Gender:', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-8">
                {!! Form::text('gender', $value = null, ['class' => 'form-control', 'placeholder' => 'Gender']) !!}
            </div>
        </div>
 
        <!-- Text Area -->
        <div class="form-group">
            {!! Form::label('address', 'Address', ['class' => 'col-lg-2 control-label']) !!}
            <div class="col-lg-8">
                {!! Form::textarea('address', $value = null, ['class' => 'form-control', 'rows' => 3]) !!}
                <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
            </div>
        </div>
 
        <!-- Submit Button -->
        <div class="form-group">
            <div class="col-lg-8 col-lg-offset-2">
                {!! Form::submit('Submit', ['class' => 'btn btn-lg btn-info pull-right'] ) !!}
            </div>
        </div>
 
    </fieldset>
 
    {!! Form::close()  !!}
 



      <!-- Forms
      ================================================== -->

    <!--footer-->
    <div class="site-footer">
      <div class="container">
        <div class="download">
          <span class="download__infos">You simply have to <b>try it</b>.</span>&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn btn-primary" href="https://github.com/bootflat/bootflat.github.io/archive/master.zip">Download Bootflat</a>&nbsp;&nbsp;&nbsp;&nbsp;
          <a class="btn" href="documentation.html">Read the Documentation</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <!-- SmartAddon BEGIN -->
            <script type="text/javascript">
            (function() {
            var s=document.createElement('script');s.type='text/javascript';s.async = true;
            s.src='http://s1'+'.smartaddon.com/share_addon.js';
            var j =document.getElementsByTagName('script')[0];j.parentNode.insertBefore(s,j);
            })();
            </script>

            <a href="http://www.smartaddon.com/?share" title="Share Button" onclick="return sa_tellafriend('','bookmarks')"><img alt="Share" src="http://bootflat.github.io/img/share.gif" border="0" /></a>
            <!-- SmartAddon END -->
        </div>
        <hr class="dashed" />
        <div class="row">
          <div class="col-md-4">
            <h3>Get involved</h3>
            <p>Bootflat is hosted on <a href="https://github.com/bootflat/bootflat.github.io" target="_blank" rel="external nofollow">GitHub</a> and open for everyone to contribute. Please give us some feedback and join the development!</p>
          </div>
          <div class="col-md-4">
            <h3>Contribute</h3>
            <p>You want to help us and participate in the development or the documentation? Just fork Bootflat on <a href="https://github.com/Bootflat/bootflat.github.io" target="_blank" rel="external nofollow">GitHub</a> and send us a pull request.</p>
          </div>
          <div class="col-md-4">
            <h3>Found a bug?</h3>
            <p>Open a <a href="https://github.com/bootflat/bootflat.github.io/issues" target="_blank" rel="external nofollow">new issue</a> on GitHub. Please search for existing issues first and make sure to include all relevant information.</p>
          </div>
        </div>
        <hr class="dashed" />
        <div class="row">
          <div class="col-md-6">
            <h3>Talk to us</h3>
            <ul>
              <li>Tweet us at <a href="https://twitter.com/flathemes" target="_blank">@flathemes</a>&nbsp;&nbsp;&nbsp;&nbsp;Email us at <span class="connect">info@flathemes.com</span></li>
              <li>
                <a title="Twitter" href="https://twitter.com/flathemes" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe121"></i></a>
                <a title="Facebook" href="https://www.facebook.com/Flathemes" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe10b"></i></a>
                <a title="Google+" href="https://plus.google.com/u/0/" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe110"></i></a>
                <a title="Github" href="https://github.com/bootflat/bootflat.github.io" target="_blank" rel="external nofollow"><i class="icon" data-icon="&#xe10e"></i></a>
              </li>
            </ul>
          </div>
          <div class="col-md-6">
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
            <h3 style="margin-bottom: 15px;">Newsletter</h3>
            <form action="http://flathemes.us3.list-manage.com/subscribe/post?u=faba9adaea2b85dc9a5c496bd&amp;id=acd08a1b0f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <input style="margin-bottom: 10px;" type="email" value="" name="EMAIL" class="email form-control" id="mce-EMAIL" placeholder="email address" required>
                <span class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary"></span>
            </form>
            </div>
            <!--End mc_embed_signup-->
          </div>
        </div>
        <hr class="dashed" />
        <div class="copyright clearfix">
          <p><b>Bootflat</b>&nbsp;&nbsp;&nbsp;&nbsp;<a href="getting-started.html">Getting Started</a>&nbsp;&bull;&nbsp;<a href="documentation.html">Documentation</a>&nbsp;&bull;&nbsp;<a href="free-psd.html">Free PSD</a>&nbsp;&bull;&nbsp;<a href="color-picker.html">Color Picker</a></p>
          <p>&copy; 2014 <a href="http://www.flathemes.com" target="_blank">FLATHEMES</a>, Inc. All rights reserved. &nbsp;&nbsp;Code licensed under <a href="http://opensource.org/licenses/mit-license.html" target="_blank" rel="external nofollow">MIT License</a>, documentation under <a href="http://creativecommons.org/licenses/by/3.0/" rel="external nofollow">CC BY 3.0</a>.</p>
        </div>
      </div>
    </div>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-48721682-1', 'bootflat.github.io');
    ga('require', 'displayfeatures');
      ga('send', 'pageview');

    </script>
  </body>
</html>
@endsection