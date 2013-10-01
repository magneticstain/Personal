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

    // generate page-specific content
    $content    =   '
                        <div class="wideContent">
                            <div id="socialMedia">

                            </div>
                            <div id="contactForm">
                                <h4>contact me.</h4>
                                <br />
                                <form method="post" action="scripts/contact_.php">
                                    <table>
                                        <tr>
                                            <td>
                                                Name:
                                            </td>
                                            <td>
                                                <input title="Your Name" name="c_name" type="text" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Subject:
                                            </td>
                                            <td>
                                                <input title="Subject" name="c_subj" type="text" />
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Message:
                                            </td>
                                            <td>
                                                <textarea title="Message" cols="40" rows="10"></textarea>
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
