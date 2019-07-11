<?php

function test($callback){
	//processo lento- conersão de video por exemplo.

   $callback();
}

test(function(){

	echo "Terminou!";
});

?>