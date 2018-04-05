<?php
class PDF {

    function __construct() {
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }
    
    public function vcell($c_width,$c_height,$x_axis,$text){
        $w_w=$c_height/3;
        $w_w_1=$w_w+2;
        $w_w1=$w_w+$w_w+$w_w+3;
        $len=strlen($text);// check the length of the cell and splits the text into 7 character each and saves in a array 
        if($len>7){
            $w_text=str_split($text,7);
            $this->SetX($x_axis);
            $this->Cell($c_width,$w_w_1,$w_text[0],'','','');
            $this->SetX($x_axis);
            $this->Cell($c_width,$w_w1,$w_text[1],'','','');
            $this->SetX($x_axis);
            $this->Cell($c_width,$c_height,'','LTRB',0,'L',0);
        } else {
            $this->SetX($x_axis);
            $this->Cell($c_width,$c_height,$text,'LTRB',0,'L',0);
        }
    }
}
?>
