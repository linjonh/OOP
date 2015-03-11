<?php
require_once 'samplehtml.php';
//=======================================================
function getDML(){
	$connector=new Connector();
	$DML = $connector->getDML();	
	return $DML;
}

//step one: login========================================
function login($name='',$pwd=''){
	if(strlen($name)===0){
		echo "user name not set!";
		header('Location:samplehtml.php');
		return;
	}
	if(strlen($pwd)===0){
		echo "password not set!";
		return;
	}

	$DML=getDML();

	$projArray=array("username","pwd");
	$whereClause="username = '{$name}' and pwd= '{$pwd}'";
	$resultCursor=$DML->select('user',$projArray,$whereClause);
	if($resultCursor){
		$data=$resultCursor->fetch_assoc();
		if($data){
			header('Location:samplehtml.php');
			echo "<br>".json_encode($data);
			echo "<br>login success!";
		}else{
			header('Location:samplehtml.php');
			echo "<br>login failed!";
		}
		
	}else{
		echo "<br>login failed! check up the SQL sentence!";
	}
	$DML->closeConnection();
}



//step 2: register======================================
function register($name=null,$pwd=null)
{
	if(!isset($name) || !isset($pwd)){
		echo "name or password not set!";
		return;
	}
	if(strpos($name,'@')===false){
		//not email account.
		echo "not email account.";
	}else{
		//is email account.
		echo "is email account.";
	}

	$DML=getDML();
	$projArray=array(
		'username'=>$name,
		'pwd'=>$pwd
		);
	$DML->insert('user',$projArray);
	$DML->closeConnection();
}
//step 3: update user info==============================
function updateUserInfo($values=null,$where=null)
{
	$table='user';
	$DML=getDML();
	$DML->update($table,$values,$where);
	$DML->closeConnection();
}
//step 4: send tapic====================================
//insert topic to topic table.
function sendTopic($value='')
{
	# code...
}
//step 5: add friends
function addFriends($value='')
{
	# code...
}
//step 6: browse image or topics========================
function browseTopic($value='')
{
	# code...
}
//step 7: comment topic=================================
function commentTopic($value='')
{
	# code...
}


function selectAllFromTable($table='')
{
	if($table!==null&&strlen($table)!==0){
		$cursor=getDML()->select($table);
		$result=null;
		while(($result=$cursor->fetch_assoc())!==null){
			echo "<br>".json_encode($result);
		}
	}
}

function printLoginHtml(){
	echo LOGIN_HTML;
}
function printRegisterHtml(){
	echo REGISTER_HTML;
}

function formLoginAction($value='')
{
	if (isset($_REQUEST['name']) && isset($_REQUEST['pwd'])){
		login($_REQUEST['name'],$_REQUEST['pwd']);
	}else{
		header('Location:samplehtml.php');
		// echo "name or pwd not set!";
	}
}

function showFooter(){
	$foot=<<<FOOTER
	<div class="footer">
        <footer>
            &copy; 2014-2015 powered by lin jian you.
            <p> All right reserved.
            <p> Email: <a id="my_email" href="mailto://jaysen.lin@foxmail.com">jaysen.lin@foxmail.com</a>
        </footer>
    </div>
FOOTER;
echo $foot;
}

