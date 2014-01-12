<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Data Collection                                     */
    /*                      --- Gathers necessary data such as music tracks     */
    /*                                                                          */
    /****************************************************************************/

    // collect Last.fm recent music tracks
    function getRecentTracks()
    {
        // scrape rss feed of Last.fm recent track list

        // make sure url_allow_fopen php config option is set
        // it's not recommended to set by default, so we'll enable it for the duration of this script
        ini_set('allow_url_fopen ','1');

        // define XML URL
        $musicXML_URL   =   'http://ws.audioscrobbler.com/1.0/user/MagneticStain/recenttracks.rss';

        // load XML file
        $musicXML   =   simplexml_load_file($musicXML_URL);

        // parse XML results
        $musicTrackHTML =   '';
        $currentTrackNum    =   0;
        if($musicXML)
        {
            foreach($musicXML->channel->item as $item)
            {
                // increase track count
                $currentTrackNum++;

                // append to html
                $musicTrackHTML .=  '<p>'.$currentTrackNum.'. '.$item->title.'</p>
                                    <hr />
                                    ';
            }
        }
        else
        {
            $musicTrackHTML =   '<p class="error">Uh-oh, Josh\'s recent tracks couldn\'t be loaded :(</p>';
        }

        return $musicTrackHTML;
    }
?>
