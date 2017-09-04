<?php

class UserIdentity extends CUserIdentity
{
	public function authenticate()
	{
		$Model=Nguoidung::model()->findByAttributes(
			array('nguoidung_tendangnhap'=>$this->username, 'nguoidung_hienthi'=>'1')
		);
        if($Model===null)
            $this->errorCode=self::ERROR_USERNAME_INVALID;
        else if($Model->nguoidung_matkhau!==$this->password)
            $this->errorCode=self::ERROR_PASSWORD_INVALID;
        else
        {
            $this->setState('nguoidung_tendangnhap', $Model->nguoidung_tendangnhap);
			$this->setState('nguoidung_quantri', $Model->nguoidung_quantri);
			$this->setState('nguoidung_hoten', $Model->nguoidung_hoten);
			$this->setState('nguoidung_id', $Model->nguoidung_id);
            $this->errorCode=self::ERROR_NONE;
        }
        return !$this->errorCode;
	}

	

}
