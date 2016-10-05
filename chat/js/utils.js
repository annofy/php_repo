/**
 * 创建ajax对象
 */
function createXMLHttpRequest(){
	try{
		return new XMLHttpRequest();
	}catch(e){
		try{
			return ActvieXObject("Msxml.XMLHTTP");
		}catch(e){
			try{
				return ActvieXObject("Microsoft.XMLHTTP");
			}catch(e){
				alert("不能识别您的浏览器!");
				throw e;
			}
		}
	}
}