<?php
	if(mail('clement.tissier@amelys-info.com','Test','Ceci est un test de message')){
		echo 'Mail OK';
	}else{
		echo 'Mail KO';
	}