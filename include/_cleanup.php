<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Cleanup                                             */
    /*                      --- Makes sure that all data                        */
    /*                          is unset, cleared, etc,                         */
    /*                                                                          */
    /****************************************************************************/

    // todo
    // clear msg if not a script
    if(isset($clearSavedData) && $clearSavedData)
    {
        // clear status message
        unset($_SESSION['msg']);

        // clear previous form data after redisplaying
        unset($_SESSION['prevFormData']);
    }
?>
