<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "This is a local test <br>";
    function localTest()
    {
        $x = 1;  //THIS IS A LOCAL SCOPE
        echo "$x";
    }
    localTest();

    echo "This is a global test <br>";
    $x = 5; //THIS IS A GLOBAL VARIABLE
    $y = 10;

    // function test(){
    //     global $x, $y, $result;  //accessing the global variable using the keyboard global
    //     $result = $x+$y;

    // }
    // test();
    // echo $result;

    // OR

    function mytest()
    {
        $GLOBALS['result'] = $GLOBALS['x'] + $GLOBALS['y'];
    }
    mytest();
    echo $result;


    echo "This is a static Test <br>";
    // Using Static key for static scope
    function staticTest()
    {
        static $x = 1;
        echo $x;
        $x++;
    }
    staticTest();
    staticTest();
    staticTest();


    ?>

</body>

</html>