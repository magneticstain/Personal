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
        unset($_SESSION['msg']);
    }
?>
