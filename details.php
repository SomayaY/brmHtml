<!DOCTYPE html>

<?php

include_once 'class/robot.class.php';

// session_start();
// if (!isset($_SESSION["UserName"])) {
//     header("Location: login.php");
//     exit;
// }



// $chemistRobot = new Robot(
//     'chemist',
//     'chemist',
//     array('do yo do an Experiences?', 'what type of experence you do?'),
//     array('yes', 'Chemical experiments')
// );

// $coderRobot = new Robot(
//     'coder',
//     'code',
//     array('what type of progtamming do you write?'),
//     array("anythigs")
// );

// $faheemRobot = new Robot(
//     'Faheem',
//     'math',
//     array('are you smart?'),
//     array("sure")
// );

// $sportsmanRobot = new Robot(
//     'sportsman',
//     'sport',
//     array('do you love socer?'),
//     array("yes")
// );

// $robots = [$chemistRobot, $coderRobot, $faheemRobot, $sportsmanRobot];

// foreach($robots as $value => $r){

//      echo  $r .'<br>';

// }




?>
<html class='h-100'>

<head>
    <title>Robot Website</title>
    <link rel='stylesheet' href='vendors/bootstrap/css/bootstrap.min.css'>
    <script src="vendors/jquery/jquery-3.7.0.min.js"></script>
    <script src='vendors/bootstrap/js/bootstrap.bundle.min.js'></script>
    <link rel='stylesheet' href='index.css'>
    <script src="script.js"></script>
</head>

<body class='d-flex flex-column  h-100'>
<?php include_once 'layout/header.php';
include_once 'robotint.php'; ?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h1 id="title">Robots that supported by our site !</h1>
                    <table class="whole-table">
                        <tr class="header-table text-center"><!--table row-->
                            <th id="tit"> Robot chemist</th><!--table header-->
                            <th id="tit"> Robot coder</th>
                            <th id="tit"> Robot faheem</th>
                            <th id="tit"> Robot sportsman</th>
                        </tr>
                        <tr class="row1"><!--table row-->
                            <td class="img"> <a href="img/chemist.png" target="_blank">
                                    <img src="img/chemist.png" />
                                </a></td><!--table data-->
                            <td class="img"> <a href="img/coder.png" target="_blank">
                                    <img src="img/coder.png" />
                                </a></td>
                            <td class="img"> <a href="img/faheem.png" target="_blank">
                                    <img src="img/faheem.png" />
                                </a></td>
                            <td class="img"> <a href="img/sportsman.png" target="_blank">
                                    <img src="img/sportsman.png" />
                                </a></td>
                        </tr>
                        <!-- <tr class="row2">
                        <td>
                            <ul>
                                <li>Chemistry specialist</li>
                                <li>Do chemical experiments</li>
                                <li>Do research</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>differentiate between languages</li>
                                <li>Write codes</li>
                                <li>Software builds</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Specialized in most fields</li>
                                <li>Issuing reports</li>
                                <li>finds errors</li>
                            </ul>
                        </td>
                        <td>
                            <ul>
                                <li>Specialized in the sports field</li>
                                <li>Sports tips</li>
                                <li>Provides a healthy schedule</li>
                            </ul>
                        </td>
                    </tr> -->
                        <tr class="row2">
                            <td><button class="inspection">inspection</button></td>
                            <td><button class="inspection">inspection</button></td>
                            <td><button class="inspection">inspection</button></td>
                            <td><button class="inspection">inspection</button></td>
                        </tr>
                    </table>

                    <table>
                        <tr>
                            <th>The first group</th>
                            <th>the second group</th>
                        </tr>
                        <?php for ($i = 0; $i < sizeof($robots); $i++) { ?>
                            <?php if ($i % 2 == 0) {
                                echo "<tr>";
                            } ?>
                            <td>
                                <ul>
                                    <li>
                                        <?php echo $robots[$i]->name ?>
                                    </li>
                                    <li>
                                        <?php echo $robots[$i]->type ?>
                                    </li>
                                </ul>
                            </td>

                            <?php if ($i % 2 == 1) {
                                echo "</tr>";
                            } ?>

                        <?php } ?>
                    </table>
                </div>

                <div class="form col-sm-4">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name='email' placeholder="email">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name='passs' placeholder="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>


        </div>
    </main>

    <?php include_once 'layout/footer.php'; ?>

</body>

</html>