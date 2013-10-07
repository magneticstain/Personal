<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> [SCRIPT] Contact Form                               */
    /*                      --- Gathers contact data and relays it via email    */
    /*                                                                          */
    /****************************************************************************/

    /****************************************************************************/
    /*                                                                          */
    /*                  >>> Pre-checks                                          */
    /*                      --- Does necessary logic in preparation for         */
    /*                          other code                                      */
    /*                                                                          */
    /****************************************************************************/
    require '../include/_checks.php';

    /* functions */
    function sendMail($to, $subject, $msg, $header)
    {
        // send message
        $mailed  =   mail($to, $subject, $msg, $header);

        return $mailed;
    }

    // check if form was actually submitted
    if(isset($_POST['submit']))
    {
        // bot check
        if(!empty($_POST['botChk']))
        {
            // we got ourselves a bot boys!!!
            // redirect to index
            header('Location: https://www.carlso.net/');
        }
        else
        {
            // it's a human!
            /* Collect POST data and sanatize */
            $name       =   htmlentities($_POST['c_name']);
            $subject    =   htmlentities($_POST['c_subj']);
            $msg        =   htmlentities($_POST['c_msg']);

            /* Verify */
            $validData  =   false;
            // check name
            if((!empty($name)) && (preg_match("/[-_a-zA-Z'` ]/", $name)))
            {
                // check subject
                if(!empty($subject))
                {
                    // check message
                    if(!empty($msg))
                    {
                        $validData  =   true;
                    }
                }
            }

            if(!$validData)
            {
                $_SESSION['msg']    =   '<p class="error">&raquo; All fields required please.</p>';

                // save data to be outputted in contact.php after redirect
                $_SESSION['prevFormData']   =   array(
                    'contactName'       =>  $name,
                    'contactSubject'    =>  $subject,
                    'contactMsg'        =>  $msg
                );

                header('Location: contact');
            }
            else
            {
                // set rest of variables
                $to     =   'domiq@notsharingmy.info';
                $header =   "From: contact@carlso.net\r\n";

                // send it
                $wasMailed  =   sendMail($to, $subject, $msg, $header);

                if($wasMailed)
                {
                    // make sure previous form data is removed
                    unset($_SESSION['prevFormData']);

                    // successfully sent
                    $_SESSION['msg']    =   '<p class="success">&raquo; Message successfully sent.</p>';
                }
                else
                {
                    // something went wrong, and the message wasn't sent
                    $_SESSION['msg']    =   '<p class="error">&raquo; Uh-oh! Looks like something went wrong along the way :(</p>';
                }
            }

            /****************************************************************************/
            /*                                                                          */
            /*                  >>> Cleanup                                             */
            /*                      --- Makes sure that all data                        */
            /*                          is unset, cleared, etc,                         */
            /*                                                                          */
            /****************************************************************************/
            require '../include/_cleanup.php';

            // always redirect to contact form
            header('Location: ../contact');
        }
    }
    else
    {
        // they do not belong here...
        // redirect to index
        header('Location: https://www.carlso.net/');
    }
?>
