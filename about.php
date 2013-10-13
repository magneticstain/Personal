<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> About Me Page                                       */
    /*                      --- Paged used to summarize who I am                */
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

    // change page-specific variable(s)
    $pageTitle  =   'About Me';

    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Data Collection                                     */
    /*                      --- Gathers necessary data such as music tracks     */
    /*                                                                          */
    /****************************************************************************/
    require './include/_collector.php';

    // generate page-specific content
    $content    =   '
                            <div class="wideContent">
                                <div id="defaultForm">
                                    <h4>about me.</h4>
                                    <p>
                                    Hello. My name is <a target="_blank" title="Josh Carlson\'s Facebook Profile" href="https://www.facebook.com/magneticstain">Josh Carlson</a> - resident of <a target="_blank" title="[Wikipedia] Myrtle Beach, SC" href="http://en.wikipedia.org/wiki/Myrtle_Beach,_South_Carolina">Myrtle Beach, SC</a> and lifetime lover of <a target="_blank" title="[Wikipedia] Science" href="http://en.wikipedia.org/wiki/Science">science</a>, <a target="_blank" title="[Wikipedia] Technology" href="http://en.wikipedia.org/wiki/Technology">technology</a>, and <a target="_blank" title="[Wikipedia] Mathematics" href="http://en.wikipedia.org/wiki/Mathematics">mathematics</a>.
                                    </p>
                                    <p>
                                    I\'m a system administrator in the <a target="_blank" title="Dell Secureworks website" href="http://www.secureworks.com/">Dell Secureworks</a> NOC, based in Atlanta, GA. I\'m a
                                    senior at <a target="_blank" title="Coastal Carolina University website" href="https://www.coastal.edu/">Coastal Carolina University</a> in Conway, SC, currently pursuing a Bachaelor\'s
                                    degree in computer science with a specialization in information systems.
                                    </p>
                                    <p>
                                    My current interests include Linux system administration, information security, and web development.
                                    I mainly work with <a target="_blank" title="Debian website" href="http://www.debian.org/">Debian</a> as my server OS of choice, with <a target="_blank" title="Linux Mint website" href="http://www.linuxmint.com/">Linux Mint (MATE)</a> being used on most of my desktops.
                                    My research in information security focuses on <a target="_blank" title="[Wikipedia] Social Engineering" href="http://en.wikipedia.org/wiki/Social_engineering_(security)">social engineering</a>, <a target="_blank" title="[Wikipedia] Wireless Security" href="http://en.wikipedia.org/wiki/Wireless_security">wireless security</a>,
                                    <a target="_blank" title="[Wikipedia] Hardening" href="http://en.wikipedia.org/wiki/Hardening_(computing)">Linux hardening</a>, <a target="_blank" title="[Wikipedia] Information Privacy" href="http://en.wikipedia.org/wiki/Information_privacy">privacy concerns</a>, and <a target="_blank" title="[Wikipedia] Web-Application Security" href="http://en.wikipedia.org/wiki/Web_application_security">web-application security</a>.
                                    My language of choice when developing web-applications is <a target="_blank" title="PHP website" href="http://www.php.net/">PHP</a> with an <a target="_blank" title="HTML5 Specs website" href="http://www.w3.org/html/wg/drafts/html/master/">HTML5</a> frontend, but also plan on
                                    delving into <a target="_blank" title="Python website" href="http://www.python.org/">python</a> website
                                    development since it\'s my language of choice whe wrting the majority of my larger-scale Linux scripts (<a target="_blank" title="Bash Reference Manual website" href="http://www.gnu.org/software/bash/manual/bashref.html">bash</a> is my first choice when it\'s small scale/I\'m lazy).
                                    </p>
                                    <p>To follow me, friend me, stalk me, annoy me, or make any attempt at reaching my eyeballs, please see the fancy icon links at the top of the page :)</p>
                                    <p>
                                    - JCP
                                    </p>
                                </div>
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
