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

    // check if content was set
    if((!isset($content)) || (empty($pageTitle)))
    {
        $content    =   '<p class="error">No content was set. The retarded dev should know what to do.</p>';
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
                        <a href="//blog.carlso.net" title="josh carlson\'s blog">blog</a>
                        <a href="contact.php" title="contact josh carlson">contact</a>
                    </nav>
                    <div id="attnGrabber">
                        <h2>
                            Sysadmin by <p class="accentuate day">day</p>. Developer &amp; infosec researcher by <p class="accentuate night">night</p>.
                        </h2>
                    </div>
                </header>
                <section id="content">
                    <div id="contentWrapper">
                        '.$content.'
                    </div
                </section>
            </div>
            <footer>
                <p>2013 &copy; CarlsoNet</p>
            </footer>
        </body>
        </html>';
?>
