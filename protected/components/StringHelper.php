<?php
class StringHelper extends CApplicationComponent
{
    public function printStr($string,$length = 0){
		$arrWords = explode(" ",$string);
		$stringLast = "";
		if(count($arrWords) <= $length){ $stringLast = $string;}
		else{
			for($i=0;$i<$length;$i++){	$stringLast .= $arrWords[$i]." ";}
			$stringLast  .= " ...";	
		}return $stringLast;
	}
	
	public function StrRewrite($str='',$replace='-'){
		if($str != ''){
			$arr = array("?","_","__", "  "," ","--", "\"", ".", "&quot;", "'", "&#039;","''","`","\'","\"","\\","\/","/","+","--","*","%","$","~","!","@","#","^","&","(",")","|",",",">","<", ":");
			$str = str_replace($arr, $replace, $str);
			#---------------------------------a
			$arr = array("á", "à", "ả", "ã", "ạ", "â", "ậ","ầ","ấ","ẩ","ẫ", "ă", "ặ", "ắ", "ằ", "ặ","ẳ","ẵ","Á", "À", "Ả", "Ã", "Ạ", "Â", "Ậ","Ấ","Ầ","Ẩ","Ẫ","Ă","Ắ","Ằ","Ẳ","Ẵ","Ặ");
			$str = str_replace($arr, "a", $str);
			#---------------------------------d
			$arr = array("đ","Đ","");
			$str = str_replace($arr, "d", $str);
			#---------------------------------d
			$arr = array("ç","Ç");
			$str = str_replace($arr, "c", $str);
			#---------------------------------e
			$arr = array("é", "è", "ẻ", "ẽ", "ẹ", "ê", "ể","ế", "ề", "ệ","ễ","E","É","È","Ẻ","Ẽ","Ẹ","Ê","Ế","Ề","Ể","Ễ","Ệ");
			$str = str_replace($arr, "e", $str);
			#---------------------------------i
			$arr = array("í", "ì", "ỉ", "ĩ", "ị","Í","Ì","Ỉ","Ĩ","Ị","İ");
			$str = str_replace($arr, "i", $str);
			#---------------------------------o
			$arr = array("ó", "ò", "ỏ", "õ", "ọ", "ô", "ố","ồ","ổ","ỗ","ộ","ơ","ớ","ờ","ở","ỡ","ợ","O","Ó","Ò","Ỏ","Õ","Ọ","Ô","Ố","Ồ","Ổ","Ỗ","Ộ","Ơ","Ớ","Ờ","Ở","Ỡ","Ợ","Ö","ö");
			$str = str_replace($arr, "o", $str);
			#---------------------------------u
			$arr = array("ú", "ù", "ủ", "ũ", "ụ", "U","Ú","Ù","Ủ","Ũ","Ụ","ư","ứ","ừ","ử","ữ","ự","Ư","Ứ","Ừ","Ử","Ữ","Ự","Ü","ü");
			$str = str_replace($arr, "u", $str);
			#---------------------------------y
			$arr = array("ý", "ỳ", "ỷ", "ỹ", "ỵ","Y","Ý","Ỳ","Ỷ","Ỹ","Ỵ");
			$str = str_replace($arr, "y", $str);
			#---------------------------------y
			$arr = array("Ş", "ş");
			$str = str_replace($arr, "s", $str);
			#---------------------------------y
			$arr = array("Ğ", "ğ");
			
			
			#---------------------------------
			$str = preg_replace('/[^A-Za-z0-9 _\-\+\&]/','',$str);
			$str = str_replace("--",$replace,$str);	
		}
		return strtolower($str);
	}
	
}
?>