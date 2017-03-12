<?php
function sp_send_email($address,$subject,$message){
    Vendor('phpmailer.class#phpmailer');
    $mail=new \PHPMailer();
    // 设置PHPMailer使用SMTP服务器发送Email
    $mail->IsSMTP();
    $mail->IsHTML(true);
    // 设置邮件的字符编码，若不指定，则为'UTF-8'
    $mail->CharSet='UTF-8';
    // 添加收件人地址，可以多次使用来添加多个收件人
    $mail->AddAddress($address);
    // 设置邮件正文
    $mail->Body=$message;
    // 设置邮件头的From字段。
    $mail->From=C('SP_MAIL_ADDRESS');
    // 设置发件人名字
    $mail->FromName=C('SP_MAIL_SENDER');;
    // 设置邮件标题
    $mail->Subject=$subject;
    // 设置SMTP服务器。
    $mail->Host=C('SP_MAIL_SMTP');
    // 设置为"需要验证"
    $mail->SMTPAuth=true;
    // 设置用户名和密码。
    $mail->Username=C('SP_MAIL_LOGINNAME');
    $mail->Password=C('SP_MAIL_PASSWORD');
    // 发送邮件。
    if(!$mail->Send()) {
        $mailerror=$mail->ErrorInfo;
        return array("error"=>1,"message"=>$mailerror);
    }else{
        return array("error"=>0);
    }
}

function send_email($address,$subject,$content){
    Vendor('phpmailer.class#phpmailer');
    $mail = new \PHPMailer();
    $mail->IsSMTP();
    $mail->IsHTML(true);
    $mail->CharSet = C('MAIL_CHARSET');
    $mail->AddAddress($address);
    $mail->Subject = $subject;
    $mail->Body = $content;
    $mail->From = C('MAIL_ADDRESS');
    $mail->FromName = C('MAIL_SENDER');
    $mail->Host = C('MAIL_SMTP');
    $mail->SMTPAuth = true;
    $mail->Username = C('MAIL_LOGINNAME');
    $mail->Password = C('MAIL_PASSWORD');

    if(!$mail->send()){
        $errormsg = $mail->ErrorInfo;
        return array('error'=>1,'msg'=>$errormsg);
    }else{
        return array('error'=>0);
    }


//    'MAIL_ADDRESS'=>'lslblogemail@126.com',
//    'MAIL_SENDER'=>'LSL博客系统',
//    'MAIL_SMTP'=>'smtp.126.com',
//    'MAIL_LOGINNAME'=>'lslblogemail@126.com',
//    'MAIL_PASSWORD'=>'389475917lsl',
//    'MAIL_CHARSET'=>'UTF-8'



}

