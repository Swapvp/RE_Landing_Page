<?php
class PostData
{
    public function callback()
    {


        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $mobile = str_replace(' ', '', $_REQUEST['mobile']);
        $projectname = $_REQUEST['projectname'];
        $source = $_REQUEST['source'];
        $message = $_REQUEST['message'];
        $visit_from = $_REQUEST['visit_from'];
        
        $name = $fname . ' ' . $lname;


        $fullmobile = "91" . $mobile;



        // Google Sheet Interation------------------

        $enqproject = '';

        $postFields = "entry.1233378879=" . $name;
        $postFields .= "&entry.1279925355=" . $email;
        $postFields .= "&entry.755644870=" . $fullmobile;
      

        $ch3 = curl_init();
        curl_setopt($ch3, CURLOPT_URL, "https://docs.google.com/forms/u/0/d/e/1FAIpQLSc0DlvSgMY2pJ8vsFlWUuPA6P26ewUNVEqtjuWNsGcntd2oUQ/formResponse");
        curl_setopt($ch3, CURLOPT_POST, 1);
        curl_setopt($ch3, CURLOPT_POSTFIELDS, $postFields);
        curl_setopt($ch3, CURLOPT_HEADER, 0);
        curl_setopt($ch3, CURLOPT_RETURNTRANSFER, true);
        $result3 = curl_exec($ch3);




        // do not delete
        return true;
    }
}