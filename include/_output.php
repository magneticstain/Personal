<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Output Display                                      */
    /*                      --- Displays data to the user                       */
    /*                          (currently in HTML)                             */
    /*                                                                          */
    /****************************************************************************/

    // check for page name
    if((!isset($pageTitle)) || (empty($pageTitle)))
    {
        $pageTitle  =   'Home';
    }

    // echo out HTML
    echo '
        <!DOCTYPE html>
        <html>
        <head>
            <meta charset="utf-8" />

            <title>CarlsoNet >> '.$pageTitle.'</title>

            <!-- CSS Import -->
            <link rel="stylesheet" href="./css/master.css" type="text/css" media="all" />

        </head>
        <body id="'.$pageTitle.'">
            <div id="container">
                <!-- BEGIN HEADER -->
                <header id="banner">
                    <nav>
                        <a href="index.php" title="home">home</a>
                        <a href="josh_carlson_resume_2013.pdf" title="josh carlson\'s résumé">résumé</a>
                        <h1>
                            <strong>Josh Carlson</strong>
                        </h1>
                        <a href="#" title="josh carlson\'s blog">blog</a>
                        <a href="contact.html" title="contact josh carlson">contact</a>
                    </nav>
                    <div id="attnGrabber">
                        <h2>
                            Sysadmin by <p class="accentuate day">day</p>. Developer &amp; infosec researcher by <p class="accentuate night">night</p>.
                        </h2>
                    </div>
                </header>
                <section id="content">
                    <div class="detailsBlob">
                        <h3>Open-source Projects</h3>
                        <div class="indexInfoModule">
                            <h4>[PHP] Pastrie</h4>
                            <p>A webapp coded in PHP designed to enable users to easily deploy their own pastebin locally on their own network.</p>
                            <br />
                            <a target="_blank" href="https://github.com/magneticstain/pastrie">&rarr; View Source Code [GitHub]</a>
                        </div>
                        <hr />
                        <div class="indexInfoModule">
                            <h4>[PHP] SPliF</h4>
                            <p>A lightweight PHP framework for use by web developers that provides a very basic file layout for building upon when creating webapps.</p>
                            <br />
                            <a target="_blank" href="https://github.com/magneticstain/SPliF">&rarr; View Source Code [GitHub]</a>
                        </div>
                        <br />
                    </div>
                    <div class="detailsBlob">
                        <h3>Websites</h3>
                        <div class="indexInfoModule">
                            <h4>Coastal Carolina University</h4>
                            <a target="_blank" href="http://ww2.coastal.edu/jlcarlso/wgs/v2/">
                                <img title="Women\'s and Gender Studies Website" alt="Click to go to the Women\'s and Gender Studies department of Coastal Carolina University\'s website" src="media/site_thumbnail1.png" />
                            </a>
                            <hr />
                            <a target="_blank" href="http://ww2.coastal.edu/pwhalen/">
                                <img title="Website of Dr. Phillip Wallen" alt="Click to go to the website of Dr. Phillip Wallen" src="media/site_thumbnail2.png" />
                            </a>
                        </div>
                    </div>
                    <div class="detailsBlob">
                        <h3>What I\'m Up To</h3>
                        <div id="music" class="indexInfoModule">
                            <h4>Recent Songs</h4>
                            '.getRecentTracks().'
                        </div>
                        <!-- BEGIN TWITTER CODE -->
                        <a class="twitter-timeline" href="https://twitter.com/MagneticStain" data-widget-id="382353525595848705">Tweets by @MagneticStain</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        <!-- END TWITTER CODE -->
                    </div>
                </section>
                <footer>
                    <p>2013 &copy; CarlsoNet</p>
                </footer>
            </div>
        </body>
        </html>';
?>
