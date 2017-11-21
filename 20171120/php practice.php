<html>
    <head>
    <meta charset="utf-8">
    <title>php practice</title>
    <style type="text/css">
    tr *{
        text-align: left;
        padding: 0.2em 0.5em 0.2em 0.5em;
        border-bottom: 1px solid rgb(34, 34, 34);
    }
    tr:last-child td{
        border-bottom: none;  
    }
    th {
        font-weight: bold;
    }   
    table{
        margin: auto;
        border-collapse: collapse;
        border-spacing: 0; 
    }
    *{
        font-family: "微軟正黑體","Source Sans Pro", Helvetica, sans-serif;
        font-size: 6vmin;
        font-weight: normal;
        color: #222;
        white-space:nowrap;
    }
    </style>
    </head>
    <body>
        <?php
        $data=array(
            array("Volvo",22,18),
            array("BMW",15,13),
            array("Saab",5,2),
            array("Land Rover",17,15)   
        );
        ?>
        <table>
            <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Sold</th>
            </tr>
            <?php
            for ($i=0; $i<count($data); $i++) {
                echo "<tr>";
                for ($j=0; $j<count($data[$i]); $j++) {
                    $value=$data[$i][$j];
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <table>
            <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Sold</th>
            </tr>
            <?php
            foreach ($data as $key => $arr) {
                echo "<tr>";
                foreach ($arr as $key => $value) {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
        <br>
        <table>
            <tr>
                <th>Name</th>
                <th>Stock</th>
                <th>Sold</th>
            </tr>
            <?php
            function vtd($arr){
                return "<td>".join("</td><td>", $arr)."</td>";
            }
            echo "<tr>".join("</tr><tr>", array_map("vtd", $data))."</tr>";
            ?>
        </table>
    </body>
    </html>
