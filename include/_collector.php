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
        // define XML URL
        $musicXML_URL   =   'http://ws.audioscrobbler.com/1.0/user/MagneticStain/recenttracks.rss';

        // load XML file
        $musicXML   =   simplexml_load_file($musicXML_URL);

        // parse XML results
        $musicTrackHTML =   '';
        if($musicXML)
        {
            $musicTrackHTML .=  '
                                <ol class="trackListing">';
            foreach($musicXML->channel->item as $item)
            {
                $musicTrackHTML .=  '
                                        <li>'.$item->title.'</li>';
            }

            $musicTrackHTML .=  '
                                </ol>';
        }
        else
        {
            $musicTrackHTML =   '<p class="error">Could not load XML :(</p>';
        }

        return $musicTrackHTML;
    }
?>
