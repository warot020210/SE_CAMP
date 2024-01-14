<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiple Table</title>
    <style>
        *{
            font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        body{
            background-image: url('https://media1.giphy.com/media/3oKIPgeKwsjc6VCOxq/giphy.gif?cid=ecf05e47iqyjn56bt9rnoy685ko27yioffwgz6gkquqrtvp2&ep=v1_gifs_related&rid=giphy.gif&ct=g');
            background-size:cover;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #313131;

        }
        h1{
            color: #ffffff;
            font-weight: bolder;
            font-size: 45pt;
            text-align: center;
            text-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            border: #0952b1 solid 2px;
            background-color: #535353;
            width: 400px;
            box-shadow: 0px 0px 15px 5px rgba(0, 0, 0, 0.1);
        }
        table {
            color: #ffffff;
            background-color: #4b4b4b;
            border: #6188a8 solid 2px;
            width: 400px;
        }
        table:hover{
            background-color: #e2ffff;
            color: #ff5100;
            transition: all 0.5s;
        }
        td{
            font-size: 30pt;
            height: 60px;
            width: 120px;
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Multiple <?php echo $myinput; ?></h1>
    <div>
        <?php
        $value = 0;
        for ($i=1; $i <= 24; $i++) {
            $value = $myinput * $i;
            echo "
                    <table>
                        <tbody>
                            <tr>
                                <td>$myinput</td>
                                <td>x</td>
                                <td>$i</td>
                                <td>=</td>
                                <td>$value</td>
                            </tr>
                        </tbody>
                    </table>";
        }
        ?>
    </div>
</body>
</html>
