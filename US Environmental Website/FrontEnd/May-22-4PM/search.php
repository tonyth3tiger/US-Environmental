<?php
    $connect = mysqli_connect('localhost', 'root', 'toor', 'test');
if( $connect ){
    echo 'Yes. It is working';
$search = $_POST['search'];
if(!empty($search)){
    $query = "SELECT * FROM cars WHERE cars LIKE '$search%'";
    $search_query = mysqli_query($connect, $query);
    if(!$search_query){
       // die('QUERY FAILED' . mysqli_error($connect));
    }
    while( $row = mysqli_fetch_array($search_query) ){
        $brand = $row['cars'];
        ?>

        <ul class="list-unstyled">
            <?php echo "<li>{$brand}</li>"?>


        </ul>
    <?php
    }
}
