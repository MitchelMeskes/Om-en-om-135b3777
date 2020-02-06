<!DOCTYPE html>
<html>
    <head>
        <body>
            <table width "270px" border "2px" cellspacing="0px" cellpadding="0px">
                <?php
                        for ($lengte = 0; $lengte <= 7; $lengte++){
                            if (($lengte % 2) == 1){
                                $evenOneven = 0;
                            }else {
                                $evenOneven = 1;
                            }
                            echo "<tr>";
                        for ($breedte = 0; $breedte <= 7; $breedte++) {
                                if (($breedte % 2) == $evenOneven) {
                                    echo "<td height=30px width=30px bgcolor=black></td>";
                                } else {
                                    echo "<td height=30px width=30px bgcolor=white></td>";
                                }
                            }
                        }
                    ?>
                </tr>
            </table>
        </body>
    </head>
</html>
