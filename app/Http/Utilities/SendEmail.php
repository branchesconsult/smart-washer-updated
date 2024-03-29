<?php

namespace App\Http\Utilities;

use Illuminate\Support\Facades\Mail;

class SendEmail
{
    public function sendWithTemplate($data, $typeId)
    {
        $template = \DB::table('email_templates')
            ->where('type_id', $typeId)
            ->where('status', 1)
            ->orderBy('updated_at', 'DESC')
            ->first();
        if (!empty($template)) {
            switch ($typeId) {
                case '1':
                    // When user register from frontend
                    $content = $template->body;
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    // Replace user firstname
                    $content = str_replace('[name]', $data['first_name'], $content);
                    // Replace confirmation link
                    $url = '<a href=' . url('account/confirm/' . $data['confirmation_code']) . '>
                                Click Here
                            </a>';
                    $content = str_replace('[confirmation_link]', $url, $content);
                    // User email
                    $data['to'] = $data['email'];
                    // Subject of mail
                    $data['subject'] = $template->subject;
                    break;
                case '2':
                    $content = $template->body;
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    // Replace user firstname
                    $content = str_replace('[name]', $data['first_name'], $content);
                    // Replace user email
                    $content = str_replace('[email]', $data['email'], $content);
                    // Replace user password
                    $content = str_replace('[password]', $data['password'], $content);
                    $data['to'] = $data['email'];
                    $data['subject'] = $template->subject;
                    break;

                case '3':
                    $content = $template->body;

                    // Replace status in subject
                    $status = $data->status == 0 ? 'Deactivated' : 'Activated';
                    $subject = str_replace('[status]', $status, $template->subject);
                    // Replace status in email body
                    $content = str_replace('[status]', $status, $content);
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    $data['to'] = $data['email'];
                    $data['subject'] = $subject;
                    break;

                case '4':
                    $content = $template->body;
                    // Replace status in email body
                    $content = str_replace('[password]', $data['password'], $content);
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    $data['to'] = $data['email'];
                    $data['subject'] = $template->subject;
                    break;

                case '5':
                    $content = $template->body;
                    $data['invoice_num'] = (empty($data['invoice_num'])) ? mt_rand('0000', '99999999') : $data['invoice_num'];
                    $data['attachment'] = (empty($data['attachment'])) ? '' : $data['attachment'];
                    $data['attachment_name'] = (empty($data['attachment_name'])) ? '' : $data['attachment_name'];
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    $data['to'] = $data['email'];
                    $data['subject'] = $template->subject;
                    break;
                case '6':
                    $content = $template->body;
                    $data['invoice_num'] = (empty($data['invoice_num'])) ? mt_rand('0000', '99999999') : $data['invoice_num'];
                    $data['attachment'] = (empty($data['attachment'])) ? '' : $data['attachment'];
                    $data['attachment_name'] = (empty($data['attachment_name'])) ? '' : $data['attachment_name'];
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    $data['to'] = $data['email'];
                    $data['subject'] = str_replace('[invoice_num]', $data['invoice_num'], $template->subject);
                    break;
                case '7':
                    $content = $template->body;
                    // Replace app name
                    $content = str_replace('[app_name]', app_name(), $content);
                    $data['to'] = $data['email'];
                    $data['subject'] = $template->subject;
                    break;
                default:
                    echo 'Default case';
                    break;
            }
            // Send email code
            $message = ['data' => $content];
            return Mail::send(['html' => 'emails.template'], $message, function ($message) use ($data) {
                $message->to($data['to']);
                $message->bcc(\Config::get('constants.testers'));
                $message->subject($data['subject']);
                if (!empty($data['attachment'])) {
                    $message->attachData($data['attachment'], $data['attachment_name']);
                }
            });
        } else {
            return false;
        }
    }
}
