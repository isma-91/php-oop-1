<?php

/*
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie {
  public $title;
  public $director;
  public $genre;
  public $cast = [];
  public $release_date;
  public $duration;
  public $production_company;
  public $plot;
  public $ticket_price;
  public $imax;

  public function __construct($title, $director, $genre, $cast,$release_date, $duration, $production_company, $plot, $imax)
  {
    $this->title = $title;
    $this->director = $director;
    $this->genre = $genre;
    $this->cast = $cast;
    $this->release_date = $release_date;
    $this->duration = $duration;
    $this->production_company = $production_company;
    $this->plot = $plot;
    $this->imax = $imax;
    $this->setTicketPrice($imax);
  }

  public function setTicketPrice($imax)
  {
    if ($imax === true) {
      $this->ticket_price = 14.99;
    } elseif ($imax === false) {
      $this->ticket_price = 11.99;
    }
  }

  public function getTicketPrice()
  {
    if ($this->imax === true) {
      return "imax = " . $this->ticket_price . "€";
    } elseif ($this->imax === false) {
      return "normal = " . $this->ticket_price . "€";
    }
  }  

  public function getCast(){
    if ($this->cast && count($this->cast)) {
      return implode(", ", $this->cast);
    } else {
      return "Nessun attore trovato";
    }
  
  }
}

  $avatar = new Movie ('Avatar', 'James Cameron', 'sci-fi', ['Sam Worthington','Zoe Saldana', 'Stephen Lang', 'Michelle Rodriguez', 'Sigourney Weaver'], '2009', '162 mins', '20th Century Fox', 'Rinato nel corpo di un avatar, Jake può camminare di nuovo e dare inizio alla missione che gli è stata assegnata: infiltrarsi nel mondo dei Na\'vi, che sono diventati un serio ostacolo per le attività estrattive del prezioso minerale. Ma una bellissima donna Na\'vi, Neytiri, gli salva la vita e questo cambia tutto.', true);

  $titanic = new Movie ('Titanic', 'James Cameron', 'romantic', ['Leonardo DiCaprio', 'Kate Winslet', 'Billy Zane', 'Kathy Bates', 'Frances Fisher', 'Bernard Hill', 'Jonathan Hyde', 'Danny Nucci', 'David Warner', 'Bill Paxton'], '1997', '194 mins', 'Paramount Pictures', 'All\'epoca Rose (Kate Winslet) è una diciassettenne britannica che si imbarca con la madre Ruth (Frances Fisher) e lo spocchioso fidanzato Cal Hockley (Bill Zane), che è costretta a sposare per sanare i debiti della sua famiglia. Oppressa dal suo destino, Rose si arrampica sul parapetto, decisa a togliersi la vita.', false);

  echo "<h1>Titolo: " . $avatar->title . "</h1>";
  echo "<div> Regista: " . $avatar->director . "</div>";
  echo "<div> Genere: " . $avatar->genre . "</div>";
  echo "<div> Cast: " . $avatar->getCast() . "</div>";
  echo "<div> Data di uscita: " . $avatar->release_date . "</div>";
  echo "<div> Durata: " . $avatar->duration . "</div>";
  echo "<div> Casa di produzione: " . $avatar->production_company . "</div>";
  echo "<div> Trama: " . $avatar->plot . "</div>";
  echo "<div> Prezzo: " . $avatar->getTicketPrice() . "</div>";

  echo "<h1>Titolo: " . $titanic->title . "</h1>";
  echo "<div> Regista: " . $titanic->director . "</div>";
  echo "<div> Genere: " . $titanic->genre . "</div>";
  echo "<div> Cast: " . $titanic->getCast() . "</div>";
  echo "<div> Data di uscita: " . $titanic->release_date . "</div>";
  echo "<div> Durata: " . $titanic->duration . "</div>";
  echo "<div> Casa di produzione: " . $titanic->production_company . "</div>";
  echo "<div> Trama: " . $titanic->plot . "</div>";
  echo "<div> Prezzo: " . $titanic->getTicketPrice() . "</div>";
  
  // var_dump($avatar);
  // var_dump($titanic);

  // ['Sam Worthington','Zoe Saldana', 'Stephen Lang', 'Michelle Rodriguez', 'Sigourney Weaver'],