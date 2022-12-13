<?php
    require_once 'header.php';

    echo "<div class='center'>Welcome to Gerrors Website,";
    if ($loggedin) echo " $user, you are logged in";
    else echo ' please sign up or log in';

    echo <<<_END
            </div><br>
        </div>
        <div data-role="footer">
        </div>
        </body>
        </html>
_END;
?>
