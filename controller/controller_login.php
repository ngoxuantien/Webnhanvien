<?php
include_once 'model/UserDB.php';
include_once 'model/User.php';
class Controller_login{
    private $userDB;
    
  public  function checklogin($n,$p){
        $k=0;
         $this->userDB= new UserDB();
        $user45=$this->userDB->getList();
        foreach ($user45 as $value){
         
          if($n==$value->getName() && $p==$value->getPassword()){
          
              if($value->getId()==3){
                  $k=2;
              } else {
                     $k=1; 
              }
          }
        }
        return $k;
    
}
public function getInfor(){
      $this->userDB= new UserDB();
        $user45=$this->userDB->getList();
        foreach ($user45 as $value){
           echo $value->getName();
         
        }
}
public function  sapxep(){
    $list = [];
    $dt=new UserDB();
    $list =$dt->getList();
    $sophantu=count($list);
    for ($i = 0; $i < ($sophantu - 1); $i++)
{
    for ($j = $i + 1; $j < $sophantu; $j++) // l?p c�c ph?n t? ph�a sau
    {
        if ($list[$i]->getVotes() < $list[$j]->getVotes()) // n?u ph?n t? $i b� h?n ph?n t? ph�a sau
        {
            // ho�n v?
            $tmp = $list[$j];
            $list[$j] = $list[$i];
            $list[$i] = $tmp;
        }
    }
}
return $list;
    
}

    
    
}
?>