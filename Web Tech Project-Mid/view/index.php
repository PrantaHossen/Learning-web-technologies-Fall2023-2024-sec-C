<?php

session_start();

//Session to store fare value 
$_SESSION['Fare'] = "";
$FareCollector = $_SESSION['Fare'];

if (isset($_POST['Fare'])) //Fare calculation 
{
    $far = $_POST['Former']; //For From 
    $der = $_POST['Toto']; //For To
    $typer = $_POST['Typer']; //For type

    //Storing from to and type for Dhaka 
    $dhakasmall = $far == 'DHAKA' && $der == 'DHAKA' && $typer == 'Small';
    $dhakamedium = $far == 'DHAKA' && $der == 'DHAKA' && $typer == 'Medium';
    $dhakaLarge = $far == 'DHAKA' && $der == 'DHAKA' && $typer == 'Large';

    $dhakaCsmall = $far == 'DHAKA' && $der == 'CHITTAGONG' && $typer == 'Small';
    $dhakaCmedium = $far == 'DHAKA' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $dhakaCLarge = $far == 'DHAKA' && $der == 'CHITTAGONG' && $typer == 'Large';

    $dhakaRsmall = $far == 'DHAKA' && $der == 'RAJSHAHI' && $typer == 'Small';
    $dhakaRmedium = $far == 'DHAKA' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $dhakaRLarge = $far == 'DHAKA' && $der == 'RAJSHAHI' && $typer == 'Large';

    $dhakaKsmall = $far == 'DHAKA' && $der == 'KHULNA' && $typer == 'Small';
    $dhakaKmedium = $far == 'DHAKA' && $der == 'KHULNA' && $typer == 'Medium';
    $dhakaKLarge = $far == 'DHAKA' && $der == 'KHULNA' && $typer == 'Large';

    $dhakaBsmall = $far == 'DHAKA' && $der == 'BARISHAL' && $typer == 'Small';
    $dhakaBmedium = $far == 'DHAKA' && $der == 'BARISHAL' && $typer == 'Medium';
    $dhakaBLarge = $far == 'DHAKA' && $der == 'BARISHAL' && $typer == 'Large';

    $dhakaSsmall = $far == 'DHAKA' && $der == 'SYLHET' && $typer == 'Small';
    $dhakaSmedium = $far == 'DHAKA' && $der == 'SYLHET' && $typer == 'Medium';
    $dhakaSLarge = $far == 'DHAKA' && $der == 'SYLHET' && $typer == 'Large';

    $dhakaRansmall = $far == 'DHAKA' && $der == 'RANGPUR' && $typer == 'Small';
    $dhakaRanmedium = $far == 'DHAKA' && $der == 'RANGPUR' && $typer == 'Medium';
    $dhakaRanLarge = $far == 'DHAKA' && $der == 'RANGPUR' && $typer == 'Large';

    $dhakaMsmall = $far == 'DHAKA' && $der == 'MYMANSINGH' && $typer == 'Small';
    $dhakaMmedium = $far == 'DHAKA' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $dhakaMLarge = $far == 'DHAKA' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Chittagong 

    $Ctgsmall = $far == 'CHITTAGONG' && $der == 'DHAKA' && $typer == 'Small';
    $Ctgmedium = $far == 'CHITTAGONG' && $der == 'DHAKA' && $typer == 'Medium';
    $CtgLarge = $far == 'CHITTAGONG' && $der == 'DHAKA' && $typer == 'Large';

    $CtgCsmall = $far == 'CHITTAGONG' && $der == 'CHITTAGONG' && $typer == 'Small';
    $CtgCmedium = $far == 'CHITTAGONG' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $CtgCLarge = $far == 'CHITTAGONG' && $der == 'CHITTAGONG' && $typer == 'Large';

    $CtgRsmall = $far == 'CHITTAGONG' && $der == 'RAJSHAHI' && $typer == 'Small';
    $CtgRmedium = $far == 'CHITTAGONG' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $CtgRLarge = $far == 'CHITTAGONG' && $der == 'RAJSHAHI' && $typer == 'Large';

    $CtgKsmall = $far == 'CHITTAGONG' && $der == 'KHULNA' && $typer == 'Small';
    $CtgKmedium = $far == 'CHITTAGONG' && $der == 'KHULNA' && $typer == 'Medium';
    $CtgKLarge = $far == 'CHITTAGONG' && $der == 'KHULNA' && $typer == 'Large';

    $CtgBsmall = $far == 'CHITTAGONG' && $der == 'BARISHAL' && $typer == 'Small';
    $CtgBmedium = $far == 'CHITTAGONG' && $der == 'BARISHAL' && $typer == 'Medium';
    $CtgBLarge = $far == 'CHITTAGONG' && $der == 'BARISHAL' && $typer == 'Large';

    $CtgSsmall = $far == 'CHITTAGONG' && $der == 'SYLHET' && $typer == 'Small';
    $CtgSmedium = $far == 'CHITTAGONG' && $der == 'SYLHET' && $typer == 'Medium';
    $CtgSLarge = $far == 'CHITTAGONG' && $der == 'SYLHET' && $typer == 'Large';

    $CtgRansmall = $far == 'CHITTAGONG' && $der == 'RANGPUR' && $typer == 'Small';
    $CtgRanmedium = $far == 'CHITTAGONG' && $der == 'RANGPUR' && $typer == 'Medium';
    $CtgRanLarge = $far == 'CHITTAGONG' && $der == 'RANGPUR' && $typer == 'Large';

    $CtgMsmall = $far == 'CHITTAGONG' && $der == 'MYMANSINGH' && $typer == 'Small';
    $CtgMmedium = $far == 'CHITTAGONG' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $CtgMLarge = $far == 'CHITTAGONG' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Rajshahi 

    $Rajsmall = $far == 'RAJSHAHI' && $der == 'DHAKA' && $typer == 'Small';
    $Rajmedium = $far == 'RAJSHAHI' && $der == 'DHAKA' && $typer == 'Medium';
    $RajLarge = $far == 'RAJSHAHI' && $der == 'DHAKA' && $typer == 'Large';

    $RajCsmall = $far == 'RAJSHAHI' && $der == 'CHITTAGONG' && $typer == 'Small';
    $RajCmedium = $far == 'RAJSHAHI' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $RajCLarge = $far == 'RAJSHAHI' && $der == 'CHITTAGONG' && $typer == 'Large';

    $RajRsmall = $far == 'RAJSHAHI' && $der == 'RAJSHAHI' && $typer == 'Small';
    $RajRmedium = $far == 'RAJSHAHI' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $RajRLarge = $far == 'RAJSHAHI' && $der == 'RAJSHAHI' && $typer == 'Large';

    $RajKsmall = $far == 'RAJSHAHI' && $der == 'KHULNA' && $typer == 'Small';
    $RajKmedium = $far == 'RAJSHAHI' && $der == 'KHULNA' && $typer == 'Medium';
    $RajKLarge = $far == 'RAJSHAHI' && $der == 'KHULNA' && $typer == 'Large';

    $RajBsmall = $far == 'RAJSHAHI' && $der == 'BARISHAL' && $typer == 'Small';
    $RajBmedium = $far == 'RAJSHAHI' && $der == 'BARISHAL' && $typer == 'Medium';
    $RajBLarge = $far == 'RAJSHAHI' && $der == 'BARISHAL' && $typer == 'Large';

    $RajSsmall = $far == 'RAJSHAHI' && $der == 'SYLHET' && $typer == 'Small';
    $RajSmedium = $far == 'RAJSHAHI' && $der == 'SYLHET' && $typer == 'Medium';
    $RajSLarge = $far == 'RAJSHAHI' && $der == 'SYLHET' && $typer == 'Large';

    $RajRansmall = $far == 'RAJSHAHI' && $der == 'RANGPUR' && $typer == 'Small';
    $RajRanmedium = $far == 'RAJSHAHI' && $der == 'RANGPUR' && $typer == 'Medium';
    $RajRanLarge = $far == 'RAJSHAHI' && $der == 'RANGPUR' && $typer == 'Large';

    $RajMsmall = $far == 'RAJSHAHI' && $der == 'MYMANSINGH' && $typer == 'Small';
    $RajMmedium = $far == 'RAJSHAHI' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $RajMLarge = $far == 'RAJSHAHI' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Khulna 

    $Khulsmall = $far == 'KHULNA' && $der == 'DHAKA' && $typer == 'Small';
    $Khulmedium = $far == 'KHULNA' && $der == 'DHAKA' && $typer == 'Medium';
    $KhulLarge = $far == 'KHULNA' && $der == 'DHAKA' && $typer == 'Large';

    $KhulCsmall = $far == 'KHULNA' && $der == 'CHITTAGONG' && $typer == 'Small';
    $KhulCmedium = $far == 'KHULNA' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $KhulCLarge = $far == 'KHULNA' && $der == 'CHITTAGONG' && $typer == 'Large';

    $KhulRsmall = $far == 'KHULNA' && $der == 'RAJSHAHI' && $typer == 'Small';
    $KhulRmedium = $far == 'KHULNA' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $KhulRLarge = $far == 'KHULNA' && $der == 'RAJSHAHI' && $typer == 'Large';

    $KhulKsmall = $far == 'KHULNA' && $der == 'KHULNA' && $typer == 'Small';
    $KhulKmedium = $far == 'KHULNA' && $der == 'KHULNA' && $typer == 'Medium';
    $KhulKLarge = $far == 'KHULNA' && $der == 'KHULNA' && $typer == 'Large';

    $KhulBsmall = $far == 'KHULNA' && $der == 'BARISHAL' && $typer == 'Small';
    $KhulBmedium = $far == 'KHULNA' && $der == 'BARISHAL' && $typer == 'Medium';
    $KhulBLarge = $far == 'KHULNA' && $der == 'BARISHAL' && $typer == 'Large';

    $KhulSsmall = $far == 'KHULNA' && $der == 'SYLHET' && $typer == 'Small';
    $KhulSmedium = $far == 'KHULNA' && $der == 'SYLHET' && $typer == 'Medium';
    $KhulSLarge = $far == 'KHULNA' && $der == 'SYLHET' && $typer == 'Large';

    $KhulRansmall = $far == 'KHULNA' && $der == 'RANGPUR' && $typer == 'Small';
    $KhulRanmedium = $far == 'KHULNA' && $der == 'RANGPUR' && $typer == 'Medium';
    $KhulRanLarge = $far == 'KHULNA' && $der == 'RANGPUR' && $typer == 'Large';

    $KhulMsmall = $far == 'KHULNA' && $der == 'MYMANSINGH' && $typer == 'Small';
    $KhulMmedium = $far == 'KHULNA' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $KhulMLarge = $far == 'KHULNA' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Barishal

    $Barismall = $far == 'BARISHAL' && $der == 'DHAKA' && $typer == 'Small';
    $Barimedium = $far == 'BARISHAL' && $der == 'DHAKA' && $typer == 'Medium';
    $BariLarge = $far == 'BARISHAL' && $der == 'DHAKA' && $typer == 'Large';

    $BariCsmall = $far == 'BARISHAL' && $der == 'CHITTAGONG' && $typer == 'Small';
    $BariCmedium = $far == 'BARISHAL' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $BariCLarge = $far == 'BARISHAL' && $der == 'CHITTAGONG' && $typer == 'Large';

    $BariRsmall = $far == 'BARISHAL' && $der == 'RAJSHAHI' && $typer == 'Small';
    $BariRmedium = $far == 'BARISHAL' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $BariRLarge = $far == 'BARISHAL' && $der == 'RAJSHAHI' && $typer == 'Large';

    $BariKsmall = $far == 'BARISHAL' && $der == 'KHULNA' && $typer == 'Small';
    $BariKmedium = $far == 'BARISHAL' && $der == 'KHULNA' && $typer == 'Medium';
    $BariKLarge = $far == 'BARISHAL' && $der == 'KHULNA' && $typer == 'Large';

    $BariBsmall = $far == 'BARISHAL' && $der == 'BARISHAL' && $typer == 'Small';
    $BariBmedium = $far == 'BARISHAL' && $der == 'BARISHAL' && $typer == 'Medium';
    $BariBLarge = $far == 'BARISHAL' && $der == 'BARISHAL' && $typer == 'Large';

    $BariSsmall = $far == 'BARISHAL' && $der == 'SYLHET' && $typer == 'Small';
    $BariSmedium = $far == 'BARISHAL' && $der == 'SYLHET' && $typer == 'Medium';
    $BariSLarge = $far == 'BARISHAL' && $der == 'SYLHET' && $typer == 'Large';

    $BariRansmall = $far == 'BARISHAL' && $der == 'RANGPUR' && $typer == 'Small';
    $BariRanmedium = $far == 'BARISHAL' && $der == 'RANGPUR' && $typer == 'Medium';
    $BariRanLarge = $far == 'BARISHAL' && $der == 'RANGPUR' && $typer == 'Large';

    $BariMsmall = $far == 'BARISHAL' && $der == 'MYMANSINGH' && $typer == 'Small';
    $BariMmedium = $far == 'BARISHAL' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $BariMLarge = $far == 'BARISHAL' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Sylhet 

    $Sysmall = $far == 'SYLHET' && $der == 'DHAKA' && $typer == 'Small';
    $Symedium = $far == 'SYLHET' && $der == 'DHAKA' && $typer == 'Medium';
    $SyLarge = $far == 'SYLHET' && $der == 'DHAKA' && $typer == 'Large';

    $SyCsmall = $far == 'SYLHET' && $der == 'CHITTAGONG' && $typer == 'Small';
    $SyCmedium = $far == 'SYLHET' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $SyCLarge = $far == 'SYLHET' && $der == 'CHITTAGONG' && $typer == 'Large';

    $SyRsmall = $far == 'SYLHET' && $der == 'RAJSHAHI' && $typer == 'Small';
    $SyRmedium = $far == 'SYLHET' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $SyRLarge = $far == 'SYLHET' && $der == 'RAJSHAHI' && $typer == 'Large';

    $SyKsmall = $far == 'SYLHET' && $der == 'KHULNA' && $typer == 'Small';
    $SyKmedium = $far == 'SYLHET' && $der == 'KHULNA' && $typer == 'Medium';
    $SyKLarge = $far == 'SYLHET' && $der == 'KHULNA' && $typer == 'Large';

    $SyBsmall = $far == 'SYLHET' && $der == 'BARISHAL' && $typer == 'Small';
    $SyBmedium = $far == 'SYLHET' && $der == 'BARISHAL' && $typer == 'Medium';
    $SyBLarge = $far == 'SYLHET' && $der == 'BARISHAL' && $typer == 'Large';

    $SySsmall = $far == 'SYLHET' && $der == 'SYLHET' && $typer == 'Small';
    $SySmedium = $far == 'SYLHET' && $der == 'SYLHET' && $typer == 'Medium';
    $SySLarge = $far == 'SYLHET' && $der == 'SYLHET' && $typer == 'Large';

    $SyRansmall = $far == 'SYLHET' && $der == 'RANGPUR' && $typer == 'Small';
    $SyRanmedium = $far == 'SYLHET' && $der == 'RANGPUR' && $typer == 'Medium';
    $SyRanLarge = $far == 'SYLHET' && $der == 'RANGPUR' && $typer == 'Large';

    $SyMsmall = $far == 'SYLHET' && $der == 'MYMANSINGH' && $typer == 'Small';
    $SyMmedium = $far == 'SYLHET' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $SyMLarge = $far == 'SYLHET' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Rangpur 

    $Rangsmall = $far == 'RANGPUR' && $der == 'DHAKA' && $typer == 'Small';
    $Rangmedium = $far == 'RANGPUR' && $der == 'DHAKA' && $typer == 'Medium';
    $RangLarge = $far == 'RANGPUR' && $der == 'DHAKA' && $typer == 'Large';

    $RangCsmall = $far == 'RANGPUR' && $der == 'CHITTAGONG' && $typer == 'Small';
    $RangCmedium = $far == 'RANGPUR' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $RangCLarge = $far == 'RANGPUR' && $der == 'CHITTAGONG' && $typer == 'Large';

    $RangRsmall = $far == 'RANGPUR' && $der == 'RAJSHAHI' && $typer == 'Small';
    $RangRmedium = $far == 'RANGPUR' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $RangRLarge = $far == 'RANGPUR' && $der == 'RAJSHAHI' && $typer == 'Large';

    $RangKsmall = $far == 'RANGPUR' && $der == 'KHULNA' && $typer == 'Small';
    $RangKmedium = $far == 'RANGPUR' && $der == 'KHULNA' && $typer == 'Medium';
    $RangKLarge = $far == 'RANGPUR' && $der == 'KHULNA' && $typer == 'Large';

    $RangBsmall = $far == 'RANGPUR' && $der == 'BARISHAL' && $typer == 'Small';
    $RangBmedium = $far == 'RANGPUR' && $der == 'BARISHAL' && $typer == 'Medium';
    $RangBLarge = $far == 'RANGPUR' && $der == 'BARISHAL' && $typer == 'Large';

    $RangSsmall = $far == 'RANGPUR' && $der == 'SYLHET' && $typer == 'Small';
    $RangSmedium = $far == 'RANGPUR' && $der == 'SYLHET' && $typer == 'Medium';
    $RangSLarge = $far == 'RANGPUR' && $der == 'SYLHET' && $typer == 'Large';

    $RangRansmall = $far == 'RANGPUR' && $der == 'RANGPUR' && $typer == 'Small';
    $RangRanmedium = $far == 'RANGPUR' && $der == 'RANGPUR' && $typer == 'Medium';
    $RangRanLarge = $far == 'RANGPUR' && $der == 'RANGPUR' && $typer == 'Large';

    $RangMsmall = $far == 'RANGPUR' && $der == 'MYMANSINGH' && $typer == 'Small';
    $RangMmedium = $far == 'RANGPUR' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $RangMLarge = $far == 'RANGPUR' && $der == 'MYMANSINGH' && $typer == 'Large';

    //Storing from to and type for Mymensingh 

    $Mynsmall = $far == 'MYMANSINGH' && $der == 'DHAKA' && $typer == 'Small';
    $Mynmedium = $far == 'MYMANSINGH' && $der == 'DHAKA' && $typer == 'Medium';
    $MynLarge = $far == 'MYMANSINGH' && $der == 'DHAKA' && $typer == 'Large';

    $MynCsmall = $far == 'MYMANSINGH' && $der == 'CHITTAGONG' && $typer == 'Small';
    $MynCmedium = $far == 'MYMANSINGH' && $der == 'CHITTAGONG' && $typer == 'Medium';
    $MynCLarge = $far == 'MYMANSINGH' && $der == 'CHITTAGONG' && $typer == 'Large';

    $MynRsmall = $far == 'MYMANSINGH' && $der == 'RAJSHAHI' && $typer == 'Small';
    $MynRmedium = $far == 'MYMANSINGH' && $der == 'RAJSHAHI' && $typer == 'Medium';
    $MynRLarge = $far == 'MYMANSINGH' && $der == 'RAJSHAHI' && $typer == 'Large';

    $MynKsmall = $far == 'MYMANSINGH' && $der == 'KHULNA' && $typer == 'Small';
    $MynKmedium = $far == 'MYMANSINGH' && $der == 'KHULNA' && $typer == 'Medium';
    $MynKLarge = $far == 'MYMANSINGH' && $der == 'KHULNA' && $typer == 'Large';

    $MynBsmall = $far == 'MYMANSINGH' && $der == 'BARISHAL' && $typer == 'Small';
    $MynBmedium = $far == 'MYMANSINGH' && $der == 'BARISHAL' && $typer == 'Medium';
    $MynBLarge = $far == 'MYMANSINGH' && $der == 'BARISHAL' && $typer == 'Large';

    $MynSsmall = $far == 'MYMANSINGH' && $der == 'SYLHET' && $typer == 'Small';
    $MynSmedium = $far == 'MYMANSINGH' && $der == 'SYLHET' && $typer == 'Medium';
    $MynSLarge = $far == 'MYMANSINGH' && $der == 'SYLHET' && $typer == 'Large';

    $MynRansmall = $far == 'MYMANSINGH' && $der == 'RANGPUR' && $typer == 'Small';
    $MynRanmedium = $far == 'MYMANSINGH' && $der == 'RANGPUR' && $typer == 'Medium';
    $MynRanLarge = $far == 'MYMANSINGH' && $der == 'RANGPUR' && $typer == 'Large';

    $MynMsmall = $far == 'MYMANSINGH' && $der == 'MYMANSINGH' && $typer == 'Small';
    $MynMmedium = $far == 'MYMANSINGH' && $der == 'MYMANSINGH' && $typer == 'Medium';
    $MynMLarge = $far == 'MYMANSINGH' && $der == 'MYMANSINGH' && $typer == 'Large';

    if (isset($_POST['Typer']) && isset($_POST['Former']) && isset($_POST['Toto'])) {
        $size = $_POST['Typer'];
        $From = $_POST['Former'];
        $To = $_POST['Toto'];

        // For small
        if ($dhakasmall == 'True') {
            $FareCollector = '50tk';

        } else if ($CtgCsmall == 'True') {
            $FareCollector = '25tk';

        } else if ($RajRsmall == 'True') {
            $FareCollector = '15tk';

        } else if ($KhulKsmall == 'True') {
            $FareCollector = '18tk';

        } else if ($BariBsmall == 'True') {
            $FareCollector = '15tk';

        } else if ($SySsmall == 'True') {
            $FareCollector = '15tk';

        } else if ($RangRansmall == 'True') {
            $FareCollector = '10tk';

        } else if ($MynMsmall == 'True') {
            $FareCollector = '12tk';

        } else if ($dhakaCsmall == 'True' || $Ctgsmall == 'True') {
            $FareCollector = '100tk';

        } else if ($dhakaRsmall == 'True' || $Rajsmall == 'True') {
            $FareCollector = '90tk';

        } else if ($dhakaKsmall == 'True' || $Khulsmall == 'True') {
            $FareCollector = '80tk';

        } else if ($dhakaBsmall == 'True' || $Barismall == 'True') {
            $FareCollector = '60tk';

        } else if ($dhakaSsmall == 'True' || $Sysmall == 'True') {
            $FareCollector = '70tk';

        } else if ($dhakaRansmall == 'True' || $Rangsmall == 'True') {
            $FareCollector = '110tk';

        } else if ($dhakaMsmall == 'True' || $Mynsmall == 'True') {
            $FareCollector = '50tk';

        } else if ($CtgRsmall == 'True' || $RajCsmall == 'True') {
            $FareCollector = '100tk';

        } else if ($CtgKsmall == 'True' || $KhulCsmall == 'True') {
            $FareCollector = '90tk';

        } else if ($CtgBsmall == 'True' || $BariCsmall == 'True') {
            $FareCollector = '80tk';

        } else if ($CtgSsmall == 'True' || $SyCsmall == 'True') {
            $FareCollector = '60tk';

        } else if ($CtgRansmall == 'True' || $RangCsmall == 'True') {
            $FareCollector = '70tk';

        } else if ($CtgMsmall == 'True' || $MynCsmall == 'True') {
            $FareCollector = '110tk';

        } else if ($RajKsmall == 'True' || $KhulRsmall == 'True') {
            $FareCollector = '100tk';

        } else if ($RajBsmall == 'True' || $BariRsmall == 'True') {
            $FareCollector = '90tk';

        } else if ($RajSsmall == 'True' || $SyRsmall == 'True') {
            $FareCollector = '80tk';

        } else if ($RajRansmall == 'True' || $RangRsmall == 'True') {
            $FareCollector = '60tk';

        } else if ($RajMsmall == 'True' || $MynRsmall == 'True') {
            $FareCollector = '70tk';

        } else if ($KhulBsmall == 'True' || $BariKsmall == 'True') {
            $FareCollector = '40tk';

        } else if ($KhulSsmall == 'True' || $SyKsmall == 'True') {
            $FareCollector = '60tk';

        } else if ($KhulRansmall == 'True' || $RangKsmall == 'True') {
            $FareCollector = '80tk';

        } else if ($KhulMsmall == 'True' || $MynKsmall == 'True') {
            $FareCollector = '70tk';

        } else if ($BariSsmall == 'True' || $SyBsmall == 'True') {
            $FareCollector = '60tk';

        } else if ($BariRansmall == 'True' || $RangBsmall == 'True') {
            $FareCollector = '75tk';

        } else if ($BariMsmall == 'True' || $MynBsmall == 'True') {
            $FareCollector = '55tk';

        } else if ($SyRansmall == 'True' || $RangSsmall == 'True') {
            $FareCollector = '52tk';

        } else if ($SyMsmall == 'True' || $MynSsmall == 'True') {
            $FareCollector = '50tk';

        } else if ($RangMsmall == 'True' || $MynRansmall == 'True') {
            $FareCollector = '50tk';

        }

        //For medium
        else if ($dhakamedium == 'True') {

            $FareCollector = '70tk';

        } else if ($CtgCmedium == 'True') {
            $FareCollector = '50tk';

        } else if ($RajRmedium == 'True') {
            $FareCollector = '60tk';

        } else if ($KhulKmedium == 'True') {
            $FareCollector = '55tk';

        } else if ($BariBmedium == 'True') {
            $FareCollector = '35tk';

        } else if ($SySmedium == 'True') {
            $FareCollector = '40tk';

        } else if ($RangRanmedium == 'True') {
            $FareCollector = '25tk';

        } else if ($MynMmedium == 'True') {
            $FareCollector = '30tk';

        } else if ($dhakaCmedium == 'True' || $Ctgmedium == 'True') {

            $FareCollector = '110tk';

        } else if ($dhakaRmedium == 'True' || $Rajmedium == 'True') {

            $FareCollector = '120tk';

        } else if ($dhakaKmedium == 'True' || $Khulmedium == 'True') {

            $FareCollector = '115tk';

        } else if ($dhakaBmedium == 'True' || $Barimedium == 'True') {

            $FareCollector = '80tk';

        } else if ($dhakaSmedium == 'True' || $Symedium == 'True') {

            $FareCollector = '90tk';

        } else if ($dhakaRanmedium == 'True' || $Rangmedium == 'True') {

            $FareCollector = '120tk';

        } else if ($dhakaMmedium == 'True' || $Mynmedium == 'True') {

            $FareCollector = '75tk';

        } else if ($CtgRmedium == 'True' || $RajCmedium == 'True') {
            $FareCollector = '150tk';

        } else if ($CtgKmedium == 'True' || $KhulCmedium == 'True') {
            $FareCollector = '120tk';

        } else if ($CtgBmedium == 'True' || $BariCmedium == 'True') {
            $FareCollector = '130tk';

        } else if ($CtgSmedium == 'True' || $SyCmedium == 'True') {
            $FareCollector = '100tk';

        } else if ($CtgRanmedium == 'True' || $RangCmedium == 'True') {
            $FareCollector = '160tk';

        } else if ($CtgMmedium == 'True' || $MynCmedium == 'True') {
            $FareCollector = '110tk';

        } else if ($RajKmedium == 'True' || $KhulRmedium == 'True') {
            $FareCollector = '110tk';

        } else if ($RajBmedium == 'True' || $BariRmedium == 'True') {
            $FareCollector = '105tk';

        } else if ($RajSmedium == 'True' || $SyRmedium == 'True') {
            $FareCollector = '115tk';

        } else if ($RajRanmedium == 'True' || $RangRmedium == 'True') {
            $FareCollector = '120tk';

        } else if ($RajMmedium == 'True' || $MynRmedium == 'True') {
            $FareCollector = '125tk';

        } else if ($KhulBmedium == 'True' || $BariKmedium == 'True') {
            $FareCollector = '140tk';

        } else if ($KhulSsmall == 'True' || $SyKsmall == 'True') {
            $FareCollector = '160tk';

        } else if ($KhulRanmedium == 'True' || $RangKmedium == 'True') {
            $FareCollector = '180tk';

        } else if ($KhulMmedium == 'True' || $MynKmedium == 'True') {
            $FareCollector = '170tk';

        } else if ($BariSmedium == 'True' || $SyBmedium == 'True') {
            $FareCollector = '160tk';

        } else if ($BariRanmedium == 'True' || $RangBmedium == 'True') {
            $FareCollector = '175tk';

        } else if ($BariMmedium == 'True' || $MynBmedium == 'True') {
            $FareCollector = '155tk';

        } else if ($SyRanmedium == 'True' || $RangSmedium == 'True') {
            $FareCollector = '152tk';

        } else if ($SyMmedium == 'True' || $MynSmedium == 'True') {
            $FareCollector = '150tk';

        } else if ($RangMmedium == 'True' || $MynRanmedium == 'True') {
            $FareCollector = '150tk';

        }

        // For large
        else if ($dhakaLarge == 'True') {
            $FareCollector = '90tk';
        } else if ($CtgCLarge == 'True') {
            $FareCollector = '80tk';

        } else if ($RajRLarge == 'True') {
            $FareCollector = '70tk';

        } else if ($KhulKLarge == 'True') {
            $FareCollector = '65tk';

        } else if ($BariBLarge == 'True') {
            $FareCollector = '55tk';

        } else if ($SySLarge == 'True') {
            $FareCollector = '55tk';

        } else if ($RangRanLarge == 'True') {
            $FareCollector = '50tk';

        } else if ($MynMLarge == 'True') {
            $FareCollector = '60tk';

        } else if ($dhakaCLarge == 'True' || $CtgLarge == 'True') {
            $FareCollector = '230tk';
        } else if ($dhakaRLarge == 'True' || $RajLarge == 'True') {
            $FareCollector = '240tk';
        } else if ($dhakaKLarge == 'True' || $KhulLarge == 'True') {
            $FareCollector = '235tk';
        } else if ($dhakaBLarge == 'True' || $BariLarge == 'True') {
            $FareCollector = '220tk';
        } else if ($dhakaSLarge == 'True' || $SyLarge == 'True') {
            $FareCollector = '210tk';
        } else if ($dhakaRanLarge == 'True' || $RangLarge == 'True') {
            $FareCollector = '260tk';
        } else if ($dhakaMLarge == 'True' || $MynLarge == 'True') {
            $FareCollector = '210tk';
        } else if ($CtgRLarge == 'True' || $RajCLarge == 'True') {
            $FareCollector = '250tk';

        } else if ($CtgKLarge == 'True' || $KhulCLarge == 'True') {
            $FareCollector = '220tk';

        } else if ($CtgBLarge == 'True' || $BariCLarge == 'True') {
            $FareCollector = '230tk';

        } else if ($CtgSLarge == 'True' || $SyCLarge == 'True') {
            $FareCollector = '200tk';

        } else if ($CtgRanLarge == 'True' || $RangCLarge == 'True') {
            $FareCollector = '260tk';

        } else if ($CtgMLarge == 'True' || $MynCLarge == 'True') {
            $FareCollector = '210tk';

        } else if ($RajKLarge == 'True' || $KhulRLarge == 'True') {
            $FareCollector = '210tk';

        } else if ($RajBLarge == 'True' || $BariRLarge == 'True') {
            $FareCollector = '205tk';

        } else if ($RajSLarge == 'True' || $SyRLarge == 'True') {
            $FareCollector = '215tk';

        } else if ($RajRanLarge == 'True' || $RangRLarge == 'True') {
            $FareCollector = '220tk';

        } else if ($RajMLarge == 'True' || $MynRLarge == 'True') {
            $FareCollector = '225tk';

        } else if ($KhulBLarge == 'True' || $BariKLarge == 'True') {
            $FareCollector = '240tk';

        } else if ($KhulSLarge == 'True' || $SyKLarge == 'True') {
            $FareCollector = '260tk';

        } else if ($KhulRanLarge == 'True' || $RangKLarge == 'True') {
            $FareCollector = '230tk';

        } else if ($KhulMLarge == 'True' || $MynKLarge == 'True') {
            $FareCollector = '260tk';

        } else if ($BariSLarge == 'True' || $SyBLarge == 'True') {
            $FareCollector = '270tk';

        } else if ($BariRanLarge == 'True' || $RangBLarge == 'True') {
            $FareCollector = '280tk';

        } else if ($BariMLarge == 'True' || $MynBLarge == 'True') {
            $FareCollector = '285tk';

        } else if ($SyRanLarge == 'True' || $RangSLarge == 'True') {
            $FareCollector = '230tk';

        } else if ($SyMLarge == 'True' || $MynSLarge == 'True') {
            $FareCollector = '180tk';

        } else if ($RangMLarge == 'True' || $MynRanLarge == 'True') {
            $FareCollector = '250tk';

        }

    } else if (isset($_POST['Reset'])) //To reset the index page
    {
        header("location: ../view/index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
</head>

<body>
    <form method="POST">

        <table border="1" cellspacing="0" cellpadding="10" width="100%">
            <tr>
                <td><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right">
                    <a href="delivermanReg.php"> Earn With us</a> |
                    <a href="userRegistration.php"> User Registration</a> |
                    <a href="userLogin.php"> Login</a>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <table border="0" cellspacing="0" width="100%">
                        <td align="center"><a href="index.php">Home</a></td>
                        <td align="center"><a href="./homepage/service.php">Service</a></td>
                        <td align="center"><a href="./homepage/career.php">Career</a></td>
                        <td align="center"><a href="./homepage/contactus.php">Contact Us</a></td>
                        <td align="center"><a href="./homepage/areacoverage.php">Area Coverage</a></td>
                        <td align="center"><a href="./homepage/ourclients.php">Our Clients</a></td>
                        <td align="center"><a href="./homepage/aboutus.php">About Us</a></td>
                        <td align="center"><a href="./homepage/more.php">More..</a></td>
                    </table>
                </td>
            </tr>
            <tr>
                <td colspan="2" height="250px">
                    <form method="POST">
                        <table align="center" border="1" cellspacing="0" cellpadding="15">
                            <tr>
                                <td colspan="2" align="center">
                                    <label for="" align="center">Fare Estimation : </label>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="">PARCEL TYPE:</label>
                                    <Select name="Typer" id="">
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Small')
                                            echo "selected = 'selected'"; ?>>Small</option>
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Medium')
                                            echo "selected = 'selected'"; ?>>Medium</option>
                                        <option <?php if (isset($_POST['Typer']) && $_POST['Typer'] == 'Large')
                                            echo "selected = 'selected'"; ?>>Large</option>
                                    </Select>
                                    <label for="">FROM:</label>
                                    <Select name="Former" id="">
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'DHAKA')
                                            echo "selected = 'selected'"; ?>>DHAKA</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'CHITTAGONG')
                                            echo "selected = 'selected'"; ?>>CHITTAGONG</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'RAJSHAHI')
                                            echo "selected = 'selected'"; ?>>RAJSHAHI</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'KHULNA')
                                            echo "selected = 'selected'"; ?>>KHULNA</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'BARISHAL')
                                            echo "selected = 'selected'"; ?>>BARISHAL</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'SYLHET')
                                            echo "selected = 'selected'"; ?>>SYLHET</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'RANGPUR')
                                            echo "selected = 'selected'"; ?>>RANGPUR</option>
                                        <option <?php if (isset($_POST['Former']) && $_POST['Former'] == 'MYMANSINGH')
                                            echo "selected = 'selected'"; ?>>MYMANSINGH</option>
                                    </Select>
                                </td>
                                <td>

                                    <label for="">TO:</label>
                                    <Select name="Toto" id="">
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'DHAKA')
                                            echo "selected = 'selected'"; ?>>DHAKA</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'CHITTAGONG')
                                            echo "selected = 'selected'"; ?>>CHITTAGONG</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'RAJSHAHI')
                                            echo "selected = 'selected'"; ?>>RAJSHAHI</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'KHULNA')
                                            echo "selected = 'selected'"; ?>>KHULNA</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'BARISHAL')
                                            echo "selected = 'selected'"; ?>>BARISHAL</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'SYLHET')
                                            echo "selected = 'selected'"; ?>>SYLHET</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'RANGPUR')
                                            echo "selected = 'selected'"; ?>>RANGPUR</option>
                                        <option <?php if (isset($_POST['Toto']) && $_POST['Toto'] == 'MYMANSINGH')
                                            echo "selected = 'selected'"; ?>>MYMANSINGH</option>
                                    </Select>
                                    <input type="submit" name="Fare" value="Generate Fare">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <label for="">Estimated Fare:</label>
                                    <input type="text" name="Total" value="<?php echo $FareCollector; ?> " id=""
                                        readonly size="1">
                                    <input type="submit" name="Reset" value="Reset">
                                    <span>
                                        <p style="Color: Red;">
                                            <?php echo "Please Press Reset after Getting The estimate Fare"; ?>
                                        </p>
                                    </span>

                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <h1 align="center">
                        Welcome to: " All in One Parcel Management System "
                    </h1>
                    <p align="center">
                        <h2 align="center">
                        Streamlining Logistics, Redefining Efficiency
                        </h2>
                    </p>

                    <p>
                        At All in One Parcel Management System,<br> we're your solution to seamless, reliable, and
                        innovative
                        parcel logistics in Bangladesh.
                    </p>
                    <p>
                        Efficiency in Every Delivery

                        Experience a new era in parcel management. <br> Our cutting-edge technology ensures every delivery is
                        precise, timely, and handled with care.
                    </p>

                    <p>
                        Tailored for Your Needs

                        Whether you're a business seeking streamlined supply chain solutions or an individual needing
                        secure
                        parcel deliveries, <br> our services are customized to meet your unique requirements.

                    </p>
                    <p>
                        Reliability at Every Step

                        Count on us for dependable, on-time deliveries. <br> Our customer-centric approach ensures your
                        parcels
                        reach their destination safely and promptly.
                    </p>

                    <p>
                        <h3>
                        Join the Evolution
                        </h3>

                        We're revolutionizing logistics, one parcel at a time. <br> Embracing sustainability and innovation,
                        we're creating a future where logistics are no longer a worry.
                    </p>
                    <p>

                        <h3> <i>
                        Ready to Simplify Your Parcels?
                        </i></h3>

                        Explore our comprehensive parcel management services and experience a new standard in logistics.
                    </p>
                    <p>
                        <h2>
                        Join us in redefining how parcels are managed and delivered across Bangladesh.
                        </h2>
                    </p>

                    <p>
                    <h1>
                        Your parcels, our priority.
                    </h1>
                    </p>
                </td>
            </tr>
            <tr>
                <td>
                    <p align="center">
                        <img src="../asset/clogo.png" alt="" height="75px"><br>
                        Company Name <br>
                        Corporate Address <br>
                        Available Pick up address. <br>
                        FAQ <br>
                    </p>

                </td>
                <td>
                    <a href="">Terms And Condition</a>
                    <a href="">Company Policy</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>