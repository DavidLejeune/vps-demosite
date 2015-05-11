<?php
    
 
    include('header.php');   
    
    //$DBH = new PDO("mysql:host=localhost;dbname=vps_info","root","");
    $STH = $DBH->query("SELECT * FROM info WHERE id=$page_id");
    //$STH->setFetchMode(PDO::FETCH_ASSOC);


    $result = $STH->fetch();

?>


        <section>
            <h2><?php echo $result['title'] ?></h2>
            <img src="<?php echo $result['img'] ?>">
            <?php echo $result['text'] ?>
        </section>
        <section class="features">
            <ul>
                <?php               
                    $STH = $DBH->query("SELECT value FROM specs WHERE info_id = $page_id");
                    //$STH->setFetchMode(PDO::FETCH_ASSOC);

                    while($row = $STH->fetch())
                    {
                        echo "<li>".$row['value']."</li>";
                    }

                ?>
            </ul>
            <ul>
                <?php               
                    $STH = $DBH->query("SELECT value FROM os WHERE info_id = $page_id");
                    //$STH->setFetchMode(PDO::FETCH_ASSOC);

                    while($row = $STH->fetch())
                    {
                        echo "<li>".$row['value']."</li>";
                    }

                ?>
            </ul>
        </section>
        <section>
            <table>
                <tr>
                    <th>VPS pro 1</th>
                    <th>VPS pro 2</th>
                    <th>VPS pro 3</th>
                    <th>VPS pro 4</th>
                    <th>VPS pro 5</th>
                </tr>
                <tr>
                    <td><b>256 MB</b> RAM</td>
                    <td><b>512 MB</b> RAM</td>
                    <td><b>1 GB</b> RAM</td>
                    <td><b>2 GB</b> RAM</td>
                    <td><b>4 GB</b> RAM</td>
                </tr>
                <tr class="even">
                    <td><b>25 GB</b> diskspace</td>
                    <td><b>50 GB</b> diskspace</td>
                    <td><b>100 GB</b> diskspace</td>
                    <td><b>200 GB</b> diskspace</td>
                    <td><b>400 GB</b> diskspace</td>
                </tr>
                <tr>
                    <td><b>250 GB</b> traffic</td>
                    <td><b>500 GB</b> traffic</td>
                    <td><b>1000 GB</b> traffic</td>
                    <td><b>2000 GB</b> traffic</td>
                    <td><b>4000 GB</b> traffic</td>
                </tr>
                <tr class="even">
                    <td><b>&euro; 50</b> setup</td>
                    <td><b>&euro; 50</b> setup</td>
                    <td><b>&euro; 50</b> setup</td>
                    <td><b>&euro; 50</b> setup</td>
                    <td><b>&euro; 50</b> setup</td>
                </tr>
                <tr>
                    <td><b>&euro; 20</b> p/m</td>
                    <td><b>&euro; 30</b> p/m</td>
                    <td><b>&euro; 50</b> p/m</td>
                    <td><b>&euro; 80</b> p/m</td>
                    <td><b>&euro; 100</b> p/m</td>
                </tr>
                <tr class="even order">
                    <td><button>Order</button></td>
                    <td><button>Order</button></td>
                    <td><button>Order</button></td>
                    <td><button>Order</button></td>
                    <td><button>Order</button></td>
                </tr>
            </table>
        </section>
        <footer>
            Copyright &copy; 2013
        </footer>
    </div>
</body>
</html>