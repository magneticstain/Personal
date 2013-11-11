<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Pre-checks                                          */
    /*                      --- Does necessary logic in preparation for         */
    /*                          other code                                      */
    /*                                                                          */
    /****************************************************************************/

    // first set content-type to HTML and charset to utf-8
    // this is necessary to display XML results correctly (character encoding especially)
    header('Content-type: text/html; charset=utf-8');

    // set expiration date to take advantage of client-side caching
    header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 36000));

    // make sure session is started
    if(!isset($_SESSION))
    {
        // not started, get it started
        session_start();
    }
?>
