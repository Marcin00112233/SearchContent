<?php

include 'model.php';
class exemplary_data_model extends model{
    private $domain = "http://katalog.wp.pl";
    private $address_catalog = "http://katalog.wp.pl/?ticaid=11b383";
    private $initial_sequence = "<html";
    private $final_sequence = "</html>";
    private $content;
    private $link = "";
    private $links = [];
    
    public function load_catalog(){
        
        $this->content = load_data_model::get_content($this->address_catalog);
        
    }
    
    public function show_data(){
        //echo $this->content;
        //$link = $this->get_link($this->content, "<a", "/a>");
        foreach ($this->links as $value){
            echo $value;
        }
        //echo $this->link;
        
    }
    
    public function get_link($tresc, $initial_sequence, $final_sequence){
                $pos1 = strpos($tresc, $initial_sequence); //instrukcja zwraca do zmiennej $pos1 numer indeksu pierwszego znaku ciągu $initial_sequence w zawartości $tresc
		//$content = ""; //zmienna $content ma przechowywać wynikowy ciąg na końcu jest zwracana do programu. tu jest inicjalizowana pustym łańcuchem.
		$i = 0; //zmienna $i która robi za indeks łańcucha finala_sequence.
		
		while($i != strlen($final_sequence)){ //pętla dopóki i jest różne od ostatniego indeksu $final_sequence to wykonuje:
		
			
			if($tresc[$pos1-1]==$final_sequence[$i]){ //jeżeli znak z indeksu $pos1 jest równy znakowi $final_sequence spod indeksu $i to:
				$this->link=$this->link.$tresc[$pos1]; //wynikowy ciąg $content = poprzednia jego zawartość + znak spod $tresc[$pos1]
				$pos1++; //inkrementacja $pos1++
				$i++; //inkrementacja $i
				
			}
			else{ //jeżeli znak z indeksu $pos1 nie jest równy znakowi $final_sequence spod indeksu $i to:
				$this->link=$this->link.$tresc[$pos1];  //wynikowy ciąg $content = poprzednia jego zawartość + znak spod $tresc[$pos1]
				$pos1++; //inkrementacja $pos1++
				$i = 1; //inkrementacja $i
			}
			
		}
		
		return $pos1; //zwrócenie ciągu wynikowego do programu wywołującego.
               }
    
    public function get_all_links(){
        $pos = 1;
        $tresc = $this->content;
        for ($i = $pos; $i < strlen($this->content); $i++){
            $tresc = substr($tresc, $pos);
            $pos = $this->get_link($tresc, "<a", "/a>");
            $this->links[] = $this->link;
            //echo $this->link;
        }
    }     
    
}
