<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Contact Page                                        */
    /*                      --- Paged used to let visitors contact me           */
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
    $pageTitle  =   'Contact';

    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Data Collection                                     */
    /*                      --- Gathers necessary data such as music tracks     */
    /*                                                                          */
    /****************************************************************************/
    require './include/_collector.php';

    // set message clear flag
    $clearSavedData   =   true;

    // check for previous message
    $prevMsg    =   '';
    if((isset($_SESSION['msg'])) && (!empty($_SESSION['msg'])))
    {
        // set msg
        $prevMsg    =   $_SESSION['msg'];
    }

    // check for previously submitted data
    $prevContactData    =   '';
    if(isset($_SESSION['prevFormData']))
    {
        // use previous data
        $prevContactData    =   $_SESSION['prevFormData'];
    }
    else
    {
        // make sure to initialize data
        $prevContactData    =   array(
            'contactName'       =>  '',
            'contactSubject'    =>  '',
            'contactMsg'        =>  ''
        );
    }

    // generate page-specific content
    $content    =   '
                        <div class="wideContent">
                            <div id="socialMedia">

                            </div>
                            <div id="contactForm">
                                <h4>contact me.</h4>
                                '.$prevMsg.'
                                <form method="post" action="scripts/contact_.php">
                                    <table>
                                        <tr>
                                            <td>
                                                Name:
                                            </td>
                                            <td>
                                                <input title="Your Name" name="c_name" type="text" value="'.$prevContactData['contactName'].'" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Subject:
                                            </td>
                                            <td>
                                                <input title="Subject" name="c_subj" type="text" value="'.$prevContactData['contactSubject'].'" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Message:
                                            </td>
                                            <td>
                                                <textarea title="Message" name="c_msg" cols="40" rows="10">'.$prevContactData['contactMsg'].'</textarea>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input title="BotThwarter" name="botChk" type="hidden" value="" />
                                            </td>
                                            <td>
                                                <input title="Send Message!" name="submit" type="submit" value="Send" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>
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
