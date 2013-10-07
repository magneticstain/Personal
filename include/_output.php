<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Output Display                                      */
    /*                      --- Displays data to the user                       */
    /*                          (currently in HTML)                             */
    /*                                                                          */
    /****************************************************************************/

    // for all variable checks, check is made based on if it's not set, therefore setting the default
    // check for page name
    if((!isset($pageTitle)) || (empty($pageTitle)))
    {
        $pageTitle  =   'Home';
    }

    // normalize page title for valid body ID
    // remove spaces, make all lower case
    $pageTitleNormalized  =   strtolower(str_replace(' ', '', $pageTitle));

    // check if content was set
    if((!isset($content)) || (empty($pageTitle)))
    {
        $content    =   '<p class="error">No content was set. The retarded dev should know what to do.</p>';
    }

    // echo out HTML
    echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta name="keywords" content="josh, carlson, purcell, web development, information security, technology, open-source, coastal carolina university, dell secureworks, web-application security" />
            <meta name="description" content="Welcome to the personal website of Joshua Carlson-Purcell; system administrator, developer, and infosec researcher." />

            <title>CarlsoNet &raquo;&laquo; '.$pageTitle.'</title>

            <!-- CSS Import -->
            <link rel="stylesheet" href="./css/master.css" type="text/css" media="all" />

            <!-- jQuery Import -->
            <!-- Google Hosted jQuery -->
            <!-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/2.0.3/jquery-ui.min.js"></script> -->
            <!-- Custom jQuery -->
            <!-- <script type="text/javascript" src="js/custom_jquery.js"></script> -->

            <!-- Google Analytics Code -->
            <script type="text/javascript">

              var _gaq = _gaq || [];
              _gaq.push([\'_setAccount\', \'UA-30874775-1\']);
              _gaq.push([\'_setDomainName\', \'carlso.net\']);
              _gaq.push([\'_trackPageview\']);

              (function() {
                var ga = document.createElement(\'script\'); ga.type = \'text/javascript\'; ga.async = true;
                ga.src = (\'https:\' == document.location.protocol ? \'https://ssl\' : \'http://www\') + \'.google-analytics.com/ga.js\';
                var s = document.getElementsByTagName(\'script\')[0]; s.parentNode.insertBefore(ga, s);
              })();

            </script>
            <!-- End Google Analytics Code -->
        </head>
        <body id="'.$pageTitleNormalized.'">
            <div id="container">
                <!-- BEGIN HEADER -->
                <header id="banner">
                    <div id="socialMediaContainer">
                        <a target="_blank" href="https://www.facebook.com/magneticstain"><img alt="Josh Carlson on Facebook" src="media/icons/social_media/facebook.png" /></a>
                        <a target="_blank" href="https://plus.google.com/109580240552650009886/posts?rel=author"><img alt="Josh Carlson on Google+" src="media/icons/social_media/g_plus.png" /></a>
                        <a target="_blank" href="http://lnkd.in/9Dqkwy"><img alt="Josh Carlson on LinkedIn" src="media/icons/social_media/linkedin.png" /></a>
                        <a target="_blank" href="http://reddit.com/u/MagneticStain"><img alt="Josh Carlson on Reddit" src="media/icons/social_media/reddit.png" /></a>
                    </div>
                    <nav>
                        <a href="https://www.carlso.net/" title="home">home</a>
                        <a target="_blank" href="https://docs.google.com/file/d/0BykFe7XdLgqkVTVHdmd4U2tydFE/edit?usp=sharing" title="josh carlson\'s résumé">résumé</a>
                        <h1>
                            <strong>Josh Carlson</strong>
                        </h1>
                        <a target="_blank" href="http://blog.carlso.net" title="josh carlson\'s blog">blog</a>
                        <a href="contact" title="contact josh carlson">contact</a>
                    </nav>
                    <div id="attnGrabber">
                        <h2>
                            Sysadmin by <p class="accentuate day">day</p>. Developer &amp; infosec researcher by <p class="accentuate night">night</p>.
                        </h2>
                        <h2>
                            Learn more <a title="About Josh Carlson" href="about">about me</a>.
                        </h2>
                    </div>
                </header>
                <section id="content">
                    <div id="contentWrapper">
                        '.$content.'
                    </div>
                </section>
            </div>
            <footer>
                <p>2013 &copy; CarlsoNet</p>
            </footer>
        </body>
        </html>';
?>
