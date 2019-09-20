<?php

use Illuminate\Database\Seeder;

class EmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_templates')->delete();
        
        \DB::table('email_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'type_id' => 1,
                'title' => 'User Registration',
                'subject' => 'Welcome to the Smart Washr Family',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Welcome to [app_name]!<br /><br />We are excited to have you onboard and even more excited to show you what premium laundry at an affordable price looks like.<br /><br />Get buckled up cause your life is about to change for the better, Upon placing your first order, we will provide you with a Smart Washr&nbsp;Clean bag so you\'re always prepared!</div>
<div style="text-align: left; word-wrap: break-word;"><br />[app_name] Team
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&copy; [app_name]</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-07 21:26:57',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'type_id' => 2,
            'title' => 'Create User (Admin Site)',
                'subject' => 'Congratulations! your account has been created.',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Congratulations! your account has been created</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">Your credentials are as below</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">Email - [email]</div>
<div style="text-align: left; word-wrap: break-word;">Password - [password]</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;"><br />Welcome and thanks! <br />[app_name] Team
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&copy; [app_name]</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-07 23:20:53',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'type_id' => 3,
                'title' => 'Activate / Deactivate User',
                'subject' => 'Your account has been [status]',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Your account has been [status].<br /><br />With love from! <br />[app_name] Team
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&copy; [app_name]</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-07 23:22:12',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'type_id' => 4,
                'title' => 'Change Password',
                'subject' => 'Oops, Looks like you forgot your password.',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Your password has been changed successfully.</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">New password : [password]<br /><br />Happy Cleaning!<br />[app_name] Team
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&copy; [app_name]</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-02 16:32:22',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'type_id' => 5,
                'title' => 'Order created via api',
                'subject' => 'Hey! Our Laundry captain is on his way.',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" style="width: 99.8305%;" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px; width: 99.8305%;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Hey!&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">We\'re just letting you know your order has been received by our laundry captain, he\'ll be in touch 20-30 minutes&nbsp;before your set pickup time.</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;"><span style="font-size: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit;">We\'ve attached your invoice below for your reference. </span></div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;"><span style="font-size: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit;">For now, just relax and make sure your laundry bags ready to go. If you forgot to add an item just let the laundry captain know when picking up your order</span></div>
<div style="text-align: left; word-wrap: break-word;"><br /><br /></div>
<div style="text-align: left; word-wrap: break-word;">P.S. We provide minor stitching for missing buttons and minor tears free of charge.&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">Sent with love from the,<br />[app_name] Team
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&nbsp;</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-08 15:30:51',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'type_id' => 6,
                'title' => 'Send Order invoice from order edit screen',
                'subject' => 'Everything\'s sorted out, Invoice# [invoice_num]',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Alright, so we checked, checked, double checked, and finally checked one last time to make sure we didn\'t miss anything.</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">We\'ve attached your final invoice below and if you need anything else let us know.&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">Okay, we\'ve got some cleaning to do. Make sure to enjoy the rest of your day.</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;"><br />Sent with love from the,<br />[app_name] Team</div>
<div style="text-align: left; word-wrap: break-word;">
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&copy; [app_name]</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-07 23:13:33',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'type_id' => 7,
                'title' => 'Skip order by client',
                'subject' => 'Hey! Our Laundry captain is on his way.',
                'body' => '<center>
<table id="bodyTable" border="0" width="100%" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td id="bodyCell" align="center" valign="top">
<table id="templateContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="center">
<tbody>
<tr>
<td align="left" valign="top">
<table id="templateBody" border="0" width="600" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td class="bodyContainer" style="padding-top: 9px; padding-bottom: 9px;" valign="top">
<table class="mcnBoxedTextBlock" border="0" width="100%" cellspacing="0" cellpadding="0">
<tbody class="mcnBoxedTextBlockOuter">
<tr>
<td class="mcnBoxedTextBlockInner" valign="top">
<table class="mcnBoxedTextContentContainer" border="0" width="600" cellspacing="0" cellpadding="0" align="left">
<tbody>
<tr>
<td style="padding: 9px 18px 9px 18px;">
<table class="mcnTextContentContainer" style="background-color: #ffffff;" border="0" width="100%" cellspacing="0" cellpadding="18">
<tbody>
<tr>
<td class="mcnTextContent" style="font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: left; padding: 36px; word-break: break-word;" valign="top">
<div style="text-align: left; word-wrap: break-word;">Hey!&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">We\'re just letting you know your order has been received and sent to our laundry captain. He\'ll be in touch 20-30 minutes before your set pickup time.</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">We will send your&nbsp;invoice once we finalize sorting out your items and making sure we didn\'t miss anything.&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;"><span style="font-size: inherit; font-style: inherit; font-variant-ligatures: inherit; font-variant-caps: inherit;">For now, just relax and make sure your laundry bags ready to go. We\'ll do what we do best and get to washing.</span></div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">P.S. We provide minor stitching for missing buttons and minor tears free of charge.&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">&nbsp;</div>
<div style="text-align: left; word-wrap: break-word;">Sent with love from the,<br />[app_name] Team
<div class="footer" style="font-size: 0.7em; padding: 0px; font-family: Helvetica Neue, Helvetica, Arial, sans-serif; text-align: right; color: #777777; line-height: 14px; margin-top: 36px;">&copy; [app_name]</div>
</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
<!-- // END BODY --></td>
</tr>
</tbody>
</table>
<!-- // END TEMPLATE --></td>
</tr>
</tbody>
</table>
</center>',
                'status' => 1,
                'created_by' => 1,
                'updated_by' => 1,
                'created_at' => '2018-07-06 09:39:46',
                'updated_at' => '2018-08-08 15:31:41',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}