<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="">
        <h2 align="center">Welcome USER</h2>
        <table border="1" cellspacing="0" width="100%" cellpadding="10" height="630px">
            <tr>
                <td width="250px"><img src="../asset/clogo.png" alt="" height="30px"><b>All in One Parcel Service</td>
                <td align="right" colspan="2"><a href="index.php">Logout?</a></td>
            </tr>
            <tr>
                <td>
                    <table border="1" cellspacing="0" cellpadding="10" height="100%" width="100%">
                        <tr>
                            <td><a href="userdashboard.php">View Profile</a></td>
                        </tr>
                        <tr>
                            <td>
                                <a href="">Order History</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="parceltrack.php">Parcel Tracker</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="invoice.php">Invoice</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="updatepayment.php">Set/Update Payment Option</a>
                            </td>

                        </tr>

                        <tr>
                            <td>
                                <a href="">Assigned Delivery Man</a>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <a href="">Parcel Management Panel</a>
                            </td>
                        </tr>
                    </table>
                </td>
                <td>
                    <form action="">
                        <table border="1" cellspacing="0" cellpadding="10" height="550px" width="500px" align="center">
                            <tr>
                                <td colspan="2" align="center">
                                    Invoice
                                </td>
                            </tr>
                            <tr>
                                <td>Invoice Number</td>
                                <td>
                                    <input type="text" name="invoiceNo" id="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Invoice Issue Date:
                                </td>
                                <td>
                                    <input type="text" name="issue_date" id="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Total Items <br>
                                    in quantity
                                </td>
                                <td><input type="text" name="quantity" id="" readonly></td>
                            </tr>
                            <tr>
                                <td>
                                    Total Amount
                                </td>
                                <td>
                                    <input type="text" name="amount" id="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Payment Method:
                                </td>
                                <td>
                                    <input type="text" name="paymentmethod" id="" readonly>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Shipping Address:
                                </td>
                                <td>
                                    <textarea name="" id="" cols="20" rows="5" readonly></textarea>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2" align="center">
                                    <input type="submit" name="submit" id="" value="Download Invoice">
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2" align="center">
                                    <a href="userdashboard.php">Back to menu!?</a>
                                </td>
                            </tr>
                        </table>
                    </form>
                </td>
            </tr>
        </table>
    </form>
    </td>
    </tr>

    </table>
    </form>
</body>

</html>