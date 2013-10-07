<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Index Page                                          */
    /*                      --- Landing page when first visiting the site       */
    /*                                                                          */
    /****************************************************************************/

    /* >>> BEGIN INCLUDES <<< */
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Pre-checks                                          */
    /*                      --- Does necessary logic in preparation for         */
    /*                          other code                                      */
    /*                                                                          */
    /****************************************************************************/
    require './include/_checks.php';

    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Data Collection                                     */
    /*                      --- Gathers necessary data such as music tracks     */
    /*                                                                          */
    /****************************************************************************/
    require './include/_collector.php';

    // set message clear flag
    $clearSavedData   =   true;

    // generate page-specific content
    $content    =   '
                            <div class="detailsBlob dbTop">
                            <img height="128" width="128" alt="Programming" src="media/icons/open_source_icon.png" />
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
                        <div class="detailsBlob dbTop">
                            <img height="128" width="128" alt="WebDev" src="media/icons/webdev_icon.png" />
                            <h3>Web Development</h3>
                            <div class="indexInfoModule">
                                <h4>Coastal Carolina University</h4>
                                <a target="_blank" href="http://ww2.coastal.edu/jlcarlso/wgs/v2/">
                                    <img height="95" width="200" title="Women\'s and Gender Studies Website" alt="Click to go to the Women\'s and Gender Studies department of Coastal Carolina University\'s website" src="media/site_thumbnail1.png" />
                                </a>
                                <hr />
                                <a target="_blank" href="http://ww2.coastal.edu/pwhalen/">
                                    <img height="95" width="200" title="Website of Dr. Phillip Wallen" alt="Click to go to the website of Dr. Phillip Wallen" src="media/site_thumbnail2.png" />
                                </a>
                            </div>
                        </div>
                        <br />
                        <div class="detailsBlob dbBottom">
                            <img height="128" width="128" alt="Current Events" src="media/icons/current_events_icon.png" />
                            <h3>What I\'m Up To</h3>
                            <div id="music" class="indexInfoModule">
                                <h4>Recent Songs</h4>
                                '.getRecentTracks().'
                            </div>
                            <!-- BEGIN TWITTER CODE -->
                            <a class="twitter-timeline" href="https://twitter.com/MagneticStain" data-widget-id="382353525595848705">Tweets by @MagneticStain</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?\'http\':\'https\';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            <!-- END TWITTER CODE -->
                        </div>';

    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Output Display                                      */
    /*                      --- Displays data to the user                       */
    /*                          (currently in HTML)                             */
    /*                                                                          */
    /****************************************************************************/
    require './include/_output.php';

    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Cleanup                                             */
    /*                      --- Makes sure that all data                        */
    /*                          is unset, cleared, etc,                         */
    /*                                                                          */
    /****************************************************************************/
    require './include/_cleanup.php';

?>