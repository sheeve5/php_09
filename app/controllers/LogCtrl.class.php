<?php namespace app\controllers;
class LogCtrl{
    	private $records; //rekordy pobrane z bazy danych
        private $id = -1;
    	public function action_logShow(){
		getMessages()->addInfo('Witaj na stronie chronionej');
                
                try{
		$this->records = getDB()->select("result_log", [
				"id",
				"amount",
				"years",
                 		"intrest",
				"result",
                        	"datetime"
			] );
		} catch (PDOException $e){
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());			
		}	
		$this->generateView();
	}
        public function validateEdit() {

		$this->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
		return ! getMessages()->isError();
	}
        public function action_recordDelete(){		
		// 1. walidacja id osoby do usuniecia
		if ( $this->validateEdit() ){
			
			try{
				// 2. usunięcie rekordu
				getDB()->delete("result_log",[
					"id" => $this->id
				]);
				getMessages()->addInfo('Pomyślnie usunięto rekord');
			} catch (PDOException $e){
				getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
			}	
		}
		
                $this->action_logShow();
	}
    	public function generateView(){
	getSmarty()->assign('page_title','Strona chroniona');
		getSmarty()->assign('page_description','Ta strona może zostać wyświetlona tylko przez administratora');
		getSmarty()->assign('page_header','Użytkownik \'user\' nie może wyświetlić tej strony');
                getSmarty()->assign('people',$this->records); 
		
		getSmarty()->display('LogView.tpl'); // już nie podajemy pełnej ścieżki - foldery widoków są zdefiniowane przy ładowaniu Smarty
	}
    
    
}




