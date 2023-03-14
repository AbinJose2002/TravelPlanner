<link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<?php
require('../db/conn.php');
$id = $_GET['id'];
echo $id;
$sql = "select * from agent where aid=$id";
$result = mysqli_query($conn, $sql);
if($result){
    $row = mysqli_fetch_array($result);
}else{

}
$img = $row['profile'];
$pack_sql = "select * from package where aid=$id";
$pack_result = mysqli_query($conn, $pack_sql);
?>

<body>

<!-- dashboard top -->
    <div class="dash">
        <div class="dash-head">
            <div class="dash-user">
                <?php echo"<img src='./assets/$img'>"; ?>
                <h1 class="greet">Hi <?php echo $row['fname'];?></h1>
            </div>
            <div class="dash-profile">
                <a href="">Profile</a><a href="./login.php">Logout</a>
            </div>
        </div>
    </div>

    <section class="main-dash">
        <table class="myTable">
            <thead>
                <tr>
                    <th>Place Id</th>
                    <th>Place</th>
                    <th>Operations</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    while($row = mysqli_fetch_array($pack_result)){
                        echo "<tr>
                        <td>$row[0]</td>
                        <td>$row[1]</td>";?>
                        
                        <td>
                            <div class='btn-group' role='group' aria-label='Basic example'>
                        

                                <!-- <button type='button' class='btn btn-danger' onclick="if (confirm('Are you sure you want to leave this page?')) { location.href='./delete.php?id=$pid;'; }">Delete</button> -->
                                <a href="./delete.php?id=<?php echo $id?>" class="btn btn-danger">Delete</a>
                                <button type='button' class='btn btn-success'>Report</button>
                                <button type='button' class='btn btn-primary'>Edit</button>
                            </div>
                        </td><?php echo"
                        </tr>";
                    }
                ?>
            </tbody>

        </table>
    </section>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    $(document).ready( function () {
        $('.myTable').DataTable();
    } );
</script>


</body>

<style>

    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .dash-head{
        padding: 2em 3em;
        display: flex;
        align-items: center;
    }

    .dash-head img{
        border-radius: 50px;
        width:5em;
        margin-right: 2em;
        height:5em;
    }

    .dash{
        width: 80%;
        margin: 0 auto;
        border-bottom: 2px solid;
    }

    .dash-user, .dash-profile{
        width: 50%;
        display: flex;
        align-items: center;
    }

    .dash-profile{
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .dash-profile a{
        color: black;
        text-decoration: none;
        font-size: 2em;
    }

    .main-dash{
        padding: 3em 12em;
        width: 80%;
        height: auto;
        margin: 0 auto;
    }

    

</style>