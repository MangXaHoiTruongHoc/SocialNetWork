<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
#	public function authenticate()
#	{
#		$users=array(
#			// username => password
#			'demo'=>'demo',
#			'admin'=>'admin',
#		);
#		if(!isset($users[$this->email]))
#			$this->errorCode=self::ERROR_USERNAME_INVALID;
#		elseif($users[$this->email]!==$this->password)
#			$this->errorCode=self::ERROR_PASSWORD_INVALID;
#		else
#			$this->errorCode=self::ERROR_NONE;
#		return !$this->errorCode;
#	}
        private $ma_tai_khoan;
        /**
         * Authenticates a user.
         * The example implementation makes sure if the username and password
         * are both 'demo'.
         * In practical applications, this should be changed to authenticate
         * against some persistent user identity storage (e.g. database).
         * @return boolean whether authentication succeeds.
         */
        public function authenticate()
        {
            
           $users= Taikhoan::model()->findByAttributes(array('email'=>$this->email));
            
            if($users===null) {
                $this->errorCode = self::ERROR_USERNAME_INVALID;                
            }
            else if(!$users->validatePassword($this->mat_khau)) {
                $this->errorCode = self::ERROR_PASSWORD_INVALID;
            }
            else {           
                $this->errorCode = self::ERROR_NONE;
                $this->ma_tai_khoan = $users->ma_tai_khoan;
            }
            return !$this->errorCode;
        }
        
        public function getId() {
            return $this->ma_tai_khoan;
        }
}