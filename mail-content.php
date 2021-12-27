<?php
/**
 * Created by PhpStorm.
 * User: Rakshit
 * Date: 07-08-2017
 * Time: 17:48
 */

?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style type="text/css" leave="true">
        #outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
        .ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
        body, td {-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
        table, td {mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
        img {-ms-interpolation-mode:bicubic;} /* Help Microsoft platforms smoothly render resized images */

        body, #bodyTable, #bodyCell {height:100% !important; width:100% !important; margin:0; padding:0;}
        table {border-collapse:collapse;}

        body, #bodyTable {
            background-color: #F0F0F0;
        }

        #emailBody {
            margin: 0 auto;
            width: 600px;
            background-color: #FFFFFF;
        }

        .backgroundColor {
            background-color: #F0F0F0;
        }

        h1 {
            color:#333333;
            display:block;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:25px;
            font-weight:bold;
            line-height:130%;
            margin: 0 0 15px;
            padding: 0;
        }

        h2 {
            color:#333333;
            display:block;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:20px;
            font-weight:bold;
            line-height:130%;
            margin: 20px 0 15px;
            padding: 0;
        }

        h3 {
            color:#333333;
            display:block;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:18px;
            font-weight:bold;
            line-height:130%;
            margin: 20px 0 15px;
            padding: 0;
        }

        hr.dashed {
            background-color: #FFF;
            border: 0;
            border-bottom: 1px dashed #CCC;
            color: #FFF;
            height: 1px;
            margin: 20px 0;
            padding: 0;
        }

        .previewText {
            font-size:9px;
            color:#F0F0F0;
        }

        .left {
            text-align:left;
        }

        .center {
            text-align: center;
        }

        .special {
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size: 22px;
            font-weight: 300;
            line-height: 170%;
            padding: 5px 0;
        }

        .logoImage {
            border: 0;
            border-style: none;
            text-decoration: none;
        }

        .footerImage {
            border: 0;
            border-style: none;
            text-decoration: none;
        }

        .bodyContent {
            color:#333333;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:16px;
            font-weight:normal;
            line-height:170%;
            padding: 30px;
            text-align:left;
        }

        .bodyContent p {
            line-height:170%;
            margin: 15px 0;
            padding: 0;
        }

        .bodyContent p a {
            color:#4199ad;
        }

        .bodyContent table td {
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
        }

        .bodyContent img.banner {
            max-width:100%;
            padding-bottom:20px;
        }

        .bodyContent .cta {
            padding: 20px 0;
            text-align: center;
        }

        /* v1 button to be phased out */
        .bodyContent .cta a:link.button, .bodyContent .cta a:visited.button {
            background-color: #FF4A00;
            color: #FFFFFF;
            font-family: "Open Sans", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 300;
            padding: 10px 20px;
            line-height: 40px;
            text-decoration: none;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            -webkit-text-stroke-width: 0.6px;
            -webkit-font-smoothing: antialiased;
        }

        .bodyContent .cta-table {
            display: inline-block;
        }

        .bodyContent .cta .buttonRow {
            background-color: #FF4A00;
            padding: 8px 20px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            border-radius: 3px;
            -webkit-text-stroke-width: 0.6px;
            -webkit-font-smoothing: antialiased;
        }

        .bodyContent .cta .buttonRow a:link, .bodyContent .cta .buttonRow a:visited {
            color: #FFFFFF !important;
            font-family: "Open Sans", "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 180%;
            text-decoration: none !important;
        }

        #emailFooter {
            padding: 20px 0;
        }

        .footerContent {
            color:#999999;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:13px;
            font-weight:normal;
            line-height:170%;
            padding: 8px 0;
        }

        .footerContent span {
            color:#999999;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:13px;
            font-weight:normal;
            line-height:170%;
        }

        .footerContent a {
            color:#499DF3;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:13px;
            font-weight:normal;
            line-height:100%;
            text-decoration: none;
        }

        .footerContent a.text {
            color:#999999;
        }

        .logo {
            padding: 20px 0 3px;
        }

        .appIcon {
            display:inline-block;
            float:left;
            height:32px;
            width:32px;
        }

        .appIcon-20 {
            display:inline-block;
            float:left;
            height:20px;
            width:20px;
        }

        .tagline {
            color:#999999;
            font-family:"Open Sans", Helvetica, Arial, sans-serif;
            font-size:13px;
            letter-spacing: 1px;
            font-weight:300;
            line-height:125%;
            padding-bottom: 40px;
        }

        .viewLink {
            padding-left: 5px;
        }

        .updateContent p img {
            max-width: 100%;
            width: 100%;
        }
        table.chunk td {
            padding: 15px;
        }
        table.inv-chunk {
            padding: 15px;
        }
        table.chunk p {
            color:#4199ad;
            text-transform:uppercase;
            letter-spacing:1px;
            font-size:10px;
        }


        td.bodyContent {
            padding: 0 0 0 0;
        }

        .appleLinksWhite a {color:#ffffff !important; text-decoration:none !important;}
        .appleLinksBody a {color:#5F6C72 !important; text-decoration:none !important;}
        .appleLinksHeader a {color:#354147 !important; text-decoration:none !important;}

        @media screen and (max-width: 600px) {
            table[class="responsive-table"] { width: 100% !important; }
            td[class="responsive-image"] {
                padding-right: 0px !important;
                padding-left: 0px !important;
                padding-bottom: 30px !important;

            }
            td[class="featuremodule"] { padding:50px 0 0 0 !important;}
        }

        <!--[if gte mso 15]&gt;
        table.responsive-table { width: 100% !important; }
        &lt;![endif]--><!--[if gte mso 15]&gt;
        td.responsive-textblock { padding-top: 30px;}
        &lt;![endif]--><!--[if gte mso 15]&gt;
        td.responsive-image { padding-left: 0 !important;}
        &lt;![endif]--><!--[if gte mso 15]&gt;
        td.responsive-image { padding-right: 0 !important;}
        &lt;![endif]-->


        @media screen {
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 400;
                src: local('Open Sans'), local('OpenSans'), url(http://themes.googleusercontent.com/static/fonts/opensans/v6/cJZKeOuBrn4kERxqtaUH3bO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 300;
                src: local('Open Sans Light'), local('OpenSans-Light'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/DXI1ORHCpsQm3Vp6mXoaTaRDOzjiPcYnFooOUGCOsRk.woff) format('woff');
            }
            @font-face {
                font-family: 'Open Sans';
                font-style: normal;
                font-weight: 600;
                src: local('Open Sans Semibold'), local('OpenSans-Semibold'), url(http://themes.googleusercontent.com/static/fonts/opensans/v7/MTP_ySUJH_bn48VBG8sNSr3hpw3pgy2gAi-Ip7WPMi0.woff) format('woff');
            }
            h1, h2, strong {font-weight: 600;}
        }

        @media only screen and (max-width: 600px){
            table[id=emailBody]{
                max-width:600px !important;
                width:100% !important;
            }
        }
        @media screen and (max-width: 500px) {
            .chunk {
                width: 33% !important;
            }
            table.chunk {
                border-spacing: 10px 5px;
                border-collapse: separate;
            }
            table.chunk td {
                padding: 15px 15px 5px 15px !important;
            }
            table.chunk p {
                margin: 15px 0 0 0 !important;
            }
            table.inv-chunk {
                display: none;
            }
            table.tipnumber p {
                font-size: 60% !important;
                white-space: nowrap;
                margin: 1px 0 1px 0 !important;
                text-align: left !important;
            }
            table.tipnumber table:first-child {
                margin: -20px 0 0 0 !important;
            }
            table + h1 {
                margin: 10px 0 15px 0 !important;
            }
            td[class="sz-rec-row-wrapper"] .sz-rec-col {
                width: 100%;
                display: block;
            }
            td[class="sz-rec-row-wrapper"] .sz-rec-col-left,
            td[class="sz-rec-row-wrapper"] .sz-rec-col-mid {
                margin: 0 0 20px 0;
            }
            .sz-rec-row-3 {
                max-width: 200px;
            }
            td[class="icymi-wrapper"] .icymi-spacer { display: none; }
            td[class="icymi-wrapper"] .icymi-col {
                width: 100%;
                display: block;
            }
            td[class="icymi-wrapper"] .icymi-col { margin-bottom: 30px; }
            td[class="icymi-wrapper"] .icymi-image img { width: 100%; }
            a[class="confirm-cta"] {padding:17px 20px 17px 20px !important;}
            .backgroundColor {
                padding: 0 10px 0 10px !important;
            }

            .backgroundColor {
                padding: 0 10px 0 10px !important;
            }

            td[class="icymi-wrapper"] .multistep { margin-bottom: 0; padding-bottom:30px;}

        }
    </style>
</head>
<body style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; background-color: #F0F0F0; height: 100%; width: 100%; margin: 0; padding: 0">
<center>
    <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; background-color: #F0F0F0; height: 100%; width: 100%; margin: 0; padding: 0">
        <tbody>
        <tr>
            <td align="center" valign="top" id="bodyCell" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; height: 100%; width: 100%; margin: 0; padding: 0">
                <table border="0" cellpadding="0" cellspacing="0" width="100%" id="emailContainer" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0">
                    <tbody>
                    <tr>
                        <td align="center" valign="top" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0">
                                <tbody>
                                <tr>
                                    <td height="20" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><span class="previewText" style="font-size: 9px; color: #F0F0F0">Thanks for signing up. We're happy you're here! Your 14-day trial is now active—learn about all the ways that Zapier can help you automate your busywork.</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" height="40" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><a href="http://afitness.in" target="_blank" title="Online Exam"><img src="https://cdn.zapier.com/static/1De0UC/images/email/email-logomark-orange.gif" alt="Zapier" height="40" width="40" border="0" class="logoImage" style="-ms-interpolation-mode: bicubic; border: 0; border-style: none; text-decoration: none"></a>
                                    </td>
                                </tr>
                                <tr><td height="20" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><span></span></td></tr></tbody></table></td></tr><tr><td align="center" valign="top" class="backgroundColor" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; background-color: #F0F0F0"><table border="0" cellpadding="0" cellspacing="0" id="emailBody" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; margin: 0 auto; width: 600px; background-color: #FFF"><tbody><tr><td align="center" valign="top" class="bodyContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; color: #333; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 16px; font-weight: normal; line-height: 170%; text-align: left; padding: 0 0 0 0"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="600" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; background-color:#2C3A47;background-image:url(https://cdn.zapier.com/storage/photos/bcc360bcd461b39f22684d4b668d76aa.png);background-position:50% 50%;background-repeat:none;max-width:100%;line-height:0;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; margin:15px 0 15px 0;"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif"><img src="https://cdn.zapier.com/storage/photos/c7f466ed052ce85f139f4c6986111e4d.png" width="30" style="-ms-interpolation-mode: bicubic; max-width:100%;">
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; margin:0 0 25px 0;"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color:#ffffff;font-size:20px;font-weight:600;text-align:center;line-height:100%">
                                                                            Welcome to Zapier
                                                                        </td></tr></tbody></table></td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding:30px 50px 30px 50px;"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; line-height:170%;color:#5F6C72;padding:0 0 0 0;" class="mso13"><p style="line-height: 170%; margin: 15px 0; padding: 0; text-align: left;">Thanks for signing up. We're happy you're here! Your free 14-day trial is now active.</p><p style="line-height: 170%; margin: 15px 0; padding: 0; text-align: left;">Ready to save time with automation? Hit the button below to start building your perfect workflow.</p></td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding: 50px 0 50px 0;"><table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; box-shadow: 0 7px 5px -4px rgba(0, 0, 0, 0.2);" bgcolor="#13D0AB"><a class="confirm-cta" href="https://zapier.com/app/editor/?utm_source=email&amp;utm_medium=welcome%20email&amp;utm_campaign=html%20welcome%20email" target="_blank" style="color: #4199ad; font-size: 16px; color: #ffffff; text-decoration: none; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; padding: 17px 60px 17px 60px; display: inline-block;font-weight:600; box-shadow: inset 0 -4px 0px #1ea98e;border-top:1px solid #13D0AB;">Build Your First Workflow</a></td></tr></tbody></table></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; border-top:1px solid #DADFE2;"><tbody><tr><td style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding: 50px 0 30px 0; color: #5F6C72; text-align: center; font-size: 20px; line-height: 150%;">
                                                                            How to Make the Most of Your Zapier Trial
                                                                        </td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding:50px 38px 0 38px;" class="featuremodule"><table border="0" cellpadding="0" cellspacing="0" width="38%" align="right" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="112" class="responsive-image" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding-left:40px;"><img src="https://cdn.zapier.com/storage/photos/22f3c2954b57f29a486b38b3581c0184.png" width="112" style="-ms-interpolation-mode: bicubic"></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="60%" align="left" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="272" class="responsive-textblock" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color:#5F6C72;max-width:100%;text-align:left;line-height:170%"><span style="font-weight:600;color:#354147;">Build Workflows Called Zaps</span> with as many steps as you want. Automate the apps you use every day to get more done.
                                                                                    </td></tr></tbody></table></td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding:50px 38px 0 38px;" class="featuremodule"><table border="0" cellpadding="0" cellspacing="0" width="38%" align="left" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="112" class="responsive-image" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding-right:40px;"><img src="https://cdn.zapier.com/storage/photos/20d890708819f0e8c6b8daeeec4aa05d.png" width="112" style="-ms-interpolation-mode: bicubic"></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="60%" align="right" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="272" class="responsive-textblock" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color:#5F6C72;max-width:100%;text-align:left;line-height:170%"><span style="font-weight:600;color:#354147;">Connect Any App</span> in our library of more than 500 integrations. We're always adding new options and improving existing ones, too. Catch up on <a href="https://zapier.com/zapbook/updates/?utm_source=email&amp;utm_medium=welcome%20email&amp;utm_campaign=html%20welcome%20email" style="color: #4199ad; color:#499DF3;" target="_blank">new apps and updates →</a></td></tr></tbody></table></td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding:50px 38px 0 38px;" class="featuremodule"><table border="0" cellpadding="0" cellspacing="0" width="38%" align="right" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="112" class="responsive-image" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding-left:40px;"><img src="https://cdn.zapier.com/storage/photos/d40632b7960a060d4e62ddf6ecfc8aa3.png" width="112" style="-ms-interpolation-mode: bicubic"></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="60%" align="left" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="272" class="responsive-textblock" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color:#5F6C72;max-width:100%;text-align:left;line-height:170%"><span style="font-weight:600;color:#354147;">Get Recommendations</span> on how to automate the apps you use most. <a href="https://zapier.com/app/explore/?utm_source=email&amp;utm_medium=welcome%20email&amp;utm_campaign=html%20welcome%20email" style="color: #4199ad; color: #499DF3;" target="_blank">Explore your recommendations →</a></td></tr></tbody></table></td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding:50px 38px 0 38px;" class="featuremodule"><table border="0" cellpadding="0" cellspacing="0" width="38%" align="left" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="112" class="responsive-image" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding-right:40px;"><img src="https://cdn.zapier.com/storage/photos/1dc1f84a8f94e3859d2a2e2cce9eac1e.png" width="112" style="-ms-interpolation-mode: bicubic"></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="60%" align="right" class="responsive-table" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" width="272" class="responsive-textblock" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color:#5F6C72;max-width:100%;text-align:left;line-height:170%"><span style="font-weight:600;color:#354147;">Get Help</span> from our top-notch customer support team. Any question, any time—just reply to this email and ask away.
                                                                                    </td></tr></tbody></table></td></tr><tr><td height="50" align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size:0;line-height:0;"></td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; border-top:1px solid #DADFE2;"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding: 50px 0 50px 0;"><table border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; box-shadow: 0 7px 5px -4px rgba(0, 0, 0, 0.2);" bgcolor="#13D0AB"><a class="confirm-cta" href="https://zapier.com/app/editor/?utm_source=email&amp;utm_medium=welcome%20email&amp;utm_campaign=html%20welcome%20email" target="_blank" style="color: #4199ad; font-size: 16px; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 4px; -moz-border-radius: 4px; border-radius: 4px; padding: 17px 60px 17px 60px; display: inline-block;font-weight:600; box-shadow: inset 0 -4px 0px #1ea98e;border-top:1px solid #13D0AB;">Build a Zap Now</a></td></tr></tbody></table></td></tr><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; color:#5F6C72;text-align:left;font-size:16px;">
                                                                            Thanks again for trying Zapier. If you have any questions about how to get started, advanced features, or anything else, just reply to this email—we're happy to lend a hand.
                                                                        </td></tr></tbody></table><table border="0" cellpadding="0" cellspacing="0" width="160" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0; margin-top:50px;max-width:100%;"><tbody><tr><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; padding-right:15px;"><img src="https://cdn.zapier.com/storage/photos/3067e6556fb08776d1569ca01d4e9ee1.png" style="-ms-interpolation-mode: bicubic; max-width:100%;width:20px;"></td><td align="center" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-weight:500;color:#5F6C72;">
                                                                            The Zapier Team
                                                                        </td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr><tr><td align="center" valign="top" id="emailFooter" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; padding: 20px 0"><table border="0" cellpadding="0" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" valign="top" class="footerContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 170%; padding: 8px 0"><a href="https://zapier.com/about/" style="color: #499DF3; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 100%; text-decoration: none" target="_blank">Hey, we're hiring!</a></td></tr><tr><td align="center" valign="top" class="footerContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 170%; padding: 8px 0"><span style="color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 170%">© 2017 Zapier, Inc. All rights reserved.</span><br><a href="#" class="text" style="font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 100%; text-decoration: none; color: #999" target="_blank"><span style="color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 170%">548 Market St #62411, San Francisco, CA 94104-5401</span></a></td></tr><tr><td align="center" valign="top" class="footerContent" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 170%; padding: 8px 0"><table border="0" cellpadding="5" cellspacing="0" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td valign="top" class="utilityLink" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><a href="https://zapier.com/blog/" target="_blank" style="color: #499DF3; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 100%; text-decoration: none">Read the Blog</a></td><td valign="top" class="utilityLink" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><a href="https://twitter.com/zapier" target="_blank" style="color: #499DF3; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 100%; text-decoration: none">Follow on Twitter</a></td><td valign="top" class="utilityLink" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><a href="#" named="unsubscribe" style="color: #499DF3; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 100%; text-decoration: none" target="_blank">Unsubscribe</a></td></tr></tbody></table></td></tr><tr><td align="center" valign="top" class="footerContent" width="400" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 170%; padding: 8px 0; width:100%;max-width:400px;padding:0 15px 0 15px;"><div style="font-size:12px;"><p>You received this email because you signed up for <a href="https://zapier.com" style="color: #499DF3; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; font-weight: normal; line-height: 100%; text-decoration: none; text-decoration:underline;color:#999" target="_blank">Zapier</a>, an app that helps you connect services and automate tasks.</p></div></td></tr><tr><td align="center" valign="top" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0"><table border="0" cellpadding="0" cellspacing="0" id="signature" style="border-collapse: collapse; mso-table-lspace: 0; mso-table-rspace: 0"><tbody><tr><td align="center" class="logo" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; padding: 20px 0 3px"><a href="https://zapier.com" target="_blank" title="Zapier"><img src="https://cdn.zapier.com/static/1De0UC/images/email/email-logo.gif" height="32" width="70" border="0" class="footerImage" style="-ms-interpolation-mode: bicubic; border: 0; border-style: none; text-decoration: none"></a></td></tr><tr><td align="center" class="tagline" style="-webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; mso-table-lspace: 0; mso-table-rspace: 0; color: #999; font-family: &quot;Open Sans&quot;, Helvetica, Arial, sans-serif; font-size: 13px; letter-spacing: 1px; font-weight: 300; line-height: 125%; padding-bottom: 40px"><span>makes you happier :)</span><img src="https://zapier.com/api/v3/events?payload=eyJtZXNzYWdlIjoiRW1haWw6IG9wZW4iLCJkYXRhIjp7InRlbXBsYXRlX25hbWUiOiJzdWJzY3JpcHRpb25zL25ld193ZWxjb21lIn19:1dFQGC:iPDHC7IJVowCCuZ0MwOw08oauSc" alt="" style="-ms-interpolation-mode: bicubic"></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></td></tr></tbody></table></center>
</body>

</html>