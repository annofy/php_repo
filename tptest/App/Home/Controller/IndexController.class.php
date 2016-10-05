<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;
class IndexController extends Controller {
    public function index(){
        echo C("name"),"<br/>";
        echo C("URL_MODEL"),"<br />";
//         echo U("Index/cinput",array("id"=>1),"shtml",true);
        echo "<script>location.href='".U("Index/curd",array("id"=>1),"shtml",true)."';</script>";
    }

    public function user(){
        echo "id=".$_GET["id"]."<br />";
        echo "index的user方法";
    }
    public function test(){
    	$me["name"] = "zltiger";
    	$me["age"] = 234;
        $this->assign('me',$me);
        
        echo "<br />";
        $this->now = time();
        
        $person = array(
        		array("name"=>"zhangSan","age"=>"12"),
        		array("name"=>"liSo","age"=>"16"),
        		array("name"=>"wangWu","age"=>"32"),
        );
        $this->num = 100;
        $this->name = "haha";
        $this->assign("person",$person);
        $this->display();

    }
	public function cinput(){
// 		echo C("name");
		$info = "测试信息";
		trace($info,"info");
		
		G("run");
		for ($i=0;$i<100000;$i++){
			
		}
		echo G("run","end");
	}
	public function curd(){
// 		$user = new Model('user');
// 		$user = D("user");
// 		$data = $user->select();
		
// 		dump($data);
		$this->display();
	
	}
}