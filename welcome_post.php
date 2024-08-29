<html>
<body>
    Name= <?php echo $_POST["input1"]; ?><br>
    Telephone= <?php echo $_POST["input2"]; ?><br>
    Email= <?php echo $_POST["input3"]; ?><br>
    Age= <?php echo $_POST["input4"]; ?><br>

    <?php 
            if(isset($_POST["vehicle"])) {
                foreach($_POST["vehicle"] as $vehicle) {
                    echo $vehicle . ", ";
                }
            } else {
                echo "ไม่มีข้อมูล";
            }
        ?>
    </p>
     
</body>
</html>