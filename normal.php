




<table border="1">
            <thead>
                <tr>
                    <td>name</td>
                    <td>regis no</td>
                    <td>category</td>
                    <td>type</td>
                    <td>date of complaint</td>
                    <td>department</td>
                    <td>description</td>
                    <td>status</td>
                    <!-- <td>Forward</td> -->
                </tr>
            </thead>    
        <tbody>
        <?php
        while($values=mysqli_fetch_array($res)){
            echo "<tr>";
            echo "<td>";    echo " $values[name] ";   echo "</td>";
            echo "<td>";    echo " $values[id] ";   echo "</td>";
            echo "<td>";    echo " $values[cat] ";   echo "</td>";
            echo "<td>";    echo " $values[type] ";   echo "</td>";
            echo "<td>";    echo " $values[dateof] ";   echo "</td>";
            echo "<td>";    echo " $values[dept] ";   echo "</td>";
            echo "<td>";    echo " $values[description] ";   echo "</td>";
            echo "<td>";    echo " $values[status] ";   echo "</td>";

            echo "</tr>";
        }
        ?>
        <tbody>
        </table>