<div class="page-heading">
           <h3>
             <?php echo $adminclass->adminTekveri($db,"adi", $_GET['id']);?>
            </h3>
            <ul class="breadcrumb">
                <li>
                    <a href="index.php">Etusivu</a>
                </li>
              <li class="active"><?php echo $adminclass->adminTekveri($db,"adi", $_GET['id']);?> | <a onClick="javascript:history.go(-1)">Palautus</a></li>
            </ul>


            </div>

        <!-- page heading end-->
