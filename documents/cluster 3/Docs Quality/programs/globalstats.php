<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
      W3Counter: Global Web Stats          </title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link href="/css/2014-website.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://code.jquery.com/ui/1.10.4/jquery-ui.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

        <link href="/css/globalstats.css" rel="stylesheet">
    <script src="/js/highcharts.js"></script>
    <script src="/js/jquery.slimscroll.js" type="text/javascript"></script>
    
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>

    <script type="text/javascript">
    var im_domain = 'awio';
    var im_project_id = 2;
    (function(e,t){window._improvely=[];var n=e.getElementsByTagName("script")[0];var r=e.createElement("script");r.type="text/javascript";r.src="https://"+im_domain+".iljmp.com/improvely.js";r.async=true;n.parentNode.insertBefore(r,n);if(typeof t.init=="undefined"){t.init=function(e,t){window._improvely.push(["init",e,t])};t.goal=function(e){window._improvely.push(["goal",e])};t.label=function(e){window._improvely.push(["label",e])}}window.improvely=t;t.init(im_domain,im_project_id)})(document,window.improvely||[])
    </script>
    <meta name="google-site-verification" content="0ZPavT651boyurYXRIqXuWxiVPbA9JxO4cj1mFFJu2Q" />  

  </head>

  <body id="body">
    <div id="wrap">

      <div class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img style="height: 40px" src="/images/logo_transparent.png" /></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/deals">Deals for Designers</a></li>
              <li><a href="/globalstats.php">Global Market Share</a></li>
              <li class="active"><a href="/signup">Free Signup</a></li>
              <li><a href="/stats">Log In</a></li>
            </ul>
          </div>
        </div>
      </div>
        
      <div style="background: #c1deef">
    <div class="container main">
        <div class="row">
            <div class="col-md-8 hidden-sm hidden-xs" style="padding: 20px 15px">

                <h1 style="margin: 0; font-weight: bold; font-size: 24px">August 2015 Market Share</h1>

            </div>
            <div class="col-xs-12 col-sm-12 hidden-lg hidden-md" style="padding: 15px 0; text-align: right">
                
                <form action="/globalstats.php" method="get">
                View archived reports: 
                <select name="date" id="date" onChange="window.document.location = this.value" style="width: 200px; float: none; padding: 6px 12px; border: 1px solid #ccc; border-radius: 4px">
                <option value='/globalstats.php?year=2015&month=8' selected='selected'>August 2015</option><option value='/globalstats.php?year=2015&month=7'>July 2015</option><option value='/globalstats.php?year=2015&month=6'>June 2015</option><option value='/globalstats.php?year=2015&month=5'>May 2015</option><option value='/globalstats.php?year=2015&month=4'>April 2015</option><option value='/globalstats.php?year=2015&month=3'>March 2015</option><option value='/globalstats.php?year=2015&month=2'>February 2015</option><option value='/globalstats.php?year=2015&month=1'>January 2015</option><option value='/globalstats.php?year=2014&month=12'>December 2014</option><option value='/globalstats.php?year=2014&month=11'>November 2014</option><option value='/globalstats.php?year=2014&month=10'>October 2014</option><option value='/globalstats.php?year=2014&month=9'>September 2014</option><option value='/globalstats.php?year=2014&month=8'>August 2014</option><option value='/globalstats.php?year=2014&month=7'>July 2014</option><option value='/globalstats.php?year=2014&month=6'>June 2014</option><option value='/globalstats.php?year=2014&month=5'>May 2014</option><option value='/globalstats.php?year=2014&month=4'>April 2014</option><option value='/globalstats.php?year=2014&month=3'>March 2014</option><option value='/globalstats.php?year=2014&month=2'>February 2014</option><option value='/globalstats.php?year=2014&month=1'>January 2014</option><option value='/globalstats.php?year=2013&month=12'>December 2013</option><option value='/globalstats.php?year=2013&month=11'>November 2013</option><option value='/globalstats.php?year=2013&month=10'>October 2013</option><option value='/globalstats.php?year=2013&month=9'>September 2013</option><option value='/globalstats.php?year=2013&month=8'>August 2013</option><option value='/globalstats.php?year=2013&month=7'>July 2013</option><option value='/globalstats.php?year=2013&month=6'>June 2013</option><option value='/globalstats.php?year=2013&month=5'>May 2013</option><option value='/globalstats.php?year=2013&month=4'>April 2013</option><option value='/globalstats.php?year=2013&month=3'>March 2013</option><option value='/globalstats.php?year=2013&month=2'>February 2013</option><option value='/globalstats.php?year=2013&month=1'>January 2013</option><option value='/globalstats.php?year=2012&month=12'>December 2012</option><option value='/globalstats.php?year=2012&month=11'>November 2012</option><option value='/globalstats.php?year=2012&month=10'>October 2012</option><option value='/globalstats.php?year=2012&month=9'>September 2012</option><option value='/globalstats.php?year=2012&month=8'>August 2012</option><option value='/globalstats.php?year=2012&month=7'>July 2012</option><option value='/globalstats.php?year=2012&month=6'>June 2012</option><option value='/globalstats.php?year=2012&month=5'>May 2012</option><option value='/globalstats.php?year=2012&month=4'>April 2012</option><option value='/globalstats.php?year=2012&month=3'>March 2012</option><option value='/globalstats.php?year=2012&month=2'>February 2012</option><option value='/globalstats.php?year=2012&month=1'>January 2012</option><option value='/globalstats.php?year=2011&month=12'>December 2011</option><option value='/globalstats.php?year=2011&month=11'>November 2011</option><option value='/globalstats.php?year=2011&month=10'>October 2011</option><option value='/globalstats.php?year=2011&month=9'>September 2011</option><option value='/globalstats.php?year=2011&month=8'>August 2011</option><option value='/globalstats.php?year=2011&month=7'>July 2011</option><option value='/globalstats.php?year=2011&month=6'>June 2011</option><option value='/globalstats.php?year=2011&month=5'>May 2011</option><option value='/globalstats.php?year=2011&month=4'>April 2011</option><option value='/globalstats.php?year=2011&month=3'>March 2011</option><option value='/globalstats.php?year=2011&month=2'>February 2011</option><option value='/globalstats.php?year=2011&month=1'>January 2011</option><option value='/globalstats.php?year=2010&month=12'>December 2010</option><option value='/globalstats.php?year=2010&month=11'>November 2010</option><option value='/globalstats.php?year=2010&month=10'>October 2010</option><option value='/globalstats.php?year=2010&month=9'>September 2010</option><option value='/globalstats.php?year=2010&month=8'>August 2010</option><option value='/globalstats.php?year=2010&month=7'>July 2010</option><option value='/globalstats.php?year=2010&month=6'>June 2010</option><option value='/globalstats.php?year=2010&month=5'>May 2010</option><option value='/globalstats.php?year=2010&month=4'>April 2010</option><option value='/globalstats.php?year=2010&month=3'>March 2010</option><option value='/globalstats.php?year=2010&month=2'>February 2010</option><option value='/globalstats.php?year=2010&month=1'>January 2010</option><option value='/globalstats.php?year=2009&month=12'>December 2009</option><option value='/globalstats.php?year=2009&month=11'>November 2009</option><option value='/globalstats.php?year=2009&month=10'>October 2009</option><option value='/globalstats.php?year=2009&month=9'>September 2009</option><option value='/globalstats.php?year=2009&month=8'>August 2009</option><option value='/globalstats.php?year=2009&month=7'>July 2009</option><option value='/globalstats.php?year=2009&month=6'>June 2009</option><option value='/globalstats.php?year=2009&month=5'>May 2009</option><option value='/globalstats.php?year=2009&month=4'>April 2009</option><option value='/globalstats.php?year=2009&month=3'>March 2009</option><option value='/globalstats.php?year=2009&month=2'>February 2009</option><option value='/globalstats.php?year=2009&month=1'>January 2009</option><option value='/globalstats.php?year=2008&month=12'>December 2008</option><option value='/globalstats.php?year=2008&month=11'>November 2008</option><option value='/globalstats.php?year=2008&month=10'>October 2008</option><option value='/globalstats.php?year=2008&month=9'>September 2008</option><option value='/globalstats.php?year=2008&month=8'>August 2008</option><option value='/globalstats.php?year=2008&month=7'>July 2008</option><option value='/globalstats.php?year=2008&month=6'>June 2008</option><option value='/globalstats.php?year=2008&month=5'>May 2008</option><option value='/globalstats.php?year=2008&month=4'>April 2008</option><option value='/globalstats.php?year=2008&month=3'>March 2008</option><option value='/globalstats.php?year=2008&month=2'>February 2008</option><option value='/globalstats.php?year=2008&month=1'>January 2008</option><option value='/globalstats.php?year=2007&month=12'>December 2007</option><option value='/globalstats.php?year=2007&month=11'>November 2007</option><option value='/globalstats.php?year=2007&month=10'>October 2007</option><option value='/globalstats.php?year=2007&month=9'>September 2007</option><option value='/globalstats.php?year=2007&month=8'>August 2007</option><option value='/globalstats.php?year=2007&month=7'>July 2007</option><option value='/globalstats.php?year=2007&month=6'>June 2007</option><option value='/globalstats.php?year=2007&month=5'>May 2007</option>                </select>
                </form>

            </div>
        </div>
    </div>
</div>

<div style="background: #edece4; padding-top: 20px">
    <div class="container main">
        <div class="row">

            <div class="col-md-3 hidden-sm hidden-xs">
                             
                <div class="scroller">   
                    <div class="list-group" style="margin: 0 8px 0 0">
                    <a href='/globalstats.php?year=2015&month=8' class='list-group-item active'>August 2015</a><a href='/globalstats.php?year=2015&month=7' class='list-group-item'>July 2015</a><a href='/globalstats.php?year=2015&month=6' class='list-group-item'>June 2015</a><a href='/globalstats.php?year=2015&month=5' class='list-group-item'>May 2015</a><a href='/globalstats.php?year=2015&month=4' class='list-group-item'>April 2015</a><a href='/globalstats.php?year=2015&month=3' class='list-group-item'>March 2015</a><a href='/globalstats.php?year=2015&month=2' class='list-group-item'>February 2015</a><a href='/globalstats.php?year=2015&month=1' class='list-group-item'>January 2015</a><a href='/globalstats.php?year=2014&month=12' class='list-group-item'>December 2014</a><a href='/globalstats.php?year=2014&month=11' class='list-group-item'>November 2014</a><a href='/globalstats.php?year=2014&month=10' class='list-group-item'>October 2014</a><a href='/globalstats.php?year=2014&month=9' class='list-group-item'>September 2014</a><a href='/globalstats.php?year=2014&month=8' class='list-group-item'>August 2014</a><a href='/globalstats.php?year=2014&month=7' class='list-group-item'>July 2014</a><a href='/globalstats.php?year=2014&month=6' class='list-group-item'>June 2014</a><a href='/globalstats.php?year=2014&month=5' class='list-group-item'>May 2014</a><a href='/globalstats.php?year=2014&month=4' class='list-group-item'>April 2014</a><a href='/globalstats.php?year=2014&month=3' class='list-group-item'>March 2014</a><a href='/globalstats.php?year=2014&month=2' class='list-group-item'>February 2014</a><a href='/globalstats.php?year=2014&month=1' class='list-group-item'>January 2014</a><a href='/globalstats.php?year=2013&month=12' class='list-group-item'>December 2013</a><a href='/globalstats.php?year=2013&month=11' class='list-group-item'>November 2013</a><a href='/globalstats.php?year=2013&month=10' class='list-group-item'>October 2013</a><a href='/globalstats.php?year=2013&month=9' class='list-group-item'>September 2013</a><a href='/globalstats.php?year=2013&month=8' class='list-group-item'>August 2013</a><a href='/globalstats.php?year=2013&month=7' class='list-group-item'>July 2013</a><a href='/globalstats.php?year=2013&month=6' class='list-group-item'>June 2013</a><a href='/globalstats.php?year=2013&month=5' class='list-group-item'>May 2013</a><a href='/globalstats.php?year=2013&month=4' class='list-group-item'>April 2013</a><a href='/globalstats.php?year=2013&month=3' class='list-group-item'>March 2013</a><a href='/globalstats.php?year=2013&month=2' class='list-group-item'>February 2013</a><a href='/globalstats.php?year=2013&month=1' class='list-group-item'>January 2013</a><a href='/globalstats.php?year=2012&month=12' class='list-group-item'>December 2012</a><a href='/globalstats.php?year=2012&month=11' class='list-group-item'>November 2012</a><a href='/globalstats.php?year=2012&month=10' class='list-group-item'>October 2012</a><a href='/globalstats.php?year=2012&month=9' class='list-group-item'>September 2012</a><a href='/globalstats.php?year=2012&month=8' class='list-group-item'>August 2012</a><a href='/globalstats.php?year=2012&month=7' class='list-group-item'>July 2012</a><a href='/globalstats.php?year=2012&month=6' class='list-group-item'>June 2012</a><a href='/globalstats.php?year=2012&month=5' class='list-group-item'>May 2012</a><a href='/globalstats.php?year=2012&month=4' class='list-group-item'>April 2012</a><a href='/globalstats.php?year=2012&month=3' class='list-group-item'>March 2012</a><a href='/globalstats.php?year=2012&month=2' class='list-group-item'>February 2012</a><a href='/globalstats.php?year=2012&month=1' class='list-group-item'>January 2012</a><a href='/globalstats.php?year=2011&month=12' class='list-group-item'>December 2011</a><a href='/globalstats.php?year=2011&month=11' class='list-group-item'>November 2011</a><a href='/globalstats.php?year=2011&month=10' class='list-group-item'>October 2011</a><a href='/globalstats.php?year=2011&month=9' class='list-group-item'>September 2011</a><a href='/globalstats.php?year=2011&month=8' class='list-group-item'>August 2011</a><a href='/globalstats.php?year=2011&month=7' class='list-group-item'>July 2011</a><a href='/globalstats.php?year=2011&month=6' class='list-group-item'>June 2011</a><a href='/globalstats.php?year=2011&month=5' class='list-group-item'>May 2011</a><a href='/globalstats.php?year=2011&month=4' class='list-group-item'>April 2011</a><a href='/globalstats.php?year=2011&month=3' class='list-group-item'>March 2011</a><a href='/globalstats.php?year=2011&month=2' class='list-group-item'>February 2011</a><a href='/globalstats.php?year=2011&month=1' class='list-group-item'>January 2011</a><a href='/globalstats.php?year=2010&month=12' class='list-group-item'>December 2010</a><a href='/globalstats.php?year=2010&month=11' class='list-group-item'>November 2010</a><a href='/globalstats.php?year=2010&month=10' class='list-group-item'>October 2010</a><a href='/globalstats.php?year=2010&month=9' class='list-group-item'>September 2010</a><a href='/globalstats.php?year=2010&month=8' class='list-group-item'>August 2010</a><a href='/globalstats.php?year=2010&month=7' class='list-group-item'>July 2010</a><a href='/globalstats.php?year=2010&month=6' class='list-group-item'>June 2010</a><a href='/globalstats.php?year=2010&month=5' class='list-group-item'>May 2010</a><a href='/globalstats.php?year=2010&month=4' class='list-group-item'>April 2010</a><a href='/globalstats.php?year=2010&month=3' class='list-group-item'>March 2010</a><a href='/globalstats.php?year=2010&month=2' class='list-group-item'>February 2010</a><a href='/globalstats.php?year=2010&month=1' class='list-group-item'>January 2010</a><a href='/globalstats.php?year=2009&month=12' class='list-group-item'>December 2009</a><a href='/globalstats.php?year=2009&month=11' class='list-group-item'>November 2009</a><a href='/globalstats.php?year=2009&month=10' class='list-group-item'>October 2009</a><a href='/globalstats.php?year=2009&month=9' class='list-group-item'>September 2009</a><a href='/globalstats.php?year=2009&month=8' class='list-group-item'>August 2009</a><a href='/globalstats.php?year=2009&month=7' class='list-group-item'>July 2009</a><a href='/globalstats.php?year=2009&month=6' class='list-group-item'>June 2009</a><a href='/globalstats.php?year=2009&month=5' class='list-group-item'>May 2009</a><a href='/globalstats.php?year=2009&month=4' class='list-group-item'>April 2009</a><a href='/globalstats.php?year=2009&month=3' class='list-group-item'>March 2009</a><a href='/globalstats.php?year=2009&month=2' class='list-group-item'>February 2009</a><a href='/globalstats.php?year=2009&month=1' class='list-group-item'>January 2009</a><a href='/globalstats.php?year=2008&month=12' class='list-group-item'>December 2008</a><a href='/globalstats.php?year=2008&month=11' class='list-group-item'>November 2008</a><a href='/globalstats.php?year=2008&month=10' class='list-group-item'>October 2008</a><a href='/globalstats.php?year=2008&month=9' class='list-group-item'>September 2008</a><a href='/globalstats.php?year=2008&month=8' class='list-group-item'>August 2008</a><a href='/globalstats.php?year=2008&month=7' class='list-group-item'>July 2008</a><a href='/globalstats.php?year=2008&month=6' class='list-group-item'>June 2008</a><a href='/globalstats.php?year=2008&month=5' class='list-group-item'>May 2008</a><a href='/globalstats.php?year=2008&month=4' class='list-group-item'>April 2008</a><a href='/globalstats.php?year=2008&month=3' class='list-group-item'>March 2008</a><a href='/globalstats.php?year=2008&month=2' class='list-group-item'>February 2008</a><a href='/globalstats.php?year=2008&month=1' class='list-group-item'>January 2008</a><a href='/globalstats.php?year=2007&month=12' class='list-group-item'>December 2007</a><a href='/globalstats.php?year=2007&month=11' class='list-group-item'>November 2007</a><a href='/globalstats.php?year=2007&month=10' class='list-group-item'>October 2007</a><a href='/globalstats.php?year=2007&month=9' class='list-group-item'>September 2007</a><a href='/globalstats.php?year=2007&month=8' class='list-group-item'>August 2007</a><a href='/globalstats.php?year=2007&month=7' class='list-group-item'>July 2007</a><a href='/globalstats.php?year=2007&month=6' class='list-group-item'>June 2007</a><a href='/globalstats.php?year=2007&month=5' class='list-group-item'>May 2007</a>                    </div>
                </div>

            </div>

            <div class="col-md-9 col-xs-12">

                <div class="bargraphs paper" style="text-align: left; margin-right: 0; padding-right: 0">
                    <div style="background: #fff; padding: 5px 5px 15px 5px; overflow: auto">
                        <div style="float: right; padding: 10px">
                            <a style="color: #c00; text-decoration: underline; font-weight: bold; font-size: 13px; font-family: arial" href="/trends">View Monthly Trends</a>                        </div>
                    
                        <h1 style="font-family: arial; font-size: 10pt; color: #666; padding: 10px; border-bottom: 1px solid #ccc; margin-bottom: 20px">Web Browser Market Share</h1>
                    
                        <div class='bar'><div class='lab'>Chrome</div><div class='bar1' style='width: 63%'>&nbsp;</div><div class='value'>46.5%</div>&nbsp;</div><div class='bar'><div class='lab'>Safari</div><div class='bar2' style='width: 22%'>&nbsp;</div><div class='value'>16.5%</div>&nbsp;</div><div class='bar'><div class='lab'>Firefox</div><div class='bar3' style='width: 18%'>&nbsp;</div><div class='value'>13.3%</div>&nbsp;</div><div class='bar'><div class='lab'>Internet Explorer</div><div class='bar4' style='width: 18%'>&nbsp;</div><div class='value'>13.1%</div>&nbsp;</div><div class='bar'><div class='lab'>Opera</div><div class='bar5' style='width: 5%'>&nbsp;</div><div class='value'>3.7%</div>&nbsp;</div>                        <br />
                    </div>

                </div>

                <div class="row" style="padding-bottom: 20px">

                    <div style="float: right; width: 315px; padding-top: 20px; padding-right: 15px" class="hidden-sm hidden-xs">

                        <div id="bsap_1303193_1" class="bsarocks bsap_4d92184dbf59b2d764eef15a9eac1d57"></div>

                        <br />

                        <div id="bsap_1303193_2" class="bsarocks bsap_4d92184dbf59b2d764eef15a9eac1d57"></div>

                        <br />

                        <div style="background: #fff; border: 1px solid #ccc; padding: 10px">
                          <div id="md-large-widget"></div>
                          <script type="text/javascript">
                          (function() {
                          var mdWidgetUrl = "https://www.mightydeals.com/widgets/large/refID/2b09e7eb/width/280/height/170/rotate/1/";
                          var s = document.createElement("script"), s1 = document.getElementsByTagName("script")[0];
                          s.type = "text/javascript";
                          s.async = true;
                          s.src = mdWidgetUrl;
                          s1.parentNode.insertBefore(s, s1);
                          })();
                          </script>
                        </div>

                        <div style="clear: both; padding-top: 20px">
                            <a href="http://buysellads.com/buy/detail/99" style="font-weight: bold; display: block; padding: 20px; background: #06c; text-align: center; color: #fff">Advertise on W3Counter &rarr;</a>
                        </div>

                    </div>

                    <div class="gsleft">

                        <div class="col-md-12">
                            <table class="datatable">
                                <tr>
                                    <th colspan="3" style="width: 100%">Web Browsers</th>
                                </tr>
                                <tr>
	<td class="num">1</td>
	<td class="item">Chrome 44</td>
	<td class="pct">31.22%</td>
</tr><tr>
	<td class="num">2</td>
	<td class="item">Safari 8</td>
	<td class="pct">12.37%</td>
</tr><tr>
	<td class="num">3</td>
	<td class="item">Internet Explorer 11</td>
	<td class="pct">7.17%</td>
</tr><tr>
	<td class="num">4</td>
	<td class="item">Firefox 40</td>
	<td class="pct">5.10%</td>
</tr><tr>
	<td class="num">5</td>
	<td class="item">Firefox 39</td>
	<td class="pct">4.60%</td>
</tr><tr>
	<td class="num">6</td>
	<td class="item">Android 4</td>
	<td class="pct">3.19%</td>
</tr><tr>
	<td class="num">7</td>
	<td class="item">Chrome 43</td>
	<td class="pct">2.75%</td>
</tr><tr>
	<td class="num">8</td>
	<td class="item">Chrome 36</td>
	<td class="pct">2.48%</td>
</tr><tr>
	<td class="num">9</td>
	<td class="item">Safari 7</td>
	<td class="pct">2.45%</td>
</tr><tr>
	<td class="num">10</td>
	<td class="item">Internet Explorer 9</td>
	<td class="pct">2.29%</td>
</tr>                            </table>
                        </div>

                        <div class="col-md-12">
                            <table class="datatable">
                                <tr>
                                    <th colspan="3" style="width: 100%">Operating Systems</th>
                                </tr>
                                <tr>
	<td class="num">1</td>
	<td class="item">Windows 7 </td>
	<td class="pct">34.33%</td>
</tr><tr>
	<td class="num">2</td>
	<td class="item">Android 4</td>
	<td class="pct">12.14%</td>
</tr><tr>
	<td class="num">3</td>
	<td class="item">iOS 8</td>
	<td class="pct">11.03%</td>
</tr><tr>
	<td class="num">4</td>
	<td class="item">Windows 8.1 </td>
	<td class="pct">8.42%</td>
</tr><tr>
	<td class="num">5</td>
	<td class="item">Mac OS X</td>
	<td class="pct">6.31%</td>
</tr><tr>
	<td class="num">6</td>
	<td class="item">Windows XP </td>
	<td class="pct">5.33%</td>
</tr><tr>
	<td class="num">7</td>
	<td class="item">Android 5</td>
	<td class="pct">4.41%</td>
</tr><tr>
	<td class="num">8</td>
	<td class="item">Windows 10 </td>
	<td class="pct">3.57%</td>
</tr><tr>
	<td class="num">9</td>
	<td class="item">Linux</td>
	<td class="pct">2.55%</td>
</tr><tr>
	<td class="num">10</td>
	<td class="item">iOS 7</td>
	<td class="pct">1.85%</td>
</tr>                            </table>
                        </div>

                        <div class="col-md-12">
                            <table class="datatable">
                                <tr>
                                    <th colspan="3" style="width: 100%">Screen Resolutions</th>
                                </tr>
                                <tr>
	<td class="num">1</td>
	<td class="item">1366x768</td>
	<td class="pct">19.40%</td>
</tr><tr>
	<td class="num">2</td>
	<td class="item">1920x1080</td>
	<td class="pct">7.77%</td>
</tr><tr>
	<td class="num">3</td>
	<td class="item">360x640</td>
	<td class="pct">7.44%</td>
</tr><tr>
	<td class="num">4</td>
	<td class="item">1024x768</td>
	<td class="pct">6.40%</td>
</tr><tr>
	<td class="num">5</td>
	<td class="item">768x1024</td>
	<td class="pct">5.35%</td>
</tr><tr>
	<td class="num">6</td>
	<td class="item">1280x800</td>
	<td class="pct">4.90%</td>
</tr><tr>
	<td class="num">7</td>
	<td class="item">1280x1024</td>
	<td class="pct">4.22%</td>
</tr><tr>
	<td class="num">8</td>
	<td class="item">320x568</td>
	<td class="pct">4.20%</td>
</tr><tr>
	<td class="num">9</td>
	<td class="item">1440x900</td>
	<td class="pct">4.16%</td>
</tr><tr>
	<td class="num">10</td>
	<td class="item">1600x900</td>
	<td class="pct">4.10%</td>
</tr>                            </table>
                        </div>

                        <div class="col-md-12" style="display: none">
                            <table class="datatable">
                                <tr>
                                    <th colspan="3" style="width: 100%">Countries</th>
                                </tr>
                                <tr>
	<td class="num">1</td>
	<td class="item">United States</td>
	<td class="pct">26.59%</td>
</tr><tr>
	<td class="num">2</td>
	<td class="item">Indonesia</td>
	<td class="pct">6.25%</td>
</tr><tr>
	<td class="num">3</td>
	<td class="item">Brazil</td>
	<td class="pct">6.18%</td>
</tr><tr>
	<td class="num">4</td>
	<td class="item">United Kingdom</td>
	<td class="pct">4.30%</td>
</tr><tr>
	<td class="num">5</td>
	<td class="item">India</td>
	<td class="pct">3.80%</td>
</tr><tr>
	<td class="num">6</td>
	<td class="item">Canada</td>
	<td class="pct">2.59%</td>
</tr><tr>
	<td class="num">7</td>
	<td class="item">Germany</td>
	<td class="pct">2.34%</td>
</tr><tr>
	<td class="num">8</td>
	<td class="item">Argentina</td>
	<td class="pct">2.14%</td>
</tr><tr>
	<td class="num">9</td>
	<td class="item">Netherlands</td>
	<td class="pct">2.14%</td>
</tr><tr>
	<td class="num">10</td>
	<td class="item">France</td>
	<td class="pct">2.09%</td>
</tr>                            </table>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<div style="background: #c1deef">
    <div class="container main">
        <div class="row">
            <div class="col-lg-12 col-xs-12">
                <div style="margin: 40px 0" class="featurebox">
                    This report was generated <b>08/31/2015</b> based on 
                    visits to <b>34,847</b> websites that use
                    W3Counter's free web stats. The browser market share graph includes data from all versions 
                    of the named browser families, not only the top 10 as listed below.<br /><br />
                
                    Permanent link to this report: 
                    <a href="http://www.w3counter.com/globalstats.php?year=2015&month=8" style="font-weight: normal">http://www.w3counter.com/globalstats.php?year=2015&month=8</a>

                    <br /><br />

                    Don't just read the report, be part of it. Track your website's visitor activity in real-time
                    with W3Counter. <a href="/signup">Sign up</a> for your free account.
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function() {
  $('.scroller').slimScroll({
    height: '1270px'
  });
});
</script>

<!-- BuySellAds Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = 'http://s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- End BuySellAds Ad Code -->

    </div><!-- //wrap -->
    <div id="footer">
      Copyright &copy; 2004-2015 &nbsp;<a href="http://www.awio.com">Awio Web Services LLC</a>
      &nbsp;&middot;&nbsp;
      <a href="/cdn-cgi/l/email-protection#a0c1c4cdc9cee0d793c3cfd5ced4c5d28ec3cfcd">Contact</a>
      &nbsp;&middot;&nbsp;
      <a href="/legal/terms">Terms of Service</a>
      &nbsp;&middot;&nbsp;
      <a href="/legal/privacy">Privacy Policy</a>

      <!-- Quantcast Tag -->
      <script type="text/javascript">
      var _qevents = _qevents || [];

      (function() {
      var elem = document.createElement('script');
      elem.src = (document.location.protocol == "https:" ? "https://secure" : "http://edge") + ".quantserve.com/quant.js";
      elem.async = true;
      elem.type = "text/javascript";
      var scpt = document.getElementsByTagName('script')[0];
      scpt.parentNode.insertBefore(elem, scpt);
      })();

      _qevents.push({
      qacct:"p-bdUJejYHg9Ff-"
      });
      </script>

      <noscript>
      <div style="display:none;">
      <img src="//pixel.quantserve.com/pixel/p-bdUJejYHg9Ff-.gif" border="0" height="1" width="1" alt="Quantcast"/>
      </div>
      </noscript>
      <!-- End Quantcast tag -->

      <!-- Begin W3Counter Secure Tracking Code -->
      <script type="text/javascript" src="https://www.w3counter.com/securetracker.js"></script>
      <script type="text/javascript">
      w3counter(1);
      </script>
      <noscript>
      <div><a href="http://www.w3counter.com"><img src="https://www.w3counter.com/tracker.php?id=1" style="border: 0" alt="W3Counter" /></a></div>
      </noscript>
      <!-- End W3Counter Secure Tracking Code-->

      <!-- Begin W3Counter Pulse Real-Time Heartbeat Code -->
      <script type="text/javascript">
      (function(){
        var ps = document.createElement('script');
         ps.type = 'text/javascript';
         ps.async = true;
         ps.src = '//pulse.w3counter.com/pulse.js?id=1';
        (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(ps);
      })();
      </script>
      <!-- End W3Counter Pulse Real-Time Heartbeat Code-->

      <script type="text/javascript">
      Shopify = { shop: 'www.w3counter.com' };
      </script>
      <script type="text/javascript" src="https://icf.improvely.com/icf-button.js?shop=www.w3counter.com"></script>

    </div>
  <script type="text/javascript">
/* <![CDATA[ */
(function(){try{var s,a,i,j,r,c,l=document.getElementsByTagName("a"),t=document.createElement("textarea");for(i=0;l.length-i;i++){try{a=l[i].getAttribute("href");if(a&&a.indexOf("/cdn-cgi/l/email-protection") > -1  && (a.length > 28)){s='';j=27+ 1 + a.indexOf("/cdn-cgi/l/email-protection");if (a.length > j) {r=parseInt(a.substr(j,2),16);for(j+=2;a.length>j&&a.substr(j,1)!='X';j+=2){c=parseInt(a.substr(j,2),16)^r;s+=String.fromCharCode(c);}j+=1;s+=a.substr(j,a.length-j);}t.innerHTML=s.replace(/</g,"&lt;").replace(/>/g,"&gt;");l[i].setAttribute("href","mailto:"+t.value);}}catch(e){}}}catch(e){}})();
/* ]]> */
</script>
</body>
</html>
