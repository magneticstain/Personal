<?php
    /****************************************************************************/
    /*                                                                          */
    /*                  >>> [SCRIPT] Contact Form                               */
    /*                      --- Gathers contact data and relays it via email    */
    /*                                                                          */
    /****************************************************************************/

    /* Collect POST data */
    $name       =   $_POST['c_name'];
    $subject    =   $_POST['c_subj'];
    $msg        =   $_POST['c_msg'];

    /* Sanatize */
    $validData  =   false;

    // check name
    if((!empty($name)) && (preg_match("/[-_a-zA-Z'` ]/", $name)))
    {
        // check subject
        if(!empty($name))
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
        $_SESSION['msg']    =   '<p class="error">All fields required please.</p>';

        header('Location: contact.php');
    }
    else
    {
        // send message
        $to     =   'domiq@notsharingmy.info';
        $header =   'From: contact@carlso.net \r\n';

        if(mail($to, $subject, $msg, $header))
        {
            // successfully sent
            $_SESSION['msg']    =   '<p class="success">Message successfully sent.</p>';
        }
        else
        {
            // something went wrong, and the message wasn't sent
            $_SESSION['msg']    =   '<p class="error">Uh-oh! Looks like something went wrong along the way :(</p>';
        }
    }

    // always redirect to contact form
    $header('Location: contact.php');

?>
