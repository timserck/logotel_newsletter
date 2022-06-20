<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:w="urn:schemas-microsoft-com:office:word">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lo:go</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'ArialMT Regular';
            font-style: normal;
            font-weight: normal;
            src: local('ArialMT Regular'), url('fonts/arial-mt/arialmt.woff') format('woff');
        }
        
        @media only screen and (max-width: 480px) {
            .m-hide {
                display: none;
            }
            .body_center>tbody>tr>td {
                width: 100%;
                display: block;
                height: auto;
            }
            .footerLinks>tbody>tr>td {
                width: 100%;
                display: block;
                height: auto;
                text-align: center;
            }
            .footerLinks>tbody>tr>td:nth-child(even) {
                text-indent: -9999px;
                white-space: nowrap;
            }
        }
        /*main tab*/
    </style>
</head>

<body style="font-family: Arial,Helvetica Neue,Helvetica,sans-serif; margin: 0; padding: 0;">
    <table width="100%" style="max-width: 600px; mso-table-lspace: 0pt; mso-table-rspace: 0pt;" id="bodyTable" cellpadding="0" cellspacing="0" border="0" align="center">
        <tbody>
            <tr>
                <td>
                    <?php include("components/intro_logo.php"); ?>
                    <?php include("components/header.php"); ?>
                    <?php include("components/body_top.php"); ?>
                    <?php include("components/body_right.php"); ?>
                    <?php include("components/body_left.php"); ?>
                    <?php include("components/footer.php"); ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>