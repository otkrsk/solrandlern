<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Tylercd100\LERN\Facades\LERN;

class HomeController extends Controller {
  /**
   * @var The SOLR client.
   */
  // protected $client;

  /**
   * Constructor
   */
  public function __construct() {
    // create a client instance
    // $this->client = new \Solarium\Client\(Config::get('solr'));
  }

  public function index() {
    return view('welcome');
  }
}
