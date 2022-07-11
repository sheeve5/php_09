<?php
// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

//zamieniamy zatem 'require' na 'use' wskazując jedynie przestrzeń nazw, w której znajduje się klasa
use app\forms\CalcForm;
use app\transfer\CalcResult;
use DateTime;
use PDOException;

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcCtrl {

	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->amount = getFromRequest('x');
		$this->form->years = getFromRequest('y');
		$this->form->intrest = getFromRequest('z');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->amount ) && isset ( $this->form->years ) && isset ( $this->form->intrest ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->amount == "") {
                    getMessages()->addError('Nie podano liczby 1');
		}
		if ($this->form->years == "") {
                    getMessages()->addError('Nie podano liczby 2');
		}
                if ($this->form->intrest == "") {
                    getMessages()->addError('Nie podano liczby 3');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (!getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami całkowitymi
			if (! is_numeric ( $this->form->amount )) {
                            getMessages()->addError('Pierwsza wartość nie jest liczbą całkowitą');
                        }
			if (! is_numeric ( $this->form->years )) {
                            getMessages()->addError('Druga wartość nie jest liczbą całkowitą');
			}
                        if (! is_numeric ( $this->form->intrest )) {
                            getMessages()->addError('Trzecia wartość nie jest liczbą');
			}
		}
		
		return !getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function action_calcCompute(){

		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów na int
			$this->form->amount = intval($this->form->amount);
			$this->form->years = intval($this->form->years);
                        
                        //konwersja oprocentowania na float
			$this->form->intrest = floatval($this->form->intrest);
                                                
			getMessages()->addInfo('Parametry poprawne.');
				
                        //obliczenie wyniku
                        $this->result->result = ($this->form->amount + $this->form->amount*($this->form->intrest/100)) / ($this->form->years*12);
			getMessages()->addInfo('Wykonano obliczenia.');

                        try {

                            getDB()->insert("result_log", [
                                    "amount" => $this->form->amount,
                                    "years" => $this->form->years,
                                    "intrest" => $this->form->intrest,
                                    "result" => $this->result->result,
                                    "datetime" => date("Y-m-d H:i:s")
                            ]);
			getMessages()->addInfo('Pomyślnie zapisano rekord');

			} catch (PDOException $e){
				getMessages()->addError('Wystąpił nieoczekiwany błąd podczas zapisu rekordu');
				if (getConf()->debug) getMessages()->addError($e->getMessage());			
                        }
			
		}
		
		$this->generateView();
	}
	
	public function action_calcShow(){
		getMessages()->addInfo('Witaj w kalkulatorze');
		$this->generateView();
	}
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		//nie trzeba już tworzyć Smarty i przekazywać mu konfiguracji i messages
		// - wszystko załatwia funkcja getSmarty()
		
		
		getSmarty()->assign('user',unserialize($_SESSION['user']));
				
		getSmarty()->assign('page_title','Super kalkulator - baza danych');

		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('CalcView.tpl');
	}
}
