<?php
namespace App;
class Account
{
    private string $password;
    /** set the value of password
     * 
     * @return void
     */
    public function setPassword( string $password): void{
        if(!preg_match('/[$ *%]/',$password)) throw new \Exception('le mot de passe doit etre plus complexe');
        $this->password=$password;
        
    }
}

?>