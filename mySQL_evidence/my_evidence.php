<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- tailwind and daisyUI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>MY evidence Database</title>
    <style>
        html {
            background-color: #F3E2D4;
        }
    </style>
</head>

<body class="my-8">
    <?php
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'mahidul_company';
    $conn = new mysqli($host_name, $user_name, $password, $database);
    if ($conn->connect_error) {
        die("connection failed" . $conn->connect_error);
    }
    ;

    ?>
    <?php
    if (isset($_POST["submit_btn"])) {
        $m_name = $_POST["manufec_name"];
        $m_add = $_POST["manufec_add"];
        $m_cont = $_POST["manufec_contact"];

        $conn->query("call add_manufec_info('$m_name','$m_add','$m_cont')");

    }
    ;

    ?>
    <?php
    if (isset($_POST["submit_btn_prod_tble"])) {
        $p_name = $_POST["prod_name"];
        $p_price = $_POST["prod_price"];
        $manu_id = $_POST["manufec_id"];
        $conn->query("call add_product_info('$p_name','$p_price','$manu_id')");
    }
    ;

    if (isset($_POST["delmanufact"])) {
        $m_id = $_POST["manufac"];
        $conn->query("DELETE from manufacturer_info WHERE id='$m_id'");
    }
    ;

    ?>
    <!-- container for forms  -->
    <div class="flex justify-evenly mt-8">


        <!-- form for adding data to manufec. table   -->
        <div class="bg-[#C5B0CD] p-8 rounded-lg">

            <h3 class="text-2xl mb-2">Adding Data in Manufacturer Table</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">

                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Name of the Manufacturer:</legend>
                    <input type="text" class="input" placeholder="Type here" name="manufec_name" />

                </fieldset>


                <fieldset class="fieldset">
                    <legend class="fieldset-legend"> Address of the Manufacturer:</legend>
                    <input type="text" class="input" placeholder="Type here" name="manufec_add" />

                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend"> Contact No. of the Manufacturer: </legend>
                    <input type="text" class="input" placeholder="Type here" name="manufec_contact" />

                </fieldset>

                <button class="btn border-none bg-[#415E72] text-white mt-2" type="submit"
                    name="submit_btn">Submit</button>
            </form>
        </div>

        <!-- form for adding data to Product. table   -->
        <div class="bg-[#C5B0CD] p-8 rounded-lg">

            <h3 class="text-2xl mb-2">Adding Data in Product Table</h3>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">


                <fieldset class="fieldset">
                    <legend class="fieldset-legend">Name of the Product:</legend>
                    <input type="text" class="input" placeholder="Type here" name="prod_name" />

                </fieldset>

                <fieldset class="fieldset">
                    <legend class="fieldset-legend"> Price of the Product: </legend>
                    <input type="text" class="input" placeholder="Type here" name="prod_price" />

                </fieldset>


                <fieldset class="fieldset">
                    <legend class="fieldset-legend"> Name of the manufecture: </legend>
                    <select class="select focus:outline-none" name="manufec_id">
                        <?php
                        $my_query = "SELECT * FROM manufacturer_info";
                        $manufec_id = $conn->query($my_query);
                        while (list($m_id, $m_name) = $manufec_id->fetch_row()) {
                            echo "<option value='$m_id'>$m_name </option>";
                        }
                        ;
                        ?>
                    </select>

                </fieldset>

                <button class="btn border-none bg-[#415E72] text-white mt-2" type="submit"
                    name="submit_btn_prod_tble">Submit</button>
            </form>
        </div>


        <!-- after delete trigger -->
        <div class="bg-[#C5B0CD] p-8 rounded-lg">

            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <h3 class="text-2xl mb-2">Delete manufecture</h3>
                <fieldset class="fieldset">

                    <select class="select focus:outline-none" name="manufac">
                        <?php
                        $manufac = $conn->query("SELECT * FROM manufacturer_info");
                        while (list($_mid, $_mname) = $manufac->fetch_row()) {
                            echo "<option value='$_mid'>$_mname</option>";
                        }
                        ?>
                    </select>

                </fieldset>

                <button class="btn border-none bg-[#415E72] text-white mt-2" type="submit"
                    name="delmanufact">Delete</button>



            </form>
        </div>
    </div>
    <!-- viewing prodouct in the table   -->
    <div class="px-5">

        <h3 class="text-2xl mb-2 text-center mt-10 font-bold">Product and Manufacturer Information Table</h3>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 mt-2">
            <table class="table">
                <tr>
                    <th>Manufacturer Name</th>
                    <th>Manufacturer Address</th>
                    <th>Manufacturer Contact</th>
                    <th>Product Name</th>
                    <th>Product Price</th>

                </tr>
                <?php
                $show_all = $conn->query("SELECT * FROM all_table_info");
                while (list($_manuf_name, $_manuf_add, $_manufac_cont, $_prod_name, $_prod_price) = $show_all->fetch_row()) {
                    echo "<tr> 
                 <td> $_manuf_name</td>
                 <td> $_manuf_add</td>
                 <td> $_manufac_cont</td>
                 <td> $_prod_name</td>
                 <td> $_prod_price</td>
             
             </tr>";

                }
                ;
                ?>
            </table>

        </div>
    </div>

    <!-- viewing prodouct in the table   -->
    <div class="px-5">
        <h3 class="text-2xl mb-2 text-center mt-10 font-bold">Product Priced More than 5000</h3>
        <div class="overflow-x-auto rounded-box border border-base-content/5 bg-base-100 mt-2">

            <table class="table">
                <tr>
                    <th>Manufacturer Name</th>
                    <th>Manufacturer Address</th>
                    <th>Manufacturer Contact</th>
                    <th>Product Name</th>
                    <th>Product Price</th>

                </tr>
                <?php
                $show_all = $conn->query("SELECT * FROM more_than_five");
                while (list($_manuf_name, $_manuf_add, $_manufac_cont, $_prod_name, $_prod_price) = $show_all->fetch_row()) {
                    echo "<tr> 
                            <td> $_manuf_name</td>
                            <td> $_manuf_add</td>
                            <td> $_manufac_cont</td>
                            <td> $_prod_name</td>
                            <td> $_prod_price</td>
                        
                        </tr>";

                }
                ;
                ?>
            </table>
        </div>
    </div>

</body>

</html>