//Custom Ragangal js Library

function start(){
	if(global_first == 0){
		$("#welcomeText").collapse();
		$("#inputFields").collapse();
	}
	global_first++;
	getFile();
}
