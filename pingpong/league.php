<html>
    <head>
        
    </head>
    <body>
            <table border="1">
            <tr>
                <td>
                    <h1>Lairg Table Tennis Club</h1>
                
                </td>
                <td>
                    <p>
                        Please log in
                    </p>
                    <form action="leaderboard.html">
                        name : <input type="text" name="name" /></br>
                        password : <input type="password" name="password" />
                        <input type="submit" />
                    </form>
                </td>
            </tr>
        </table>
                <table width="100%" border="1">
            <tr>
                <td>Home</td>
                <td><a href = "Highland League"> Highland League</a></td>
                <td>Join The Club</td>
            </tr>
        </table>
        
        
    
        <table border="1">
            <tr>
                <td>
                    <!-- GROUP 1 -->
                    
                    <?php   

                    $db_handle = pg_connect("dbname=pingpong user=postgres password=69x4tefF");    
                    $query = "SELECT name FROM player WHERE league_group_id = 3";   
                    $result = pg_exec($db_handle, $query);   
                    
                    echo "<table border=1>";
                    
                    echo "<tr><td>[group name]</td><td>points</td></tr>";
                    
                    for ($row = 0; $row < pg_numrows($result); $row++) {        
                            $name = pg_result($result, $row, 0);        
                            echo "<tr><td>$name</td><td>[points]</td></tr>\n";        
                        }         
                    
                    echo "</table>";
                    
                    pg_freeresult($result);   
                    pg_close($db_handle);   
                    ?>
                    
                    
                </td>
                <td>
                    <!-- GROUP 2 -->
                    <table border="1">
                        <tr>
                            <td>GROUP 2</td>
                            <td>points</td>
                        </tr>
                        <tr>
                            <td>Bob2</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Jimmy2</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Bart2</td>
                            <td>7</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <!-- GROUP 3 -->
                    <table border="1">
                        <tr>
                            <td>GROUP 3</td>
                            <td>points</td>
                        </tr>
                        <tr>
                            <td>Bob2</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Jimmy2</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Bart2</td>
                            <td>7</td>
                        </tr>
                    </table>
                </td>
                <td>
                    <!-- GROUP 4 -->
                    <table border="1">
                        <tr>
                            <td>GROUP 4</td>
                            <td>points</td>
                        </tr>
                        <tr>
                            <td>Bob2</td>
                            <td>12</td>
                        </tr>
                        <tr>
                            <td>Jimmy2</td>
                            <td>8</td>
                        </tr>
                        <tr>
                            <td>Bart2</td>
                            <td>7</td>
                        </tr>
                    </table>
                </td>
            </tr>
            
        </table>
    </body>
</html>