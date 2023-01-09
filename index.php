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
  // public $ticket_price = 11 + "€";
  // public $imax = true;

  public function __construct($title, $director, $genre, $cast, $release_date, $duration, $production_company, $plot)
  {
    $this->title = $title;
    $this->director = $director;
    $this->genre = $genre;
    $this->cast = $cast;
    $this->release_date = $release_date;
    $this->duration = $duration;
    $this->production_company = $production_company;
    $this->plot = $plot;
    // $this->ticket_price = setPrice($ticket_price, $imax);
    // $this->imax = $imax;
  }

  // public function setTicketPrice($imax)
  // {
  //   if (!($imax) && boolean) {
  //     $this->ticket_price = "imax = " + 14 + "€";
  //   }
  // }

  // public function getTicketPrice()
  // {
  //   return $this->ticket_price;
  // }  
}

  $avatar = new Movie ('Avatar', 'James Cameron', 'sci-fi', ['Sam Worthington','Zoe Saldana', 'Stephen Lang', 'Michelle Rodriguez', 'Sigourney Weaver'], '2009', '162 mins', '20th Century Fox', 'On the lush alien world of Pandora live the Na\'vi, beings who appear primitive but are highly evolved. Because the planet\'s environment is poisonous, human/Na\'vi hybrids, called Avatars, must link to human minds to allow for free movement on Pandora. Jake Sully (Sam Worthington), a paralyzed former Marine, becomes mobile again through one such Avatar and falls in love with a Na\'vi woman (Zoe Saldana). As a bond with her grows, he is drawn into a battle for the survival of her world.');

  echo $avatar->cast[1];
  // var_dump($avatar);